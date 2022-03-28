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

    Route::get('/info', [HomePageController::class, 'info'])->name('admin.info');

    // Home Pages Start 
    Route::get('/home', [HomePageController::class, 'home'])->name('admin.home');
    Route::any('/home/store', [HomePageController::class, 'store'])->name('admin.home.store');
    Route::any('/home/store/{id}', [HomePageController::class, 'delete'])->name('admin.home.delete');
    // Home Pages End
    
    //About Pages Start
    Route::any('/about', [HomePageController::class, 'about'])->name('admin.about');
    //About Pages End
});

