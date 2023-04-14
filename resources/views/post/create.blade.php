@extends('design')

@section('content')
@section('title', 'Новый пост')
<div id="post">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="field_area">
            <input type="text" name="name" class="field" placeholder="Заголовок" value="{{ old('name') }}">
            @error('name')
            <div class="err">{{ $message }}</div>
            @enderror
        </div>
        <div class="field_area">
            <input type="text" name="translit" class="field" placeholder="ЧПУ" value="{{ old('translit') }}">
            @error('translit')
            <div class="err">{{ $message }}</div>
            @enderror
        </div>
        <div class="field_area">
            <textarea name="anons" class="field" rows="7" placeholder="Анонс">{{ old('anons') }}</textarea>
            @error('anons')
            <div class="err">{{ $message }}</div>
            @enderror
        </div>
        <div class="field_area">
            <textarea name="text" class="field" rows="15" placeholder="Текст статьи">{{ old('text') }}</textarea>
            @error('text')
            <div class="err">{{ $message }}</div>
            @enderror
        </div>

        <div class="field_area">
            <label for="categories">Выбери категорию:</label>
            <select name="category_id" id="categories" class="field">
                @foreach($arCategories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="field_area">
            <input type="submit" value="Создать" class="btn">
        </div>

    </form>
</div>
@endsection
