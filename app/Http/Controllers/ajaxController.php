<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vien;
use App\mon;

class ajaxController extends Controller
{
    public function getMonByVien($idvien){
    	$mon = mon::where('idvien',$idvien)->get();
    	foreach ($mon as $m) {
    		echo "<option value='".$m->idmon."'>".$m->ten."</option>";
    	}
    }
}
