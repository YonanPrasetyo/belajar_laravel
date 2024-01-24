@extends('layouts.mainlayout')

@section('title', 'Student-delete')

@section('content')

<div class="mt-5">
    <strong >Apakah yakin anda akan menghapus data murid {{$student -> name}} ({{$student-> nis}})?</strong>
</div>

<form style="display: inline-block" action="/student/{{$student -> id}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">delete</button>
</form>

<a href="/students" class="btn btn-primary">cancel</a>

@endsection
