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
		$tintuc->tenkhongdau = changeTitle($request->tieude);
		$tintuc->gioithieu = $request->gioithieu;
		$tintuc->noidung = $request->noidung;

		if($request->hasFile('anh')) {
			$file = $request->file('anh');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/tintuc/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$name = $file->getClientOriginalName();
			$anh = time() . rand() . "_" . $name;
			while(file_exists("upload/tintuc/".$anh)) {
				$anh = time() . rand() . "_" . $name;
			}
			$file->move("upload/tintuc",$anh);
			$tintuc->urlanh = $anh;
		}
		else {
			$tintuc->urlanh = "default.jpg";
		}
		$ten = cutString($tintuc->firstOrFail()->tieude, 40);
		$tintuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm thành công ' . $ten);
	}

	public function getSua($id){
		$tintuc = tintuc::find($id);
		return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
	}

	public function postSua(Request $request,$id){
		$modTinTuc = tintuc::find($id);
		$oldTinTuc = clone $modTinTuc;
     	if($request->idtintuc != null) $modTinTuc->idtintuc = $request->idtintuc;
     	else $modTinTuc->idtintuc = $oldTinTuc->idtintuc;
     	if($request->tieude != null) $modTinTuc->tieude = $request->tieude;
     	else $modTinTuc->tieude = $oldTinTuc->tieude;
     	if($request->gioithieu != null) $modTinTuc->gioithieu = $request->gioithieu;
     	else $modTinTuc->gioithieu = $oldTinTuc->gioithieu;
     	if($request->noidung != null) $modTinTuc->noidung = $request->noidung;
     	else $modTinTuc->noidung = $oldTinTuc->noidung;

		if($request->hasFile('urlanh')) {
			$file = $request->file('urlanh');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$name = $file->getClientOriginalName();
			$urlanh = time() . rand() . "_" . $name;
			while(file_exists("upload/tintuc/".$urlanh)) {
				$urlanh = time() . rand() . "_" . $name;
			}
			$file->move("upload/tintuc",$urlanh);
			$modTinTuc->urlanh = $urlanh;
			if($oldTinTuc->urlanh != 'default.jpg' && file_exists('upload/tintuc/'.$oldTinTuc->urlanh)) unlink('upload/tintuc/'.$oldTinTuc->urlanh);
		}
		else {
			$modTinTuc->urlanh = $oldTinTuc->urlanh;
		}
		$ten = cutString($tintuc->firstOrFail()->tieude, 40);
		$modTinTuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Sửa thành công ' . $ten);
	}

	public function getXoa($id){
        $tintuc = tintuc::find($id);
        $ten = cutString($tintuc->firstOrFail()->tieude, 40);
        unlink('upload/tintuc/'.$tintuc->urlanh);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
	}
}
