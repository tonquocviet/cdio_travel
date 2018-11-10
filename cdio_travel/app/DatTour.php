<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatTour extends Model
{
    protected $table = "dattour";

   public function khachhang(){
    	return $this -> belongsTo('App\KhachHang','id_kh','id');
    }

    public function chitiet_dattour(){
    	return $this -> hasMany('App\ChiTietDatTour','id_dattour','id');
    }
}
