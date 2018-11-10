<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = "tour";

    public function chitiet_dattour(){
    	return $this-> hasMany('App\ChiTietDatTour','id_tour','id');
    }

    public function mien_tour(){
    	return $this-> belongsTo('App\MienTour','id_mien','id');
    	//trong belongsTo ('thu muc','khoa ngoai cua bang Tour','khoa chinh cua bang Tour')
    }

    public function khachsan(){
    	return $this-> belongsTo('App\KhachSan','id_ks','id');
    }

}
