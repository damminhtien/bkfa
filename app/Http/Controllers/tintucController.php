<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;

class tintucController extends Controller
{
    public function getDanhSach(){
		$tintuc = tintuc::all();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}

	public function getThem(){
		$tintuc = tintuc::all();
		return view('admin.tintuc.them',['tintuc'=>$tintuc]);
	}
	public function postThem(Request $request){
		$this->validate($request,
			[
				'tieude'=>'required|min:3|unique:tintucs,tieude',
				'gioithieu'=>'required',
				'noidung'=>'required'
			],
			[
				'tieude.required'=>'Bạn chưa chọn tiêu đề',
				'tieude.min'=>'Tiêu đề phải có ít nhất 3 ký tự',
				'tieude.unique'=>'Tiêu đề đã tồn tại',
				'gioithieu.required'=>'Bạn chưa nhập giới thiệu',
				'noidung.required'=>'Bạn chưa nhập nội dung'
			]
		);

		$tintuc = new tintuc;
		$tintuc->tieude = $request->tieude;
		// $tintuc->tieudekhongdau = changeTitle($request->tieude);
		$tintuc->gioithieu = $request->gioithieu;
		$tintuc->noidung = $request->noidung;

		if($request->hasFile('anh')) {
			$file = $request->file('anh');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$name = $file->getClientOriginalName();
			$anh = str_random(4)."_".$name;
			while(file_exists("upload/tintuc/".$anh)) {
				$anh = str_random(4)."_".$name;
			}
			$file->move("upload/tintuc",$anh);
			$tintuc->urlanh = $anh;
		}
		else {
			$tintuc->urlanh = "";
		}
		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm thành công');
	}

	public function getSua($id){
		$tintuc = tintuc::find($id);
		return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
	}

	public function postSua(Request $request,$id){
		$tintuc = tintuc::find($id);
		$this->validate($request,
			[
				'tieude'=>'required|min:3|unique:tintucs,tieude',
				'gioithieu'=>'required',
				'noidung'=>'required'
			],
			[
				'tieude.required'=>'Bạn chưa chọn tiêu đề',
				'tieude.min'=>'Tiêu đề phải có ít nhất 3 ký tự',
				'tieude.unique'=>'Tiêu đề đã tồn tại',
				'gioithieu.required'=>'Bạn chưa nhập giới thiệu',
				'noidung.required'=>'Bạn chưa nhập nội dung'
			]
		);

		$tintuc->tieude = $request->tieude;
		// $tintuc->tieudekhongdau = changeTitle($request->tieude);
		$tintuc->gioithieu = $request->gioithieu;
		$tintuc->noidung = $request->noidung;

		if($request->hasFile('anh')) {
			$file = $request->file('anh');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$name = $file->getClientOriginalName();
			$anh = str_random(4)."_".$name;
			while(file_exists("upload/tintuc/".$anh)) {
				$anh = str_random(4)."_".$name;
			}
			$file->move("upload/tintuc",$anh);
			$tintuc->urlanh = $anh;
		}
		else {
			$tintuc->urlanh = "";
		}
		$tintuc->save();
		return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa thành công');
	}

	public function getXoa($id){
        $tintuc = tintuc::find($id);
        $ten = cutString($tintuc->firstOrFail()->gioithieu, 40);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
	}
}
