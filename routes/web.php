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
use App\Http\Controllers\FormKreditController;
use App\Http\Controllers\FormSetorController;
use App\Http\Controllers\FormTarikController;
use App\Http\Controllers\FormPengaduanController;
use App\Http\Controllers\TarikTunaiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\CSController;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\AccountController;
use Mews\Captcha\Facades\Captcha;


Route::fallback(function () {
    return response()->view('404', [], 404);
});
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

//Kredit
Route::get('/kredit', [KreditController::class,'index']);
Route::get('/form-kredit', [FormKreditController::class, 'create'])->name('kredit.create');
Route::post('/form-kredit/store', [FormKreditController::class, 'store'])->name('kredit.store');
Route::post('/form-kredit/validation', [FormKreditController::class, 'validation'])->name('kredit.validation');
Route::get('/download-pdf/kredit/{uniqueResi}', [FormKreditController::class, 'downloadPDF'])->name('kredit.pdf');

//Setor Tunai
Route::get('/setortunai',[SetorController::class, 'index']);
Route::get('/form-setor-tunai', [FormSetorController::class, 'create'])->name('setor.create');
Route::post('/form-setor-tunai/store', [FormSetorController::class, 'store'])->name('setor.store');
Route::post('/form-setor-tunai/validation', [FormSetorController::class, 'validation'])->name('setor.validation');
Route::get('/download-pdf/setor/{queueNumber}', [FormSetorController::class, 'downloadPDF'])->name('setor.pdf');

//Tarik Tunai
Route::get('/tariktunai',[TarikTunaiController::class, 'index']);
Route::get('/form-tarik-tunai', [FormTarikController::class, 'create'])->name('tarik.create');
Route::post('/form-tarik-tunai/store', [FormTarikController::class, 'store'])->name('tarik.store');
Route::post('/form-tarik-tunai/validation', [FormTarikController::class, 'validation'])->name('tarik.validation');
Route::get('/download-pdf/tarik/{queueNumber}', [FormTarikController::class, 'downloadPDF'])->name('tarik.pdf');

//Pengaduan
Route::get('/pengaduan',[PengaduanController::class, 'index']);
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::post('/pengaduan/validation', [PengaduanController::class, 'validation'])->name('pengaduan.validation');

// Status
Route::get('/generate-captcha', function () {
    return Captcha::create('default');
});
Route::get('/refresh-captcha', [StatusController::class, 'refreshCaptcha'])->name('refresh.captcha');
Route::get('/status/check', [StatusController::class, 'showCheckForm'])->name('status.check.form');
Route::post('/status/check', [StatusController::class, 'check'])->name('status.check');
Route::get('/status/view/{type}/{id}', [StatusController::class, 'viewStatus'])->name('status.view');

// Tentang Kami
Route::get('/tentang-kami', TentangKamiController::class);



// Login Account officer
Route::get('/login-admin', [LoginController::class, 'index'])->name('login');
Route::post('/login-admin', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 
Route::post('/update-password', [LoginController::class, 'updatePassword'])->name('update.password');
Route::post('/update-photo-image', [LoginController::class, 'updatePhoto'])->name('profile.update.photo');


// Middleware untuk memastikan hanya pengguna yang sudah login yang dapat mengakses halaman sesuai role
Route::middleware(['auth', 'role:adminsuper'])->group(function () {
    Route::get('/admin', [AccountOfficerController::class, 'index'])->name('adminsuper.index');



    Route::get('/admin/manage-accounts', [AccountController::class, 'index'])->name('manage-accounts');
    Route::get('/admin/add-account', [AccountController::class, 'create'])->name('add-account');
    Route::post('/admin/add-account', [AccountController::class, 'store'])->name('store-account'); // Tambahkan name route
    Route::get('/admin/edit-account/{id}', [AccountController::class, 'edit'])->name('edit-account');
    Route::put('/admin/edit-account/{id}', [AccountController::class, 'update'])->name('update-account'); // Ubah POST ke PUT
    Route::delete('/admin/delete-account/{id}', [AccountController::class, 'destroy'])->name('delete-account');
    
    route::get('/history',[AccountOfficerController::class, 'history'])->name('history');
});





Route::middleware(['auth', 'role:csbl,adminsuper'])->group(function () {
    Route::get('/cs', function () {
        return view('accountofficer.cs.dashboard_cs');
    })->name('cs.dashboard');
    Route::get('/cs', [CSController::class, 'index'])->name('cs.dashboard');
    Route::get('/cs/{id}', [CSController::class, 'show'])->name('applicant.detail');
    Route::post('/cs/{id}/update-status', [CSController::class, 'updateStatus'])->name('applicant.update_status');
    Route::get('/history-kredit', [CSController::class, 'history'])->name('history');
    Route::get('/history-kredit/{id}/{from_history?}', [CSController::class, 'show'])->name('history.detail');
    Route::get('/history-kredit-accepted', [CSController::class, 'historyAccepted'])->name('history.accepted');
    Route::get('/history-kredit-rejected', [CSController::class, 'historyRejected'])->name('history.rejected');
});






Route::middleware(['auth', 'role:helpdeskbl,adminsuper'])->group(function () {
    Route::get('/helpdesk', function () {
        return view('accountofficer.helpdesk.dashboard_helpdesk');
    })->name('helpdesk.dashboard');
    // Route Dashboard Helpdesk
    Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('helpdesk.dashboard');
    Route::get('/helpdesk/show-more', [HelpdeskController::class, 'showMoreComplaint'])->name('helpdesk.showMore');
    // Route Pengaduan
    Route::get('/helpdesk/complaint/{id}', [HelpdeskController::class, 'show'])->name('complaint.detail');
    Route::get('/helpdesk/respond/{id}', [HelpdeskController::class, 'showResponseForm'])->name('helpdesk.respond');
    Route::post('/helpdesk/respond/{id}', [HelpdeskController::class, 'respond'])->name('helpdesk.storeResponse');
    // Route Riwayat Pengaduan
    Route::get('/helpdesk/history', [HelpdeskController::class, 'history'])->name('history.complaint');
    Route::get('/helpdesk/history/show-more', [HelpdeskController::class, 'showMoreHistory'])->name('history.complaint.showMore');
    Route::get('/helpdesk/history/{id}', [HelpdeskController::class, 'showHistoryDetail'])->name('detail.history.complaint');

});



Route::middleware(['auth', 'role:tellerbl,adminsuper'])->group(function () {
    Route::get('/teller', function () {
        return view('accountofficer.teller.dashboard_teller');
    })->name('teller.dashboard');
    Route::get('/teller', [TellerController::class, 'index'])->name('teller.dashboard');
    Route::get('/teller/withdraw', [TellerController::class, 'withdraw'])->name('withdraw.dashboard');

    Route::get('/teller/withdraw/search', [WithdrawController::class, 'index'])->name('withdraw.search');

    Route::get('/teller/withdraw/{id}', [TellerController::class, 'show'])->name('withdraw.detail');
    Route::post('/teller/withdraw/{id}/update-status', [TellerController::class, 'updateStatus'])->name('withdraw.update_status');
    Route::get('/teller/deposit', [TellerController::class, 'deposit'])->name('deposit.dashboard');
    Route::get('/teller/deposit/{id}', [TellerController::class, 'showDeposit'])->name('deposit.detail');
    Route::post('/teller/deposit/{id}/update-status', [TellerController::class, 'updateStatusDeposit'])->name('deposit.update_status');
    Route::get('/teller/history', [TellerController::class, 'history'])->name('history');
    Route::get('/teller/history/withdraw', [TellerController::class, 'historyWithdraw'])->name('history.withdraw');
    Route::get('/teller/history/deposit', [TellerController::class, 'historyDeposit'])->name('history.deposit');
    Route::get('/teller/history/withdraw/{id}/{from_history?}', [TellerController::class, 'show'])->name('history.withdraw.detail');
    Route::get('/teller/history/deposit/{id}/{from_history?}', [TellerController::class, 'showDeposit'])->name('history.deposit.detail');

});



// // Account officer
// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', [AccountOfficerController::class, 'index']);
// });

// // Account officer (Super Admin)
// Route::get('/admin', function () {
//     return view('accountofficer.adminsuper.index');
// });
//     Route::get('/add-account', function () {
//         return view('accountofficer.adminsuper.add_account');
//     });
//     Route::get('/manage-account', function () {
//         return view('accountofficer.adminsuper.manage_account');
//     });
//     Route::get('/edit-account', function () {
//         return view('accountofficer.adminsuper.edit_account');
//     });
//     Route::get('/history', function () {
//         return view('accountofficer.adminsuper.history');
//     });


//     // Route::get('/complaint', function () {
//     //     return view('accountofficer.helpdesk.complaint');
//     // });
//     // Route::get('/credit', function () {
//     //     return view('accountofficer.helpdesk.credit');
//     // });
//     // Route::get('/cash-deposit', function () {
//     //     return view('accountofficer.helpdesk.cash_deposit');
//     // });
//     // Route::get('/cash-withdrawal', function () {
//     //     return view('accountofficer.helpdesk.cash_withdrawal');
//     // });
    

// //Kredit
// Route::get('/kredit', [KreditController::class,'index']);
// Route::get('/form-kredit', KreditController::class);

// //Setor Tunai
// Route::get('/setortunai',[SetorController::class, 'index']);
// Route::get('/form-setor-tunai', SetorController::class);


// // //Tarik Tunai
// Route::get('/tariktunai',[TarikTunaiController::class, 'index']);
// Route::get('/form-tarik-tunai', TarikTunaiController::class);


// //Pengaduan
// Route::get('/pengaduan',[PengaduanController::class, 'index']);
// Route::get('/form-pengaduan', PengaduanController::class);


// // Tentang Kami
// Route::get('/tentang-kami', TentangKamiController::class);

// //Popup
// Route::get('/popup1', function () {
//     return view('popup.popup1');
// });
// Route::get('/popup2', function () {
//     return view('popup.popup2');
// });
// Route::get('/popup3', function () {
//     return view('popup.popup3');
// });
// Route::get('/error', function () {
//     return view('popup.disturbance');
// });

// //Status
// Route::get('/chack-status', function(){
//     return view('status.chack_status');
// });
// Route::get('/view-status', function(){
//     return view('status.view_status');
// });

// //Captcha
// Route::get('/generate-captcha', function () {
//     return Captcha::create();
// });

// // Teller
// Route::get('/teller', function () {
//     return view('accountofficer.teller.dashboard_teller');
// });
//     //Tarik Tunai
//     Route::get('/data-tarik-tunai', function () {
//         return view('accountofficer.teller.tarik.data_tarik');
//     });
//     Route::get('/detail-data-tarik-tunai', function () {
//         return view('accountofficer.teller.tarik.detail_data_tarik_tunai');
//     });
//     //Setor Tunai
//     Route::get('/data-setor-tunai', function () {
//         return view('accountofficer.teller.setor.data_setor_tunai');
//     });
//     Route::get('/detail-data-setor-tunai', function () {
//         return view('accountofficer.teller.setor.detail_data_setor_tunai');
//     });
//     //History 
//     Route::get('/history-teller', function () {
//         return view('accountofficer.teller.history.history_teller');
//     });

// //Profile
// Route::get('/profile', function () {
//     return view('accountofficer.profile.profile');
// });
// Route::get('/edit-password', function () {
//     return view('accountofficer.profile.edit_password');
// });
// Route::get('/confirm-password', function () {
//     return view('accountofficer.profile.confirm_password');
// });


// //Helpdesk
// Route::get('/complaint', function () {
//     return view('accountofficer.helpdesk.dashboard');
// });
// Route::get('/detail-complaint', function () {
//     return view('accountofficer.helpdesk.detail_complaint');
// });
// Route::get('/respons', function () {
//     return view('accountofficer.helpdesk.respons');
// });


// //Customer Service

// Route::get('/credit', function () {
//     return view('accountofficer.cs.dashboard-cs');
// });
//     //Kredit
//     Route::get('/detail-data-pengajuan-kredit', function () {
//         return view('accountofficer.cs.detail_data_pengajuan_kredit');

//     });
//     //History
//     Route::get('/history-kredit', function () {
//         return view('accountofficer.cs.history');

//     });

// //validation Data
// Route::get('/validation', function () {
//     return view('popup.validation');
// });
// Route::get('/validate', function () {
//     return view('popup.validate');
// });

// //History
// Route::get('/history-admin', function () {
//     return view('accountofficer.history.history_admin');
// });

//     //History Setor Tunai
//     Route::get('/history-setor-tunai', function () {
//         return view('accountofficer.history.history_setor_tunai');
//     });
//     //History Tarik Tunai
//     Route::get('/history-tarik-tunai', function () {
//         return view('accountofficer.history.history_tarik_tunai');
//     });
//     //History Kredit Accepted
//     Route::get('/history-kredit-accepted', function () {
//         return view('accountofficer.history.history_kredit_accepted');
//     });
//     //History Kredit rejected
//     Route::get('/history-kredit-rejected', function () {
//         return view('accountofficer.history.history_kredit_rejected');
//     });
//     //History Complaint
//     Route::get('/history-complaint', function () {
//         return view('accountofficer.history.history_complaint');
//     });
//     Route::get('/detail-history-complaint', function () {
//         return view('accountofficer.helpdesk.detail_history_complaint');
//     });


// //Ticket

// Route::get('/kredit-ticket', function () {
//     return view('tiket.kredit.kredit_tiket');
// });
// Route::get('/setor-ticket', function () {
//     return view('tiket.setor.setor_tunai_tiket');
// });
// Route::get('/tarik-ticket', function () {
//     return view('tiket.tarik.tarik_tunai_tiket');
// });

// //404
// Route::get('/404', function () {
//     return view('404');
// });
