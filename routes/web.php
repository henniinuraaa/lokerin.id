<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerusahaanController;

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
// Route::get('/landingpage',[UserController::class,'shows']);

Route::middleware(['guest'])->group(function () {
Route::get('/', [UserController::class,'index']);
Route::post('/', [UserController::class,'login']);
});
Route::get('/login', function(){
    return redirect('/admin');
});

// Route::middleware(['auth'])->group(function () {
// Route::get('/admin', [AdminController::class,'index']);
Route::get('/logout', [UserController::class,'logout']);
Route::get('/tampilperushaan', [UserController::class,'show']);
Route::get('/tampilan', [AdminController::class,'show']);

// });

Route::get('/register', [UserController::class,'register']);
Route::post('register', [UserController::class,'regist']);
Route::get('detailproduk', [UserController::class,'detail']);


  
Route::get('/posting',[PostingController::class,'view']);
Route::get('/dataposting',[PostingController::class,'show']);
Route::post('/posting/post',[PostingController::class,'post']);
Route::get('/viewposting',[PostingController::class,'index']);
Route::get('/postinghapus/{id}',[PostingController::class,'destroy']);
Route::get('/posting/edit/{id}',[PostingController::class,'edit']);
Route::post('/posting/update/{id}',[PostingController::class,'update']);
Route::get('posting/add',[PostingController::class,'add']);
Route::post('posting/create',[PostingController::class,'create']);

Route::get('/pengajuan',[PengajuanController::class,'view']);
Route::post('/pengajuan/post',[PengajuanController::class,'post']);
Route::get('/viewpengajuan',[PengajuanController::class,'index']);
Route::get('/pengajuanhapus/{id}',[PengajuanController::class,'destroy']);
Route::get('/pengajuan/edit/{id}',[PengajuanController::class,'edit']);
Route::post('/pengajuan/update/{id}',[PengajuanController::class,'update']);
Route::get('pengajuan/add',[PengajuanController::class,'add']);
Route::post('pengajuan/create',[PengajuanController::class,'create']);

Route::get('/perusahaan',[PerusahaanController::class,'view']);
Route::post('/perusahaan/post',[PerusahaanController::class,'post']);
Route::get('/viewperusahaan',[PerusahaanController::class,'index']);
Route::get('/perusahaanhapus/{id}',[PerusahaanController::class,'destroy']);
Route::get('/perusahaan/edit/{id}',[PerusahaanController::class,'edit']);
Route::post('/perusahaan/update/{id}',[PerusahaanController::class,'update']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
Route::get('/tampilperushaan',[PerusahaanController::class,'tampil']);

Route::get('/detail',[DetailController::class,'show']);
Route::get('/posting/{id}/Dikonfirmasi',[PostingController::class,'Dikonfirmasi']);







