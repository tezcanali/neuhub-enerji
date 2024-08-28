<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;

Route::get('/blog/{slug}', [BlogController::class, 'show']);
