<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
</head>
<body>
    <header>
    @include('layouts._partials.navbar')
    </header>
    @yield('content')
    @include('layouts._partials.cookie')
    @include('layouts._partials.footer')
</body>
</html>