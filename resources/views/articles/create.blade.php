@extends('layout')
@section('content')
    <div class="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">new page</h1>
            <form method="POST" action="/articles" >
                @csrf
                <div class="field">
                    <label class="label" for="">Title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" id="">
                        </div>
                </div>

                <div class="field">
                    <label class="label" for="">excerpt</label>
                    <div class="control">
                        <input class="textarea" type="text" name="except" id="">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">Body</label>
                    <div class="control">
                        <input class="textarea" type="text" name="body" id="">
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
