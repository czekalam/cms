@extends('layout')
@section('title','Files')
@section('content')
    
    <form method="post" action="/files/css" id="css_file_form">
        @csrf
        <input type="submit">
    </form>
    <textarea name="css_file" form="css_file_form" rows="4" cols="50">
        {{$css_file}}
    </textarea>
    
    <form method="post" action="/files/js" id="js_file_form">
        @csrf
        <input type="submit">
    </form>
    <textarea name="js_file" form="js_file_form" rows="4" cols="50">
        {{$js_file}}
    </textarea>

    <form method="post" action="/files/media" id="media_file_form">
        @csrf
        <input type="submit">
    </form>
    <textarea name="img_file" form="media_file_form" rows="4" cols="50">

    </textarea>
    
@endsection