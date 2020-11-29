
@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
 <div class="countainer">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Daftar Mahasiswa!</h1>

        <table class="table">
        <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Aksi</th>
                </tr>
        </thead>
        <tbody>
        @foreach( $mahasiswa as $mhs)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->program_studi }}</td>
                <td>
                <a href="/mhs/1" class="badge badge-info">detail</a>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Delete</a>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
       <a href="/mahasiswa/create" class="btn btn-primary my-3">+Tambah Data Mahasiswa</a>
         </div>
       </div>
    </div>
@endsection
   