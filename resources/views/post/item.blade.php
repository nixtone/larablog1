@extends('design')

@section('content')
@section('title', $post->name)
<div id="post">
    <div class="item">
        <div class="text">{!! $post->text !!}</div>
        <div class="manage">
            <a href="{{ route('post.edit', $post->id) }}" class="edit">Редактировать</a>
        </div>
    </div>
</div>
@endsection
