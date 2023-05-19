<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return inertia('Listing/Index', ['listings' => Listing::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Listing::create($request->all());

        return redirect()->route('listing.index')->with('success', 'Listing created successfully.');
    }

    /* 
    show one Listing
    public function show(string $id)
    {
        return inertia('Listing/Show', ['listing' => Listing::find($id)]);
    }
    */
    public function show(Listing $listing){
        return inertia('Listing/Show', ['listing' => $listing]);
    }
    


    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
