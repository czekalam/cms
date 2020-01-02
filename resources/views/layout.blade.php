<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('/uikit/css/uikit.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/css/page.css') }}" />
        <title>@yield('title','CMS')</title>
    </head>
    <body class="uk-background-muted">
        <nav class="nav">
            <ul class="nav__list uk-flex uk-flex-row uk-flex-center">
                <li class="nav__list-item uk-margin-small-right"><a href="/">Home</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/files">Files</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/pages">Pages</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/pages/create">Create page</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/boxes">Boxes</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/boxes/create">Create box</a></li>
            </ul>
        </nav>
        @yield('content')
    <script src="{{url('/js/page.js')}}"></script>
    </body>
</html>
