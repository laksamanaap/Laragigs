<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Listing;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;

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

// All Listing
Route::get('/' , function() {
    return view('listings', [ // => File
        'heading' => "Latest Listings", // => Variabel $heading
        'listings' => Listing::all() // => Variabel $listings yang memanggil method all dari class listing
    ]);
});
// => Route default yang menampilkan data(model) dari listing dan memanggil fungsi(method) all 
// pada class listing


// Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
// => Route listing yang menampilkan data(model) dari listing dan menyesuaikan route sesuai dengan id listing tersebut
// melalui fungsi(method) find pada class listing 




// Route::get('/posts/{id}', function($id) { // Send data $id to parameter
//     // dd($id); // Mencari error (Debugging)
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // Integer Only


// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city; // Request data dari url
// });