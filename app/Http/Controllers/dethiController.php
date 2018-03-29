<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vien;
use App\mon;
use App\dethi;

class dethiController extends Controller
{
    public function getDanhSach(){
    	$dethi = dethi::all()->reverse();
    	foreach ($dethi as $dt) {
    		$dt->mon = mon::where('idmon', $dt->idmon)->firstOrFail()->ten;
    	}
    	return view('admin.dethi.danhsach', ['dethi'=>$dethi]);
    }

    public function getThem(){
		$vien = vien::all();
		return view('admin.dethi.them',['vien'=>$vien]);
	}

	public function postThem(Request $request){
		$this->validate(
            $request, 
            [
               'idVien' => 'required',
               'idMon' => 'required',
               'nam' => 'required',
               'gioithieu' => 'required|min:10',
               'ghichu' => 'required'
            ],
            [
               'idVien.required' => 'Bạn chưa chọn viện',
               'idMon.required' => 'Bạn chưa chọn môn',
               'nam.required' => 'Bạn chưa chọn năm',
               'gioithieu.required' => 'Bạn chưa nhập giới thiệu',
               'ghichu.required' => 'Bạn chưa nhập ghi chú'
            ]
     	);
     	$dethi = new dethi();
     	$dethi->idmon = $request->idMon;
     	$dethi->nam = $request->nam;
     	$dethi->gioithieu = $request->gioithieu;
     	$dethi->ghichu = $request->ghichu;
     	//Kiểm tra file
     	if($request->hasFile('de')){
     		$file = $request->file('de');
     		//Lấy Đuôi File
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect('admin/dethi/them')->with('loi','Không hỗ trợ định dạng file này!');
			}
			$url = time() . rand() . "_" . $file->getClientOriginalName(); 
			$file->move("upload/dethi",$url);
			$dethi->url = $url;
     	}
     	if($request->hasFile('loigiai')){
     		$file = $request->file('loigiai');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect('admin/dethi/them')->with('loi','Không hỗ trợ định dạng file này!');
			}
			$url = time() . rand() . "_" . $file->getClientOriginalName(); 
			$file->move("upload/dethi",$url);
			$dethi->urlloigiai = $url;
     	}else{
     		$dethi->urlloigiai = "<script>alert('Lời giải trong phần giới thiệu')</script>";
     	}
     	if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/slide/them')->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  time() . rand() . "_" . $img->getClientOriginalName(); 
			$img->move("upload/images",$urlanh);
			$dethi->urlanh = $urlanh;
     	}else{
     		$dethi->urlanh = 'default.jpg';
     	}
     	$dethi->save();
		return redirect('admin/dethi/them')->with('thongbao','Thêm đề thi thành công');
	}

	public function getSua($iddethi){
		$vien = vien::all();
		$dethi = dethi::find($iddethi);
		$dethi->mon = mon::find($dethi->idmon);
		$dethi->vien = vien::find($dethi->mon->idvien);
		return view('admin.dethi.sua',['vien'=>$vien, 'dethi'=>$dethi]);
	}
	public function postSua(Request $request, $iddethi){
		$modDethi = dethi::find($iddethi);
		$oldDethi = clone $modDethi;
     	if($request->idMon != null) $modDethi->idmon = $request->idMon;
     	else $modDethi->idmon = $oldDethi->idmon;
     	if($request->nam != null) $modDethi->nam = $request->nam;
     	else $modDethi->nam = $oldDethi->nam;
     	if($request->gioithieu != null) $modDethi->gioithieu = $request->gioithieu;
     	else $modDethi->gioithieu = $oldDethi->gioithieu;
     	$modDethi->ghichu = $request->ghichu;

     	if($request->hasFile('de')){
     		$file = $request->file('de');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect("admin/dethi/sua/$iddethi")->with('loi','Không hỗ trợ định dạng file này!');
			}
			$url = cutString(time() . rand() . "_" . $file->getClientOriginalName(),190); 
			$file->move("upload/dethi",$url);
			$modDethi->url = $url;
			if(file_exists('upload/dethi/'.$oldDethi->url))unlink('upload/slide/'.$oldDethi->url);
     	}else{
     		$modDethi->url = $oldDethi->url;
     	}
     	if($request->hasFile('loigiai')){
     		$file = $request->file('loigiai');
			$ext = $file->getClientOriginalExtension();
			if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
				return redirect("admin/dethi/sua/$iddethi")->with('loi','Không hỗ trợ định dạng file này!');
			}
			$url = cutString(time() . rand() . "_" . $file->getClientOriginalName(),190); 
			$file->move("upload/dethi",$url);
			$modDethi->urlloigiai = $url;
			if(file_exists('upload/dethi/'.$oldDethi->urlloigiai))unlink('upload/dethi/'.$oldDethi->urlloigiai);
     	}else{
     		$modDethi->urlloigiai = $oldDethi->urlloigiai;
     	}
     	if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect("admin/dethi/sua/$iddethi")->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh =  cutString(time() . rand() . "_" . $img->getClientOriginalName(),190); 
			$img->move("upload/images",$urlanh);
			$modDethi->urlanh = $urlanh;
			if($oldDethi->urlanh != 'default.jpg' && file_exists('upload/images/'.$oldDethi->urlanh)) unlink('upload/images/'.$oldDethi->urlanh);
     	}else{
     		$modDethi->urlanh = $oldDethi->urlanh;
     	}
     	$modDethi->save();
		return redirect('admin/dethi/danhsach')->with('thongbao','Sửa đề thi thành công');
	}

    public function getXoa($iddethi){
        $dethi = dethi::find($iddethi);
        $ten = cutString($dethi->firstOrFail()->gioithieu, 40);
        $dethi->delete();
        return redirect('admin/dethi/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
    }

}
