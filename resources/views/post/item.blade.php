@extends('design')

@section('content')
@section('title', $post->name)
<div id="post">
    <div class="item">
        <div class="text">{!! $post->text !!}</div>
        <div class="manage">
            <a href="{{ route('post.edit', $post->id) }}" class="edit">Редактировать</a>
            <form action="{{ route('post.delete', $post->id) }}" method="post" class="delete_form">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить">
            </form>
        </div>
    </div>
</div>
@endsection
