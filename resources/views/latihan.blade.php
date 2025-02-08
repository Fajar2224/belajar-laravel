@extends('templates.layout')
@section('halaman_judul','halaman index')
@section('css')
 <style>
        h1 {
            color:blue;
        }
        h2{
            color:maroon;
        }
        h3{
            color:purple;
        }
 </style>
@section('kontent')
    <h1>Ini halaman Latihan</h1>
    <h2>{{$judul}} </h2>
     <h3>Hari {{$tanggal}}
    </h3>
    @endsection
@endsection
@section('script')
<script>
    alert('Ini halaman latihan');
    </script>
@endsection
