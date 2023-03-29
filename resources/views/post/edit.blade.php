@extends('design')

@section('content')
    @section('title', 'Редактирование: Wallace Schuster V')
    <div id="post">
        <form>
            <div class="field_area">
                <input type="text" name="name" class="field" placeholder="Заголовок" value="">
            </div>
            <div class="field_area">
                <input type="text" name="translit" class="field" placeholder="ЧПУ" value="">
            </div>
            <div class="field_area">
                <textarea name="anons" class="field" rows="7" placeholder="Анонс"></textarea>
            </div>
            <div class="field_area">
                <textarea name="text" class="field" rows="15" placeholder="Текст статьи"></textarea>
            </div>
            <div class="field_area">
                <input type="checkbox" name="active" id="active_field" value="1" checked>
                <label for="active_field" class="inline">Активность</label>
            </div>
            <div class="field_area">
                <input type="submit" value="Создать" class="btn">
            </div>
        </form>
    </div>
@endsection
