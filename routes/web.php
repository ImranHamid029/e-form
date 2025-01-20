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
Route::get('/admin', function () {
    return view('accountofficer.adminsuper.index');
});
    Route::get('/add-account', function () {
        return view('accountofficer.adminsuper.add_account');
    });
    Route::get('/manage-account', function () {
        return view('accountofficer.adminsuper.manage_account');
    });
    Route::get('/edit-account', function () {
        return view('accountofficer.adminsuper.edit_account');
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
Route::get('/popup3', function () {
    return view('popup.popup3');
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
    //Pengajuan Kredit
    Route::get('/data-pengajuan-kredit', function () {
        return view('accountofficer.teller.kredit.data_pengajuan_kredit');
    });
    Route::get('/detail-data-pengajuan-kredit', function () {
        return view('accountofficer.teller.kredit.detail_data_pengajuan_kredit');
    });
    //Tarik Tunai
    Route::get('/data-tarik-tunai', function () {
        return view('accountofficer.teller.tarik.data_tarik');
    });
    Route::get('/detail-data-tarik-tunai', function () {
        return view('accountofficer.teller.tarik.detail_data_tarik_tunai');
    });
    //Setor Tunai
    Route::get('/data-setor-tunai', function () {
        return view('accountofficer.teller.setor.data_setor_tunai');
    });
    Route::get('/detail-data-setor-tunai', function () {
        return view('accountofficer.teller.setor.detail_data_setor_tunai');
    });
    //History 
    Route::get('/history-teller', function () {
        return view('accountofficer.teller.history.history_teller');
    });

//Pengaduan online(Admin)
Route::prefix('accountofficer')->name('accountofficer.')->group(function () {
    Route::get('/complaint', [AccountOfficerController::class, 'complaint'])->name('complaint');
});

//Profile
Route::get('/profile', function () {
    return view('accountofficer.profile.profile');
});
Route::get('/edit-password', function () {
    return view('accountofficer.profile.edit_password');
});
Route::get('/confirm-password', function () {
    return view('accountofficer.profile.confirm_password');
});


//History
Route::get('/history-admin', function () {
    return view('accountofficer.history.history_admin');
});

//CS Helpdesk
Route::get('/cs-helpdesk', function () {
    return view('accountofficer.cs.dashboard_cs');
});
Route::get('/detail-complaint', function () {
    return view('accountofficer.cs.detail_complaint');
});
Route::get('/respons', function () {
    return view('accountofficer.cs.respons');
});

//validation Data
Route::get('/validation', function () {
    return view('popup.validation');
});
Route::get('/validate', function () {
    return view('popup.validate');
});
