@extends('layouts.mainlayout')

@section('title', 'Student-edit')

@section('content')
<div class="mt-5 col-8 m-auto">
    <form action="/student/{{$student -> id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-grup mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{$student -> name}}" class="form-control" required>
        </div>

        <div class="form-grup mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{$student -> gender}}">{{$student -> gender}}</option>
                @if ($student -> gender == 'L')
                    <option value="P">P</option>
                @else
                    <option value="L">L</option>
                @endif
            </select>
        </div>

        <div class="form-grup mb-3">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" value="{{$student -> nis}}" class="form-control" required>
        </div>

        <div class="form-grup mb-3">
            <label for="class">Kelas</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="{{$student -> class -> id}}">{{$student -> class -> name}}</option>
                @foreach ($class as $data)
                    <option value="{{$data -> id}}">{{$data -> name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection

