<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BlokController;
use App\Http\Controllers\InteriorController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailunitController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!  ->middleware('guest');
|
*/

Route::get('/', function () {
    return redirect()->route('user.dashboard');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('register/greeen-bintaro-indah', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register/greeen-bintaro-indah', [RegisterController::class, 'register']);

// Route untuk menampilkan daftar Pengguna
Route::get('pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create')->middleware('auth');
Route::post('pengguna', [PenggunaController::class, 'store'])->name('pengguna.store')->middleware('auth');
Route::get('pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit')->middleware('auth');
Route::put('pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update')->middleware('auth');
Route::delete('pengguna/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy')->middleware('auth');
Route::get('pengguna', [PenggunaController::class, 'pengguna'])->name('admin.pengguna')->middleware('auth');

// Route untuk menampilkan daftar Interior
Route::get('interior', [InteriorController::class, 'interior'])->name('admin.interior')->middleware('auth');
Route::get('interior/create', [InteriorController::class, 'create'])->name('interior.create')->middleware('auth');
Route::post('interior', [InteriorController::class, 'store'])->name('interior.store')->middleware('auth');
Route::get('interior/{id}/edit', [InteriorController::class, 'edit'])->name('interior.edit')->middleware('auth');
Route::put('interior/{id}', [InteriorController::class, 'update'])->name('interior.update')->middleware('auth');
Route::delete('interior/{id}', [InteriorController::class, 'destroy'])->name('interior.destroy')->middleware('auth');

// Route untuk menampilkan daftar blok
Route::get('blok', [BlokController::class, 'blok'])->name('admin.blok')->middleware('auth');
Route::get('blok/create', [BlokController::class, 'create'])->name('blok.create')->middleware('auth');
Route::post('blok', [BlokController::class, 'store'])->name('blok.store')->middleware('auth');
Route::get('blok/{id}/edit', [BlokController::class, 'edit'])->name('blok.edit')->middleware('auth');
Route::put('blok/{id}', [BlokController::class, 'update'])->name('blok.update')->middleware('auth');
Route::delete('blok/{id}', [BlokController::class, 'destroy'])->name('blok.destroy')->middleware('auth');

// Route untuk menampilkan daftar rumah
Route::get('perumahan', [PerumahanController::class, 'perumahan'])->name('admin.perumahan')->middleware('auth');
Route::get('perumahan/create', [PerumahanController::class, 'create'])->name('perumahan.create')->middleware('auth');
Route::post('perumahan', [PerumahanController::class, 'store'])->name('perumahan.store')->middleware('auth');
Route::get('perumahan/{id}/edit', [PerumahanController::class, 'edit'])->name('perumahan.edit')->middleware('auth');
Route::put('perumahan/{id}', [PerumahanController::class, 'update'])->name('perumahan.update')->middleware('auth');
Route::delete('perumahan/{id}', [PerumahanController::class, 'destroy'])->name('perumahan.destroy')->middleware('auth');

// Route untuk menampilkan daftar Question
Route::get('question', [QuestionController::class, 'question'])->name('admin.question')->middleware('auth');
Route::get('question/create', [QuestionController::class, 'create'])->name('question.create')->middleware('auth');
Route::post('question', [QuestionController::class, 'store'])->name('question.store')->middleware('auth');
Route::get('question/{id}/edit', [QuestionController::class, 'edit'])->name('question.edit')->middleware('auth');
Route::put('question/{id}', [QuestionController::class, 'update'])->name('question.update')->middleware('auth');
Route::delete('question/{id}', [QuestionController::class, 'destroy'])->name('question.destroy')->middleware('auth');

// Route untuk menampilkan daftar Contact
Route::get('contact', [ContactController::class, 'contact'])->name('admin.contact')->middleware('auth');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create')->middleware('auth');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store')->middleware('auth');
Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit')->middleware('auth');
Route::put('contact/{id}', [ContactController::class, 'update'])->name('contact.update')->middleware('auth');
Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy')->middleware('auth');

// Route untuk menampilkan daftar Detail Unit
Route::get('detailunit', [DetailunitController::class, 'detailunit'])->name('admin.detailunit')->middleware('auth');
Route::get('detailunit/create', [DetailunitController::class, 'create'])->name('detailunit.create')->middleware('auth');
Route::post('detailunit', [DetailunitController::class, 'store'])->name('detailunit.store')->middleware('auth');
Route::get('detailunit/{id}/edit', [DetailunitController::class, 'edit'])->name('detailunit.edit')->middleware('auth');
Route::put('detailunit/{id}', [DetailunitController::class, 'update'])->name('detailunit.update')->middleware('auth');
Route::delete('detailunit/{id}', [DetailunitController::class, 'destroy'])->name('detailunit.destroy')->middleware('auth');

// Route untuk menampilkan daftar promo
Route::get('promo', [PromoController::class, 'promo'])->name('admin.promo')->middleware('auth');
Route::get('promo/create', [PromoController::class, 'create'])->name('promo.create')->middleware('auth');
Route::post('promo', [PromoController::class, 'store'])->name('promo.store')->middleware('auth');
Route::get('promo/{id}/edit', [PromoController::class, 'edit'])->name('promo.edit')->middleware('auth');
Route::put('promo/{id}', [PromoController::class, 'update'])->name('promo.update')->middleware('auth');
Route::delete('promo/{id}', [PromoController::class, 'destroy'])->name('promo.destroy')->middleware('auth');

// Route untuk menampilkan daftar report
Route::get('report', [ReportController::class, 'report'])->name('admin.report')->middleware('auth');
Route::get('report/create', [ReportController::class, 'create'])->name('report.create')->middleware('auth');
Route::post('report', [ReportController::class, 'store'])->name('report.store')->middleware('auth');
Route::get('report/{id}/edit', [ReportController::class, 'edit'])->name('report.edit')->middleware('auth');
Route::put('report/{id}', [ReportController::class, 'update'])->name('report.update')->middleware('auth');
Route::delete('report/{id}', [ReportController::class, 'destroy'])->name('report.destroy')->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('user', [UserController::class, 'user'])->name('user.dashboard');

Route::get('property', [PropertyController::class, 'property'])->name('user.property');
Route::get('property/{id}', [PropertyController::class, 'show'])->name('property.single');
Route::post('property/quest', [PropertyController::class, 'store'])->name('property.store');

Route::get('services', [ServicesController::class, 'services'])->name('user.services');
Route::get('about', [AboutController::class, 'about'])->name('user.about');

Route::get('kontak', [KontakController::class, 'kontak'])->name('user.kontak');
Route::post('kontak', [KontakController::class, 'store'])->name('questkontak.store');