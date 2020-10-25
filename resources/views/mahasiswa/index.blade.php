@extends('layouts.app')

@section('title', 'Index')

@section('content')

<h1 class="text-center">Daftar Mahasiswa</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Prodi</th>
            <th scope="col" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $row)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->prodi }}</td>
            <td>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection