<?php

use App\Http\Controllers\ListingController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All listings
Route::get('/',
[ListingController::class, 'index'])
->name('home');
//show create form
Route::get('/listings/create',
[ListingController::class, 'create'])
->name('create');
// store listing data
Route::post('/listings',
[ListingController::class, 'store'])
->name('store');
// show edit form
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit'])
->name('edit');
// update listing
Route::put('/listings/{listing}', 
[ListingController::class, 'update'])
->name('update');
// delete listing
Route::delete('/listings/{listing}',
[ListingController::class, 'destroy'])
->name('delete');
// Single listing
Route::get('/listings/{listing}',
[ListingController::class, 'show'])
->name('listing');
