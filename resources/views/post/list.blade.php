@extends('design')

@section('content')
@section('title', 'Лента постов')
    <div id="post">
        @foreach($arPosts as $post)
        <div class="item">
            <h2 class="title">{{ $post->name }}</h2>
            <div class="anons">{{ $post->anons }}а</div>
            <a href="{{ route('post.item', $post->translit) }}" class="more">Подробнее</a>
        </div>
        @endforeach
    </div>
@endsection
