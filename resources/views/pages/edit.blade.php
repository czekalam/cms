@extends('layout')
@section('title','Edit')
@section('content')
    <h1>Edit</h1>
    <form method="POST" action="/pages/{{ $page->id}}">
        @csrf
        {{ method_field('PATCH') }}
        <input required type="text" name="title" placeholder="Page title" value="{{$page->title}}">
        <textarea required name="description" placeholder="Page description">{{$page->description}}</textarea>
        <button type="submit">Update Page</button>
    </form>
    <form method="POST" action="/pages/{{ $page->id}}">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit">Delete Page</button>
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
@endsection