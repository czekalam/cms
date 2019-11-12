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
    <div>
        @foreach ($page->sections as $section)
            <form method="POST" action=/pages/{{$page->id}}/sections/{{ $section->id}}">
                @csrf
                {{ method_field('PATCH') }}
                <input required type="text" name="title" placeholder="Section title" value="{{$section->title}}">
                <textarea required name="description" placeholder="Section description">{{$section->description}}</textarea>
                <button type="submit">Update Section</button>
            </form>
        @endforeach
    </div>
    @if($errors->any())
        <div style="background-color: red;padding:100px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-flex uk-flex-column" method="POST" action="/pages/{{$page->id}}/sections">
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