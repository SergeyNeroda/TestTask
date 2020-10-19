<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname','surname','avatar', 'phone', 'sex', 'show_phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
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
