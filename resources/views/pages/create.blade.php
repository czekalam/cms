@extends('layout')
@section('title','Create page')
@section('content')
    <h1 class="uk-text-center">Create page</h1>
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-form-custom" method="POST" action="/pages">
            @csrf
            <input class="uk-input" required type="text" name="name" placeholder="Page name">
            <input class="uk-input" required type="text" name="html_class" placeholder="class">
            <input class="uk-input" required type="text" name="html_id" placeholder="id">
            <button class="uk-button" type="submit">Create Page</button>
        </form>
        @if($errors->any())
            <div style="background-color: red;padding:100px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection