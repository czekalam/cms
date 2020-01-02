@extends('layout')
@section('title','Boxes')
@section('content')
    <h1 class="uk-text-center">Boxes</h1>
    <div class="items uk-align-center uk-width-1-2">
        <ul class="items__list">
            @foreach ($boxes as $box)
                <li class="items__list-item">
                    <div class="items__content">
                        <p>{{$box->name}}</p>
                        <p>{{$box->structure}}</p>
                        <a href="">edit</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection