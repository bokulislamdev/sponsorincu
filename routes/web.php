<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE';
});


Route::namespace('Web')->group(function () {
    Route::get('/', 'WebController@homepage')->name('homepage');
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/contact', 'WebController@contact')->name('contact');
    Route::post('/contact/store', 'WebController@contactStore')->name('contact.store');
    Route::get('/blog-details/{slug}', 'WebController@blogDetails')->name('blog.details');
    Route::get('/blog', 'WebController@blog')->name('blog');
    Route::post('/subscribe', 'WebController@subscribe')->name('subscribe');
    Route::get('/events', 'WebController@event')->name('event');
    Route::get('/events/category', 'WebController@eventcategory')->name('event.category');
    Route::get('/events/details/{slug}', 'WebController@eventDetails')->name('event.details');
    Route::post('/events/request', 'WebController@eventRequest')->name('event.request.store');
    Route::get('/service', 'WebController@service')->name('service');
    

});


Route::get('/dashboard', function () {
    return view('account.admin.dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/marketer.php';
require __DIR__ . '/organizer.php';
require __DIR__ . '/sponsor.php';
