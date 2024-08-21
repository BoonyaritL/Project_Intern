<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

Route::resource('companies', CompanyCRUDController::class);

Route::get('/', function () {
    return redirect('/companies'); // เมื่อเข้าหน้าแรก จะ redirect ไปที่ /companies
});