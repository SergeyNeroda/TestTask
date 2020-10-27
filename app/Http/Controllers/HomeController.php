<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        try {
            $articles = Article::orderBy('created_at', 'desc')->get();
            return view('home',['articles' => $articles,'error'=>'']);
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return view('home', ['articles'=>[], 'error'=>'Помилка в базі данних. Неможливо відобразити статті']);
            } 
            return view('home', ['articles'=>$articles, 'error'=>'Помилка показу статтей']);
        }  
    }
}
