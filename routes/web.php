<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect' ]);

route::get('/', [HomeController::class, 'index' ]);

route::get('/property', [AdminController::class, 'property' ]);

route::post('/uploadproperty', [AdminController::class, 'uploadproperty' ]);