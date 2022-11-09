<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PUNCH</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="icon">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- JS File Links -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js')}}" type="module"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--@vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    @livewireStyles

</head>

<body>
    <div id="app">

        @include('layouts.inc.frontend.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.inc.frontend.footer')
    </div>

    @livewireScripts
</body>

</html>