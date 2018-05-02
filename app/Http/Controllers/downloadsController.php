<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class downloadsController extends Controller
{
    public function downloadSlide($file) {
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
