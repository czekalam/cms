@extends('layout')
@section('title','Show')
@section('content')
    <h1>Section</h1>
    {{$section->title}}
    {{$section->description}}
    <a href="/sections/{{$section->id}}/edit">edit</a>
    <form method="POST" action="/sections/{{ $section->id}}">
    @csrf
    {{ method_field('DELETE') }}
    <div>
        <button type="submit">Delete Section</button>
    </div>
    </form>
@endsection