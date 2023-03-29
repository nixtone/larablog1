@extends('design')

@section('content')
    @section('title', 'Редактирование: Wallace Schuster V')
    <div id="post">
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="field_area">
                <input type="text" name="name" class="field" placeholder="Заголовок" value="{{ $post->name }}">
            </div>
            <div class="field_area">
                <input type="text" name="translit" class="field" placeholder="ЧПУ" value="{{ $post->translit }}">
            </div>
            <div class="field_area">
                <textarea name="anons" class="field" rows="7" placeholder="Анонс">{{ $post->anons }}</textarea>
            </div>
            <div class="field_area">
                <textarea name="text" class="field" rows="15" placeholder="Текст статьи">{{ $post->text }}</textarea>
            </div>
            <div class="field_area">
                <input type="submit" value="Создать" class="btn">
            </div>
        </form>
    </div>
@endsection
