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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Custom Style -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}">


</head>


<body>
    @livewire('navigation-menu')

    <main role="main">
        @yield('content')
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="text-muted">&copy; Copyright {{date('Y')}}
                @if (!Route::is('about'))
                    &middot; <a href="{{ route('about') }}">About us</p>
                @endif
        </div>
    </footer>


    <script src="{{asset('js/app.js')}}"></script>


</body>

</html>
