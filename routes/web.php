<?php

use App\Http\Controllers\admin\HomePageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::any('/', [HomeController::class, 'index'])->name('home');


Route::any('/admin', function(){
    return view('auth.login');
});


Route::prefix('admin')->middleware('admin')->group(function(){

    Route::get('/home', [HomePageController::class, 'index'])->name('admin.home');
    Route::any('/home/store', [HomePageController::class, 'store'])->name('admin.home.store');

});

