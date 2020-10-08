@extends('layout')
@section('content')
    <div class="wrapper">
        <div id="page"  class="container">
            @forelse($articles as $article)
                <div class="content">
                    <div class="title">
                        <h1> <a href="{{ route('articles.show',$article->id) }}">{{$article->title}}</a></h1>
                    </div>
                </div>
        </div>
        <p>
            <img src="/images/banner.jpg" alt="" class="image image-full">

        </p>
        {!! $article->except!!}
    </div>
    @empty
        <h1 align="center">No relevant post</h1>
    @endforelse
@endsection

