<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/uikit/css/uikit.min.css') }}" />
        <title>@yield('title','CMS')</title>
    </head>
    <body>
        <nav class="nav">
            <ul class="nav__list uk-flex uk-flex-row uk-flex-center">
                <li class="nav__list-item uk-margin-small-right"><a href="/pages">pages</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/pages/create">create</a></li>
                <li class="nav__list-item uk-margin-small-right"><a href="/sections">sections</a></li>
                <li class="nav__list-item">
                    <a href="/sections/create">
                        create section
                    </a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
