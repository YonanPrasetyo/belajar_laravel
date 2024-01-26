@extends('layouts.mainlayout')

@section('title', 'Student')

@section('content')
<h1>Ini Halaman Student</h1>
<strong>Student List</strong>
<div class="d-flex justify-content-between">
    <form action="" method="get" class="" style="display: flex">
        <div class="input-group mb-3 w-auto" >
            <input type="text" class="form-control" name="keyword" placeholder="Keyword">
            <button class="input-group-text btn btn-primary">Cari</button>
        </div>
    </form>
    <div>
        <a href="/student-add" class="btn btn-primary ms-2">Add Data</a>
        <a href="/student-deleted" class="btn btn-primary ms-2">Show Deleted Data</a>
    </div>
</div>

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
            <th>kelas</th>
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
            <td>{{$data -> class -> name}}</td>
            <td>
                <a href="/student/{{$data -> id}}" class="btn btn-primary">detail</a>
                <a href="/student-edit/{{$data -> id}}" class="btn btn-primary">edit</a>
                <a href="/student-delete/{{$data -> id}}" class="btn btn-danger">delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="my-5">
    {{$studentList->withQueryString()->links()}}
</div>
@endsection
