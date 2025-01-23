<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardDomController;
use App\Http\Controllers\DashboardUsaController;
use App\Http\Controllers\VerivikasiController;
use App\Http\Controllers\sktmControlller;
use App\Http\Controllers\SkkController;
use App\Http\Controllers\PikController;
use App\Http\Controllers\SpphController;
use App\Http\Controllers\SapiController;
use App\Http\Controllers\HajatController;
use App\Http\Controllers\Skspcontroller;
use App\Http\Controllers\Sklncontroller;
use App\Http\Controllers\Skbicontroller;
use App\Http\Controllers\Skpscontroller;
use App\Http\Controllers\Telahmenikahcontroller;
use App\Http\Controllers\Izinsuamicontroller;


Route::get('/dashboard/izinsuami/{id}/cetak', [Izinsuamicontroller::class, 'cetak'])->name('izinsuami.cetak');
Route::resource('/dashboard/izinsuami', Izinsuamicontroller::class);
Route::get('/dashboard/telahmenikah/{id}/cetak', [Telahmenikahcontroller::class, 'cetak'])->name('telahmenikah.cetak');
Route::resource('/dashboard/telahmenikah', Telahmenikahcontroller::class);
Route::get('/dashboard/skps/{id}/cetak', [Skpscontroller::class, 'cetak'])->name('skps.cetak');
Route::resource('/dashboard/skps', Skpscontroller::class);
Route::get('/dashboard/skbi/{id}/cetak', [Skbicontroller::class, 'cetak'])->name('skbi.cetak');
Route::resource('/dashboard/skbi', Skbicontroller::class);
Route::get('/dashboard/skln/{id}/cetak', [Sklncontroller::class, 'cetak'])->name('skln.cetak');
Route::resource('/dashboard/skln', Sklncontroller::class);
Route::get('/dashboard/sksp/{id}/cetak', [Skspcontroller::class, 'cetak'])->name('sksp.cetak');
Route::resource('/dashboard/sksp', Skspcontroller::class);
Route::get('/dashboard/suratjalansapi/{id}/cetak', [SapiController::class, 'cetak'])->name('suratjalansapi.cetak');
Route::resource('/dashboard/suratjalansapi', SapiController::class);
Route::get('/dashboard/hajat/{id}/cetak', [HajatController::class, 'cetak'])->name('hajat.cetak');
Route::resource('/dashboard/hajat', HajatController::class);
Route::get('/dashboard/SPPH/{id}/cetak', [SpphController::class, 'cetak'])->name('spph.cetak');
Route::resource('/dashboard/SPPH', SpphController::class);
Route::get('/dashboard/permohonankeramaian/{id}/cetak', [PikController::class, 'cetak'])->name('pik.cetak');
Route::resource('/dashboard/permohonankeramaian', PikController::class);
Route::resource('/dashboard/kematian', SkkController::class);
Route::get('/dashboard/kematian/{id}/cetak', [SkkController::class, 'cetak'])->name('skk.cetak');
Route::resource('/dashboard/sktm', sktmControlller::class);
Route::get('/dashboard/sktm/{id}/cetak', [sktmControlller::class, 'cetak'])->name('sktm.cetak');
Route::get('/surat/{hash}', [VerivikasiController::class, 'getSuratData']);



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

Route::get('/', [HomeController::class, 'index']);

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/cetak_pdf', [DashboardController::class, 'cetak_pdf'])->middleware('auth');

Route::get('/dashboard/domisili/{domisili:noSurat}/cetak', [DashboardDomController::class, 'cetak'])->middleware('auth');
Route::get('/dashboard/usaha/{usaha:noSurat}/cetak', [DashboardUsaController::class, 'cetak'])->middleware('auth');
Route::resource('/dashboard/domisili', DashboardDomController::class)->middleware('auth');
Route::resource('/dashboard/usaha', DashboardUsaController::class)->middleware('auth');


// Route::get('/dashboard/domisili/cetak_pdf', [DashboardDomController::class, 'cetak_pdf'])->middleware('auth');
