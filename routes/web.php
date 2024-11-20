<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CardController;
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
    return view('auth.login');
});


Route::get('/contact', function (){
    return view('/contact');
});
Route::get('/admin-ajout', function (){
    return view('/admin-ajout');
});
Route::get('/client-ajout', function (){
    return view('/client-ajout');
});
Route::get('/card-ajout', function (){
    return view('/card-ajout');
});
Route::get('/profile', function (){
    return view('/profile');
});
Route::get('/read-email', function (){
    return view('/read-email');
});


//get routes
Route::get('/admin-list',[AdminController::class,'GetAdmin'])->name('admin-list');//list admin
Route::get('/client-list',[ClientController::class,'GetClient'])->name("client-list");//list Client
route::get('/card-list',[CardController::class,'GetCard'])->name("card-list");//list Card
route::get('/contact',[ContactController::class,'GetContact'])->name("contact");//list Card
Route::get('/ReadEmail/{id}',[ContactController::class,'GetContactReadEamil']);

//add routes
Route::post('/add-admin',[AdminController::class,'AddAdmin']);
Route::post('/add-client',[ClientController::class,'AddClient']);
Route::post('/add-card',[CardController::class,'AddCard']);

//delete routes
Route::get('/DeleteAdmin/{id}',[AdminController::class,'DeleteAdmin']);
Route::get('/DeleteClient/{id}',[ClientController::class,'DeleteClient']);
Route::get('/DeleteCard/{id}',[CardController::class,'DeleteCard']);

//modify routes Admin
Route::get('/admin-modif/{id}',[AdminController::class,'GetAdminById']);
Route::post('/modifadmin',[AdminController::class,'UpdateAdmin']);
//modify routes Card
Route::get('/editcarde/{id}',[CardController::class,'GetCardById']);
Route::post("/modifcard",[CardController::class,'updatecard']);
Route::get('/search', [CardController::class, 'search'])->name('search'); 
//modify routes Client
Route::get('/clientmodif/{id}',[ClientController::class,'GetClientById']);
Route::post("/modifclient",[ClientController::class,'ModifClients']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//notification Count
route::get('/theme',[ContactController::class,'countnotif']);
Route::post('/update-status', [StatusController::class, 'updateStatus'])->name('update-status');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
