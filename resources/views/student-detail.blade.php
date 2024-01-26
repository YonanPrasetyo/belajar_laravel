@extends('layouts.mainlayout')

@section('title', 'Student-detail')

@section('content')

<h2>Detail dari siswa bernama {{$student -> name}}</h2>

    <div class="my-3 d-flex justify-content-center">
        @if ($student -> image != '')
            <img src="{{asset('storage/photo/'.$student -> image)}}" alt="" width="200px">
        @else
            <img src="{{asset('images/images.png')}}" alt="" width="200px">
        @endif
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>HomeRoom Teacher</th>
            <th>Extracurricular</th>
        </tr>
        <tr>
            <td>{{$student -> name}}</td>
            <td>{{$student -> nis}}</td>
            <td>
                @if ($student -> gender == 'L')
                    Laki-laki
                @else
                    Perempuan
                @endif
            </td>
            <td>{{$student -> class -> name}}</td>
            <td>{{$student -> class -> homeroomTeacher -> name}}</td>
            <td>
                @foreach ($student -> extracurriculars as $data)
                    {{$loop -> iteration}}.
                    {{$data -> name}} <br>
                @endforeach
            </td>
        </tr>
    </table>

@endsection
