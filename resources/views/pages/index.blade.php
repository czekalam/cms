@extends('layout')
@section('title','Index')
@section('content')
    <h1 class="uk-text-center">Pages</h1>
    <div class="items uk-align-center uk-width-1-2">
        <ul class="items__list">
            @foreach ($pages as $page)
                <a href="/pages/{{$page->id}}">
                    <li class="items__list-item">
                        <div class="items__content">
                            <p>{{$page->title}}</p>
                            <p>{{$page->description}}</p>
                        </div>
                        <a class="button" href="/pages/{{$page->id}}/edit">edit</a>
                        <div class="uk-display-inline-block">
                            <form method="POST" action="/pages/{{ $page->id}}">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <button class="button" type="submit">Delete Page</button>
                            </form>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection