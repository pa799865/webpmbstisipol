<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,'showIndex'])->name('index');
Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/postLogin', [AuthController::class,'login'])->name('postLogin');
Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
Route::post('/postRegister', [AuthController::class,'register'])->name('postRegister');
Route::middleware(['auth'])->group(function () {
    // Route::post('logout', [AuthController::class,'logout'])->name('logout');
    Route::resource('admin', AdminController::class);
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/edit/home/hero', [KontenController::class,'showHomeHeroForm'])->name('editHomeHero');
    Route::get('/edit/home/services', [KontenController::class,'showHomeServicesForm'])->name('editHomeServices');
    Route::get('/edit/home/features', [KontenController::class,'showHomeFeaturesForm'])->name('editHomeFeatures');
    Route::get('/edit/home/stats', [KontenController::class,'showHomeStatsForm'])->name('editHomeStats');
    Route::get('/edit/home/pricing', [KontenController::class,'showHomePricingForm'])->name('editHomePricing');
    Route::get('/edit/home/cta', [KontenController::class,'showHomeCtaForm'])->name('editHomeCta');
    Route::get('/edit/home/faq', [KontenController::class,'showHomeFaqForm'])->name('editHomeFaq');
    Route::post('/edit/home/hero/update', [KontenController::class, 'updateHomeHero'])
    ->name('updateHomeHero');
    Route::post('/edit/home/services/update', [KontenController::class, 'updateHomeServices'])
    ->name('updateHomeServices');
    Route::post('/edit/home/features/update', [KontenController::class, 'updateHomeFeatures'])
    ->name('updateHomeFeatures');
    Route::post('/edit/home/stats/update', [KontenController::class, 'updateHomeStats'])
    ->name('updateHomeStats');
    Route::post('/edit/home/pricing/update', [KontenController::class, 'updateHomePricing'])
    ->name('updateHomePricing');
    Route::post('/edit/home/cta/update', [KontenController::class, 'updateHomeCta'])
    ->name('updateHomeCta');
    Route::post('/edit/home/faq/update', [KontenController::class, 'updateHomeFaqs'])
    ->name('updateHomeFaqs');

    // Route::post('/tickets/{ticket}/responses', [ResponseController::class,'store'])->name('responses.store');
    // Route::middleware(['cekrole:admin'])->group(function () {
    //     Route::post('/tickets/{ticket}/update-status', [TicketController::class,'updateStatus'])->name('tickets.updateStatus');
    // });
});
