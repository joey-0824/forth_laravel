<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

Route::get('/', [ListController::class, 'index']);

Route::get('/listings/{listing}', [ListController::class, 'show']);


Route::get('/search/{id}', function ($id) {
    return response('Post: ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (\Illuminate\Http\Request $request) {
    dd($request);
});
