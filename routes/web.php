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
			Route::get('xoa/{iduser}','userController@getXoa');
		});
	});
});

Route::group(['middleware' => 'localization2', 'prefix' => Session::get('locale2')], function() {
	Route::post('/lang', [
		'as' => 'switchLang2',
		'uses' => 'LangController@postLang2',
	]);
	
	Route::get('/', 'pageController@trangChu');
	Route::get('danh-sach-tin-tuc', 'pageController@tinTuc');
	Route::get('chi-tiet-tin-tuc/{id}/{TenKhongDau}.html', 'pageController@chiTietTinTuc');
	Route::get('danh-sach-mon/{id}/{TenKhongDau}.html','pageController@dsMon');
	Route::get('chi-tiet-de-thi/{idmon}/de{id}.html','pageController@chiTietDeThi');
	Route::get('danh-sach-de-thi/{id}/{TenKhongDau}.html','pageController@dsDeThi');
	Route::get('danh-sach-slide/{id}/{TenKhongDau}.html','pageController@dsSlide');
	Route::get('kien-thuc-lap-trinh', 'pageController@kienThucLT');
	Route::get('about', 'pageController@about');

	Route::group(['middleware'=>'download'],function(){
		Route::get('/download-Slide/{file}', 'downloadsController@downloadSlide');
		Route::get('/download-de-thi/{file}', 'downloadsController@downloadDeThi');
	});

	Route::post("tim-kiem",'pageController@postTimKiem');
	Route::get('tim-kiem', 'pageController@getTimKiem');
	Route::get('search-like/{query}','pageController@search_like');

	Route::get('danhgia/{iduser}/{iddethi}/{star}',['as'=>'danhgia','uses'=>'danhgiaController@danhGiaDeThi']);
	Route::get('TB/{iddethi}',['as'=>'TB','uses'=>'danhgiaController@danhGiaTB']);
	Route::get('saocuatoi/{iddethi}/{iduser}',['as'=>'saocuatoi','uses'=>'danhgiaController@saocuatoi']);
	Route::get('dangnhap','pageController@getDangNhap');
	Route::post('dangnhap','pageController@postDangNhap');
	Route::get('dangxuat','pageController@getDangXuat');
	Route::get('nguoidung','pageController@getNguoiDung');
	Route::post('nguoidung','pageController@postNguoiDung');
	Route::get('dangky','pageController@getDangKy');
	Route::post('dangky','pageController@postDangKy');
	Route::get('kien-thuc-lap-trinh', 'pageController@kienThucLT');
});
