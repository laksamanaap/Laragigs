<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {

        // return view('listings.index', [ // => File
        //     'listings' => Listing::all() // => Variabel $listings yang memanggil method all dari class listing dari model
        // ]);

        return view('listings.index', [ // => File
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get() 
            // => Variabel $listings yang memanggil method all dari class listing dari model
        ]);
    }

    // Show single listings
    public function show(Listing $id) {
        return view('listings.show', [
            'listing' => $id
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

}
