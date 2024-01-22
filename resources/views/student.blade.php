@extends('layouts.mainlayout')

@section('title', 'Student')

@section('content')
<h1>Ini Halaman Student</h1>
<h3>Student List</h3>


<table class = "table">
    <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>gender</th>
            <th>nis</th>
            <th>class_id</th>
            <th>kelas</th>
            <th>Ekstrakulikuler</th>
            <th>Homeroom Teacher</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($studentList as $data)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$data -> name}}</td>
            <td>{{$data -> gender}}</td>
            <td>{{$data -> nis}}</td>
            <td>{{$data -> class_id}}</td>
            <td>{{$data -> class -> name}}</td>
            <td>
                @foreach ($data['extracurriculars'] as $value)
                    {{$loop -> iteration}}.
                    {{$value['name']}} <br>
                @endforeach
            </td>
            <td>{{$data -> class -> homeroomTeacher -> name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
