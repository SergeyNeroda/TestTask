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
}
