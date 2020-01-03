@extends('layout')
@section('title','Files')
@section('content')
    <form method="post" action="/settings">
        @csrf
        <input name="username" placeholder="username" value="{{$user->username}}">
        <input name="password" placeholder="password">
        <input name="email" placeholder="email" value="{{$user->email}}">
        <input type="submit">
    </form>
    
@endsection