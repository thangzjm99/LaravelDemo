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
use App\Models\LoaiTin;
use App\Models\TinTuc;
use App\Models;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\AjaxController;
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
    Route::group(['prefix'=>'loaitin'],function(){
        //admin/loaitin/danhsach
        //admin/theloai/danhsach
        Route::get('/danhsach', [LoaiTinController::class, 'getDanhSach']);
        Route::get('/sua/{id}', [LoaiTinController::class, 'getSua']);
        Route::post('/sua/{id}', [LoaiTinController::class, 'postSua']);
        Route::get('/them', [LoaiTinController::class, 'getThem']);
        Route::post('/them',[LoaiTinController::class, 'postThem']);
        Route::get('/xoa/{id}', [LoaiTinController::class, 'getXoa']);

    });
    Route::group(['prefix'=>'tintuc'],function(){
        //admin/loaitin/danhsach
        //admin/theloai/danhsach
        Route::get('/danhsach', [TinTucController::class, 'getDanhSach']);
        Route::get('/sua/{id}', [TinTucController::class, 'getSua']);
        Route::post('/sua/{id}', [TinTucController::class, 'postSua']);
        Route::get('/them', [TinTucController::class, 'getThem']);
        Route::post('/them',[TinTucController::class, 'postThem']);
        Route::get('/xoa/{id}', [TinTucController::class, 'getXoa']);
    });
    Route::group(['prefix'=>'ajax'],function(){
        Route::get('loaitin/{idTheLoai}',[AjaxController::class,'getLoaiTin']);
    });
});


