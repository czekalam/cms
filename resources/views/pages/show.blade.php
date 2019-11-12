@extends('layout')
@section('title','Show')
@section('content')
    <h1>Page</h1>
    {{$page->title}}
    {{$page->description}}
    <div>
        @foreach ($page->sections as $section)
            {!!$section->title!!}
            {!!$section->description!!}
        @endforeach
    </div>
@endsection