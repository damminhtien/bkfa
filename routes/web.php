<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\vien;
use App\mon;


	Route::get('/', function(){
		return view('admin.gioithieu');
	});



	Route::group(['prefix'=>'admin'],function(){
		Route::group(['prefix'=>'vien'],function(){
			Route::get('danhsach','vienController@getDanhSach');

			Route::post('them','vienController@postThem');

			Route::post('sua/{idvien}','vienController@postSua');
			
			Route::get('xoa/{idvien}','vienController@getXoa');
		});

		Route::group(['prefix'=>'slide'],function(){
			Route::get('danhsach','slideController@getDanhSach');

			Route::get('them','slideController@getThem');
			Route::post('them','slideController@postThem');

			Route::get('sua/{idslide}','slideController@getSua');
			Route::post('sua/{idslide}','slideController@postSua');
			
			Route::get('xoa/{idslide}','slideController@getXoa');
		});

		Route::group(['prefix'=>'ajax'],function(){
			Route::get('getmonby{idvien}','ajaxController@getMonByVien');
		});

		Route::group(['prefix'=>'dethi'],function(){
			Route::get('danhsach','dethiController@getDanhSach');

			Route::get('them','dethiController@getThem');
			Route::post('them','dethiController@postThem');

			Route::get('sua/{iddethi}','dethiController@getSua');
			Route::post('sua/{iddethi}','dethiController@postSua');
			
			Route::get('xoa/{iddethi}','dethiController@getXoa');
		});
	});


