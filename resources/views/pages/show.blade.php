@extends('layout')
@section('title','show page')
@section('content')
<div class="{{$page->html_class}}" id="{{$page->html_id}}">
    <div class="uk-align-center uk-width-1-2">
        @if($page->sections)
            @foreach ($page->sections as $section)
                <section class="{{$section->html_class}}" id="{{$section->html_id}}">
                    @foreach ($boxes as $box)
                        @if($box->id == $section->box_id)
                            {!! $box->box_open !!}
                            {!! $section->box_content !!}
                            {!! $box->box_close !!}
                        @endif
                    @endforeach
                </section>
            @endforeach
        @endif
    </div>
</div>
@endsection