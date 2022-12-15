<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/admin', function () {
    return view('dashboard', [ "content" => "dashboard" ]);
});

Route::get('/admin/content-adopt', function () {
    return view('content.post-adopt', [ "content" => "post" ]);
});

Route::get('/admin/chat', function () {
    return view('content.chat', [ "content" => "chat" ]);
});

Route::get('/admin/gallery', function () {
    return view('content.gallery', [ "content" => "gallery" ]);
});

Route::get('/admin/customers', [CustomerController::class, 'index']);

Route::get('/admin/order-ongoing', function () {
    return view('content.order-ongoing', [ "content" => "order" ]);
});

Route::get('/admin/order-history', function () {
    return view('content.order-history', [ "content" => "order" ]);
});

Route::get('/admin/employee-working', [EmployeeController::class, 'index']);

Route::get('/admin/form', function () {
    return view('content.form', [ "content" => "form" ]);
});

Route::get('/admin/form-cat', function () {
    return view('content.form-cat', [ "content" => "form" ]);
});