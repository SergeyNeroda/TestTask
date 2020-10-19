<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
