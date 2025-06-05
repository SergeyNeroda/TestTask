<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $auth_user = Auth::user();

        $query = Article::orderBy('created_at', 'desc');
        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }

        try {
            $articles = $query->get();
            return view('auth.articles.index', [
                'articles'   => $articles,
                'auth_user'  => $auth_user,
                'error'      => '',
                'searchTerm' => $request->get('search', ''),
            ]);
        } catch (\Exception $exception) {
            if ($exception instanceof \Illuminate\Database\QueryException) {
                return view('auth.articles.index', [
                    'articles'   => [],
                    'auth_user'  => $auth_user,
                    'error'      => 'Помилка в базі данних. Неможливо відобразити статті',
                    'searchTerm' => $request->get('search', ''),
                ]);
            }

            return view('auth.articles.index', [
                'articles'   => [],
                'auth_user'  => $auth_user,
                'error'      => 'Помилка показу статтей',
                'searchTerm' => $request->get('search', ''),
            ]);
        }
    }

    /**
     * Display author's articles
     */
    public function userArticles ()
    {
        $auth_user = Auth::user();

        //Error handing: Get User Articles
        try {
            $articles = $auth_user->articles()->where('user_id', $auth_user->id)->orderBy('deleted_at', 'desc')->get();
            return view('auth.articles.authorArticles', ['articles' => $articles, 'auth_user' => $auth_user,'error'=>'']);
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return view('auth.articles.authorArticles', ['articles'=>[], 'auth_user'=>$auth_user, 'error'=>'Помилка в базі данних. Неможливо відобразити статті']);
            } 
            return view('auth.articles.authorArticles', ['articles'=>$articles, 'auth_user'=>$auth_user,'error'=>'Помилка показу статтей']);
        }  
    }

    /**
     * Display author's Soft Deleted articles
     */
    public function softDeleted()
    {
        $auth_user = Auth::user();
        
        try {
            $articles = $auth_user->articles()->onlyTrashed()->where('user_id', $auth_user->id)->orderBy('deleted_at', 'desc')->get();
            return view('auth.articles.trash', ['articles'=>$articles, 'auth_user'=>$auth_user,'error'=>'']);
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return view('auth.articles.trash', ['articles'=>[], 'auth_user'=>$auth_user, 'error'=>'Помилка в базі данних. Неможливо відобразити статті']);
            } 
            return view('auth.articles.trash', ['articles'=>$articles, 'auth_user'=>$auth_user,'error'=>'Помилка показу статтей']);
        }  
    }

    /**
     * Restore author's Soft Deleted article
     */
    public function restore($id)
    {
        $article = Article::onlyTrashed()->findOrFail($id);
        
        if($article->restore()) {
            return redirect()->route('articles')->with('success', 'Статтю успішно відновлено!');
        }  
        return redirect()->route('articles.softdeleted')->with('danger', 'Помилка відновлення статті!');
    }

    /**
     * Delete author's Soft Deleted article
     */
    public function permanentDelete($id)
    {
        $article = Article::onlyTrashed()->findOrFail($id);
        
        if($article->forceDelete()){
            return redirect()->route('articles.softdeleted')->with('success', 'Статтю видалено остаточно!');
        }
        return redirect()->route('articles.softdeleted')->with('danger', 'Статтю не видалено остаточно!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'title'=>['required','min:8','max:300'],
                'text'=>['required','min:8','max:1000'],
            ]);
    
            $article = new Article([
                'title' => $request->get('title'),
                'text' => $request->get('text'),
            ]);
    
            $auth_user = Auth::user();

            //Error handing: Save Article
            try {
                $auth_user->articles()->save($article);
                return redirect()->route('articles')->with('success', 'Статтю успішно додано!');
            } catch (\Exception $exception) {
                if($exception instanceof \Illuminate\Database\QueryException) {
                    return redirect()->route('articles.create')->with('danger', 'Помилка при запиті до бази даних');
                } 
                return redirect()->route('articles.create')->with('danger', 'Помилка сервера');
            } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('auth.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        if (!Auth::user() || !$article->isAuthor(Auth::user())) {
            return abort('404');
        }
        return view('auth.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>['required','min:8','max:255'],
            'text'=>['required','min:8','max:1000'],
        ]);

        $article = Article::findOrFail($id);

        $article->title =  $request->get('title');
        $article->text = $request->get('text');
        
        try {
            $article->save();
            return redirect()->route('articles')->with('success', 'Статтю редаговано!');
        } catch (\Exception $exception) {
            if($exception instanceof \Illuminate\Database\QueryException) {
                return redirect()->route('articles')->with('danger', 'Помилка редагування статті при запиті до бази даних');
            } 
            return redirect()->route('articles')->with('danger', 'Помилка сервера при редагування статті');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if (!Auth::user() || !$article->isAuthor(Auth::user())) {
            return abort('404');
        }

        if($article->delete()){
            return redirect()->route('articles')->with('success', 'Статтю видалено!');
        }
        return redirect()->route('articles')->with('danger', 'Помилка видалення статті!');

    }

    
}
