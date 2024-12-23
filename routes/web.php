<?php
use App\Http\Controllers\nat_quan_triController;
use App\Http\Controllers\nat_loai_san_phamController;
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

Route::get('/nat-admin/nat-loaisanpham',[nat_loai_san_phamController::class,'natList'])->name('admins.nat_loaisanpham');


Route::get('/nat-admin/nat-loaisanpham/search', [nat_loai_san_phamController::class,'natSearch'])->name('natadmin.natsearchloaisapham');

