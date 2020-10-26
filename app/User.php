<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname','surname','avatar', 'phone', 'sex', 'show_phone', 'password', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * Не должны включаться в массив и JSON-представление модели
     * 
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * articles - статьи принадлежащие пользователю
     * article_user - два названия взаимосвязанных моделей в алфавитном порядке
     * withTimestamps() - поддержка временных меток created_at и updated_at
     */
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_user')->withTimestamps();
    }

}
