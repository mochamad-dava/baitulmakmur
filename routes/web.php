<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "Profil"
    ]);
});

Route::get('/article', function () {
    return view('article', [
        "tittle" => "Article"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "tittle" => "Gallery"
    ]);
});




Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});
Route::get('/home', function () {
    return redirect('/dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/dashboard/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/dashboard/guru', [AdminController::class, 'guru'])->middleware('userAkses:guru');
    Route::get('/logout', [SesiController::class, 'logout']);
});
