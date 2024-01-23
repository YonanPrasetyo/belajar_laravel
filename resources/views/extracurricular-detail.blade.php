@extends('layouts.mainlayout')

@section('title', 'Extracurricular-detail')

@section('content')

    <h2>Detail dari ekstakulikuler {{$extracurricular -> name}}</h2>

    <h3>Extracurricular Member</h3>
    <ol>
        @foreach ($extracurricular -> students as $item)
            <li>{{$item -> name}}</li>
        @endforeach
    </ol>

@endsection
