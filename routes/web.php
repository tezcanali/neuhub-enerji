<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PowerStationController;

Route::group(['middleware' => ['web', SetLocale::class]], function () {
    // Türkçe için rotalar (Varsayılan dil)
    Route::get('/haberler/{slug}', [BlogController::class, 'show'])->name('blog.show');

    // İngilizce için rotalar
    Route::get('/en/news/{slug}', [BlogController::class, 'show'])->name('blog.show.en');

    // Türkçe için rotalar (Varsayılan dil)
    Route::get('/santrallerimiz/{slug}', [PowerStationController::class, 'show'])->name('powerplant.show');

    // İngilizce için rotalar
    Route::get('/en/power-plants/{slug}', [PowerStationController::class, 'show'])->name('powerplant.show.en');
});
