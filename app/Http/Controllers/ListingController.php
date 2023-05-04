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
            // => paginate() merupakan sebuah fungsi yang tersedia pada laravel untuk mengatur
            // halaman yang dapat dilihat oleh user
        ]);
    }

    // Show single listings
    public function show(Listing $listing) { // ('/listings/ "{listing}" come from
        return view('listings.show', [
            'listing' => $listing // => File / components name / variable
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        
        
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
    
    // Show Edit form
    public function edit(Listing $listing) {
        return view('listings.edit', [ // => File
            'listing' => $listing
        ]);
    }

    // Update listings
    public function update(Request $request, Listing $listing) {
        
        if($listing->user_id != $listing->user_id) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'title' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        } // => Jika user mengupload file pada form, maka sistem akan
        // mengirim field logo dan file yang dikirim oleh user tadi akan 
        // disimpan pada folder app/public/logos sesuai yang kita atur pada 'filesystems.php'

        $listing->update($formFields);

        return redirect('/')->with('message', 'Listing updated successfully!');
    }

    public function destroy(Listing $listing) {
        
        $listing->delete();
        
        return redirect('/')->with('message','Listing deleted successfully');
    }

     // Manage Listings
     public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
    
}
