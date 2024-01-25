@extends('layouts.mainlayout')

@section('title', 'Extracurricular-deleted')

@section('content')
    <h1>Ini Halaman Extracurricular yang sudah dihapus</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Extracurricular</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurricular as $item)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$item -> name}}</td>
                <td>
                    <a href="/extracurricular/{{$item -> id}}/restore" class="btn btn-primary">Restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
