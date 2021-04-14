<?php

<<<<<<< HEAD


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TVController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MoviesController;
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
>>>>>>> 03cdeea39f71b707ff87e0148bbc2d9927796a33
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserSettingController;
<<<<<<< HEAD
use App\Http\Controllers\CreateReviewController;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> 03cdeea39f71b707ff87e0148bbc2d9927796a33

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

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('search', SearchController::class);
Route::get('/movies', [MoviesController::class, 'list']);
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('tv', [TVController::class, 'list']);
Route::get('/tv/{tv}', [TVController::class, 'show'])->name('tv.show');
Route::post('register', RegisterController::class)->middleware('guest');
Route::post('review', [ReviewController::class, 'store'])->middleware('auth');
Route::patch('review/{id}/update', [ReviewController::class, 'update'])->name('review.update')->middleware('auth');
Route::delete('review/{id}/delete', [ReviewController::class, 'destroy'])->name('review.delete')->middleware('auth');
Route::view('authorization', 'login')->name('login')->middleware('guest');
Route::post('login', LoginController::class)->middleware('guest');
Route::get('profile', ProfileController::class)->middleware('auth');
Route::get('logout', LogoutController::class);
Route::view('/settings', 'settings')->middleware('auth');
Route::view('user-reviews', 'user-reviews')->middleware('auth');
Route::post('/user/update', [UserSettingController::class, 'updateUser'])->middleware('auth');
Route::delete('/user/delete', [UserSettingController::class, 'destroy'])->middleware('auth');
Route::patch('/user/upload', [UserSettingController::class, 'uploadAvatar'])->name('upload')->middleware('auth');

