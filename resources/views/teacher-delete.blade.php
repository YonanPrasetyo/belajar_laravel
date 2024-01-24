@extends('layouts.mainlayout')

@section('title', 'Teacher-delete')

@section('content')

<div class="mt-5">
    <strong >Apakah yakin anda akan menghapus data guru {{$teacher -> name}}?</strong>
</div>

<form style="display: inline-block" action="/teacher/{{$teacher -> id}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">delete</button>
</form>

<a href="/teacher" class="btn btn-primary">cancel</a>

@endsection
