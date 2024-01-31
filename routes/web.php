<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\storeSiswa;
use App\Http\Controllers\storeSiswaController;
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

// Route::get('/',function () {
//     return view('kerangka.master');
// });

Route::get('/', [dashboardController::class,'landingpage']);

Route::get('/siswa', [SiswaController::class, 'dataSiswa'])->name('siswa.data');  

Route::get('/view', [ViewController::class, 'datasiswa'])->name('data.siswa');

Route::get('/create-siswa', [CreateController::class, 'inputSiswa'])->name('create.siswa');

Route::post('/post-siswa', [SiswaController::class, 'storeSiswa'])->name('siswa.store');

Route::get('/edit/{id}', [SiswaController::class, 'editSiswa'])->name('edit.siswa');

Route::post('/update-siswa', [SiswaController::class, 'updateSiswa'])->name('update.siswa');

Route::get('/delete/{id}', [SiswaController::class, 'deleteSiswa'])->name('delete.siswa');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/log', [loginController::class, 'login'])->name('login.store');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');

Route::get('/log-out', [registerController::class, 'logout'])->name('siswa.logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [dashboardController::class,'dashboard']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
