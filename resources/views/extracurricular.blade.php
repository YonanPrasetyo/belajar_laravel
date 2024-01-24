@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <h3>Extracurricular List <a href="/extracurricular-add" class="btn btn-primary">Add Data</a></h3>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Extracurricular</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurricularList as $item)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$item -> name}}</td>
                <td>
                    <a href="/extracurricular-detail/{{$item -> id}}" class="btn btn-primary">detail</a>
                    <a href="/extracurricular-edit/{{$item -> id}}" class="btn btn-primary">edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
