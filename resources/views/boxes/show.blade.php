@extends('layout')
@section('title','show box')
@section('content')
    <h1 class="uk-text-center">show box</h1>
    <div class="uk-align-center uk-width-1-2">
        {{$box->name}}
        {{$box->form}}
    </div>
@endsection