<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\TheLoai;
use App\Http\Controllers\TheLoaiController;
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        //admin/theloai/danhsach
        Route::get('/danhsach', [TheLoaiController::class, 'getDanhSach']);
        Route::get('/sua/{id}', [TheLoaiController::class, 'getSua']);
        Route::post('/sua/{id}', [TheLoaiController::class, 'postSua']);
        Route::get('/them', [TheLoaiController::class, 'getThem']);
        Route::post('/them',[TheLoaiController::class, 'postThem']);
        Route::get('/xoa/{id}', [TheLoaiController::class, 'getXoa']);
        
        // Route::get('sua','TheLoaiController@getSua');
        // Route::get('them','TheLoaiController@getThem');
    });
    // Route::group(['prefix'=>'loaitin'],function(){
    //     //admin/loaitin/danhsach
    //     Route::get('danhsach','TheLoaiController@getDanhSach');
    //     Route::get('sua','TheLoaiController@getSua');
    //     Route::get('them','TheLoaiController@getThem');
    // });
    // Route::group(['prefix'=>'loaitin'],function(){
    //     //admin/loaitin/danhsach
    //     Route::get('danhsach','TheLoaiController@getDanhSach');
    //     Route::get('sua','TheLoaiController@getSua');
    //     Route::get('them','TheLoaiController@getThem');
    // });
    // Route::group(['prefix'=>'loaitin'],function(){
    //     //admin/loaitin/danhsach
    //     Route::get('danhsach','TheLoaiController@getDanhSach');
    //     Route::get('sua','TheLoaiController@getSua');
    //     Route::get('them','TheLoaiController@getThem');
    // });
    // Route::group(['prefix'=>'loaitin'],function(){
    //     //admin/loaitin/danhsach
    //     Route::get('danhsach','TheLoaiController@getDanhSach');
    //     Route::get('sua','TheLoaiController@getSua');
    //     Route::get('them','TheLoaiController@getThem');
    // });
});


