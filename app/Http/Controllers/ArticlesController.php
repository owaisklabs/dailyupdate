<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function  show(Article $article){
        return view('articles.show',['articles'=>$article]);

    }
    function index(){
        $article = Article::latest()->get();
        return view('articles.index',['articles'=>$article]);
    }
    function create(){
        return view('articles.create');
    }
    function store(){
        Article::create($this->validateArticle());

       return redirect(route('article.index'));


    }
    function edit(Article $article){

        return view('articles.edit',compact('article'));

    }
    function update(Article $article){
        $article ->update($this->validateArticle());

        return redirect($article->path());

    }
    protected function validateArticle(){
        return (request()->validate([
            'title'=>'required',
            'except'=>'required',
            'body'=>'required',
        ]));
    }
}


