@extends('layout')
@section('title','Edit box')
@section('content')
    <h1>Edit box</h1>
    <form method="POST" action="/boxes/{{ $box->id}}">
        @csrf
        {{ method_field('PATCH') }}
        <input class="uk-input" required type="text" name="name" placeholder="Box name">
        <input class="uk-input" required type="text" name="box_open" placeholder="Box open">
        <input class="uk-input" required type="text" name="box_close" placeholder="Box close">
        <input class="uk-input" required type="text" name="box_form" placeholder="Box form">
        <button type="submit">Update Box</button>
    </form>
    <form method="POST" action="/boxes/{{ $box->id}}">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit">Delete Box</button>
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