<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.links')

    @stack('stylesheets')

    <title>{{ config('app.name', 'Laravel') }}</title>

  </head>
<body>
    <div id="app">
        @include('layouts.nav_bar')


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('layouts.script')

    @stack('js')
    @stack('script')

</body>
</html>
