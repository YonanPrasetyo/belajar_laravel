@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <strong>Extracurricular List</strong>
    <a href="/extracurricular-add" class="btn btn-primary">Add Data</a>
    <a href="/extracurricular-deleted" class="btn btn-primary">Show Deleted Data</a>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

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
                    <a href="/extracurricular-delete/{{$item -> id}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
