<?php

use App\Http\Controllers\SubmitController;
use Illuminate\Support\Facades\Route;

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
