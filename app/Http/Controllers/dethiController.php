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
        return view('admin.dethi.them', ['vien'=>$vien]);
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
        if($request->hasFile('de')){
            $file = $request->file('de');
            $ext = $file->getClientOriginalExtension();
            if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
                return redirect('admin/dethi/them')->with('loi', 'Không hỗ trợ định dạng file này!');
            }
            $url = substr(time() . rand() . '_' . $file->getClientOriginalName(), -190); 
            while(file_exists('upload/' . getUrlFileUpload($ext, 'dethi/') . $url)) {
                $url = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190);
            }
            $file->move('upload/' . getUrlFileUpload($ext, 'dethi'), $url);
            $dethi->url = $url;
        }
        if($request->hasFile('loigiai')){
            $file = $request->file('loigiai');
            $ext = $file->getClientOriginalExtension();
            if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
                return redirect('admin/dethi/them')->with('loi','Không hỗ trợ định dạng file này!');
            }
            $urlloigiai = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190); 
            while(file_exists('upload/' . getUrlFileUpload($ext, 'loigiai/') . $urlloigiai)) {
                $urlloigiai = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190);
            }
            $file->move('upload/' . getUrlFileUpload($ext, 'loigiai'), $urlloigiai);
            $dethi->urlloigiai = $urlloigiai;
        }else{
            $dethi->urlloigiai = "<script>alert('Lời giải trong phần giới thiệu')</script>";
        }
        if($request->hasFile('anh')){
            $img = $request->file('anh');
            $ext = $img->getClientOriginalExtension();
            if(!checkExtensionImage($ext)) {
                return redirect('admin/dethi/them')->with('loi', 'Không hỗ trợ định dạng ảnh này!');
            }
            $urlanh =  substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
            while(file_exists('upload/images/dethi/anh/' . $urlanh)) {
                $urlanh =  substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
            }
            $img->move('upload/images/dethi/anh', $urlanh);
            $dethi->urlanh = $urlanh;
        }else{
            $dethi->urlanh = 'default.jpg';
        }
        $dethi->save();
        return redirect('admin/dethi/them')->with('thongbao', 'Thêm đề thi thành công');
    }
    public function getSua($iddethi){
        $vien = vien::all();
        $dethi = dethi::find($iddethi);
        $dethi->mon = mon::find($dethi->idmon);
        $dethi->vien = vien::find($dethi->mon->idvien);
        return view('admin.dethi.sua',['vien'=>$vien, 'dethi'=>$dethi]);
    }
    public function postSua(Request $request, $iddethi){
        $dethi = dethi::find($iddethi);
        if($request->idMon != null) $dethi->idmon = $request->idMon;
        if($request->nam != null) $dethi->nam = $request->nam;
        if($request->gioithieu != null) $dethi->gioithieu = $request->gioithieu;
        $dethi->ghichu = $request->ghichu;
        if($request->hasFile('de')){
            $file = $request->file('de');
            $ext = $file->getClientOriginalExtension();
            if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
                return redirect('admin/dethi/sua/' . $iddethi)->with('loi', 'Không hỗ trợ định dạng file này!');
            }
            $url = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190);
            while(file_exists('upload/' . getUrlFileUpload($ext, 'dethi/') . $url)) {
                $url = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190);
            }
            $file->move('upload/' . getUrlFileUpload($ext, 'dethi'), $url);
            $oldExt = getExtension($dethi->url);
            if(file_exists('upload/' . getUrlFileUpload($oldExt, 'dethi/') . $dethi->url)) unlink('upload/' . getUrlFileUpload($oldExt, 'dethi/') . $dethi->url);
            $dethi->url = $url;
        }
        if($request->hasFile('loigiai')){
            $file = $request->file('loigiai');
            $ext = $file->getClientOriginalExtension();
            if(!checkExtensionArchive($ext) && !checkExtensionImage($ext) && !checkExtensionSupportFile($ext)) {
                return redirect('admin/dethi/sua/' . $iddethi)->with('loi', 'Không hỗ trợ định dạng file này!');
            }
            $urlloigiai = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190); 
            while(file_exists('upload/' . getUrlFileUpload($ext, 'loigiai/') . $urlloigiai)) {
                $urlloigiai = substr(time() . mt_rand() . '_' . $file->getClientOriginalName(), -190);
            }
            $file->move('upload/' . getUrlFileUpload($ext, 'loigiai'), $urlloigiai);
            $oldExt = getExtension($dethi->urlloigiai);
            if(file_exists('upload/' . getUrlFileUpload($oldExt, 'loigiai/') . $dethi->urlloigiai)) unlink('upload/' . getUrlFileUpload($oldExt, 'loigiai/') . $dethi->urlloigiai);
            $dethi->urlloigiai = $urlloigiai;
        }
        if($request->hasFile('anh')){
            $img = $request->file('anh');
            $ext = $img->getClientOriginalExtension();
            if(!checkExtensionImage($ext)) {
                return redirect('admin/dethi/sua/$iddethi')->with('loi','Không hỗ trợ định dạng ảnh này!');
            }
            $urlanh =  substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190); 
            while(file_exists('upload/images/dethi/anh/' . $urlanh)) {
                $urlanh = substr(time() . mt_rand() . '_' . $img->getClientOriginalName(), -190);
            }
            $img->move('upload/images/dethi/anh', $urlanh);
            if($dethi->urlanh != 'default.jpg' && file_exists('upload/images/dethi/anh/' . $dethi->urlanh)) unlink('upload/images/dethi/anh/' . $dethi->urlanh);
            $dethi->urlanh = $urlanh;
        }
        $dethi->save();
        return redirect('admin/dethi/danhsach')->with('thongbao','Sửa đề thi thành công');
    }
    public function getXoa($iddethi){
        $dethi = dethi::find($iddethi)->firstOrFail();
        $url = $dethi->url;
        $urlanh = $dethi->urlanh;
        $urlloigiai = $dethi->urlloigiai;
        $ext = getExtension($url);
        if(file_exists('upload/' . getUrlFileUpload($ext, 'dethi/') . $url)) unlink('upload/' . getUrlFileUpload($ext, 'dethi/') . $url);
        if($urlanh != 'default.jpg' && file_exists('upload/images/dethi' . $urlanh)) unlink('upload/images/dethi/anh/' . $urlanh);
        $ext = getExtension($urlloigiai);
        if(file_exists('upload/' . getUrlFileUpload($ext, 'loigiai') . $urlloigiai)) unlink('upload/' . getUrlFileUpload($ext, 'loigiai/') . $urlloigiai);
        $ten = cutString($dethi->gioithieu, 40);
        $dethi->delete();
        return redirect('admin/dethi/danhsach')->with('thongbao', 'Bạn đã xóa thành công ' . $ten);
    }
}