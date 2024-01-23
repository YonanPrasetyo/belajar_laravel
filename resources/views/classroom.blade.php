@extends('layouts.mainlayout')

@section('title', 'Class')

@section('content')
<h1>Ini Halaman Class</h1>
<h3>Class List <a href="/classroom-add" class="btn btn-primary">Add Data</a></h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$data -> name}}</td>
                <td><a href="/class-detail/{{$data -> id}}" class="btn btn-primary">detail</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
