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
		return view('admin.slide.danhsach', ['slide'=>$slide]);
	}

	public function getThem(){
		$vien = vien::all();
		return view('admin.slide.them', ['vien'=>$vien]);
	}
	public function postThem(Request $request){
		$this->validate(
            $request, 
            [
               'idVien' => 'required',
               'idMon' => 'required',
               'gioithieu' => 'required|min:10',
               'ghichu' => 'required'
            ],
            [
               'idVien.required' => 'Bạn chưa chọn viện',
               'idMon.required' => 'Bạn chưa chọn môn',
               'gioithieu.required' => 'Bạn chưa nhập giới thiệu',
               'ghichu.required' => 'Bạn chưa nhập ghi chú'
            ]
     	);
     	$slide = new slide();
     	$slide->idmon = $request->idMon;
     	$slide->gioithieu = $request->gioithieu;
     	$slide->ghichu = $request->ghichu;
     	if($request->hasFile('file')){
     		$file = $request->file('file');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect('admin/slide/them')->with('loi', 'Không hỗ trợ định dạng file này!');
			}
			$url = substr(time() . mt_rand() . "_" . $file->getClientOriginalName(), -190); 
			while(file_exists('upload/' . getUrlFileUpload($ext, 'slide/') . $url)) {
				$url = substr(time() . mt_rand() . "_" . $file->getClientOriginalName(), -190);
			}
			$file->move('upload/' . getUrlFileUpload($ext, 'slide'), $url);
			$slide->url = $url;
     	}
     	if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi', 'Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  substr(time() . mt_rand() . "_" . $img->getClientOriginalName(), -190);
			while(file_exists('upload/images/slide/' . $urlanh)) {
				$urlanh = substr(time() . mt_rand() . "_" . $img->getClientOriginalName(), -190);
			}
			$img->move('upload/images/slide/', $urlanh);
			$slide->urlanh = $urlanh;
     	}else{
     		$slide->urlanh = 'default.jpg';
     	}
     	$slide->save();
		return redirect('admin/slide/them')->with('thongbao', 'Thêm slide thành công');
	}

	public function getSua($idslide){
		$vien = vien::all();
		$slide = slide::find($idslide);
		$slide->mon = mon::find($slide->idmon);
		$slide->vien = vien::find($slide->mon->idvien);
		return view('admin.slide.sua', ['vien'=>$vien, 'slide'=>$slide]);
	}
	public function postSua(Request $request, $idslide){
		$slide = slide::find($idslide);
     	if($request->idMon != null) $slide->idmon = $request->idMon;
     	if($request->gioithieu != null) $slide->gioithieu = $request->gioithieu;
     	$slide->ghichu = $request->ghichu;
     	if($request->hasFile('file')){
     		$file = $request->file('file');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect('admin/slide/them')->with('loi', 'Không hỗ trợ định dạng file này!');
			}
			$url = substr(time() . mt_rand() . "_" . $file->getClientOriginalName(), -190);
			while(file_exists('upload/' . getUrlFileUpload($ext, 'slide/') . $url)) {
				$url = substr(time() . mt_rand() . "_" . $file->getClientOriginalName(), -190);
			}
			$file->move('upload/' . getUrlFileUpload($ext, 'slide'), $url);
			$oldExt = getExtension($slide->url);
			if(file_exists('upload/'. getUrlFileUpload($oldExt, 'slide/') . $slide->url)) unlink('upload/'. getUrlFileUpload($oldExt, 'slide/') . $slide->url);
			$slide->url = $url;
     	}
     	if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi', 'Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190); 
			while(file_exists('upload/images/slide/' . $urlanh)) {
				$urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
			}
			$img->move('upload/images/slide', $urlanh);
			if($slide->urlanh != 'default.jpg' && file_exists('upload/images/slide/' . $slide->urlanh)) unlink('upload/images/slide/' . $slide->urlanh);
			$slide->urlanh = $urlanh;
     	}
     	$slide->save();
		return redirect('admin/slide/danhsach')->with('thongbao', 'Sửa slide thành công');
	}

	public function getXoa($idslide){
        $slide = slide::find($idslide)->firstOrFail();
        $url = $slide->url;
        $urlanh = $slide->urlanh;
        $ext = getExtension($url);
        if(file_exists('upload/' . getUrlFileUpload($ext, 'slide/') . $url)) unlink('upload/' . getUrlFileUpload($ext, 'slide/') . $url);
        if($urlanh != 'default.jpg' && file_exists('upload/images/slide/' . $urlanh)) unlink('upload/images/slide/' . $urlanh);
        $ten = cutString($slide->gioithieu, 40);
        $slide->delete();
        return redirect('admin/slide/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten);
	}
}