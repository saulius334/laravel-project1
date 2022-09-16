<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() { //show all listing
        return view('listings.index', [
            'listings' => Listing::latest()
            ->filter(request(['tag', 'search']))
            ->get()
        ]);
    }

    public function show(Listing $listing) { //show single listing
        return view('listings.show', [
            'listing' => $listing
        ]); 
    }
    public function create() { //show create form
        return view('listings.create');
    }
}
