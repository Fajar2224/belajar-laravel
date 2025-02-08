@extends('templates.layout')
@section('halaman_judul','halaman index')
@section('css')

    <style>
            h1 {
                color:blue;
            }
            .card-header{
                color:blue;
                background-color: greenyellow;
            }
            .card-body{
                color:darkcyan;
                background-color: whitesmoke;
            }
            h3{
                color:purple;
            }
            </style>
@endsection

@section('kontent')
    <h1>Ini adalah halaman Home</h1>
    <div class="card-header">
 Selamat datang {{ $nama }},anda berada di kelas {{ $kelas }},anda tinggal di {{ $alamat }}
    </div>
    <div class="card-body">

 Tim  {{ $nama }} adalah 
<ol>@foreach($gank as $gk)
    <li>{{ $gk }}</li>
@endforeach
</div>

@endsection
@section('script')
<script>
    alert('Ini halaman Home');
    </script>
@endsection