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


Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');
Route::get('/categorias', 'App\Http\Controllers\CategoryController@index')->name('categories');
Route::get('/recursos', function(){ return view('resources'); })->name('resources');

Route::prefix('/admin')
  ->name('admin.')
  ->middleware(['auth', 'is_admin'])
  ->namespace('App\Http\Controllers')
  ->group(function(){
    Route::get('/', 'HomeController@adminIndex')->name('index');

    Route::get('/servicios', function(){ return view('admin.services'); })->name('services');
    Route::get('/consultorias', function(){ return view('admin.mentorship_personal'); })->name('mentorship_personal');
    Route::get('/mentorias', function(){ return view('admin.mentorship_group'); })->name('mentorship_group');

    Route::get('/newsletter', function(){ return view('admin.newsletter'); })->name('newsletter');

    Route::group(['prefix'=>'csv'], function(){
      Route::get('/tests', function(){ return view('admin.csv.tests'); })->name('csv.tests');
      Route::get('/forms', function(){ return view('admin.csv.forms'); })->name('csv.forms');
      Route::get('/resources', function(){ return view('admin.csv.resources'); })->name('csv.resources');
      Route::get('/suscriptors', function(){ return view('admin.csv.suscriptors'); })->name('csv.suscriptors');
    });

    Route::group(['prefix'=>'eventos'], function(){
      Route::get('/', function(){ return view('admin.events'); })->name('events');
      Route::get('/nuevo', function(){ return view('admin.events_new'); });
      Route::get('/editar/{id}', function(){ return view('admin.events_edit'); });
    });
    Route::group(['prefix'=>'posts'], function(){
      Route::get('/', 'PostController@index')->name('posts');
      Route::get('/nuevo', 'PostController@create')->name('posts.new');
      Route::get('/editar/{id}', 'PostController@create')->name('posts.edit');
      Route::get('/mostrar/{id}', 'PostController@show')->name('posts.show');
    });
    Route::group(['prefix'=>'categorias'], function(){
      Route::get('/', 'CategoryController@list')->name('categories');
      Route::post('/', 'CategoryController@store')->name('categories.new');
      // Route::get('/new', [App\Http\Controllers\CategoryController::class, 'create'])->name('blog.create');
      // Route::get('{cat}', [App\Http\Controllers\CategoryController::class, 'show'])->name('blog.show');
      Route::get('/delete/{id}', 'CategoryController@delete')->name('categories.delete');
    });
    Route::group(['prefix'=>'recursos'], function(){
      Route::get('/', function(){ return view('admin.resources'); })->name('resources');
      Route::get('/nuevo', function(){ return view('admin.resources_new'); })->name('resources.new');
    });

});

