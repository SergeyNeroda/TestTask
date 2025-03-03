<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Article extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text',
    ];

    protected $dates=['deleted_at'];

    /**
     * users - пользователи принадлежащие статьям
     * article_user - два названия взаимосвязанных моделей в алфавитном порядке
     * withTimestamps() - поддержка временных меток created_at и updated_at
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'article_user')->withTimestamps();
    }

    /**
     * Check User is Author
     */
    public function isAuthor($user)
    {
        $auth_user = Auth::user();
        if ($this->users()->find($user->id)) {
            return true;
        } else {
            return false;
        }
    }
}
