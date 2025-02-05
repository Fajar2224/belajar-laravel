@extends('templates.layout')
@section('halaman_judul','halaman index')
@section('css')
    <link href="{{('dist/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{('dist/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
</head>
@section('kontent')
<body>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>no</th>
                                        <th>name</th>
                                        <th>kelas</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <tr>
                                   @foreach($biodata as $bio)
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$bio['nama']}}</td>
                                   <td>{{$bio['kelas']}}</td>
                                   </tr>
                                   @endforeach
                                   </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    @endsection
                    @section('script')
                    <script src="{{('dist/vendor/datatables/jquery.dataTables.min.js')}}"></script>
                     <script src="{{('dist/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
                     <script src="{{('dist/js/demo/datatables-demo.js')}}"></script>
                     @endsection
