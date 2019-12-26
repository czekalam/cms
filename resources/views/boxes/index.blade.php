@extends('layout')
@section('title','Index')
@section('content')
    <h1 class="uk-text-center">Boxes</h1>
    <div class="items uk-align-center uk-width-1-2">
        <ul class="items__list">
            @foreach ($boxes as $box)
                <a href="/boxes/{{$box->id}}">
                    <li class="items__list-item">
                        <div class="items__content">
                            <p>{{$box->name}}</p>
                            <p>{{$box->structure}}</p>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection