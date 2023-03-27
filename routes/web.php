<?php

use App\Http\Controllers\Admin\{AdminController, NotificationController};
use App\Http\Controllers\ArticlesController;
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

Route::group(['middleware' => 'can:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('dashboard', [AdminController::class, 'index'])->name('index');
   Route::get('users', [AdminController::class, 'show'])->name('show');
   Route::get('messages', [NotificationController::class, 'index'])->name('messages');
   Route::get('notification/{notification}', [NotificationController::class, 'delete'])->name('notification.delete');
});

Route::get('/writer/{writer:name}/request', [WriterRequestController::class, 'writer_request']);

Auth::routes();

Route::group(['middleware' => 'auth', 'as' => 'articles.'], function () {
    Route::get('/home', [ArticlesController::class, 'index'])->name('index');
    Route::get('/', [ArticlesController::class, 'index']);
});
