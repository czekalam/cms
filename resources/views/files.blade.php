@extends('layout')
@section('title','Files')
@section('content')
    <div class="files-page">
        <div class="files-page__css">
            <h2>css file</h2>
            <textarea name="css_file" form="css_file_form" rows="4" cols="50">
                {{$css_file}}
            </textarea>
            <form method="post" action="/files/css" id="css_file_form">
                @csrf
                <input type="submit">
            </form>
        </div>
        <div class="files-page__js">
            <h2>js file</h2>
            <textarea name="js_file" form="js_file_form" rows="4" cols="50">
                {{$js_file}}
            </textarea>
            <form method="post" action="/files/js" id="js_file_form">
                @csrf
                <input type="submit">
            </form>
        </div>
        <div class="files-page__img">
            <h2>upload img</h2>
            <input name="img_file" form="media_file_form">
            <form method="post" action="/files/media" id="media_file_form">
                @csrf
                <input type="submit">
            </form>
        </div>
    </div>
@endsection