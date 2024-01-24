@extends('layouts.mainlayout')

@section('title', 'Extracurricular-delete')

@section('content')

<div class="mt-5">
    <strong >Apakah yakin anda akan menghapus data extrakulikuler {{$extracurricular -> name}}?</strong>
</div>

<form style="display: inline-block" action="/extracurricular/{{$extracurricular -> id}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">delete</button>
</form>

<a href="/extracurricular" class="btn btn-primary">cancel</a>

@endsection
