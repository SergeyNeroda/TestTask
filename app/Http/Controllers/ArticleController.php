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
    public function index()
    {
        $auth_user = Auth::user();
        $articles = Article::orderBy('created_at', 'desc')->get();        
        return view('auth.articles.index', ['articles'=>$articles, 'auth_user'=>$auth_user]);
    }

    public function userArticles ()
    {
        $auth_user = Auth::user();
        $articles = $auth_user->articles()->where('user_id', $auth_user->id)->orderBy('deleted_at', 'desc')->get();
        return view('auth.articles.authorArticles', ['articles' => $articles, 'auth_user' => $auth_user]);
    }

    public function softDeleted()
    {
        $auth_user = Auth::user();
        $articles = $auth_user->articles()->onlyTrashed()->where('user_id', $auth_user->id)->orderBy('deleted_at', 'desc')->get();

        return view('auth.articles.trash', ['articles'=>$articles, 'auth_user'=>$auth_user]);
    }

    public function restore($id)
    {
        $article = Article::onlyTrashed()->find($id);
        $article->restore();

        return redirect()->route('articles')->with('success', 'Статтю успішно відновлено!');   
    }

    public function permanentDelete($id)
    {
        $article = Article::onlyTrashed()->find($id);
        $article->forceDelete();
        
        return redirect()->route('articles.softdeleted')->with('success', 'Статтю видалено остаточно!');
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
            'title'=>['required','min:8'],
            'text'=>['required','min:8'],
        ]);

        $article = new Article([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
        ]);

        $auth_user = Auth::user();
        $auth_user->articles()->save($article);

        return redirect()->route('articles')->with('success', 'Статтю успішно додано!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
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
        $article = Article::find($id);
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
            'title'=>['required','min:8'],
            'text'=>['required','min:8'],
        ]);

        $article = Article::find($id);

        $article->title =  $request->get('title');
        $article->text = $request->get('text');
        
        $article->save();

        return redirect()->route('articles')->with('success', 'Статтю редаговано!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if (!Auth::user() || !$article->isAuthor(Auth::user())) {
            return abort('404');
        }

        $article->delete();

        return redirect()->route('articles')->with('success', 'Статтю видалено!');
    }

    
}
