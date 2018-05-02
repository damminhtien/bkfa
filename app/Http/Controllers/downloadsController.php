<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class downloadsController extends Controller
{
    public function downloadSlide($id, $file) {
    	$number = DB::update('UPDATE slides SET luotxem = luotxem + 1 WHERE idslide = '.$id);
    	$ext = array_reverse(explode('.',$file));
	    $file_path = public_path('upload/'.getUrlFileUpload($ext[0], 'slide/').$file);
	    return response()->download($file_path);
	}

	public function downloadDeThi($file) {
    	//$ext = $file->getClientOriginalExtension();
    	$ext = array_reverse(explode('.',$file));
	    $file_path = public_path('upload/'.getUrlFileUpload($ext[0], 'dethi/').$file);
	    return response()->download($file_path);
	}
}
