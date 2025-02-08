@extends('templates.layout')
@section('halaman_judul','Data Siswa')
@section('kontent')
<div class="row mt-5">
    <div class="col-6">
  <div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{$siswa->nama}}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{$siswa->nisn}}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{$siswa->lokal->nama_kelas}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{$siswa->jk}}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{$siswa->alamat}}</td>
            </tr>
            <tr>
                <th>Nomor Handphone</th>
                <td>{{$siswa->no_telp}}</td>
            </tr>
            <tr>
                <th>Foto</th>
                <td><img src="{{asset('storage/'.$siswa->foto)}}" alt="foto" width="100"></td>
            </tr>
        </table>
    </div>
  </div>
    </div>
</div>
@endsection