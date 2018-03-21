<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vien;
use App\mon;
use App\slide;

class slideController extends Controller
{
	public function getDanhSach(){
		$slide = slide::all()->reverse();
		foreach ($slide as $s) {
			$s->mon = mon::where('idmon',$s->idmon)->firstOrFail()->ten;
		}
		return view('admin.slide.danhsach',['slide'=>$slide]);
	}

	public function getThem(){
		$vien = vien::all();
		return view('admin.slide.them',['vien'=>$vien]);
	}
	public function postThem(){
		return view('admin.slide.them');
	}

	public function getSua(){
		$vien = vien::all();
		foreach ($vien as $v) {
			$v->mon = mon::where('idvien',$v->idvien);
		}
		return view('admin.slide.sua',['vien'=>$vien]);
	}
	public function postSua(){
		return view('admin.slide.sua');
	}

	public function getXoa($idslide){
        $slide = slide::find($idslide);
        $ten = cutString($slide->firstOrFail()->gioithieu, 40);
        $slide->delete();
        return redirect('admin/slide/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
	}
}