<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() { //show all listing
        return view('listings.index', [
            'listings' => Listing::latest()
            ->filter(request(['tag', 'search']))
            ->paginate(6)
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
    public function store(Request $request) { // store listing data
        $forms = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $forms['logo'] = $request->file('logo')
            ->store('logos', 'public');
        }
        Listing::create($forms);
        return redirect('/')
        ->with('message', 'Listing created successfully!');
    }
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }
    public function update(Request $request, Listing $listing) { // update listing data
        $forms = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $forms['logo'] = $request->file('logo')
            ->store('logos', 'public');
        }
        $listing->update($forms);
        return back()
        ->with('message', 'Listing updated successfully!');
    }
    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect()->route('home')
        ->with('message', 'Listing deleted successfully');
    }
}
