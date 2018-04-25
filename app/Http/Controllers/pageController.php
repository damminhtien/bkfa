<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

use App\vien;
use App\dethi;
use App\mon;
use App\tintuc;

class pageController extends Controller
{
    //
    function trangChu(){
    	$vien = vien::all();
    	$dethixn = DB::select('SELECT * FROM dethis WHERE luotxem > 0 ORDER BY luotxem DESC LIMIT 0,12');
        // $tintuc = DB::select('SELECT * FROM tintucs WHERE idtintuc = ? ', [2]);
        $xemnhieu = DB::select('SELECT * FROM tintucs WHERE luotxem > 0 ORDER BY luotxem DESC LIMIT 0,4');
        $moinhat = DB::select('SELECT * FROM tintucs WHERE created_at ORDER BY created_at DESC LIMIT 1,4');
        $newmost = DB::select('SELECT * FROM tintucs WHERE created_at = (SELECT Max(created_at) FROM tintucs)');
    	return view('pages.trangchu', ['vien'=>$vien, 'dethixn'=>$dethixn, 'newmost'=>$newmost, 'xemnhieu'=>$xemnhieu, 'moinhat'=>$moinhat]);
    }

    function dsTinTuc(){
    	$vien = vien::all();
    	return view('pages.dstintuc', ['vien'=>$vien]);
    }

    function dsTinTuc2(){
       $vien = vien::all();
        return view('pages.listnews', ['vien'=>$vien]);
    }

    function timKiem(){
       $vien = vien::all();
        $dethi = dethi::all();
        return view('pages.kqsearch', ['vien'=>$vien, 'dethi'=>$dethi]);
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
}
