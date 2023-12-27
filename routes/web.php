<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficialController; // Perhatikan penulisan case pada nama controller

use App\Http\Controllers\SessionController;
use App\Http\Controllers\WasitController;
use App\Models\wasit;
use Illuminate\Support\Facades\Route;



Route::get('/', [SessionController::class, 'index']);

Route::middleware(['isLogin'])->group(function () {
    // Rute untuk pemain
    Route::resource('admin', AdminController::class);
    Route::get('pemain/{id}/edit', [AdminController::class, 'edit']);
    Route::get('/pemain/create', [AdminController::class, 'create']);
    Route::get('/pemain/pemain', [AdminController::class, 'index']);
    Route::get('pemain/{id}', [AdminController::class, 'show'])->where('id', '[0-9]+');
    Route::get('admin', [AdminController::class, 'caripemain'])->name('caripemain');
    Route::get('/sanksi/pemain', [AdminController::class, 'pemain'])->name('pemain');
    Route::get('/sanksiprosespemain/{id}', [AdminController::class, 'sanksiprosespemain'])->name('sanksiprosespemain');
    Route::get('/sanksihistoripemain/{id}', [AdminController::class, 'sanksihistoripemain'])->name('sanksihistoripemain');
    Route::get('/sanksipemain/{id}', [AdminController::class, 'sanksipemain'])->name('sanksipemain');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');



    // Rute untuk official
    Route::resource('adminofficial', OfficialController::class);
    Route::get('/official/create', [OfficialController::class, 'create']);
    Route::get('/{id}/editofficial', [OfficialController::class, 'edit'])->name('editofficial');
    Route::get('/official/official', [OfficialController::class, 'index']);
    Route::get('official/{id}', [OfficialController::class, 'show'])->name('showofficial')->where('id', '[0-9]+');
    Route::get('adminofficial', [OfficialController::class, 'cariofficial'])->name('cariofficial');
    Route::get('/officialsanksi/officialm', [OfficialController::class, 'officialm'])->name('officialm');
    Route::get('/officialsanksi/sanksiofficial/{id}', [OfficialController::class, 'sanksiofficial'])->name('sanksiofficial');
    Route::get('/officialsanksi/sanksiprosesofficial{id}', [OfficialController::class, 'sanksiprosesofficial'])->name('sanksiprosesofficial');
    Route::get('/officialsanksi/sanksihistoriofficial{id}', [OfficialController::class, 'sanksihistoriofficial'])->name('sanksihistoriofficial');



    Route::resource('adminwasit', WasitController::class); // Menggunakan wasitController
    Route::get('/wasit/create', [WasitController::class, 'create']);
    Route::get('/{id}/editwasit', [wasitController::class, 'edit'])->name('editwasit');
    Route::get('/wasit/wasit', [WasitController::class, 'index']);
    Route::get('wasit/{id}', [WasitController::class, 'show'])->name('showwasit')->where('id', '[0-9]+');
    Route::get('adminwasit', [WasitController::class, 'cariwasit'])->name('cariwasit');

    Route::get('/wasitsanksi/wasit', [WasitController::class, 'wasit'])->name('wasit');
    Route::get('/wasitsanksi/sanksiwasit/{id}', [WasitController::class, 'sanksiwasit'])->name('sanksiwasit');
    Route::get('/wasitsanksi/sanksiproseswasit/{id}', [WasitController::class, 'sanksiproseswasit'])->name('sanksiproseswasit');
    Route::get('/wasitsanksi/sanksihistoriwasit/{id}', [WasitController::class, 'sanksihistoriwasit'])->name('sanksihistoriwasit');



    Route::get('/Login/logout', [SessionController::class, 'logout']);
    Route::get('/register', [SessionController::class, 'register']);
});




Route::middleware(['alreadyLogin'])->group(function () {
    Route::get('/Login', [SessionController::class, 'index']);
    Route::post('/Login/login', [SessionController::class, 'login']);
    Route::post('/Login/register', [SessionController::class, 'create']);
});


