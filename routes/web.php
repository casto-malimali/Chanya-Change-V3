<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
} );

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/events', function () {
    return view('events');
});
Route::get('/career-development', function () {
    return view('activities.career');
});
Route::get('/advocacy-and-awareness', function () {
    return view('activities.advocacy');
});
Route::get('/events-activities', function () {
    return view('activities.events');
});
Route::get('/publication', function () {
    return view('activities.publication');
});
Route::get('/research-and-consultancy', function () {
    return view('activities.research');
});
Route::get('/secondary-school', function () {
    return view('activities.secondary');
});
Route::get('/capacity-building', function () {
    return view('activities.capacity');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
