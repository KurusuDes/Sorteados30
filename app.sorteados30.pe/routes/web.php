<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
/*
Route::get('/', [
	'uses' => 'InicioController@index',
	'as'   => 'inicio_path',
]);
*/
Route::get('/', 'Auth\LoginController@showLoginForm')->name('inicio_path');

Route::get('newuser', [
	'uses' => 'HomeController@home',
	'as'   => 'newuser_path',
]);

Route::get('home', [
	'uses' => 'HomeController@home',
	'as'   => 'home_path',
]);

Route::get('menu', [
	'uses' => 'MenuController@menu',
	'as'   => 'menu_path',
]);

Route::get('couponbyweek/{ano}/{mes}/{semana}', [
	'uses' => 'CouponController@couponbyweek',
	'as'   => 'couponweek_path',
]);

Route::get('coupons/{ano}/{mes}/{dia}', [
	'uses' => 'CouponController@coupons',
	'as'   => 'couponday_path',
]);

Route::get('coupon/{id}', [
	'uses' => 'CouponController@coupon',
	'as'   => 'coupon_path',
]);

Route::get('winners', [
	'uses' => 'MenuController@menu',
	'as'   => 'winners_path',
]);
Route::get('business', [
	'uses' => 'MenuController@menu',
	'as'   => 'negocios_path',
]);

Route::get('registro', [
	'uses' => 'BackController@registro',
	'as'   => 'registro_path',
]);

Route::group(['middleware' => ['auth']], function() {
	
	Route::get('account', [
		'uses' => 'UserController@account',
		'as'   => 'account_path',
	]);
	Route::post('participar', [
		'uses' => 'CouponController@participar',
		'as'   => 'participar_path',
	]);
	Route::get('tickets', [
		'uses' => 'TicketController@ticketsbyuser',
		'as'   => 'ticketsbyuser_path',
	]);
	Route::get('sugerencias', [
		'uses' => 'BackController@sugerencias',
		'as'   => 'sugerencias_path',
	]);
	Route::get('contact', [
		'uses' => 'BackController@contact',
		'as'   => 'contact_path',
	]);
	Route::get('buytickets', [
		'uses' => 'MenuController@menu',
		'as'   => 'buytickets_path',
	]);
});