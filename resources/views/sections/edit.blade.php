@extends('layout')
@section('title','Edit')
@section('content')
    <h1>Edit</h1>
    <form method="POST" action="/sections/{{ $section->id}}">
        @csrf
        {{ method_field('PATCH') }}
        <input required type="text" name="title" placeholder="Section title" value="{{$section->title}}">
        <textarea required name="description" placeholder="Section description">{{$section->description}}</textarea>
        <button type="submit">Update Section</button>
    </form>
    <form method="POST" action="/sections/{{ $section->id}}">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit">Delete Section</button>
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