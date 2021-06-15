<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>@yield('title',config('app.name'))</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Custom Style -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <!-- Manifest/PWA -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="/assets/icons/icon-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">
    <!-- Script Livewire necessaires -->
    @livewireStyles
    {{-- A enlever START--}}
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: whitesmoke;
            color: white;
            text-align: center;
        }

    </style>
    {{-- A elever END --}}
</head>


<body>

    @livewire('navigation-menu')
    <main>
        @yield('content')
    </main>

    <footer class="footer text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="text-muted">&copy; Copyright {{date('Y')}}
                @if (!Route::is('about'))
                    &middot; <a href="{{ route('about') }}">About us</a>
            </p>

                @endif
        </div>

    </footer>

    <!-- JS -->
    <script src="{{asset('js/app.js')}}"></script>
    
    <!-- Script Livewire necessaires -->
    @livewireScripts
</body>

<script>
    window.onload = () => {
  'use strict';

  if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/serviceWorker.js");
  }
}
</script>


</html>
