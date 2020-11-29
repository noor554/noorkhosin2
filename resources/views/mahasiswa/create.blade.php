
@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
 <div class="countainer">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Tambah Data Mahasiswa!</h1>

        <form method="post" action="/mahasiswa">
        @csrf
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nim"
    placeholder="Masukkan Nama" name="nama">
  </div>

  <div class="form-group">
    <label for="nim">nim</label>
    <input type="text" class="form-control" id="nama"
    placeholder="Masukkan nim" name="nim">
    </div>

    <div class="form-group">
    <label for="program_studi">program_studi</label>
    <input type="text" class="form-control" id="namaprogram_studi"
    placeholder="Masukkan Program_Studi" name="program studi">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data!</button>
</form>
</div>
         </div>
       </div>
       
    </div>
@endsection
   