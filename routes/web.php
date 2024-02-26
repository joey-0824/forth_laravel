<?php

use Illuminate\Support\Facades\Route;

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
    return view('listings', [
        'title' => 'Total Listing',
        'listing' => \App\Models\Listing::all(),
    ]);
});

Route::get('/listings/{listing}', function (\App\Models\Listing $listing) {
   return view('listing', [
       'listing' => $listing
   ]);
});


Route::get('/search/{id}', function ($id) {
    return response('Post: ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (\Illuminate\Http\Request $request) {
    dd($request);
});
