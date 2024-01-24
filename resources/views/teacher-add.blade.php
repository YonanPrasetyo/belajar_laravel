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

    <form action="teacher-store" method="post">
        @csrf
        <div class="form-grup mb-3">
            <label for="name">Nama Guru</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>

@endsection
