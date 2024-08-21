<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

Route::resource('companies',CompanyCRUDController::class);

Route::get('', function () {
    return view('hello');
});
