<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::redirect('/', '/contact');

Route::resource('contact', ContactController::class);
