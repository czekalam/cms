@extends('layout')
@section('title','Edit')
@section('content')
    <h1 class="uk-text-center">Edit</h1>
    <div class="uk-align-center uk-width-1-2">
        <div>
            {{-- edit --}}
            <form class="uk-form-custom" method="POST" action="/pages/{{ $page->id}}">
                @csrf
                {{ method_field('PATCH') }}
                <input class="uk-input" required type="text" name="title" placeholder="Page title" value="{{$page->title}}">
                <input class="uk-input" required type="text" name="description" placeholder="Page description" value="{{$page->description}}">
                <button class="uk-button uk-button-default" type="submit">Update Page</button>
            </form>
            {{-- delete --}}
            <form class="uk-form-custom" method="POST" action="/pages/{{ $page->id}}">
                @csrf
                {{ method_field('DELETE') }}
                <button class="uk-button uk-button-default" type="submit">Delete Page</button>
            </form>
        </div>
        {{-- sections --}}
        <div class="uk-margin-large">
            @foreach ($page->sections as $section)
                <form class="uk-form-custom uk-margin-small" method="POST" action=/pages/{{$page->id}}/sections/{{ $section->id}}">
                    @csrf
                    {{ method_field('PATCH') }}
                    <input class="uk-input" required type="text" name="title" placeholder="Section title" value="{{$section->title}}">
                    <input class="uk-input" required name="description" placeholder="Section description" value="{{$section->description}}">
                    <button class="uk-button uk-button-default" type="submit">Update Section</button>
                </form>
            @endforeach
        </div>
        {{-- create section --}}
        <div>
            <form class="uk-form-custom" method="POST" action="/pages/{{$page->id}}/sections">
                @csrf
                <input class="uk-input" required type="text" name="title" placeholder="Section title">
                <input class="uk-input" required name="description" placeholder="Section description">
                <button class="uk-button uk-button-default" type="submit">Create Section</button>
            </form>
        </div>
        {{-- errors --}}
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