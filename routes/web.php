<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\DetailController;

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
    return view('welcome');
});
Route::get('/index', [App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/index', [App\Http\Controllers\HomeController::class,'menu'])->name('index');
//Admin
Route::get('/login', [App\Http\Controllers\AdminController::class,'getLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AdminController::class,'xuliLogin'])->name('login');
Route::get('/logout', [App\Http\Controllers\AdminController::class,'xuliLogout'])->name('logout');
Route::resource('/admin', AdminController::class);
Route::resource('/Category', CategoryController::class);
Route::resource('/Type', TypeController::class);
Route::get('/type/{id}', [App\Http\Controllers\HomeController::class,'types'])->name('type/{id}');
Route::resource('/Object', ObjectController::class);
Route::get('/object/{id}', [App\Http\Controllers\HomeController::class,'objects'])->name('object/{id}');
Route::resource('/Detail', DetailController::class);
Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class,'details'])->name('detail/{id}');
Route::post('/search', [App\Http\Controllers\HomeController::class,'postSearch'])->name('/search');
