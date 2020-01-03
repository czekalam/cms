@extends('layout')
@section('title','Create')
@section('content')
    <h1 class="uk-text-center">Create</h1>
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-flex uk-flex-column" method="POST" action="/pages/{{$page_name}}/sections">
            @csrf
            <input name="box_id" type="hidden" value="{{$box_id}}">
            <input name="page_id" type="hidden" value="{{$page_id}}">
            <input name="html_id" type="hidden" value="{{$html_id}}">
            <input name="html_class" type="hidden" value="{{$html_class}}">
            <input name="section_name" type="hidden" value="{{$section_name}}">
            <input name="box_content">
            <button type="submit">Create Section</button>
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