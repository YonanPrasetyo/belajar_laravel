@extends('layouts.mainlayout')

@section('title', 'Class-add')

@section('content')

<div class="mt-5 col-8 m-auto">
    <form action="extracurricular-store" method="post">
        @csrf
        <div class="form-grup mb-3">
            <label for="name">Nama Extrakulikuler</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection
