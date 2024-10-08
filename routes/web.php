<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RoomkindController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PostController;
use App\Models\Roomkind;

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

Route::get('/guest',[GuestController::class,'index']);
Route::get('/reserve',[ReserveController::class,'index']);
Route::get('/detail',[DetailController::class,'showForm'])->name('detail.form');
Route::post('/detail',[DetailController::class, 'search'])->name('detail.search');
Route::get('/roomkind',[RoomkindController::class,'index']);
Route::get('/room',[RoomController::class,'index']);
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/test-view', function() {
    return view('detail_form');
});



Route::get('/', function () {
    return view('welcome');
});
