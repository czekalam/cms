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
                        <a href="/boxes/{{$box->name}}/edit">edit</a>
                        <form method="POST" action="/boxes/{{ $box->id}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit">Delete Box</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection