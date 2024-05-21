<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\MessageController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/ajout-admin', function () {
    return view('ajout-admin');
});
Route::get('/liste-admin', function () {
    return view('liste-admin');
});
Route::get('/modif-admin', function () {
    return view('modif-admin');
});
Route::get('/ajout-client', function () {
    return view('ajout-client');
});
Route::get('/liste-client', function () {
    return view('liste-client');
});
Route::get('/modif-client', function () {
    return view('modif-client');
});
Route::get('/demande-colis', function () {
    return view('demande-colis');
});
Route::get('/ajout-colis', function () {
    return view('ajout-colis');
});
Route::get('/liste-colis', function () {
    return view('liste-colis');
});
Route::get('/liste-colis-jour', function () {
    return view('liste-colis-jour');
});
Route::get('/modif-colis', function () {
    return view('modif-colis');
});
Route::get('/globalliv-jour', function () {
    return view('globalliv-jour');
});
Route::get('/retour-jour', function () {
    return view('retour-jour');
});
Route::get('/colis-region', function () {
    return view('colis-region');
});
Route::get('/liste-message', function () {
    return view('liste-message');
});
Route::get('/colis-payé', function () {
    return view('colis-payé');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact-front', function () {
    return view('contact-front');
});
Route::get('/colis-front', function () {
    return view('colis-front');
});
Route::get('/ajoutcolis-front', function () {
    return view('ajoutcolis-front');
});


Route::get('/liste-admin',[AdminController::class,'getAdmin']);
Route::get('/demande-colis',[ColisController::class,'getColis']);
Route::get('/liste-colis',[ColisController::class,'getlisteColis']);
Route::get('/liste-client',[AdminController::class,'getClient']);
Route::get('/liste-message',[MessageController::class,'getMsg']);
Route::get('/deleteMessage/{id}',[MessageController::class,'deleteMsg']);
Route::get('/deleteColis/{id}',[ColisController::class,'deleteColis']);
Route::get('/deleteAdmin/{id}',[AdminController::class,'deleteAdmin']);
Route::get('/deleteClient/{id}',[AdminController::class,'deleteClient']);
Route::get('/modifierAdmin/{id}',[AdminController::class,'getAdminId']);
Route::post('/editAdmin',[AdminController::class,'updateAdmin']);