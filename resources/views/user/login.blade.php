@extends('design')

@section('content')
<form action="{{ route('user.login') }}" method="post" class="form_area">
    @csrf
    <div class="field_area">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" class="field">
    </div>
    <div class="field_area">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" class="field">
    </div>
    <div class="field_area">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember" class="inline">Запомнить меня</label>
    </div>
    <div class="field_area">
        <input type="submit" value="Log In" class="field">
        @error('formError')<div class="err">{{ $message }}</div>@enderror
    </div>
</form>
@endsection
