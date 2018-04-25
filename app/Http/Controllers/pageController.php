<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\vien;
use App\dethi;
use App\mon;
use App\User;

class pageController extends Controller
{
    //
    function trangChu(){
    	$vien = vien::all();
    	$dethi = dethi::all();
    	return view('pages.trangchu', ['vien'=>$vien, 'dethi'=>$dethi]);
    }

    function dsTinTuc(){
    	$vien = vien::all();
    	return view('pages.dstintuc', ['vien'=>$vien]);
    }

    function dsTaiLieu($id){
    	$vien = vien::all();
    	// $dsmon = mon::find($id);
    	$dsmon = mon::where('idvien',$id)->paginate(5);
    	return view('pages.dstailieu', ['vien'=>$vien, 'dsmon'=>$dsmon]);
    }

    function chiTietTaiLieu($id){
        $vien = vien::all();
        $chitiet = dethi::where('idmon',$id);
        return view('pages.chitiettailieu', ['vien'=>$vien, 'chitiet'=>$chitiet]);
    }

    function kienThucLT(){
        $vien = vien::all();
        return view('pages.kienthuc', ['vien'=>$vien]);
    }

    function dsTinTuc2(){
       $vien = vien::all();
        return view('pages.listnews', ['vien'=>$vien]);
    }

    function getDangNhap() {
        return view('pages.dangnhap');
    }

    function postDangNhap(Request $request) {
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
            return redirect('/');
        }
        else {
            return redirect('/dangnhap')->with('thongbao','Tài khoản hoặc mật khẩu không đúng');
        }
    }

    function getDangXuat() {
        Auth::logout();
        return redirect('/');
    }

    function getNguoiDung() {
        $vien = vien::all();
        $user = Auth::user();
        if(Auth::check())
            return view('pages.nguoidung',['vien'=>$vien, 'nguoidung'=>$user]);
        else
            return redirect('dangnhap')->with('thongbao','Bạn chưa Đăng Nhập!');
    }

    function postNguoiDung(Request $request) {
        $this->validate($request,
            [
                'name' => 'required|min:3'
                
            ],
            [
                'name.required' => 'Bạn chưa nhập tên người dùng', 
                'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự'
            ]
        );

        $user = Auth::user();
        $user->name = $request->name;
        
        if($request->changePassword == "on") {
            $this->validate($request,
            [
                'password' => 'required|min:3|max:32',
                'passwordAgain' => 'required|same:password'
            ],
            [
                'password.required' => 'Bạn chưa nhập mật khẩu', 
                'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
                'password.max' => 'Mật khẩu có nhiều nhất nhất 32 ký tự',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
            ]
            );
            $user->password = bcrypt($request->password);

        }

        $user->save();
        return redirect('nguoidung')->with('thongbao','Bạn đã sửa thành công');
    }

    function getDangKy() {
        return view('pages.dangky');
    }

    function postDangKy(Request $request) {
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
        return redirect('dangky')->with('thongbao','Đăng ký thành công');
    }
}
