<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;

class tintucController extends Controller
{
    public function getDanhSach(){
		$tintuc = tintuc::all()->reverse();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}

	public function getThem(){
		return view('admin.tintuc.them');
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

		if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/tintuc/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  time() . rand() . "_" . $img->getClientOriginalName(); 
			$img->move("upload/tintuc",$urlanh);
			$tintuc->urlanh = $urlanh;
     	}else{
     		$tintuc->urlanh = 'default.jpg';
     	}

     	$tintuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm tin tức thành công.');
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


     	if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect("admin/tintuc/sua/$idtintuc")->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  cutString(time() . rand() . "_" . $img->getClientOriginalName(),190); 
			$img->move("upload/tintuc",$urlanh);
			$modTinTuc->urlanh = $urlanh;
			if($oldTinTuc->urlanh != 'default.jpg' && file_exists('upload/tintuc/'.$oldTinTuc->urlanh)) unlink('upload/tintuc/'.$oldTinTuc->urlanh);
     	}else{
     		$modTinTuc->urlanh = $oldTinTuc->urlanh;
     	}

		$modTinTuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Sửa thành công ');
	}

	public function getXoa($id){
        $tintuc = tintuc::find($id);
        $ten = cutString($tintuc->firstOrFail()->tieude, 40);
        unlink('upload/tintuc/'.$tintuc->urlanh);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
	}
}
