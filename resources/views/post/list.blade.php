@extends('design')

@section('content')
@section('title', 'Лента постов')
    <div id="post">
        <div class="item">
            <h2 class="title">Wallace Schuster V</h2>
            <div class="anons">Vel quisquam reiciendis ut fugit. Iure est similique laudantium. Aut architecto dicta natus et. Сегодня хорошая погода была</div>
            <a href="{{ route('post.item', 'trasnlit') }}" class="more">Подробнее</a>
        </div>

    </div>
@endsection
