<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Listing;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
// use App\Models\User;


class ListingController extends Controller
{
    
    public function index(Request $request) { //show all listing
        $listings = match ($request->sort) {
            'date_asc' => Listing::orderBy('date', 'asc')->get(),
            'date_desc' => Listing::orderBy('date', 'desc')->get(),
            'name_asc' => Listing::orderBy('name', 'asc')->get(),
            'name_desc' => Listing::orderBy('name', 'desc')->get(),
            default => Listing::all()
        };


        return view('listings.index', [
            'listings' => Listing::latest()
            ->filter(request(['tag', 'search']))
            ->paginate(6),
            'sortSelect' => $request->sort
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
        $forms['user_id'] = auth()->id();
        Listing::create($forms);
        return redirect()->route('l_home')
        ->with('message', 'Listing created successfully!');
    }
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }
    public function update(Request $request, Listing $listing) { // update listing data
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }

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
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }
        $listing->delete();
        return redirect()->route('l_home')
        ->with('message', 'Listing deleted successfully');
    }
    public function manage() {
        return view('listings.manage', [
            'listings' => auth()->user()->listings()->get()
        ]);
    }
}
