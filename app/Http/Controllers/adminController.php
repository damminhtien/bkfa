<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\admin;
use App\User;

class adminController extends Controller
{
    public function getDanhSach() {
		$admin = admin::all()->reverse();
		return view('admin.quanly.danhsach',['admin'=>$admin]);
	}
	
	public function getThem() {
		return view('admin.quanly.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'ten' => 'required|min:3',
				'email' => 'required|email|unique:admins,email',
				'matkhau' => 'required|min:3|max:32',
				'matkhau2' => 'required|same:matkhau'
			],
			[
				'ten.required' => 'Bạn chưa nhập tên người dùng', 
				'ten.min' => 'Tên người dùng phải có ít nhất 3 ký tự', 
				'email.required' => 'Bạn chưa nhập email', 
				'email.email' => 'Bạn chưa nhập đúng định dạng email', 
				'email.unique' => 'Email đã tồn tại', 
				'matkhau.required' => 'Bạn chưa nhập mật khẩu', 
				'matkhau.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'matkhau.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự',
				'matkhau2.required' => 'Bạn chưa nhập lại mật khẩu',
				'matkhau2.same' => 'Mật khẩu nhập lại chưa đúng'
			]
		);

		$admin = new admin;
		$admin->ten = $request->ten;
		$admin->email = $request->email;
		$admin->matkhau = bcrypt($request->matkhau);
		$admin->save();
		return redirect('admin/quanly/danhsach')->with('thongbao','Thêm thành công');
	}

	public function getSua($id) {
		$admin = admin::find($id);
		return view('admin/quanly/sua',['admin'=>$admin]);
	}

	public function postSua(Request $request,$id) {
		$this->validate($request,
			[
				'ten' => 'min:3'
				
			],
			[
				'ten.min' => 'Tên người dùng phải có ít nhất 3 ký tự'
			]
		);

		$admin = admin::find($id);
		$admin->ten = $request->ten;
		if($request->changePassword == "on") {
			$this->validate($request,
			[
				'matkhau' => 'required|min:3|max:32',
				'matkhau2' => 'required|same:matkhau'
			],
			[
				'matkhau.required' => 'Bạn chưa nhập mật khẩu', 
				'matkhau.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'matkhau.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự',
				'matkhau2.required' => 'Bạn chưa nhập lại mật khẩu',
				'matkhau2.same' => 'Mật khẩu nhập lại chưa đúng'
			]
			);
			$admin->matkhau = bcrypt($request->matkhau);

		}
		$ten = $admin->ten;
		$admin->save();
		return redirect('admin/quanly/danhsach')->with('thongbao','Bạn đã sửa thành công '.$ten);
	}

	public function getXoa($id){
		$admin = admin::find($id);
		$ten = $admin->ten;
		$admin->delete();
		return redirect('admin/quanly/danhsach')->with('thongbao','Xóa thành công '.$ten); 
	}

	public function getDangNhapAdmin() {
		return view('admin.dangnhap');
	}

	public function postDangNhapAdmin(Request $request) {
		$this->validate($request,
			[
				'email'=>'required',
				'matkhau'=>'required|min:3|max:64'
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'matkhau.required' => 'Bạn chưa nhập mật khẩu',
				'matkhau.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'matkhau.max' => 'Mật khẩu có nhiều nhất nhất 64 ký tự'  
			]
		);
		if(Auth::guard('admin')->attempt(['email'=>$request->email,'matkhau'=>$request->matkhau])) {
			return redirect('admin/');
		}
		else {
			return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công'  .$request->matkhau .$request->email );
		}
	}

	public function getDangXuatAdmin() {
		Auth::logout();
		return redirect('admin/dangnhap');
	}
}
