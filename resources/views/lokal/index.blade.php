@extends('templates.layout')
@section('halaman_judul','Data Kelas')
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
<a href="{{ route('lokal.create') }}" class="btn btn-success float-right" ><i class="fas fa-plus"></i> Tambah Data</a>
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
                                        <th>Nama Kelas</th>
                                        <th>Wali Kelas</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <tr>
                                   @foreach($data_kelas as $dk)
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$dk->nama_kelas}}</td>
                                   <td>{{$dk->wali_kelas}}</td>
                                   <td class="text-center"><a href="{{route('lokal.edit',$dk->id)}}" class="btn btn-warning btn-circle"title="edit data kelas">
                                   <i class="fas fa-wrench"></i>
                                    </a>
                                    <form action="{{route('lokal.hapus',$dk['id'])}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-circle" title="hapus data kelas">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
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
