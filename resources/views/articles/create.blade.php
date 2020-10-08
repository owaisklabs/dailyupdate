@extends('layout')
@section('content')
    @section('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
    @endsection
    <div class="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">new page</h1>
            <form method="POST" action="/articles" >
                @csrf
                <div class="field">
                    <label class="label" for="">Title</label>
                        <div class="control">
                            <input class="input {{$errors->first('title') ?'is-danger' :'input is-success' }}" type="text" name="title" id="">
                           <p class="help is-danger"> {{$errors->first('title')}}</p>
                        </div>
                </div>

                <div class="field">
                    <label class="label" for="">excerpt</label>
                    <div class="control">
                        <input class="textarea @error('title') is-danger @enderror" type="text" name="except" id="" value="{{old('except')}}">
                        @error('except')
                       <p class="help is-danger"> {{$errors->first('except')}}</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">Body</label>
                    <div class="control">
                        <input class="textarea {{$errors->first('body') ?'is-danger' :'' }}" type="text" name="body" id="">
                        <p class="help is-danger"> {{$errors->first('body')}}</p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="">tags</label>
                    <div class="control select is-multiple">
                        <select class=" " name="tags[]" id="" multiple>
                            @foreach( $tags as $tag)
                                <option value="{{$tag->id}}"> {{$tag->name}}</option>
                            @endforeach

                        </select>
                        @error('tags')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
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
