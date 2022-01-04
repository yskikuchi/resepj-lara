<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [ShopController::class,'index']);
Route::get('/detail/{shop_id}', [ShopController::class, 'show'])->middleware('auth');

Route::get('/mypage', [UserController::class, 'index'])->middleware('auth');
Route::post('/favorite', [FavoriteController::class, 'store'])->name('favorite')->middleware('auth');
Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy'])->name('unfavorite')->middleware('auth');
Route::post('/booking', [BookingController::class, 'store'])->middleware('auth');
Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->middleware('auth');

Route::get('/thanks', function () {
    return view('thanks');
})->middleware(['auth'])->name('thanks');

require __DIR__.'/auth.php';
