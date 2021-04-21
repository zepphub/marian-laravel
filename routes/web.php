<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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


//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::group(['prefix'=>'blogs'], function(){
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('/new', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::get('{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
});

Route::group(['prefix'=>'categories'], function(){
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::post('', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    // Route::get('/new', [App\Http\Controllers\CategoryController::class, 'create'])->name('blog.create');
    // Route::get('{cat}', [App\Http\Controllers\CategoryController::class, 'show'])->name('blog.show');
    Route::get('{cat}/delete', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
});

Route::group(['prefix'=>'mentorings'], function(){
    Route::get('/mentoring', [App\Http\Controllers\BlogController::class, 'index'])->name('metonring');
    Route::get('/mentoring/new', [App\Http\Controllers\BlogController::class, 'create'])->name('mentoring.create');
});

Auth::routes();
/*Route::get('/', function(){
    return view('blog.servicios_tye');
}
);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
