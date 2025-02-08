@extends('templates.layout')
@section('halaman_judul','Data Siswa')
@section('kontent')
<div class="row mt-5">
    <div class="col-6">
  <div class="card">
    <div class="card-header">
Manajemen Data Siswa
    </div>
    <div class="card-body">
    <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col mt-2">
                        <label for="nama" class="text-gray-900">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama siswa">
                    </div>
                    <div class="col mt-2">
                        <label for="nisn" class="text-gray-900">Nisn</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" placeholder="masukkan NISN siswa">
                    </div>
                    <div class="col mt-2">
                        <label for="kelas" class="text-gray-900">Kelas</label>
                        <select name="lokal_id" id="lokal_id" class="form-control mt-2">
                            <option disabled selected>Pilih Kelas</option>
                            @foreach($kelas as $k)
                            <option value="{{$k['id']}}">{{$k['nama_kelas']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col mt-2">
                        <label for="jk" class="text-gray-900">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control mt-2">
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                        <div class="col mt-2">
                            <label for="alamat" class="text-gray-900">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="masukkan alamat">
                        </div>
                        <div class="col mt-2">
                            <label for="no_telp" class="text-gray-900">Nomor Handphone</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="masukkan nomor handphone">
                        </div>
                        <div class="col mt-2">
                            <label for="foto" class="text-gray-900">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" accept="image/*" placeholder="masukkan file foto">
                        </div>

                        <button type="submit" class="btn btn-md btn-primary float-right mt-4">Simpan</button>
                </form>

    </div>
  </div>
    </div>
</div>
<div class="col-6">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

@endsection