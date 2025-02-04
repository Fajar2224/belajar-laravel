<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\biodata;
use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    //

    public function index()
    {
        $tanggal=Carbon::now();
        return view("latihan",
        [
            "judul"=>"Belajar Laravel 11",
            "tanggal"=>$tanggal->isoFormat('dddd, D MMMM Y')
        ]);
    }

    public function data_siswa()
    {
        $biodata = new biodata();
        return view("biodata",[
            'biodata' => $biodata->data_siswa()
        ]);
    }
}
