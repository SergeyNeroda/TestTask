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
                'unique:users', 
                'alpha_dash'
            ],	
            'surname' => [
                'required',
                'string',
                'alpha_dash'
            ],	
            'avatar' => [
                'image',
                'required',
                'mimes:jpeg,png',
                'dimensions:min_width=300,max_width=2000,min_height=300,max_height=2000',
            ],
            'phone'	=> [
                'required',
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
                'confirmed'
            ],	
            'email' => [
                'required',
                'unique:users', 
                'string', 
                'email', 
                'max:255'
            ],
        ],[
            'nickname.required' => 'Поле Нікнейм обов\'язкове для заповнення',
            'nickname.min' => 'Поле Нікнейм має бути більше 8 символів',
            'nickname.unique' => 'Поле Нікнейм не унікальне',
            'nickname.alpha_dash' => 'Нікнейм може містити лише літери, цифри, тире та підкреслення',

            'surname.required' => 'Поле Прізвище обов\'язкове для заповнення',
            'surname.alpha_dash' => 'Прізвище може містити лише літери, цифри, тире та підкреслення',

            'avatar.required' => 'Поле Аватар обов\'язкове для заповнення',
            'avatar.image' => 'Поле Аватар має бути картинкою формату jpeg або png' ,
            'avatar.dimensions' => 'Зображення має бути не більше 2000х2000 пікселів та не меньше 300х300 пікселів' ,

            'phone.required' => 'Поле Телефон обов\'язкове для заповнення',
            'phone.numeric' => 'Поле Телефон - лише числові символи',

            'sex.required' => 'Поле Стать обов\'язкове для заповнення',
            'sex.in' => 'Поле Стать може мати значення Чоловік або Жінка',

            'show_phone.required' => 'Поле Показ телефону обов\'язкове для заповнення',
            'show_phone.boolean' => 'Поле Показ телефону має бути істинним або хибним',

            'email.required' => 'Поле Імейл обов\'язкове для заповнення',
            'email.unique' => 'Користувач з таким імейлом вже існує',

            'password.required'=> 'Поле Пароль обов\'язкове для заповнення', 
            'password.string'=> 'Поле Пароль повинне бути рядком', 
            'password.min'=> 'Поле Пароль повинне мати мінімум 8 символів', 
            'password.confirmed'=> 'Паролі не збігаються',
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
        // Get file from request
        $path = '/img/users/';
        $avatar = (new ImageService())->uploadImage($data['avatar'],$data['nickname'], $path);

        //dd($avatar);
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
