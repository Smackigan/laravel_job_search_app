<?php

use App\Models;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});