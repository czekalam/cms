@extends('layout')
@section('title','show page')
@section('content')
    <h1 class="uk-text-center">show page</h1>
    <div class="uk-align-center uk-width-1-2">
        {{$page->name}}
        @if($page->sections)
            @foreach ($page->sections as $section)
                <section>
                    {!!$section->description!!}
                </section>
            @endforeach
        @endif
    </div>
@endsection