<?php

use App\Http\Controllers\Admin\{AdminController, NotificationController};
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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

Auth::routes();

Route::group(['middleware' => 'can:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
   Route::get('dashboard', [AdminController::class, 'index'])->name('index');
   Route::get('users', [AdminController::class, 'show'])->name('show');
});

Route::group(['middleware' => 'can:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('messages', [NotificationController::class, 'index'])->name('messages');
    Route::get('reject/{notification}', [NotificationController::class, 'revoke_request'])->name('notification.reject');
    Route::get('accept/{notification}', [NotificationController::class, 'accept_request'])->name('notification.accept');
});

Route::post('/writer/{writer:name}/request', [WriterRequestController::class, 'writer_request'])->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['as' => 'author.', 'prefix' => 'author'], function () {
       Route::get('{author:slug}', [AuthorController::class, 'show'])->name('show');
    });
});

Route::group(['middleware' => 'auth', 'as' => 'article.'] ,function () {
    Route::get('/home', [ArticlesController::class, 'index'])->name('index');
    Route::get('/', [ArticlesController::class, 'index']);
    Route::post('/article', [ArticlesController::class, 'store'])->name('store');
    Route::get('/article/{article:slug}', [ArticlesController::class, 'show'])->name('show');

    Route::group(['middleware' => ['role:writer']], function () {
        Route::get('/articles/create', [ArticlesController::class, 'create'])->name('create');
    });
});

Route::group(['middleware' => 'auth', 'as' => 'category'], function () {
   Route::get("/category/{category:slug}", [CategoryController::class, 'show'])->name('show');
});
