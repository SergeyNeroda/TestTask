<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing articles
     */
    public function index ()
    {
        try {
            $articles = Article::with('users')
                ->orderBy('created_at', 'desc')
                ->take(6)
                ->get();

            $resourcesCount = Article::count();
            $usersCount = User::count();
            $downloadsCount = 0;

            return view('home', [
                'articles' => $articles,
                'error' => '',
                'resourcesCount' => $resourcesCount,
                'downloadsCount' => $downloadsCount,
                'usersCount' => $usersCount,
            ]);
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return view('home', [
                    'articles'=>[],
                    'error'=>'Помилка в базі данних. Неможливо відобразити статті',
                    'resourcesCount' => 0,
                    'downloadsCount' => 0,
                    'usersCount' => 0,
                ]);
            }
            return view('home', [
                'articles'=>$articles ?? [],
                'error'=>'Помилка показу статтей',
                'resourcesCount' => 0,
                'downloadsCount' => 0,
                'usersCount' => 0,
            ]);
        }
    }
}
