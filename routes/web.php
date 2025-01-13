<?php

use App\Http\Controllers\AccountOfficerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kredit2Controller;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\FormPengaduanController;
use App\Http\Controllers\TarikTunaiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LoginController;
use Mews\Captcha\Facades\Captcha;

Route::get('/tes', function () {
    return view('tes');
});
Route::get('/', HomeController::class);

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
// Login Account officer
Route::get('/login-admin',[LoginController::class,'index']);

// Account officer (Super Admin)
Route::get('/admin', [AccountOfficerController::class, 'index']);
Route::get('/manage-account', function () {
    return view('accountofficer.manage_account');
});

//Kredit
Route::get('/kredit', [KreditController::class,'index']);
Route::get('/form-kredit', KreditController::class);

//Setor Tunai
Route::get('/setortunai',[SetorController::class, 'index']);
Route::get('/form-setor-tunai', SetorController::class);


// //Tarik Tunai
Route::get('/tariktunai',[TarikTunaiController::class, 'index']);
Route::get('/form-tarik-tunai', TarikTunaiController::class);


//Pengaduan
Route::get('/pengaduan',[PengaduanController::class, 'index']);
Route::get('/form-pengaduan', PengaduanController::class);


// Tentang Kami
Route::get('/tentang-kami', TentangKamiController::class);

//Popup
Route::get('/popup1', function () {
    return view('popup.popup1');
});
Route::get('/popup2', function () {
    return view('popup.popup2');
});
Route::get('/error', function () {
    return view('popup.disturbance');
});

//Status
Route::get('/chack-status', function(){
    return view('status.chack_status');
});
Route::get('/view-status', function(){
    return view('status.view_status');
});

//Captcha
Route::get('/generate-captcha', function () {
    return Captcha::create();
});

// Teller
Route::get('/teller', function () {
    return view('accountofficer.teller.dashboard_teller');
});

