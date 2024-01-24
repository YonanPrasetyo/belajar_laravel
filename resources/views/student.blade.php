@extends('layouts.mainlayout')

@section('title', 'Student')

@section('content')
<h1>Ini Halaman Student</h1>
<strong>Student List</strong>
<a href="/student-add" class="btn btn-primary">Add Data</a>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<table class = "table">
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
    @foreach ($studentList as $data)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$data -> name}}</td>
            <td>{{$data -> gender}}</td>
            <td>{{$data -> nis}}</td>
            <td>
                <a href="/student/{{$data -> id}}" class="btn btn-primary">detail</a>
                <a href="/student-edit/{{$data -> id}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
