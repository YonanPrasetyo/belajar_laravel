@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <strong>Teacher List</strong>
    <a href="/teacher-add" class="btn btn-primary">Add Data</a>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $data)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$data -> name}}</td>
                    <td>
                        <a href="/teacher-detail/{{$data -> id}}" class="btn btn-primary">detail</a>
                        <a href="/teacher-edit/{{$data -> id}}" class="btn btn-primary">edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
