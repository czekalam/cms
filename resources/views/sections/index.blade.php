@extends('layout')
@section('title','Index')
@section('content')
    <h1 class="uk-text-center">Sections</h1>
    <div class="items uk-align-center uk-width-1-2">
        <ul class="items__list">
            @foreach ($sections as $section)
                <a href="/sections/{{$section->id}}">
                    <li class="items__list-item">
                        <div class="items__content">
                            {{$section->title}}
                            {{$section->description}}
                        </div>
                        <a class="button" href="/sections/{{$section->id}}/edit">edit</a>
                        <div class="uk-display-inline-block">
                            <form method="POST" action="/sections/{{ $section->id}}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <div>
                                    <button class="button" type="submit">Delete Section</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection