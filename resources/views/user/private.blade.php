@extends('design')

@section('content')
    <table>
        <tr>
            <td class="msg">Имя</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td class="msg">E-mail</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td class="msg">Верифицирован</td>
            <td>{{ Auth::user()->email_verified_at }}</td>
        </tr>
        <tr>
            <td class="msg">Создан</td>
            <td>{{ Auth::user()->created_at }}</td>
        </tr>
    </table>
@endsection
