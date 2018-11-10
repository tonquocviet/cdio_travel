<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDatTour extends Model
{
	protected $table = "chitiet_dattour";

    public function tour(){
    	return $this-> belongsTo('App\Tour','id_tour','id');
    }

    public function dattour(){
    	return $this-> belongsTo('App\DatTour','id_dattour','id');
    }
}
