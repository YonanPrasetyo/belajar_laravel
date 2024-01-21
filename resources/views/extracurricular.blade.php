@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <h3>Extracurricular List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Extracurricular</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurricularList as $item)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$item -> name}}</td>
                <td>
                    @foreach ($item->students as $data)
                        {{$loop -> iteration}}.
                        {{$data -> name}} <br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
