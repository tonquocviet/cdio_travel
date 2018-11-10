<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[
	'as'=>'trangchu',
	'uses'=> 'PageController@getIndex'
]);

Route::get('danh-muc-tour',[
	'as'=>'danhmuctour',
	'uses'=> 'PageController@getDanhmuctour'
]);

Route::get('tour-theo-mien/{type}',[
	'as'=>'tourtheomien',
	'uses'=> 'PageController@getTourtheomien'
]);

Route::get('chi-tiet-tour/{id}',[
	'as'=>'chitiettour',
	'uses'=>'PageController@getChitiet'
]);

Route::get('dat-tour/{id}',[
	'as'=>'dattour',
	'uses'=> 'PageController@getDattour'
]);

Route::post('dat-tour/{id}',[
	'as'=>'dattour',
	'uses'=>'PageController@postDattour'
]);

Route::get('dang-nhap',[ //duong dan cua route
	'as'=> 'login', //ten route truyen vao trong trang
	'uses'=> 'PageController@getLogin'
]);

Route::post('dang-nhap',[ //duong dan cua route hien tren trinh duyet
	'as'=> 'login', //ten route truyền vao trong pagecontroller phai giong vs ten route truyen vao ..blade.php
	'uses'=> 'PageController@postLogin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=> 'PageController@postLogout'
]);

Route::get('dang-ky',[
	'as'=>'register',
	'uses'=> 'PageController@getRegister'
]);

Route::post('dang-ky',[
	'as'=>'register',
	'uses'=> 'PageController@postRegister' // đăng ký và kích hoạt mail
]);

Route::get('gui-mail','PageController@sendMail');

Route::get('send-to-mail/{id}/{token}',[
	'as'=> 'sendtomail',
	'uses'=> 'PageController@activeUser'
]);

Route::get('tim-kiem',[
	'as' => 'search',
	'uses'=> 'PageController@getSearch'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=> 'PageController@getGioithieu'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=> 'PageController@getLienhe'
]);

Route::get('blog',[
	'as'=>'blog',
	'uses'=> 'PageController@getBlog'
]);

Route::get('blog-detail',[
	'as'=>'blogdetail',
	'uses'=> 'PageController@getBlogdetail'
]);

							// ADMIN
//duong dan admin http://localhost:8080/cdio_travel/public/admin/mien_khachsan/danhsach

Route::group(['prefix'=> 'admin'], function(){
	// login admin
	Route::get('trangchu-admin',[
		'as'=> 'trangchuadmin',
		'uses'=> 'PageController@getTrangchuAdmin'
	]);
	// MIEN_KHACHSAN
	// /admin/mien_khachsan/danhsach
	Route::group(['prefix'=> 'mien_khachsan'], function(){
		Route::get('danhsach','MienKhachSanController@getDanhSach');

		Route::get('them','MienKhachSanController@getThem');
		Route::post('them','MienKhachSanController@postThem');

		Route::get('sua/{id}','MienKhachSanController@getSua');
		Route::post('sua/{id}','MienKhachSanController@postSua');

		Route::get('xoa/{id}','MienKhachSanController@getXoa');

	});
	// KHACHSAN
	Route::group(['prefix'=> 'khachsan'], function(){
		Route::get('danhsach','KhachSanController@getDanhSach');

		Route::get('them','KhachSanController@getThem');
		Route::post('them','KhachSanController@postThem');

		Route::get('sua/{id}','KhachSanController@getSua');
		Route::post('sua/{id}','KhachSanController@postSua');

		Route::get('xoa/{id}','KhachSanController@getXoa');
	});
	// KHACHHANG
	Route::group(['prefix'=> 'khachhang'], function(){
		Route::get('danhsach','KhachHangController@getDanhSach');

		Route::get('them','KhachHangController@getThem');
		Route::post('them','KhachHangController@postThem');

		Route::get('sua/{id}','KhachHangController@getSua');
		Route::post('sua/{id}','KhachHangController@postSua');

		Route::get('xoa/{id}','KhachHangController@getXoa');
	});
	// MIENTOUR
	Route::group(['prefix'=> 'mien_tour'], function(){
		Route::get('danhsach','MienTourController@getDanhSach');

		Route::get('them','MienTourController@getThem');
		Route::post('them','MienTourController@postThem');

		Route::get('sua/{id}','MienTourController@getSua');
		Route::post('sua/{id}','MienTourController@postSua');

		Route::get('xoa/{id}','MienTourController@getXoa');
	});
	//TOUR
	Route::group(['prefix'=> 'tour'], function(){
		Route::get('danhsach','TourController@getDanhSach');

		Route::get('them','TourController@getThem');
		Route::post('them','TourController@postThem');

		Route::get('sua/{id}','TourController@getSua');
		Route::post('sua/{id}','TourController@postSua');

		Route::get('xoa/{id}','TourController@getXoa');
	});
	//BLOG
	Route::group(['prefix'=> 'blog'], function(){
		Route::get('danhsach','BlogController@getDanhSach');

		Route::get('them','BlogController@getThem');
		Route::post('them','BlogController@postThem');

		Route::get('sua/{id}','BlogController@getSua');
		Route::post('sua/{id}','BlogController@postSua');

		Route::get('xoa/{id}','BlogController@getXoa');
	});
	//BLOG
	Route::group(['prefix'=> 'user'], function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');

		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');

		Route::get('xoa/{id}','UserController@getXoa');
	});
	//AJAX
	Route::group(['prefix'=> 'ajax'], function(){
		Route::get('tour/{id_mien}','AjaxController@getIdMien');
	});
});