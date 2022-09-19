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
Route::get('/login', [UserController::class, 'login']) //middleware auth route
->name('login'); 


Route::prefix('listings')->name('l_')->group(function () {
    // All listings
    Route::get('/',[ListingController::class, 'index'])
    ->name('home');
    //show create form
    Route::get('/create',[ListingController::class, 'create'])
    ->name('create')
    ->middleware('auth');
    // store listing data
    Route::post('/create',[ListingController::class, 'store'])
    ->name('store')
    ->middleware('auth');
    // show edit form
    Route::get('/{listing}/edit',[ListingController::class, 'edit'])
    ->name('edit')
    ->middleware('auth');
    // update listing
    Route::put('/{listing}', [ListingController::class, 'update'])
    ->name('update')
    ->middleware('auth');
    // delete listing
    Route::delete('/{listing}',[ListingController::class, 'destroy'])
    ->name('delete')
    ->middleware('auth');
    // Manage Listings
    Route::get('/manage', [ListingController::class, 'manage'])
    ->name('manage')
    ->middleware('auth');
    // Single listing
    Route::get('/{listing}',[ListingController::class, 'show'])
    ->name('listing');
});
Route::prefix('user')->name('u_')->group(function () {
    //show register/create form
    Route::get('/register',[UserController::class, 'create'])
    ->name('create')
    ->middleware('guest');
    //create new user
    Route::post('/', [UserController::class, 'store'])
    ->name('store');
    //show login screen
    Route::get('/login',[UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');
    //log in
    Route::post('/authenticate',[UserController::class, 'authenticate'])
    ->name('authenticate');
    //logout
    Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

});
    