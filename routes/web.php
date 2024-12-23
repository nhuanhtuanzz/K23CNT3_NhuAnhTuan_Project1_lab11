<?php
use App\Http\Controllers\nat_quan_triController;
use App\Http\Controllers\nat_loai_san_phamController;
use App\Http\Controllers\nat_san_phamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/admin/nat-login',[nat_quan_triController::class,'natLogin'])->name('admins.natLogin');
Route::post('/admin/nat-login',[nat_quan_triController::class,'natLoginSubmit'])->name('admins.natLogin');

Route::get('/nat-admins',function(){
     return view('nat_Admins.index');
});

Route::get('/nat-admin/nat-loaisanpham',[nat_loai_san_phamController::class,'natList'])->name('nat_Admins.natloaisanpham');
Route::get('/nat-admin/nat-loaisanpham/nat_create',[nat_loai_san_phamController::class,'natCreate'])->name('nat_Admins.natloaisanpham.nat_create');
Route::post('/nat-admin/nat-loaisanpham/nat_create',[nat_loai_san_phamController::class,'natCreateSubmit'])->name('nat_Admins.natloaisanpham.nat_createsubmit');

Route::get('/nat-admin/nat-loaisanpham/edit/{natID}',[nat_loai_san_phamController::class, 'natEdit'])->name('nat_Admins.natloaisanpham.nat_edit');
Route::post('/nqt-admin/nat-loaisanpham/edit/{natID}',[nat_loai_san_phamController::class, 'natEditSubmit'])->name('nat_Admins.natloaisanpham.nat_editsubmit');

Route::get('/nat-admin/nat-sanpham',[nat_san_phamController::class,'natList'])->name('nat_Admins.natloaisanpham');
Route::get('/nat-admin/nat-sanpham/nat_create',[nat_san_phamController::class,'natCreate'])->name('nat_Admins.natsanpham.nat_create');
