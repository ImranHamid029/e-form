<?php

use App\Http\Controllers\AccountOfficerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kredit2Controller;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\TarikController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\FormPengaduanController;


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

Route::get('/tes', function () {
    return view('tes');
});
Route::get('/', HomeController::class);
Route::get('/kredit', KreditController::class);
//Route::get('/kredit', Kredit2Controller::class);
Route::get('/form', FormController::class);
Route::get('/info', function () {
    return view('info');
});
Route::get('/form1', function () {
    return view('form');
});
Route::get('/form2', function () {
    return view('form2');
});
Route::get('/form3', function () {
    return view('form3');
});
Route::get('/kredit3', function () {
    return view('kredit.3');
});
Route::get('/h2', function () {
    return view('home2');
});

Route::resource('/test', TestController::class);
Route::resource('/mahasiswa',MahasiswaController::class);

// Account officer
Route::get('/admin', [AccountOfficerController::class, 'incoming']);
Route::get('/admin/in', [AccountOfficerController::class, 'incoming']);
Route::get('/admin/detail/{id}', [AccountOfficerController::class, 'detail']);

//Setor Tunai
Route::get('/setor', SetorController::class);

//Tarik Tunai
Route::get('/tarik', TarikController::class);
Route::post('/tarik-submit', [TarikController::class, 'store'])->name('tarik.store');

//Pengaduan
Route::get('/pengaduan', function () {
    return view('pengaduan');
})->name('pengaduan.page');
Route::post('/pengaduan-submit', [PengaduanController::class, 'store'])->name('pengaduan.submit');
Route::get('/form_pengaduan',function(){
    return view('form.form_pengaduan');
});