<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit']);

Route::get('/graphic-design', function () {
    return view('graphic-design');
})->name('graphic-design');

Route::get('/uiux-design', function () {
    return view('uiux-design');
})->name('uiux-design');

Route::get('/web-design', function () {
    return view('web-design');
})->name('web-design');

Route::get('/app-design', function () {
    return view('app-design');
})->name('app-design');

Route::get('/apps/task-manager', function () {
    return view('apps.task-manager');
})->name('apps.task-manager');

Route::get('/apps/fitness-tracker', function () {
    return view('apps.fitness-tracker');
})->name('apps.fitness-tracker');

Route::get('/apps/food-delivery', function () {
    return view('apps.food-delivery');
})->name('apps.food-delivery');

Route::get('/apps/music-player', function () {
    return view('apps.music-player');
})->name('apps.music-player');

Route::get('/apps/weather', function () {
    return view('apps.weather');
})->name('apps.weather');

Route::get('/apps/chat-messenger', function () {
    return view('apps.chat-messenger');
})->name('apps.chat-messenger');

Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index']);
Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store']);
