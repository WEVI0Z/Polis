<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Страхование"}}</title>
    @vite("resources/js/app/app.js")
</head>
<body>
    @include('app.header')

    <main>
        @yield('content')
    </main>

    @include("app.footer")
</body>
</html>