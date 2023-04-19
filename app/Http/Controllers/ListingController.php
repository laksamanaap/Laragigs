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
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing // => File / components name / variable
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
        } // => Jika user mengupload file pada form, maka sistem akan
        // mengirim field logo dan file yang dikirim oleh user tadi akan 
        // disimpan pada folder app/public/logos sesuai yang kita atur pada 'filesystems.php'

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

    

}
