<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class userController extends Controller
{
    //
    public function getDanhSach() {
		$user = User::all()->reverse();
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
				'password' => 'required|min:3|max:32',
				'password2' => 'required|same:password'
			],
			[
				'ten.required' => 'Bạn chưa nhập tên người dùng', 
				'ten.min' => 'Tên người dùng phải có ít nhất 3 ký tự', 
				'email.required' => 'Bạn chưa nhập email', 
				'email.email' => 'Bạn chưa nhập đúng định dạng email', 
				'email.unique' => 'Email đã tồn tại', 
				'password.required' => 'Bạn chưa nhập mật khẩu', 
				'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'password.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự',
				'password2.required' => 'Bạn chưa nhập lại mật khẩu',
				'password2.same' => 'Mật khẩu nhập lại chưa đúng'
			]
		);

		$user = new User;
		$user->ten = $request->ten;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Thêm thành công');
	}

	public function getSua($id) {
		$user = User::find($id);
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

		$user = User::find($id);
		$user->ten = $request->ten;
		if($request->changePassword == "on") {
			$this->validate($request,
			[
				'password' => 'required|min:3|max:32',
				'password2' => 'required|same:password'
			],
			[
				'password.required' => 'Bạn chưa nhập mật khẩu', 
				'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'password.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự',
				'password2.required' => 'Bạn chưa nhập lại mật khẩu',
				'password2.same' => 'Mật khẩu nhập lại chưa đúng'
			]
			);
			$user->password = bcrypt($request->password);

		}
		$ten = $user->ten;
		$user->save();
		return redirect('admin/user/danhsach')->with('thongbao','Bạn đã sửa thành công '.$ten);
	}

	public function getXoa($id){
		$user = User::find($id);
		$ten = $user->ten;
		$user->delete();
		return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công '.$ten); 
	}

	public function getDangNhapAdmin() {
		return view('auth.login');
	}

	public function postDangNhapAdmin(Request $request) {
		$this->validate($request,
			[
				'email'=>'required',
				'password'=>'required|min:3|max:32'
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'password.required' => 'Bạn chưa nhập mật khẩu',
				'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
				'password.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự'  
			]
		);
		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
			return redirect('admin/user/danhsach');
		}
		else {
			return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
		}
	}

	public function getDangXuatAdmin() {
		Auth::logout();
		return redirect('admin/dangnhap');
	}
}