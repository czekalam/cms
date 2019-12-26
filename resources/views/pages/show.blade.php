<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/uikit/css/uikit.min.css') }}" />
        <title>page</title>
    </head>
    <body>
        <nav class="uk-text-center">
            @foreach ($pages as $pagesItem)
                <a href="/pages/{{$pagesItem->id}}">{!!$pagesItem->title!!}</a>
            @endforeach
        </nav>
        <main>

            @if($page->sections)
                @foreach ($page->sections as $section)
                    <section>
                        {!!$section->description!!}
                    </section>
                @endforeach
            @endif
        </main>
    </body>
</html>