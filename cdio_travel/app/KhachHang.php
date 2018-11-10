<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khachhang";

   public function dattour(){
    	return $this -> hasMany('App\DatTour','id_kh','id');
    }
}
