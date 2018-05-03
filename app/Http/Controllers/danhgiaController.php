<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhgiadethi;

class danhgiaController extends Controller
{
	public function danhGiaDeThi($iduser,$iddethi,$star){
		$kq2=0;
		$danhgia = danhgiadethi::where('iddethi',$iddethi)->get();
		foreach ($danhgia as $dg) {
			if($dg->id == $iduser){
				$dg->star =  $star;
				$dg->save();
				$kq2 += 1;
			}
		}
		if($kq2 == 0){

			$danhgia1 = new danhgiadethi;
			$danhgia1->id = $iduser;
			$danhgia1->iddethi = $iddethi;
			$danhgia1->star = $star;
			$danhgia1->save();
		}
		$saoTB=0;
		$sao = danhgiadethi::where('iddethi',$iddethi)->get();
		foreach($sao as $s){
			$saoTB += $s->star;
		}
		echo $saoTB/count($sao);
	}

	public function danhGiaTB($iddethi){
		$saoTB=0;
		$sao = danhgiadethi::where('iddethi',$iddethi)->get();
		$saocuatoi = danhgiadethi::where('iddethi',$iddethi)->get();
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


	public function saocuatoi($iddethi,$iduser){
		$kq = 0;
		$saocuatoi = danhgiadethi::where('iddethi',$iddethi)->get();
		foreach ($saocuatoi as $s) {
			if($s->id == $iduser){
				$kq = $s->star;
			}
		}
		echo $kq;
	}
}
