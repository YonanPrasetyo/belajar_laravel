@extends('layouts.mainlayout')

@section('title', 'Teacher-detail')

@section('content')

    <h2>Detail dari guru yang bernama {{$teacher -> name}}</h2>

    <h3>Mengampu kelas
        @if ($teacher -> class)
            {{$teacher -> class -> name}}</h3>

            <h3>Class member</h3>
            <ol>
                @foreach ($teacher -> class -> students as $item)
                    <li>{{$item -> name}}</li>
                @endforeach
            </ol>
        @else
            -
        @endif

@endsection
