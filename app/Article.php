<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 
    ];

    /**
     * users - пользователи принадлежащие статьям
     * article_user - два названия взаимосвязанных моделей в алфавитном порядке
     * withTimestamps() - поддержка временных меток created_at и updated_at
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user')->withTimestamps();
    }
}
