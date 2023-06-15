<?php

use Illuminate\Support\Facades\Route;

// include controller
// use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\HomeController;


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
Route::get('/properti', [PropertiController::class, 'index'])->name('properti.index');
Route::get('/properti/create', [PropertiController::class, 'create'])->name('properti.create');

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('login', [HomeController::class,'login'])->name('login');
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
Route::get('/penyewa', [HomeController::class,'penyewa'])->name('penyewa');


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return 'hello world';
// });

// Route::get('/hello', [AnggotaController::class, 'hello'])->name('anggota.hello');
// Route::get('/hw', [AnggotaController::class, 'hw'])->name('anggota.hw');


// Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
// Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');

// // // route anggota store
// Route::post('anggota', [AnggotaController::class, 'store'])->name('anggota.store');

// // // route anggota edit
// Route::get('anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');

// // // route anggota update
// Route::put('anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');

// // // route anggota delete
// Route::delete('anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');


// // route resource anggota
// // Route::resource('anggota', AnggotaController::class);