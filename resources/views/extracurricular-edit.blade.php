@extends('layouts.mainlayout')

@section('title', 'Class-edit')

@section('content')

<div class="mt-5 col-8 m-auto">
    <form action="/extracurricular/{{$extracurricular -> id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-grup mb-3">
            <label for="name">Nama Extrakulikuler</label>
            <input type="text" name="name" value="{{$extracurricular -> name}}" id="name" class="form-control" required>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection
