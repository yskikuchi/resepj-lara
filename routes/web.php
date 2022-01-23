<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteController;

Route::get('/', [ShopController::class,'index']);
Route::get('/detail/{shop_id}', [ShopController::class, 'show'])->middleware('verified');

Route::get('/mypage', [UserController::class, 'index'])->middleware('verified');
Route::post('/favorite', [FavoriteController::class, 'store'])->name('favorite')->middleware('verified');
Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy'])->name('unfavorite')->middleware('verified');
Route::post('/booking', [BookingController::class, 'store'])->middleware('verified');
Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->middleware('verified');

Route::get('/thanks', function () {
    return view('thanks');
})->middleware(['verified'])->name('thanks');

require __DIR__.'/auth.php';
