@extends('layout')
@section('title','Edit page')
@section('content')
    <h1 class="uk-text-center">Edit page</h1>

    {{-- edit --}}
    <form class="uk-form-custom" method="POST" action="/pages/{{ $page->id}}">
        @csrf
        {{ method_field('PATCH') }}
        <input class="uk-input" required type="text" name="name" placeholder="Page name" value="{{$page->name}}">
        <input class="uk-input" required type="text" name="html_class" placeholder="class" value="{{$page->html_class}}">
        <input class="uk-input" required type="text" name="html_id" placeholder="id" value="{{$page->html_id}}">
        <button class="uk-button uk-button-default" type="submit">Update Page</button>
    </form>
    
    {{-- delete --}}
    <form class="uk-form-custom" method="POST" action="/pages/{{ $page->id}}">
        @csrf
        {{ method_field('DELETE') }}
        <button class="uk-button uk-button-default" type="submit">Delete Page</button>
    </form>

    {{-- sections --}}
    <div class="uk-margin-large">
        @foreach ($page->sections as $section)
            {{-- edit section --}}
            <form class="uk-form-custom uk-margin-small" method="POST" action=/pages/{{$page->id}}/sections/{{ $section->id}}">
                @csrf
                {{ method_field('PATCH') }}
                <input class="uk-input" required type="text" name="name" placeholder="Section name" value="{{$section->name}}">
                <input class="uk-input" required type="text" name="html_class" placeholder="class" value="{{$section->html_class}}">
                <input class="uk-input" required type="text" name="html_id" placeholder="id" value="{{$section->html_id}}">
                <input class="uk-input" required type="text" name="box_content" placeholder="box content" value="{{$section->box_content}}">
                <button class="uk-button uk-button-default" type="submit">Update Section</button>
            </form>
            {{-- delete section--}}
            <form class="uk-form-custom" method="POST" action="/pages/{{ $page->id}}/sections/{{ $section->id }}">
                @csrf
                {{ method_field('DELETE') }}
                <button class="uk-button uk-button-default" type="submit">Delete Section</button>
            </form>
        @endforeach
    </div>
    
    {{-- create section --}}
    <div>
        <form id="create_section" class="uk-form-custom" method="POST" action="/pages/{{$page->name}}/sections/create">
            @csrf
            <input name="page_id" type="hidden" value="{{$page->id}}">
            <input class="uk-input" required type="text" name="section_name" placeholder="name">
            <input class="uk-input" required type="text" name="html_class" placeholder="class">
            <input class="uk-input" required type="text" name="html_id" placeholder="id">                
            <button class="uk-button uk-button-default" type="submit">Create Section</button>
        </form>
        <select name="box_id" form="create_section">
            @foreach ($boxes as $box)
                <option value="{{$box->id}}">{{$box->name}}</option>
            @endforeach
        </select>
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
@endsection