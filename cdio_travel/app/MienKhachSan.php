<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MienKhachSan extends Model
{
   protected $table = "mien_khachsan";

   public function khachsan(){
    	return $this -> hasMany('App\KhachSan','id_mien','id');
    }
}
