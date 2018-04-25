<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhGiaSlide;

class danhgiaController extends Controller
{
	public function danhGiaSlide($iduser,$idslide,$star){
		$kq2=0;
		$danhgia = danhGiaSlide::where('idslide',$idslide)->get();
		foreach ($danhgia as $dg) {
			if($dg->iduser == $iduser){
				$dg->star =  $star;
				$dg->save();
				$kq2 += 1;
			}
		}
		if($kq2 == 0){

			$danhgia1 = new danhGiaSlide;
			$danhgia1->iduser = $iduser;
			$danhgia1->idslide = $idslide;
			$danhgia1->star = $star;
			$danhgia1->save();
		}
		$saoTB=0;
		$sao = danhGiaSlide::where('idslide',$idslide)->get();
		foreach($sao as $s){
			$saoTB += $s->star;
		}
		echo $saoTB/count($sao);
	}

	public function danhGiaTB($idslide){
		$saoTB=0;
		$sao = danhGiaSlide::where('idslide',$idslide)->get();
		$saocuatoi = danhGiaSlide::where('idslide',$idslide)->get();
		foreach($sao as $s){
			$saoTB += $s->star;
		}
		if($saoTB == 0){
			return 0;
		}
		else{
			return $saoTB/count($sao);
		}
	}


	public function saocuatoi($idslide,$iduser){
		$kq = 0;
		$saocuatoi = danhGiaSlide::where('idslide',$idslide)->get();
		foreach ($saocuatoi as $s) {
			if($s->iduser == $iduser){
				$kq = $s->star;
			}
		}
		echo $kq;
	}
}
