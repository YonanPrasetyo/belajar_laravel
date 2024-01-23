@extends('layouts.mainlayout')

@section('title', 'Student-add')

@section('content')

<div class="mt-5 col-8 m-auto">
    <form action="student" method="post">
        @csrf
        <div class="form-grup mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-grup mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">Select One</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>

        <div class="form-grup mb-3">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" required>
        </div>

        <div class="form-grup mb-3">
            <label for="class">Kelas</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($class as $item)
                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-grup mb-3">
            <label for="extracurricular">Ekstrakulikuler</label><br>
            @foreach ($extracurricular as $data)
                <input type="checkbox" name="extracurricular_id[]" id="extracurricular{{$data -> id}}">
                <label for="extracurricular{{$data -> id}}">{{$data -> name}}</label><br>
            @endforeach
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection

