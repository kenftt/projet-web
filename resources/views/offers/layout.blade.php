<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <a href="/admin">admin</a>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
