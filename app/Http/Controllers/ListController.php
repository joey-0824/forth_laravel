<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListController extends Controller
{
    // show all listings
    public function index() {
        return view('listings', [
            'listing' => \App\Models\Listing::all(),
        ]);
    }

    // show single listing
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
