<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MienTour extends Model
{
    protected $table = "mien_tour";

   public function tour(){
    	return $this -> hasMany('App\Tour','id_mien','id');
    	//trong hasMany ('thu muc','khoa ngoai cua bang Tour','khoa chinh cua bang MienTour')
    }
}
