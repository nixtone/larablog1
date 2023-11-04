@extends('design')

@section('content')
    @section('title', 'Редактирование: '.$post->name)
    <div id="post">
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="field_area">
                <label for="name">Заголовок</label>
                <input type="text" name="name" id="name" class="field" placeholder="Заголовок" value="{{ $post->name }}">
                @error('name')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="field_area">
                <label for="translit">ЧПУ</label>
                <input type="text" name="translit" id="translit" class="field" placeholder="ЧПУ" value="{{ $post->translit }}">
                @error('translit')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="field_area">
                <label for="anons">Анонс</label>
                <textarea name="anons" id="anons" class="field" rows="7" placeholder="Анонс">{{ $post->anons }}</textarea>
                @error('anons')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="field_area">
                <label for="text">Текст статьи</label>
                <textarea name="text" id="text" class="field" rows="15" placeholder="Текст статьи">{{ $post->text }}</textarea>
                @error('text')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="field_area">
                <label for="category_id">Категория</label>
                <select name="category_id" id="category_id" class="field">
                    @foreach($categoryList as $cat)
                    <option value="{{ $cat->id }}" @if($post->category->id == $cat->id) selected @endif>{{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="field_area">
                <input type="submit" value="Редактировать" class="btn">
            </div>
        </form>
    </div>
@endsection
