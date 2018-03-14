<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vien;
use App\mon;

class vienController extends Controller
{
   	public function getDanhSach(){
   		$vien= vien::all()->reverse();
   		return view('admin.vien.danhsach',['vien'=>$vien]);
   	}

   	public function getThem(){
   		return view('admin.vien.them');
   	}
      public function postThem(Request $request){
         $this->validate(
            $request, 
            [
               'tenVien' => 'required|min:3|max:100|unique:viens,ten'
            ],
            [
               'tenVien.required' => 'Bạn chưa nhập tên viện',
               'tenVien.min' => 'Tên viện phải có độ dài từ 3 đến 100 ký tự',
               'tenVien.max' => 'Tên viện phải có độ dài từ 3 đến 100 ký tự',
               'tenVien.unique' => 'Tên viện đã tồn tại',
            ]
         );

         $vien = new vien;
         $vien->ten = $request->tenVien;
         $vien->tenkhongdau = changeTitle($request->tenVien);
         $vien->save();

         return redirect('admin/vien/danhsach')->with('thongbao','Thêm thành công '.$request->tenVien);

      }
   	
   	public function getSua(){
   	
   	}
   	
   	public function getXoa(){
   	
   	}
}
