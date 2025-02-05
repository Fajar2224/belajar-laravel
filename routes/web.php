<?php

use App\Http\Controllers\latihancontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');

Route::get('/home', function () {
    $gank=array("Ryder","Sweet","Carl","Big Smoke");
    return view('home',[
       "nama"=>"CJ§✕",
       "kelas"=>"Ⅺ RPL 1",
       "alamat"=>"Konoha",
       "gank"=>$gank
    ]);
})->name('home');

Route::get('/try',[
    latihancontroller::class,'index'
])->name('try');

Route::get('/biodata',[
    latihancontroller::class,'data_siswa'
])->name('biodata');

Route::get('/sbadmin', function () {
    return view('index',[
        "menu"=>'dashboard'
    ]);
})->name('dashboard');
