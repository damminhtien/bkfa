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

Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

	Auth::routes();
	Route::get('/home', 'HomeController@index');
	Route::post('/lang', [
		'as' => 'switchLang',
		'uses' => 'LangController@postLang',
	]);
	Route::get('/', function () {
		return view('welcome');
	});
});

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {
		// Auth::routes();
		// Route::get('/home', 'HomeController@index');
		Route::post('/lang', [
			'as' => 'switchLang',
			'uses' => 'LangController@postLang',
		]);

		Route::get('/', function(){
			return view('admin.gioithieu');
		});

		Route::group(['prefix'=>'ajax'],function(){
			Route::get('getmonby{idvien}','ajaxController@getMonByVien');
		});
		Route::group(['prefix'=>'vien'],function(){
			Route::get('danhsach','vienController@getDanhSach');
			Route::post('them','vienController@postThem');
			Route::post('sua/{idvien}','vienController@postSua');
			Route::get('xoa/{idvien}','vienController@getXoa');
		});
		Route::group(['prefix'=>'mon'],function(){
			Route::get('danhsach','monController@getDanhSach');
			Route::get('them','monController@getThem');
			Route::post('them','monController@postThem');
			Route::get('sua/{idmon}','monController@getSua');
			Route::post('sua/{idmon}','monController@postSua');
			Route::get('xoa/{idmon}','monController@getXoa');
		});
		Route::group(['prefix'=>'slide'],function(){
			Route::get('danhsach','slideController@getDanhSach');
			Route::get('them','slideController@getThem');
			Route::post('them','slideController@postThem');
			Route::get('sua/{idslide}','slideController@getSua');
			Route::post('sua/{idslide}','slideController@postSua');
			Route::get('xoa/{idslide}','slideController@getXoa');
		});
		Route::group(['prefix'=>'mon'],function(){
			Route::get('danhsach','monController@getDanhSach');
			Route::get('them','monController@getThem');
			Route::post('them','monController@postThem');
			Route::get('sua/{idmon}','monController@getSua');
			Route::post('sua/{idmon}','monController@postSua');
			Route::get('xoa/{idmon}','monController@getXoa');
		});
		Route::group(['prefix'=>'tintuc'],function(){
			Route::get('danhsach','tintucController@getDanhSach');
			Route::get('them','tintucController@getThem');
			Route::post('them','tintucController@postThem');
			Route::get('sua/{idtintuc}','tintucController@getSua');
			Route::post('sua/{idtintuc}','tintucController@postSua');
			Route::get('xoa/{idtintuc}','tintucController@getXoa');
		});
		Route::group(['prefix'=>'dethi'],function(){
			Route::get('danhsach','dethiController@getDanhSach');
			Route::get('them','dethiController@getThem');
			Route::post('them','dethiController@postThem');
			Route::get('sua/{iddethi}','dethiController@getSua');
			Route::post('sua/{iddethi}','dethiController@postSua');
			Route::get('xoa/{iddethi}','dethiController@getXoa');
		});
		Route::group(['prefix'=>'user'],function(){

			Route::get('danhsach','userController@getDanhSach');
			Route::get('sua/{iduser}','userController@getSua');
			Route::post('sua/{iduser}','userController@postSua');
			Route::get('them','userController@getThem');
			Route::post('them','userController@postThem');
			Route::get('xoa/{id}','userController@getXoa');
		});
	});
});

Route::get('/', 'pageController@trangChu');
Route::get('ds-tintuc', 'pageController@dsTinTuc');
Route::get('ds-tintuc2', 'pageController@dsTinTuc2');
Route::get('chi-tiet-tai-lieu/{id}/{TenKhongDau}.html','pageController@chiTietTaiLieu');
Route::get('danh-sach-tai-lieu/{id}/{TenKhongDau}.html','pageController@dsTaiLieu');
Route::get('kien-thuc-lap-trinh', 'pageController@kienThucLT');

Route::get('danhgia/{iduser}/{idslide}/{star}',['as'=>'danhgia','uses'=>'danhgiaController@danhGiaSlide']);
Route::get('TB/{idslide}',['as'=>'TB','uses'=>'danhgiaController@danhGiaTB']);
Route::get('saocuatoi/{idslide}/{iduser}',['as'=>'saocuatoi','uses'=>'danhgiaController@saocuatoi']);

Route::get('404', function(){
	return view('layout.404');
});

