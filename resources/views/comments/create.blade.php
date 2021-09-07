@extends('layout')


@section('content')

<form method="post" action="{{ route('comments.store') }}">
    @csrf
    @method('post')
    <input type="text" name="comment" >
    <button type="submit"> Save</button>

</form>


@endsection
