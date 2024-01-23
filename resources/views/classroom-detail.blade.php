@extends('layouts.mainlayout')

@section('title', 'Class-detail')

@section('content')

    <h2>Detail dari kelas {{$class -> name}}</h2>

    <table class="table table-bordered">
        <tr>
            <th>Homeroom Teacher</th>
        </tr>
        <tr>
            <td>{{$class -> homeroomTeacher -> name}}</td>
        </tr>
    </table>

    <h3>Class Member</h3>
    <ol>
    @foreach ($class -> students as $item)
        <li>{{$item -> name}}</li>
    @endforeach
    </ol>
@endsection
