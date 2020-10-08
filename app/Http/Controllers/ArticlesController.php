<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function  show(Article $article){
        return view('articles.show',['articles'=>$article]);

    }
    function index(){
        if (request('tag'))
        {
            $article = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }
        else {
            $article = Article::latest()->get();
        }
        return view('articles.index',['articles'=>$article]);
    }
    function create(){
        $tags =Tag::all();
        return view('articles.create',['tags'=>$tags]);
    }
    function store(){
        $this->validateArticle();
        $article = new Article(request(['title','except','body']));
        $article->user_id =1;
        $article->save();

        $article->tags()->attach(request('tags'));
//        Article::create($this->validateArticle());

       return redirect(route('articles.index'));


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
            'tags'=>'exists:tags,id'
        ]));
    }
}


