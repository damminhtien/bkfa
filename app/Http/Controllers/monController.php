<?php

namespace App\Http\Controllers;
use App\vien;
use App\mon;
use Illuminate\Http\Request;

class monController extends Controller
{
	public function getDanhSach(){
		$mon= mon::all()->reverse();
		foreach ($mon as $m) {
			$m->vien = vien::where('idvien',$m->idvien)->firstOrFail()->ten;
		}
		return view('admin.mon.danhsach',['mon'=>$mon]);
	}

	public function getThem(){
		$vien = vien::all();
		return view('admin.mon.them',['vien'=>$vien]);
	}
	public function postThem(Request $request){

		$this->validate(
			$request, 
			[
				'tenmon' => 'required|min:3|max:100|unique:mons,ten',
				'gioithieu' => 'required|min:10',
				'mahocphan' =>'required',
			],
			[
				'tenmon.required' => 'Bạn chưa nhập tên môn',
				'tenmon.min' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
				'tenmon.max' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
				'tenmon.unique' => 'Tên môn đã tồn tại',
				'gioithieu.required' => 'Bạn chưa nhập giới thiệu',
				'gioithieu.min' => 'giới thiệu phải có độ dài từ 10 ký tự',
				'mahocphan.required' =>'Bạn chưa nhập mã học phần',
			]
		);
		$mon = new mon;
		$mon->ten = $request->tenmon;
		$mon->tenkhongdau = changeTitle($request->tenmon);
		$mon->mahocphan = $request->mahocphan;
		$mon->gioithieu = $request->gioithieu;
		$mon->ghichu = $request->ghichu;
		if($request->idVien == '0' ){
			return redirect('admin/mon/them')->with('loi','chưa chọn viện');
		}
		$mon->idvien = $request->idVien;
		$mon->save();
		return redirect('admin/mon/danhsach')->with('thongbao','Thêm thành công '.$request->mon);
	}


	public function getSua($idmon){      
		$vien = vien::all();
		$mon = mon::find($idmon);
		return view('admin.mon.sua',['vien'=>$vien],['mon'=>$mon]);
	}
	public function postSua(Request $request,$idmon){
		$this->validate(
			$request, 
			[
				'tenmon' => 'required|min:3|max:100|unique:mons,ten',
				'gioithieu' => 'required|min:10',
				'mahocphan' =>'required',
			],
			[
				'tenmon.required' => 'Bạn chưa nhập tên môn',
				'tenmon.min' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
				'tenmon.max' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
				'tenmon.unique' => 'Tên môn đã tồn tại',
				'gioithieu.required' => 'Bạn chưa nhập giới thiệu',
				'gioithieu.min' => 'giới thiệu phải có độ dài từ 10 ký tự',
				'mahocphan.required' =>'Bạn chưa nhập mã học phần',
			]
		);
		$mon = mon::find($idmon);
		if($request->tenmon != null){
			$mon->ten = $request->tenmon;
			$mon->tenkhongdau = changeTitle($request->tenmon);
		}
		if($request->mahocphan != null){
			$mon->mahocphan = $request->mahocphan;
		}
		if($request->gioithieu != null){
			$mon->gioithieu = $request->gioithieu;
		}
		if($request->ghichu != null){
			$mon->ghichu = $request->ghichu;
		}
		if($request->idVien != 0){
			$mon->idvien = $request->idVien;
		}
		$mon->save();
		return redirect('admin/mon/danhsach')->with('thongbao','Sửa thành công môn: '.$request->tenmon);
	}


	public function getXoa($idmon){
		$mon= mon::find($idmon);
		$mon->delete();
		return redirect('admin/mon/danhsach')->with('thongbao','Bạn đã xóa thành công: '.$mon->ten);
	}
}
