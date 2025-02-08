<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lokalcontroller;
use App\Http\Controllers\latihancontroller;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');

Route::get('/home', function () {
    $gank=array("Ryder","Sweet","Carl","Big Smoke");
    return view('home',[
       "nama"=>"CJ§✕",
       "kelas"=>"Ⅺ RPL 1",
       "alamat"=>"Konoha",
       "gank"=>$gank,
       'menu'=>'home'
    ]);
})->name('home');

Route::get('/try',[
    Latihancontroller::class,'index'
])->name('try');

Route::get('/biodata',[
    Latihancontroller::class,'data_siswa'
])->name('biodata');

Route::get('/sbadmin', function () {
    return view('index',[
        "menu"=>'dashboard'
    ]);
})->name('dashboard');

Route ::get('lokal',[
    Lokalcontroller::class,'index'
])->name('lokal.index');

Route ::get('lokal/create',[
    Lokalcontroller::class,'create'
])->name('lokal.create');

Route ::post('lokal',[lokalcontroller::class,'store'
])->name('lokal.store');

Route ::get('lokal/edit/{id}',[
    Lokalcontroller::class,'edit'
])->name('lokal.edit');

Route ::put('lokal/update',[
    Lokalcontroller::class,'update'
])->name('lokal.update');

Route ::delete('lokal/delete/{id}',[
    Lokalcontroller::class,'destroy'
])->name('lokal.hapus');

Route::resource('siswa',SiswaController::class);
