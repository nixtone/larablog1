@extends('design')

@section('content')
@section('title', $post->name)
<div id="post">
    <div class="category">Категория: <a href="">{{ $post->category->name }}</a></div>
    <div class="tags">
        @foreach($post->tag as $tag)
        <span class="tag">{{ $tag->name }}</span>
        @endforeach
    </div>
    <div class="item">
        <div class="text">{!! $post->text !!}</div>
        <div class="manage">
            <span class="created_at">Создано: {{ $post->created_at }}</span>
            @auth
            <div class="btn_area">
                <a href="{{ route('post.edit', $post->id) }}" class="edit">Редактировать</a>
                <form action="{{ route('post.delete', $post->id) }}" method="post" class="delete_form">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
