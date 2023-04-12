@extends('design')

@section('content')
    <form action="{{ route('user.reg') }}" method="post" class="form_area">
        @csrf
        <div class="field_area">
            <label for="username">Username @error('name')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="text" name="name" id="username" class="field">

        </div>
        <div class="field_area">
            <label for="email">E-mail @error('email')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="text" name="email" id="email" class="field">

        </div>
        <div class="field_area">
            <label for="password">Пароль @error('password')<span class="err">{{ $message }}</span>@enderror</label>
            <input type="password" name="password" id="password" class="field">

        </div>
        <div class="field_area">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" class="inline">Запомнить меня</label>
        </div>
        <div class="field_are">
            <input type="submit" value="Sign Up" class="field">
            @error('formError')<div class="err">{{ $message }}</div>@enderror
        </div>
    </form>
@endsection
