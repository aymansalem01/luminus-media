<?php

use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::view('/booking','booking')->name('booking');
Route::view('/contact','contact')->name('contact');
Route::view('/howWork','howWork')->name('howWork');
Route::view('/service','service')->name('service');
Route::view('/WhySAE','why')->name('why');
Route::view('/ourWorks','ourWork')->name('ourWork');
Route::post('/contact',[SubmitController::class,'contact'])->name('post_contact');
Route::post('book',[SubmitController::class,'booking'])->name('post_booking');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('switchLang');

