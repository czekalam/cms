@extends('layout')
@section('title','Box')
@section('content')
    <h1 class="uk-text-center">Box</h1>
    <div class="uk-align-center uk-width-1-2">
        {{$box->name}}
        {{$box->form}}
        <a href="">edit</a>
    </div>
@endsection