<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Laravel\Scout\Searchable;
use App\vien;
use App\mon;
use App\dethi;
use App\slide;
use App\tintuc;
use App\User;

class pageController extends Controller
{
    use Searchable;
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
        $tintuc =  DB::table('tintucs')->orderBy('created_at', 'desc')->paginate(5);
        return view('pages.tintuc', ['tintuc'=>$tintuc]);
    }

    function chiTietTinTuc($id){
        $chitiet = DB::select('SELECT * FROM tintucs WHERE idtintuc = '.$id);
        DB::table('tintucs')->where('idtintuc', $id)->update(['luotxem' => ($chitiet[0]->luotxem + 1)]);
        $tingannhat = DB::select("SELECT * FROM tintucs WHERE created_at < '{$chitiet[0]->created_at}' ORDER BY created_at DESC LIMIT 5");
        return view('pages.chitiettintuc', ['chitiet'=>$chitiet[0], 'tingannhat'=>$tingannhat]);
    }

    function dsMon($id){
        $dsmon = mon::where('idvien',$id)->paginate(4);
        return view('pages.dsmon', ['dsmon'=>$dsmon]);
    }

    function dsDeThi($id){
        $dethi = dethi::where('idmon',$id)->orderBy('nam', 'desc')->paginate(2);
        return view('pages.dsdethi', ['dethi'=>$dethi]);
    }

    function dsSlide($id){
        $mon = DB::select('SELECT * FROM mons WHERE idmon != '.$id.' ORDER BY idmon DESC LIMIT 0,4');
        $slide = DB::table('slides')->where('idmon', $id)->orderBy('created_at', 'desc')->paginate(5);
        $mostdownload = DB::table('slides')->where('idmon', $id)->orderBy('luotxem', 'desc')->paginate(5);
        return view('pages.dsslide', ['slide'=>$slide, 'mon'=>$mon, 'mostdownload'=>$mostdownload]);
    }

    function chiTietDeThi($idmon, $id){
        $number = DB::update('UPDATE dethis SET luotxem = luotxem + 1 WHERE iddethi = '.$id);
        $mon = DB::select('SELECT * FROM mons WHERE idmon != '.$idmon.' ORDER BY idmon DESC LIMIT 0,4');
        $chitiet = DB::select('SELECT * FROM dethis WHERE iddethi = '.$id);
        $lienquan = DB::select('SELECT * FROM dethis WHERE idmon = '.$idmon.' AND iddethi != '.$id);
        return view('pages.chitietdethi', ['chitiet'=>$chitiet[0], 'lienquan'=>$lienquan, 'mon'=>$mon]);
    }

    function kienThucLT(){
        return view('pages.kienthuc');
    }

    function about(){
        return view('pages.about');
    }

    function getTimKiem(){
        $vien = vien::all();
        $dethi = dethi::all();
        $slide = slide::all();
        $tintuc = tintuc::all();
        $sokq = 0;
        $req = "";
       return view('pages.kqsearch', ['vien'=>$vien, 'dethi'=>$dethi,'slide'=>$slide,'tintuc'=>$tintuc, 'sokq'=>$sokq, 'req'=>$req]);
    }

    function postTimKiem(Request $request){
        $vien = vien::all();
        $mon = mon::search($request->search)->get();
        $dethi = dethi::search($request->search)->get();
        $slide = slide::search($request->search)->get();
        $tintuc = tintuc::search($request->search)->get();
        $sokq = count($dethi) + count($slide)+count($tintuc)+count($mon);
        $req = $request->search;
        return view('pages.kqsearch', ['vien'=>$vien, 'dethi'=>$dethi,'slide'=>$slide,'tintuc'=>$tintuc, 'sokq'=>$sokq, 'mon'=>$mon, 'req'=>$req]);

    }

    function search_like($query){  
        $sokq=0;
        if($query==''){
            $vien = vien::all();
            $dethi = dethi::all();
            $slide = slide::all();
            $tintuc = tintuc::all();
            $mon = mon::all();
        }else{
            $vien = vien::all();
            $dethi = dethi::where('gioithieu','LIKE', '%' .$query. '%')->get();
            $slide = slide::where('gioithieu','LIKE', '%' .$query. '%')->get();
            $tintuc = tintuc::where('gioithieu','LIKE', '%' .$query. '%')->orWhere('noidung','LIKE', '%' .$query. '%')->get();
            $mon = mon::where('ten','LIKE', '%' .$query. '%')->get();
            $sokq = count($dethi) + count($slide)+count($tintuc)+count($mon);
        }
        $req = $query;
        return view('pages.kqsearch', ['vien'=>$vien, 'dethi'=>$dethi,'slide'=>$slide,'tintuc'=>$tintuc, 'mon'=>$mon, 'sokq'=>$sokq, 'req'=>$req]);
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
        $user->ten = $request->name;
        
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
