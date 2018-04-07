<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\users;

class userController extends Controller
{
    //
    public function getDanhSach() {
		$user = users::all()->reverse();
		return view('admin.user.danhsach',['user'=>$user]);
	}
	
	public function getThem() {
		return view('admin.user.them');
	}

	public function postThem(Request $request) {
		$this->validate($request,
			[
				'ten' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
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

		$user = new users;
		$user->ten = $request->ten;
		$user->email = $request->email;
		$user->matkhau = bcrypt($request->matkhau);
		$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công');
	}

	public function getSua($id) {
		$user = users::find($id);
		return view('admin/user/sua',['user'=>$user]);
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

		$user = users::find($id);
		$user->ten = $request->ten;
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
			$user->matkhau = bcrypt($request->matkhau);

		}
		$ten = $user->ten;
		$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Bạn đã sửa thành công '.$ten);
	}

	public function getXoa($id){
		$user = users::find($id);
		$ten = $user->ten;
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công '.$ten); 
	}
}
