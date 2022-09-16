<?php

use App\Models\Listing;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
Route::prefix('listings')->name('l_')->group(function () {
    // All listings
    Route::get('/',[ListingController::class, 'index'])
    ->name('home');
    //show create form
    Route::get('/create',[ListingController::class, 'create'])
    ->name('create');
    // store listing data
    Route::post('/create',[ListingController::class, 'store'])
    ->name('store');
    // show edit form
    Route::get('/{listing}/edit',[ListingController::class, 'edit'])
    ->name('edit');
    // update listing
    Route::put('/{listing}', [ListingController::class, 'update'])
    ->name('update');
    // delete listing
    Route::delete('/{listing}',[ListingController::class, 'destroy'])
    ->name('delete');
    // Single listing
    Route::get('/{listing}',[ListingController::class, 'show'])
    ->name('listing');
});

    //show register/create form
    Route::get('/register',
    [UserController::class, 'create']);
    