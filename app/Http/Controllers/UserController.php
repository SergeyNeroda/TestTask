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
        //dd($request);
        // $request->validate([
        //     'first_name'=>'required',
        //     'email'=>'required'
        // ]);

        // $contact = Contact::find($id);
        // $contact->first_name =  $request->get('first_name');
        // $contact->save();
        // .............
        // if ($files = $request->file('image')) {
        //     $destinationPath = 'public/image/'; // upload path
        //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profileImage);
        //     $update['image'] = "$profileImage";
        //     }
        return redirect('/account')->with('success', 'Інформацію профілю редаговано!');
    }

    public function editPassword(Request $request){ 
        $user = Auth::user();
        return view('auth.editPassword',['user'=>$user]);
    }

    public function updatePassword(Request $request, $id){
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords not matches
            //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            return redirect('/account/password')->with('success', 'Your current password does not matches with the password you provided. Please try again!');
            //return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        //uncomment this if you need to validate that the new password is same as old one

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            //return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            return redirect('/account/password')->with('success', 'New Password cannot be same as your current password!');

            // return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
        }
        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|same:password_confirm',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return redirect('/account/password')->with('success', 'New Password!');
        //return $user;
    }

}
