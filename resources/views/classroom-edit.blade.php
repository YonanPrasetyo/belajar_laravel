@extends('layouts.mainlayout')

@section('title', 'Class-edit')

@section('content')

<div class="mt-5 col-8 m-auto">
    <form action="/classroom/{{$class ->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-grup mb-3">
            <label for="name">Nama Kelas</label>
            <input type="text" name="name" value="{{$class -> name}}" id="name" class="form-control" required>
        </div>

        <div class="form-grup mb-3">
            <label for="teacher_id">Wali Murid</label>
            <select name="teacher_id" id="teacher" class="form-control" required>
                <option value="{{$class -> homeroomTeacher -> id}}">{{$class -> homeroomTeacher -> name}}</option>
                @foreach ($teacher as $item)
                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection
