<?php

use App\Models;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
Route::get('/',[ListingController::class, 'index']);
// => Route default yang menampilkan data(model) dari listing dan memanggil fungsi(method) all 
// pada class listing

// Show create form listing
Route::get('/listings/create', [ListingController::class, 'create']);


// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// => Route listing yang menampilkan data(model) dari listing dan menyesuaikan route sesuai dengan id listing tersebut
// melalui fungsi(method) find pada class listing 

// Show Register Form
Route::get('/register', [UserController::class, 'create']);

// Create User
Route::post('/users', [UserController::class, 'store']);

// Route::get('/posts/{listing}', function($id) { // Send data $id to parameter
//     // dd($id); // Mencari error (Debugging)
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // Integer Only


// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city; // Request data dari url
// });