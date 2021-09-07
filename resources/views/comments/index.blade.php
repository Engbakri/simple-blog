@extends('layout')

@section('content')

<h1>index comments</h1>

@foreach($comments as $comment)

<h3> {{ $comment->comment }}</h3>

@endforeach


@endsection
