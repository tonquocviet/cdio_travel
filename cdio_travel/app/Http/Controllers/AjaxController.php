<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachSan;
use App\Tour;

class AjaxController extends Controller
{
    public function getIdMien($id_mien){
    	$ks = KhachSan::where('id_mien',$id_mien)->get();
    	foreach($ks as $ks)
    	{
    		echo "<option value='".$ks-> id."'>".$ks-> ten_ks."</option>";
    	}
    }
    public function getIdKs($id_ks){
    	$ks = Tour::where('id_ks',$id_ks)->get();
    	foreach($ks as $ks)
    	{
    		echo "<option value='".$ks-> id."'>".$ks-> ten_ks."</option>";
    	}
    }
}
