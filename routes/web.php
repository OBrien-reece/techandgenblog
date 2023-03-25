<?php

use App\Http\Controllers\Admin\{
    AdminController,
};
use App\Http\Controllers\WriterRequestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'can:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('dashboard', [AdminController::class, 'index'])->name('index');
   Route::get('users', [AdminController::class, 'show'])->name('show');
});

Route::get('/writer/{writer:name}/request', [WriterRequestController::class, 'writer_request']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
