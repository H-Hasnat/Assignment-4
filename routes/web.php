<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/contacts',[ContactController::class,'contacts']);

Route::get('/contacts/create',function (){
    return view('create');
});

Route::post('/contacts/store',[ContactController::class,'newcontact']);

Route::get('/contacts/{id}/show',[ContactController::class,'show']);

Route::get('/contacts/{id}/edit',[ContactController::class,'edit']);

Route::put('/contacts/{id}/update',[ContactController::class,'update']);

Route::delete('/contacts/{id}/delete',[ContactController::class,'delete']);


Route::post('/contacts/sorting',[ContactController::class,'sorting']);
Route::post('/contacts/search',[ContactController::class,'search']);
