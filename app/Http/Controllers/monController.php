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
		$mon = mon::all();
		$vien = vien::all();
		return view('admin.mon.them',['mon'=>$mon],['vien'=>$vien]);
	}
	public function postThem(Request $request){

		 $this->validate(
            $request, 
            [
               'tenMon' => 'required|min:3|max:100|unique:mons,ten'
            ],
            [
               'tenMon.required' => 'Bạn chưa nhập tên môn',
               'tenMon.min' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
               'tenMon.max' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
               'tenMon.unique' => 'Tên môn đã tồn tại',
            ]
         );

         $mon = new mon;
         $mon->ten = $request->tenMon;
         $mon->tenkhongdau = changeTitle($request->tenMon);
         $mon->mahocphan = $request->mahocphan;
         $mon->gioithieu = $request->gioithieu;
         $mon->ghichu = $request->ghichu;
         $mon->idvien = $request->vien;
         $mon->save();

         return redirect('admin/mon/danhsach')->with('thongbao','Thêm thành công '.$request->tenVien);

	}

	public function getSua($idmon){      
		$vien = vien::all();
		$mon = mon::find($idmon);
		return view('admin.mon.sua',['mon'=>$mon],['vien'=>$vien]);
	}
	public function postSua(Request $request,$idmon){
		$mon = mon::find($idmon);
         $this->validate(
            $request, 
            [
               'tenMon' => 'required|min:3|max:100|unique:mons,ten'
            ],
            [
               'tenMon.required' => 'Bạn chưa nhập tên môn',
               'tenMon.min' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
               'tenMon.max' => 'Tên môn phải có độ dài từ 3 đến 100 ký tự',
               'tenMon.unique' => 'Tên môn đã tồn tại',
            ]
         );

      $mon->ten = $request->tenMon;
      $mon->tenkhongdau = changeTitle($request->tenMon);
      $mon->mahocphan = $request->mahocphan;
      $mon->gioithieu = $request->gioithieu;
      $mon->ghichu = $request->ghichu;
      $mon->idvien = $request->vien;
      $mon->save();
      return redirect('admin/mon/danhsach')->with('thongbao','Sửa thành công '.$request->tenMon);
	}


   	public function getXoa($idmon){
   		$mon= mon::find($idmon);
   		$mon->delete();
   		return redirect('admin/mon/danhsach')->with('thongbao','Bạn đã xóa thành công: '.$mon->ten);
   	}
}
