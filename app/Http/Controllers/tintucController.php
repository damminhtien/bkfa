<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
use GuzzleHttp\Client;

class tintucController extends Controller
{
    public function getDanhSach(){
		$tintuc = tintuc::all()->reverse();
		return view('admin.tintuc.danhsach', ['tintuc'=>$tintuc]);
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
		$tintuc = new tintuc();
		$tintuc->tieude = $request->tieude;
		$tintuc->tenkhongdau = changeTitle($request->tieude);
		$tintuc->gioithieu = $request->gioithieu;
		$tintuc->noidung = $request->noidung;
		if($request->hasFile('anh')){
     		$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/tintuc/them')->with('loi', 'Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
			while(file_exists('upload/images/tintuc/' . $urlanh)) {
				$urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
			}
			$img->move('upload/images/tintuc/', $urlanh);
			$tintuc->urlanh = $urlanh;
		}
		else {
			$tintuc->urlanh = 'default.jpg';
		}
		$ten = cutString($tintuc->tieude, 40);
		$tintuc->save();
		$client = new Client();
		$res = $client->request('POST', 'https://graph.facebook.com/308000529728334/feed?message=' . urlencode($tintuc->tieude) . '%0D%0A ------------------------------------------------- %0D%0A' . urlencode($tintuc->gioithieu) . '&link=www.bkfa.net&access_token=EAACZASrRvvGEBANFTO8FRJp3xReq0hPtcZAhRwyZAZAs2OBQ66Yior6BowUqHJYmPQd9sPYUVWrw9nNudo09DiNzmXZB4hkWIzduYOSY5EfhixRPXP0auEMYIXc6FoQQxZB4uYPCxHpEB5CoAbxNau54sUIrN77raZBVlykF5JiZCo8JmleKE7s5'
		);
		return redirect('admin/tintuc/danhsach')->with('thongbao','Thêm thành công ' . $ten);
	}

	public function getSua($idtintuc){
		$tintuc = tintuc::find($idtintuc);
		return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
	}

	public function postSua(Request $request, $idtintuc){
		$tintuc = tintuc::find($idtintuc);
     	if($request->idtintuc != null) $tintuc->idtintuc = $request->idtintuc;
     	if($request->tieude != null) $tintuc->tieude = $request->tieude;
     	if($request->gioithieu != null) $tintuc->gioithieu = $request->gioithieu;
     	if($request->noidung != null) $tintuc->noidung = $request->noidung;
		if($request->hasFile('anh')) {
			$img = $request->file('anh');
			$ext = $img->getClientOriginalExtension();
			if(!checkExtensionImage($ext)) {
				return redirect('admin/tintuc/sua/' . $idtintuc)->with('loi','Không hỗ trợ định dạng ảnh này!');
			}
			$urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
			while(file_exists('upload/images/tintuc/' . $urlanh)) {
				$urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
			}
			$img->move('upload/images/tintuc/', $urlanh);
			$tintuc->urlanh = $urlanh;
		}
		$ten = cutString($tintuc->tieude, 40);
		$tintuc->save();
		return redirect('admin/tintuc/danhsach')->with('thongbao','Sửa thành công ' . $ten);
	}

	public function getXoa($idtintuc){
        $tintuc = tintuc::find($idtintuc)->firstOrFail();
        $ten = cutString($tintuc->tieude, 40);
        $urlanh = $tintuc->urlanh;
        if($urlanh != 'default.jpg' && file_exists('upload/images/tintuc/' . $urlanh)) unlink('upload/images/tintuc/' . $urlanh);
        $tintuc->delete();
        return redirect('admin/tintuc/danhsach')->with('thongbao','Bạn đã xóa thành công ' . $ten); 
	}
}