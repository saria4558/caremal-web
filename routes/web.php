<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaremalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;



//artikel and landig page
Route::get('/', function () {
    return view('landing');
});
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/BacaSelengkapnya', [BacaController::class, 'index'])->name('BacaSelengkapnya');


// Route::get('/', function () {
//     return view('admin/daftarkontak');
// });
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route untuk form kedua (melengkapi registrasi)
Route::get('/register/complete', function () {
    return view('registerSecond'); // ganti dengan view untuk melengkapi data
})->name('register.complete');

// Route untuk men-submit data form pertama
Route::post('/register/first', [RegisterController::class, 'handleFirstForm'])->name('register.first');

// Route untuk men-submit data form kedua
Route::post('/register/complete', [RegisterController::class, 'handleSecondForm'])->name('register.complete.post');

// Route login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


// Route untuk login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login-proses', [LoginController::class, 'login'])->name('login-proses');

// // Route untuk menampilkan halaman register
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// // Route untuk menerima data dari form pertama (data umum user)
// Route::post('/register', [RegisterController::class, 'register'])->name('register.first');

// // Route untuk menerima data dari form kedua (username & password)
// Route::post('/register/complete', [RegisterController::class, 'completeRegistration'])->name('register.complete');

// // Route untuk logout
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/daftarkontak', function () {
    return view('admin/daftarkontak');
});
Route::get('/admin/daftarpuskeswan', function () {
    return view('admin/daftarpuskeswan');
});

Route::get('/admin/daftardoktor', [CaremalController::class, 'dokter'] )->name('event');
Route::get('/admin/daftarkontak', [CaremalController::class, 'shelter'] )->name('event');
Route::get('/tambah', [CaremalController::class, 'tambah'] )->name('tambah');
Route::post('/insert', [CaremalController::class, 'insert'] )->name('insert');
Route::post('/insertkontak', [CaremalController::class, 'insertkontak'] )->name('insertkontak');
// Route::get('/tampilkandata/{id}', [CaremalController::class, 'tampilkandata'])->name('tampilkandata');
// Route::post('/updatedata/{id}', [CaremalController::class, 'updatedata'])->name('updatedata');
// Route::put('/updatedata/{id}', [CaremalController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [CaremalController::class, 'deletedata'] )->name('deletedata');
Route::get('/deletedatakontak/{id}', [CaremalController::class, 'deletedatakontak'] )->name('deletedatakontak');
Route::put('/updatedata/{id}', [CaremalController::class, 'updatedata'])->name('updatedata');
Route::get('/tampilkandata/{id}', [CaremalController::class, 'tampilkandata'])->name('tampilkandata');


// Dokter

Route::get('/dokter/home', [DokterController::class, 'index'])->name('dokterhome');