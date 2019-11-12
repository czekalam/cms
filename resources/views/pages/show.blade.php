@extends('layout')
@section('title','Show')
@section('content')
    <h1>Page</h1>
    {{$page->title}}
    {{$page->description}}
    <a href="/pages/{{$page->id}}/edit">edit</a>
    <form method="POST" action="/pages/{{ $page->id}}">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit">Delete Page</button>
        <div>
            @foreach ($page->sections as $section)
                <form method="POST" action="{{$page->id}}/sections/{{ $section->id}}">
                    @csrf
                    {{ method_field('PATCH') }}
                    <input required type="text" name="title" placeholder="Section title" value="{{$section->title}}">
                    <textarea required name="description" placeholder="Section description">{{$section->description}}</textarea>
                    <button type="submit">Update Section</button>
                </form>
            @endforeach
        </div>
    </form>
    add section
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-flex uk-flex-column" method="POST" action="{{$page->id}}/sections">
            @csrf
            <input required type="text" name="title" placeholder="Section title">
            <textarea required name="description" placeholder="Section description"></textarea>
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