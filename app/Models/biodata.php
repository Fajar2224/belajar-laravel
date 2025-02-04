<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    public function data_siswa()
    {
        $data=array(
            array("nama"=>"Ryder","kelas"=>"Ⅺ RPL 1"),
            array("nama"=>"Carl","kelas"=>"X RPL 1"),
            array("nama"=>"Boss","kelas"=>"Ⅺ RPL 0"),
        );
        return $data;
    } 
}
