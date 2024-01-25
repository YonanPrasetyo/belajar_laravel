@extends('layouts.mainlayout')

@section('title', 'Teacher-deleted')

@section('content')
    <h1>Ini Halaman Teacher yang sudah dihapus</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $data)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$data -> name}}</td>
                    <td>
                        <a href="/teacher/{{$data -> id}}/restore" class="btn btn-primary">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
