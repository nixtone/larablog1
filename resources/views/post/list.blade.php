@extends('design')

@section('content')
@section('title', 'Лента постов')
    <div id="post">
        @foreach($arPosts as $post)
        <div class="item">
            <h2 class="title">{{ $post->name }}</h2>
            <div class="anons">{!! $post->anons !!}</div>
            @if($post->trashed())
                <a href="{{ route('post.restore', $post->id) }}">Восстановить</a> /
                <a href="{{ route('post.delete.hard', $post->id) }}">Удалить жестко</a>
            @else
                <a href="{{ route('post.item', $post->translit) }}" class="more">Подробнее</a>
            @endif
        </div>
        @endforeach
    </div>
@endsection
