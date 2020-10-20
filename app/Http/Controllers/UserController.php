<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

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

        return redirect('/account')->with('success', 'Інформацію профілю редаговано!');
    }
}
