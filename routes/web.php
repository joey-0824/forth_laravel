<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;

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

// route will check the link from top to bottom, so make sure upper one will not block bottom ones

// all listings
Route::get('/', [ListController::class, 'index']);

//
//Route::get('/search/{id}', function ($id) {
//    return response('Post: ' . $id);
//})->where('id', '[0-9]+');
//
//Route::get('/search', function (\Illuminate\Http\Request $request) {
//    dd($request);
//});

// show create listing form
Route::get('/listings/create', [ListController::class, 'create'])->middleware('auth');

// store new listing item
Route::post('/listings', [ListController::class, 'store']);

// edit exsiting listing form
Route::get('/listings/{listing}/edit', [ListController::class, 'edit']);

// Edit submit to Update
Route::put('listings/{listing}', [ListController::class, 'update']);

// Delete listing
Route::delete('listings/{listing', [ListController::class, 'destroy']);

// single listing
Route::get('/listings/{listing}', [ListController::class, 'show']);


// show user register form page
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// create a new user
Route::post('/users', [UserController::class, 'store']);

// user logout
Route::post('/logout', [UserController::class, 'logout']);

// user login page
Route::get('/login', [UserController::class, 'login'])->name('login');

// user authenticate login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

