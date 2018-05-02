<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

use App\vien;
use App\mon;
use App\dethi;
use App\slide;
use App\tintuc;
use App\User;

class pageController extends Controller
{

    function __construct() {
        $vien = vien::all();
        view() -> share('vien',$vien);
    }

    function trangChu(){
    	$dethixn = DB::select('SELECT * FROM dethis WHERE luotxem > 0 ORDER BY luotxem DESC LIMIT 0,12');
        $xemnhieu = DB::select('SELECT * FROM tintucs WHERE luotxem > 0 ORDER BY luotxem DESC LIMIT 0,4');
        $moinhat = DB::select('SELECT * FROM tintucs WHERE created_at ORDER BY created_at DESC LIMIT 1,4');
        $newmost = DB::select('SELECT * FROM tintucs WHERE created_at = (SELECT Max(created_at) FROM tintucs)');
    	return view('pages.trangchu', ['dethixn'=>$dethixn, 'newmost'=>$newmost, 'xemnhieu'=>$xemnhieu, 'moinhat'=>$moinhat]);
    }

    function tinTuc(){
        $tintuc =  DB::table('tintucs')->paginate(2);
        return view('pages.tintuc', ['tintuc'=>$tintuc]);
    }


    function chiTietTinTuc($id){
        $chitiet = DB::select('SELECT * FROM tintucs WHERE idtintuc = '.$id);
        return view('pages.chitiettintuc', ['chitiet'=>$chitiet[0]]);
    }

    function dsMon($id){
        $dsmon = mon::where('idvien',$id)->paginate(1);
        return view('pages.dsmon', ['dsmon'=>$dsmon]);
    }

    function dsDeThi($id){
        $dethi = dethi::where('idmon',$id)->orderBy('nam', 'desc')->paginate(2);
        return view('pages.dsdethi', ['dethi'=>$dethi]);
    }

    function dsSlide($id){
        $mon = DB::select('SELECT * FROM mons ORDER BY idmon DESC LIMIT 0,4');
        $slide =  DB::select('SELECT * FROM slides WHERE idmon = '.$id);
        return view('pages.dsslide', ['slide'=>$slide, 'mon'=>$mon]);
    }

    function chiTietDeThi($idmon, $id){
        $chitiet = DB::select('SELECT * FROM dethis WHERE iddethi = '.$id);
        $lienquan = DB::select('SELECT * FROM dethis WHERE idmon = '.$idmon.' AND iddethi != '.$id);
        return view('pages.chitietdethi', ['chitiet'=>$chitiet[0], 'lienquan'=>$lienquan]);
    }

    function kienThucLT(){
        return view('pages.kienthuc');
    }

    function about(){
        return view('pages.about');
    }

    function timKiem(){
        $dethi = array();
        return view('pages.kqsearch', ['dethi'=>$dethi]);
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
        $user = Auth::user();
        if(Auth::check())
            return view('pages.nguoidung',['nguoidung'=>$user]);
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
