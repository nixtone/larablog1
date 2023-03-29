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
        <a href="{{ route('post.list') }}">Главная</a>
        <a href="{{ route('post.create') }}">Новый пост</a>
    </nav>

    <h1>@yield('title')</h1>

    @yield('content')

</div>

</body>
</html>
