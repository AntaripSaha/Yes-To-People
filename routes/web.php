<?php

use App\Http\Controllers\admin\BlogController;
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

    // Information Start
    Route::get('/info', [HomePageController::class, 'info'])->name('admin.info');
    Route::post('/info/store', [HomePageController::class, 'info_store'])->name('admin.info.store');
    // Information End
    
    // Home Pages Start 
    Route::get('/home', [HomePageController::class, 'home'])->name('admin.home');
    Route::any('/home/store', [HomePageController::class, 'store'])->name('admin.home.store');
    Route::any('/home/delete/{id}', [HomePageController::class, 'delete'])->name('admin.home.delete');
    // Home Pages End
    
    //About Pages Start
    Route::any('/about', [HomePageController::class, 'about'])->name('admin.about');
    Route::any('/about/store', [HomePageController::class, 'about_store'])->name('admin.about.store');
    //About Pages End

    // Description Pages Start
    Route::any('/description', [HomePageController::class, 'description'])->name('admin.description');
    Route::any('/mission/store', [HomePageController::class, 'mission_store'])->name('admin.mission.store');
    Route::any('/privacy/store', [HomePageController::class, 'privacy_store'])->name('admin.privacy.store');
    Route::any('/terms/store', [HomePageController::class, 'terms_store'])->name('admin.terms.store');
    // Description Pages End

    // Service Pages Start 
    Route::get('/service', [HomePageController::class, 'service'])->name('admin.service');
    Route::any('/service/store', [HomePageController::class, 'service_store'])->name('admin.service.store');
    Route::any('/service/view/{id}', [HomePageController::class, 'service_view'])->name('admin.service.view');
    Route::any('/service/update/{id}', [HomePageController::class, 'service_update'])->name('admin.service.update');
    Route::any('/service/delete/{id}', [HomePageController::class, 'service_delete'])->name('admin.service.delete');
    // Service Pages End

    // Blog Pages Start 
    Route::get('/blog', [BlogController::class, 'blog'])->name('admin.blog');
    Route::any('/blog/store', [BlogController::class, 'blog_store'])->name('admin.blog.store');
    Route::any('/blog/view/{id}', [BlogController::class, 'blog_view'])->name('admin.blog.view');
    Route::any('/blog/update/{id}', [BlogController::class, 'blog_update'])->name('admin.blog.update');
    Route::any('/blog/delete/{id}', [BlogController::class, 'blog_delete'])->name('admin.blog.delete');
    // Blog Pages End
});

