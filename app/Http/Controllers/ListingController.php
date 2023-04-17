<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index() {

        // return view('listings.index', [ // => File
        //     'listings' => Listing::all() // => Variabel $listings yang memanggil method all dari class listing dari model
        // ]);

        return view('listings.index', [ // => File
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) 
            // => Variabel $listings yang memanggil method all dari class listing dari model
            //
        ]);
    }

    // Show single listings
    public function show(Listing $id) {
        return view('listings.show', [
            'listing' => $id // => File / components name / variable
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store listings
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 
            'company')],
            'location' => 'required',
            'title' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

}
