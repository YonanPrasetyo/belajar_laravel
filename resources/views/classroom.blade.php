@extends('layouts.mainlayout')

@section('title', 'Class')

@section('content')
<h1>Ini Halaman Class</h1>
<h3>Class List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
            <tr>
                <th>{{$loop -> iteration}}</th>
                <th>{{$data -> name}}</th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
