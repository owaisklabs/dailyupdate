@extends('layout')
@section('content')
    <div class="wrapper">
        <div
        id="page"
        class="container">
            @foreach($articles as $article)
              <h1> <a href="/articles/{{$article->id}}"></a></h1>

        </div>
        <p>
            <img src="/images/banner.jpg" alt="" class="image image-full">

        </p>
        {!! $article->except!!}
    </div>
    @endforeach

