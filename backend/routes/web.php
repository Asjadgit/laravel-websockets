<?php

use App\Events\NotificationEvent;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact-us',[ContactController::class,'show']);
Route::post('/store',[ContactController::class,'store'])->name('contact.store');


Route::get('/test', function () {
    event(new NotificationEvent('Testing Web Socket'));
    Log::info('Notification event dispatched.');
    return response()->json(['message' => 'Event dispatched.']);
});

