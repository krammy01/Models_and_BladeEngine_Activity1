<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// REDIRECT ROOT TO BOOK CONTROLLER
Route::redirect('/', 'Books');

// GET RESOURCES OF THE BOOK CONTROLLER
Route::resource('Books', BookController::class);