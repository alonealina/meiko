<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\NokotsudoController@index')->name('index');

Route::get('services', 'App\Http\Controllers\NokotsudoController@services')->name('services');
Route::get('service1', 'App\Http\Controllers\NokotsudoController@service1')->name('service1');
Route::get('service2', 'App\Http\Controllers\NokotsudoController@service2')->name('service2');
Route::get('service3', 'App\Http\Controllers\NokotsudoController@service3')->name('service3');
Route::get('service4', 'App\Http\Controllers\NokotsudoController@service4')->name('service4');

Route::get('company', 'App\Http\Controllers\NokotsudoController@company')->name('company');
Route::get('company1', 'App\Http\Controllers\NokotsudoController@company1')->name('company1');
Route::get('company2', 'App\Http\Controllers\NokotsudoController@company2')->name('company2');
Route::get('company3', 'App\Http\Controllers\NokotsudoController@company3')->name('company3');

Route::get('recruit', 'App\Http\Controllers\NokotsudoController@recruit')->name('recruit');
Route::get('recruit1', 'App\Http\Controllers\NokotsudoController@recruit1')->name('recruit1');
Route::get('recruit2', 'App\Http\Controllers\NokotsudoController@recruit2')->name('recruit2');
Route::get('recruit3', 'App\Http\Controllers\NokotsudoController@recruit3')->name('recruit3');
Route::get('recruit3_1', 'App\Http\Controllers\NokotsudoController@recruit3_1')->name('recruit3_1');
Route::get('recruit3_2', 'App\Http\Controllers\NokotsudoController@recruit3_2')->name('recruit3_2');
Route::get('recruit3_3', 'App\Http\Controllers\NokotsudoController@recruit3_3')->name('recruit3_3');

Route::get('news', 'App\Http\Controllers\NokotsudoController@news')->name('news');
Route::get('news_detail', 'App\Http\Controllers\NokotsudoController@news_detail')->name('news_detail');

Route::get('contact', 'App\Http\Controllers\NokotsudoController@contact')->name('contact');
Route::get('contact1', 'App\Http\Controllers\NokotsudoController@contact1')->name('contact1');
Route::get('contact2', 'App\Http\Controllers\NokotsudoController@contact2')->name('contact2');
Route::get('contact3', 'App\Http\Controllers\NokotsudoController@contact3')->name('contact3');
Route::get('contact4', 'App\Http\Controllers\NokotsudoController@contact4')->name('contact4');

Route::get('policy', 'App\Http\Controllers\NokotsudoController@policy')->name('policy');


Route::post('mail_send', 'App\Http\Controllers\NokotsudoController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\NokotsudoController@mail_comp')->name('mail_comp');

