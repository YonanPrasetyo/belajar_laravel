@extends('layouts.mainlayout')

@section('title', 'Class-deleted')

@section('content')

<h1>Ini halaman class yang sudah dihapus</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($class as $data)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$data -> name}}</td>
                <td>
                    <a href="/classroom/{{$data -> id}}/restore" class="btn btn-primary">Restore</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
