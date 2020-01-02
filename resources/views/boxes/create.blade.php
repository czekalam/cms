@extends('layout')
@section('title','Create box')
@section('content')
    <h1 class="uk-text-center">Create box</h1>
    <div class="uk-align-center uk-width-1-2">
        <form class="uk-form-custom" method="POST" action="/boxes">
            @csrf
            <input class="uk-input" required type="text" name="name" placeholder="Box name">
            <input class="uk-input" required type="text" name="box_open" placeholder="Box open">
            <input class="uk-input" required type="text" name="box_close" placeholder="Box close">
            <input class="uk-input" required type="text" name="box_form" placeholder="Box form">
            <button class="uk-button" type="submit">Create Box</button>
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