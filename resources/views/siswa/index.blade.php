@extends('templates.layout')
@section('halaman_judul','Data Siswa')
@section('css')
    <link href="{{('dist/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
</head>
@section('kontent')
<div class="row mt-5">
    <div class="col">
  <div class="card">
    <div class="card-header">
Manajemen Data Kelas
<a href="{{ route('siswa.create') }}" class="btn btn-success float-right" ><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Kelas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center  ">
                                        <th>no</th>
                                        <th>Nama </th>
                                        <th>NISN</th>
                                        <th>Kelas</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <tr>
                                   @foreach($data_siswa as $ds)
                                   <td class="text-center">{{$loop->iteration}}</td>
                                   <td class="text-center">{{$ds->nama}}</td>
                                   <td class="text-center">{{$ds->nisn}}</td>
                                   <td class="text-center">{{$ds->lokal->nama_kelas}}</td>
                                   <td class="text-center">
                                    <a href="{{route('siswa.show',$ds->id)}}" class="btn btn-info btn-circle"title="tampilkan data siswa">
                                        <i class="fas fa-eye"></i>
                                   </td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     </div>
                     </div>  
                      </div>
                    @endsection
                    @section('script')
                    <script src="{{asset('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
                     <script src="{{asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
                     <script src="{{asset('dist/js/demo/datatables-demo.js')}}"></script>
                     @endsection
