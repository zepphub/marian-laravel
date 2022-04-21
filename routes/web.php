<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormQueryController;
use App\Http\Controllers\NewsletterSubscriptionController;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/consultorias', [App\Http\Controllers\CounselingController::class, 'frontIndex'])->name('consultorias');

Route::get('/blog', [App\Http\Controllers\PostController::class, 'frontIndex'])->name('blog');
Route::get('/blog/{category}', [App\Http\Controllers\PostController::class, 'frontIndex'])->name('blog.category');
Route::get('/blog/{category}/{post}', [App\Http\Controllers\PostController::class, 'frontShow'])->name('blog.post');

Route::get('/calendario', function(){ return view('front.calendar'); })->name('calendario');

Route::get('/carrito', [App\Http\Controllers\CartController::class, 'show'])->name('carrito');
Route::get('/carrito/{service}', [App\Http\Controllers\CartController::class, 'add'])->name('carrito.add');
Route::get('/carrito/{key}/delete', [App\Http\Controllers\CartController::class, 'delete'])->name('carrito.delete');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/order', [App\Http\Controllers\CheckoutController::class, 'order'])->name('order');
Route::get('/order-cancel', [App\Http\Controllers\CheckoutController::class, 'checkoutCancel'])->name('order.cancel');
Route::get('/order-success', [App\Http\Controllers\CheckoutController::class, 'checkoutSuccess'])->name('order.success');

Route::get('/contacto', function(){ return view('front.contacto'); })->name('contacto');
Route::post('/consulta', [App\Http\Controllers\FormQueryController::class, 'store'])->middleware(ProtectAgainstSpam::class)->name('consulta');

Route::get('/incrip-exitosa', function(){ return view('front.incrip-exitosa'); })->name('incrip-exitosa');

Route::get('/mentoria', function(){ return view('front.mentoria'); })->name('mentoria');
Route::get('/mentoria/mentoria-grupal', [App\Http\Controllers\MentorshipController::class, 'showGroup'])->name('mentoria-grupal');
Route::get('/mentoria/asesoria-personalizada', [App\Http\Controllers\MentorshipController::class, 'showSingle'])->name('programa-intensivo');

Route::get('/recursos', [App\Http\Controllers\ResourceController::class, 'frontIndex'])->name('recursos');

Route::get('/servicios', function(){ return view('front.servicios'); })->name('servicios');

Route::get('/sobre-mi', function(){ return view('front.sobre-mi'); })->name('sobre-mi');

Route::get('/talleres-y-eventos', [App\Http\Controllers\EventController::class, 'frontIndex'])->name('talleres-y-eventos');
Route::get('/talleres-y-eventos/{event}', [App\Http\Controllers\EventController::class, 'frontShow'])->name('evento');
Route::post('/talleres-y-eventos/{event}', [App\Http\Controllers\EventController::class, 'subscribe'])->name('suscribir-evento');

Route::get('/test', function(){ return view('front.test'); })->name('test');
Route::get('/test-formulario', function(){ return view('front.test-form'); })->name('test-formulario');
Route::post('/test-formulario', [App\Http\Controllers\TestResultController::class, 'store'] )->name('test-formulario-send');
Route::post('/newsletter-subscription', [App\Http\Controllers\NewsletterSubscriptionController::class, 'store'] )->middleware(ProtectAgainstSpam::class)->name('newsletter-subscription');
Route::post('/recursos/descarga', [App\Http\Controllers\ResourceController::class, 'download'] )->name('recursos-descarga');

/* Admin Routes */

Route::prefix('/admin')
  ->name('admin.')
  ->middleware(['auth', 'is_admin'])
  ->namespace('App\Http\Controllers')
  ->group(function(){
    Route::get('/', 'HomeController@adminIndex')->name('index');

    Route::get('/services', function(){ return view('admin.services'); })->name('services');

    Route::get('/newsletter', [App\Http\Controllers\NewsletterSubscriptionController::class, 'index'])->name('newsletter');

    Route::prefix('/csv')
      ->name('csv.')
      ->group(function(){
      Route::get('/newsletter', [App\Http\Controllers\NewsletterSubscriptionController::class, 'csv'])->name('newsletter');
      Route::get('/test_results/{selection}', [App\Http\Controllers\TestResultController::class, 'csv'])->name('test_results');
      Route::get('/form_queries', [App\Http\Controllers\FormQueryController::class, 'csv'])->name('form_queries');
      Route::get('/resources', [App\Http\Controllers\ResourceController::class, 'csv'])->name('resources');
      Route::get('/event/{event}', [App\Http\Controllers\EventController::class, 'csv'])->name('event');
    });

    Route::resource('counselingdescriptions', CounselingDescriptionController::class)->only(['destroy']);
    Route::resources([
      'resources' => ResourceController::class,
      'events' => EventController::class,
      'categories' => CategoryController::class,
      'posts' => PostController::class,
      'counselings' => CounselingController::class,
      'mentorships' => MentorshipController::class,
    ]);


});

