<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vien;
use App\dethi;
use App\mon;

class pageController extends Controller
{
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
    	$dsmon = mon::where('idvien',$id)->paginate(5);
    	return view('pages.dstailieu', ['vien'=>$vien, 'dsmon'=>$dsmon]);
    }

    function chiTietTaiLieu($id){
        $vien = vien::all();
        $chitiet = dethi::where('idmon',$id)->firstOrFail();
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
}