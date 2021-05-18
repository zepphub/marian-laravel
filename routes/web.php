<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Frontpage routes */

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/asesorias', function(){ return view('front.asesorias'); })->name('asesorias');
Route::get('/blog', function(){ return view('front.blog'); })->name('blog');
Route::get('/calendario', function(){ return view('front.calendar'); })->name('calendario');
Route::get('/carrito', function(){ return view('front.carrito'); })->name('carrito');
Route::get('/checkout', function(){ return view('front.checkout'); })->name('checkout');
Route::get('/contacto', function(){ return view('front.contacto'); })->name('contacto');
Route::get('/entrada', function(){ return view('front.entrada'); })->name('entrada');
Route::get('/evento', function(){ return view('front.evento'); })->name('evento');
Route::get('/incrip-exitosa', function(){ return view('front.incrip-exitosa'); })->name('incrip-exitosa');
Route::get('/mentoria', function(){ return view('front.mentoria'); })->name('mentoria');
Route::get('/mentoria-grupal', function(){ return view('front.mentoria-grupal'); })->name('mentoria-grupal');
Route::get('/programa-intensivo', function(){ return view('front.programa-intensivo'); })->name('programa-intensivo');
Route::get('/recursos', function(){ return view('front.recursos'); })->name('recursos');
Route::get('/servicios', function(){ return view('front.servicios'); })->name('servicios');
Route::get('/sobre-mi', function(){ return view('front.sobre-mi'); })->name('sobre-mi');
Route::get('/talleres-y-eventos', function(){ return view('front.talleres-y-eventos'); })->name('talleres-y-eventos');
Route::get('/test', function(){ return view('front.test'); })->name('test');
Route::get('/test-form', function(){ return view('front.test-form'); })->name('test-form');


/* Admin Routes */

Route::prefix('/admin')
  ->name('admin.')
  ->middleware(['auth', 'is_admin'])
  ->namespace('App\Http\Controllers')
  ->group(function(){
    Route::get('/', 'HomeController@adminIndex')->name('index');

    Route::get('/servicios', function(){ return view('admin.services'); })->name('services');

    Route::get('/newsletter', function(){ return view('admin.newsletter'); })->name('newsletter');

    Route::group(['prefix'=>'csv'], function(){
      Route::get('/tests', function(){ return view('admin.csv.tests'); })->name('csv.tests');
      Route::get('/forms', function(){ return view('admin.csv.forms'); })->name('csv.forms');
      Route::get('/resources', function(){ return view('admin.csv.resources'); })->name('csv.resources');
      Route::get('/suscriptors', function(){ return view('admin.csv.suscriptors'); })->name('csv.suscriptors');
    });

    Route::resources([
      'resources' => ResourceController::class,
      'events' => EventController::class,
      'categories' => CategoryController::class,
      'posts' => PostController::class,
      'counselings' => CounselingController::class,
      'mentorships' => MentorshipController::class,
    ]);
});

