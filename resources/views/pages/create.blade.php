@extends('layout')
@section('title','Create')
@section('content')
    <h1 class="uk-text-center">Create</h1>
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-flex uk-flex-column" method="POST" action="/pages">
            @csrf
            <input required type="text" name="title" placeholder="Page title">
            <textarea required name="description" placeholder="Page description"></textarea>
            <button type="submit">Create Page</button>
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