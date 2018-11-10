<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachSan extends Model
{
    protected $table = "khachsan";

    public function mien_khachsan(){
    	return $this-> belongsTo('App\MienKhachSan','id_mien','id');
    }

   public function tour(){
    	return $this -> hasMany('App\Tour','id_ks','id');
    }

    
}
