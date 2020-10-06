<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function  show($article){
        $article=Article::find($article);
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
       $article = new Article();
       $article->title=request('title');
       $article->except=request('except');
       $article->body=request('body');
       $article->save();
       return redirect('/articles');


    }
}


