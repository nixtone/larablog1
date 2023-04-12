<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>@yield('title', 'Блог')</title>
    <link rel="stylesheet" href="/public/static/custom.css">
</head>
<body>

<div class="container">

    <nav>
        <div class="col c1">
            <a href="{{ route('post.list') }}">Главная</a>
            @auth
            <a href="{{ route('post.create') }}">Новый пост</a>
            <a href="{{ route('post.list.deleted') }}">Удаленные</a>
            @endauth
        </div>
        <div class="col c2">
            @guest
            <a href="/login">Auth</a>
            <a href="/reg">Reg</a>
            @endguest
            @auth
            Вы: <a href="{{ route('user.private') }}">{{ Auth::user()->name }}</a>, <a href="/logout">выйти</a>
            @endauth
        </div>

    </nav>

    <h1>@yield('title')</h1>

    @yield('content')

</div>

</body>
</html>
