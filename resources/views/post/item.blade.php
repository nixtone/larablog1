@extends('design')

@section('content')
@section('title', $post->name)
<div id="post">
    <div class="item">
        <div class="text">{!! $post->text !!}</div>
    </div>
</div>
@endsection
