@extends('layouts.mainlayout')

@section('title', 'Class-add')

@section('content')

<div class="mt-5 col-8 m-auto">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="classroom-store" method="post">
        @csrf
        <div class="form-grup mb-3">
            <label for="name">Nama Kelas</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-grup mb-3">
            <label for="teacher_id">Wali Murid</label>
            <select name="teacher_id" id="teacher" class="form-control">
                <option value="">Select One</option>
                @foreach ($teacher as $item)
                    <option value="{{$item -> id}}">{{$item -> name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection
