@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
<h1>Ini Halaman Home</h1>
<h2>Selamat Datang {{$name}}. Anda Adalah {{$role}}</h2>

<!-- IF STATMENT -->

<!-- @if ($role == 'Admin')
    <a href="">ke halaman admin</a>
@elseif ($role == 'Staff')
    <a href="">ke halaman staff</a>
@else
    <a href="">ke halaman perusahaan</a>
@endif -->

<!-- SWITCH STATMENT -->

<!-- @switch($role)
    @case('Admin')
        <a href="">ke halaman admin</a>
        @break
    @case('Staff')
        <a href="">ke halaman staff</a>
        @break
    @default
        <a href="">ke halaman perusahaan</a>
@endswitch -->

<!-- LOOPING -->
        
<!-- FOR -->

<!-- @for($i=0; $i<6; $i++)
    {{ $i }}
@endfor -->

<!-- FOREACH -->

<table class="table">
    <tr>
        <th>No.</th>
        <th>Nama Buah</th>
    </tr>
    @foreach($buah as $data)
    <tr>
        <td>
            {{$loop->iteration}}
        </td>
        <td>
            {{$data}}
        </td>
    </tr>
    @endforeach
</table>
@endsection