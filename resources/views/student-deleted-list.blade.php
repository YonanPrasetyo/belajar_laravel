@extends('layouts.mainlayout')

@section('title', 'Student-deleted')

@section('content')

    <h1>Ini Halaman Student Yang Sudah Di Delete</h1>

    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>gender</th>
                <th>nis</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $data)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$data -> name}}</td>
                    <td>{{$data -> gender}}</td>
                    <td>{{$data -> nis}}</td>
                    <td>
                        <a href="/student/{{$data -> id}}/restore" class="btn btn-primary">Restore</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>

@endsection
