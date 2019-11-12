@extends('layout')
@section('title','Create')
@section('content')
    <h1 class="uk-text-center">Create</h1>
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-flex uk-flex-column" method="POST" action="/sections">
            @csrf
            <input required type="text" name="title" placeholder="Section title">
            <input required type="number" name="page_id" placeholder="pageid">
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