<?php

use App\Http\Controllers\latihancontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $gank=array("Ryder","Sweet","Carl","Big Smoke");
    return view('home',[
       "nama"=>"CJ§✕",
       "kelas"=>"Ⅺ RPL 1",
       "alamat"=>"Konoha",
       "gank"=>$gank
    ]);
});

Route::get('/try',[
    latihancontroller::class,'index'
]);

Route::get('/biodata',[
    latihancontroller::class,'data_siswa'
]);

Route::get('/sbadmin', function () {
    return view('index');
});
