<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\MailController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/itineraries', [ItineraryController::class, 'index'])->name('itineraries');

Route::get('/itineraries/{post}', [ItineraryController::class, 'show'])->name('itinerary');

Route::get('/destinations/{destination}', function ($destination) {
    $title = "Avoga Holidays || " . ucfirst($destination);
    return view('destinations/' . $destination, compact('title'));
});


Route::get('/about', function () {
    $title = "Avoga Holidays || About";
    return view('about', compact('title'));
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
   


Route::get('/testimonials', function () {
    $title = "Avoga Holidays || Testimonials";
    return view('testimonials', compact('title'));
});

Route::get('/contact', function () {
    $title = "Avoga Holidays || Contact Us";
    return view('contact', compact('title'));
});

Route::get('/success', function () {
    $title = "Avoga Holidays || Your Email Sent";
    return view('success', compact('title'));
})->name('success');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::post('/send-markdown-mail', [MailController::class, 'sendOfferMail'])->name('send_mail');

Route::group(['middleware' => 'auth.is_admin'], function () {
    // Route::resource('posts', App\Http\Controllers\PostController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

Route::group(['middleware' => 'auth.is_Ad_Or_Ed'], function () {
    Route::resource('posts', App\Http\Controllers\PostController::class);
    Route::resource('homepage', App\Http\Controllers\HomepageController::class);
    Route::put('homepage/{id}/attach', [App\Http\Controllers\HomepageController::class, 'attach'])->name('homepage.attach');
    });
