<?php

use App\Http\Controllers\CalonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\CalonPenerimaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TetapkanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'index'])->name('auth');
// Route::prefix('')->group(function () {

Auth::routes();
// });
Route::group(['middleware' => ['auth']], function () {
    //Route Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('/user', UserController::class);
});

Route::group(['middleware' => ['auth', 'role: 1,2']], function () {
    Route::resource('data-penerima', PenerimaController::class);
    Route::resource('data-calon', CalonController::class);
    Route::resource('profile', ProfileController::class);
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::resource('settings', SettingsController::class);
    Route::get('/ubah-password/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/ubah-password/{id}', [SettingsController::class, 'update'])->name('settings.update');
    // Route::post('/penerima/tetapkan', [PenerimaController::class, 'tetapkan'])->name('penerima.tetapkan');
    // Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::get('/calon', [CalonPenerimaController::class, 'index']);
    Route::get('/calon/export_excel', [CalonPenerimaController::class, 'export_excel']);
    Route::post('/calon/import_excel', [CalonPenerimaController::class, 'import_excel']);
    Route::post('/calon/tetapkan', [CalonPenerimaController::class, 'tetapkan']);
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/cetak_pdf', [LaporanController::class, 'cetak_pdf'])->name('laporan.cetak_pdf');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/changePassword', [App\Http\Controllers\changePassword::class, 'showChangePasswordGet'])->name('changePasswordGet');
        Route::post('/changePassword', [App\Http\Controllers\changePassword::class, 'changePasswordPost'])->name('changePasswordPost');
    });
});


Route::group(['middleware' => ['auth', 'role: 1']], function () {
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('analisis', AnalisisController::class);
    Route::resource('kelola-akun', AkunController::class);
    Route::get('/kelola-akun', [SettingsController::class, 'kelola'])->name('settings.kelola');
});
