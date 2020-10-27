<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
// Include Service for Image
use App\Services\ImageService;

class UserController extends Controller
{
    public function details()
    {
        $auth_user = Auth::user();
        return view('auth.profile', ['auth_user'=>$auth_user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit()
    {
        $user = Auth::user();
        return view('auth.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nickname' => [
                'required', 
                'string', 
                'min:8',
                'max:40', 
                'alpha_dash'
            ],	
            'surname' => [
                'required',
                'string',
                'min:2',
                'max:50',
                'alpha'
            ],	
            'avatar' => [
                'image',
                'mimes:jpeg,png',
                'dimensions:min_width=300,max_width=2000,min_height=300,max_height=2000',
                'max:4096'
            ],
            'phone'	=> [
                'required',
                'min:8',
                'digits_between:5,16',
                'numeric'
            ],	
            'sex' => [
                'required',
                'in:Male,Female'
            ],		
            'show_phone' =>	[
                'required',
                'boolean'
            ],		
            'email' => [
                'required',
                'string', 
                'email',
                'min:3', 
                'max:255'
            ],
        ]);
        $user = User::findOrFail($id);

        $user->nickname =  $request->get('nickname');
        $user->surname = $request->get('surname');
        $user->phone = $request->get('phone');
        $user->sex = $request->get('sex');
        $user->show_phone = $request->get('show_phone');
        $user->email = $request->get('email');
        // .............
        if ($file = $request->file('avatar')) {
            $path = '/img/users/';
            $avatar = (new ImageService())->uploadImage($file,$user->nickname, $path);
            $user->avatar = $avatar;
        }

        try {
            $user->save();
            return redirect()->route('users.details')->with('success', 'Інформацію профілю редаговано!');
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return redirect()->route('users.details')->with('danger', 'Помилка редагування даних користувача при запиті до бази даних');
            } 
            return redirect()->route('users.details')->with('danger', 'Помилка сервера при редагуванні користувача');
        } 
    }

    public function editPassword(Request $request){ 
        $user = Auth::user();
        return view('auth.editPassword',['user'=>$user]);
    }

    public function updatePassword(Request $request, $id){
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords not matches
            return redirect('/account/password')->with('danger', 'Ваш поточний пароль не збігається з введеним паролем!');
        }

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect('/account/password')->with('danger', 'Новий пароль не може співпадати зі старим!');
        }
        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|max:50|string|same:password_confirm',
        ]);
        //Change Password
        $user = User::findOrFail($id);

        if($request->get('new_password') !== null) {
            $user->password = Hash::make($request->get('new_password'));
            try {
                $user->save();
                return redirect()->route('users.edit_password')->with('success', 'Пароль успішно змінено!');
            } catch (\Exception $exception) {
                if($exception instanceof \Illuminate\Database\QueryException) {
                    return redirect()->route('users.edit_password')->with('danger', 'Помилка редагування пароля при запиті до бази даних');
                } 
                return redirect()->route('users.edit_password')->with('danger', 'Помилка сервера при редагуванні пароля');
            }
        }
        return redirect()->route('users.edit_password')->with('danger', 'Пароль не може мати значення null');
        
        
    }

}
