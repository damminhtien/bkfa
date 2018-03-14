<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Routes;
use \DB;
use App\admin;

class myController extends Controller
{	
    public function getData() {
		$data = admin::all();
		return view('index', ['viens' => $data]);
    }
}
