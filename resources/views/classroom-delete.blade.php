@extends('layouts.mainlayout')

@section('title', 'Class-delete')

@section('content')

<div class="mt-5">
    <strong >Apakah yakin anda akan menghapus data kelas {{$class -> name}}?</strong>
</div>

<form style="display: inline-block" action="/classroom/{{$class -> id}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">delete</button>
</form>

<a href="/class" class="btn btn-primary">cancel</a>

@endsection
