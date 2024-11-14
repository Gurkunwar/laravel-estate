<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

route::get('/showproperty', [AdminController::class, 'showproperty' ]);

route::get('/deleteproperty/{id}', [AdminController::class, 'deleteproperty' ]);

route::get('/updateview/{id}', [AdminController::class, 'updateview' ]);

route::post('/updateproperty/{id}', [AdminController::class, 'updateproperty' ]);

route::get('/search', [HomeController::class, 'search' ]);

route::post('/addfavourite/{id}', [HomeController::class, 'addfavourite' ]);

Route::get('/showfavourite', [HomeController::class, 'showfavourite']);

Route::get('/deletefavourite/{id}', [HomeController::class, 'deletefavourite']);

Route::get('/ourproperties', [HomeController::class, 'ourproperties']);

Route::get('/aboutus', [HomeController::class, 'aboutus']);

Route::get('/contactus', [HomeController::class, 'contactus']);

Route::get('/showenquiries', [AdminController::class, 'showenquiries']);

Route::post('/submitenquiry/{id}', [HomeController::class, 'submitenquiry']);

Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

Route::get('/deletestatus/{id}', [AdminController::class, 'deletestatus']);