<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'nickname' => ['required', 'string', 'min:8', 'unique:users'],	
            'surname' => ['required'],	
            'avatar' =>	['required'],	
            'phone'	=> ['required'],	
            'sex' => ['required'],		
            'show_phone' =>	['required'],	
            'password' => ['required', 'string', 'min:8', 'confirmed'],	
            'email' => ['required', 'string', 'email', 'max:255'],
        ],[
            'nickname.required' => 'Поле Нікнейм обов\'язкове для заповнення',
            'nickname.min' => 'Поле Нікнейм має бути більше 8 символів',
            'nickname.unique' => 'Поле Нікнейм не унікальне',

            'surname.required' => 'Поле Прізвище обов\'язкове для заповнення',

            'avatar.required' => 'Поле Аватар обов\'язкове для заповнення',

            'phone.required' => 'Поле Телефон обов\'язкове для заповнення',

            'sex.required' => 'Поле Стать обов\'язкове для заповнення',

            'show_phone.required' => 'Поле Показ телефону обов\'язкове для заповнення',

            'email.required' => 'Поле Імейл обов\'язкове для заповнення',
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
        return User::create([
            'nickname' => $data['nickname'],	
            'surname' => $data['surname'],	
            'avatar' =>	$data['avatar'],	
            'phone'	=> $data['phone'],	
            'sex' => $data['sex'],		
            'show_phone' =>	$data['show_phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
