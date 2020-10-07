@extends('layout')
@section('content')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
@endsection
    <div class="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">new page</h1>
            <form method="POST" action="/articles/{{$article->id}}" >
                @csrf
                @method( 'PUT')
                <div class="field">
                    <label class="label" for="">Title</label>
                    <div class="control">
                        <input class="input {{$errors->first('title') ?'is-danger' :'input is-success' }}" type="text" name="title" id="" value="{{$article ->title}}">
                        <p class="help is-danger"> {{$errors->first('title')}}</p>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">excerpt</label>
                    <div class="control">
                        <input class="textarea" type="text" name="except" id="" value="{{$article ->except}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">Body</label>
                    <div class="control">
                        <input class="textarea" type="text" name="body" id="" value="{{$article ->body}}">
                    </div>
                </div>

                <div class="field  is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
