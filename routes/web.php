<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;

////////////////////////////////////////////////////////////home
Route::get('/', [CategoryController::class, 'index']);

//////////////////////////////////////////////////////////connexion 
Route::get('/connexion', function(){
    return view('connexion');
});
Route::post('/connexion',[ConnexionController::class, 'login']);

/////////////////////////////////////////////////////////signup
Route::get('/signup', function(){
    return view('signup');
});
Route::post('/signup',[ConnexionController::class, 'signup']);


/////////////////////////////////////////////////////////categories
Route::get('/hijabs', function(){
    return view('hijabs');
});
Route::get('/abayas', function(){
    return view('abayas');
});
Route::get('/skirts', function(){
    return view('skirts');
});


