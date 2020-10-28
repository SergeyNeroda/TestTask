<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// Include Service for Image
use App\Services\ImageService;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ACCOUNT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nickname' => [
                'required', 
                'string', 
                'min:8',
                'max:40', 
                'unique:users', 
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
                'required',
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
            'password' => [
                'required', 
                'string', 
                'min:8',
                'max:50', 
                'confirmed'
            ],	
            'email' => [
                'required',
                'unique:users', 
                'string', 
                'email',
                'min:3', 
                'max:255'
            ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Upload avatar
        $path = '/img/users/';
        $avatar = (new ImageService())->uploadImage($data['avatar'],$data['nickname'], $path);

        return User::create([
            'nickname' => $data['nickname'],	
            'surname' => $data['surname'],	
            'avatar' =>	$avatar,	
            'phone'	=> $data['phone'],	
            'sex' => $data['sex'],		
            'show_phone' =>	$data['show_phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
