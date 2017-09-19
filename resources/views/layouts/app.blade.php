<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{!! asset('/css/app.css') !!}" />
        <link rel="shortcut icon" href="{!! asset('/images/favicon.ico') !!}" type="image/x-icon">

        <title>{{ config('app.name') }} - @yield('title')</title>
        <!-- Styles -->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]); !!};
        </script>
    </head>
    <body>
        @yield('content')
        <script src="{!! asset('/js/app.js') !!}" type="text/javascript"></script>
        <!-- Scripts -->
        @yield('javascript')
    </body>

    @if(env('APP_ENV') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif
</html>
