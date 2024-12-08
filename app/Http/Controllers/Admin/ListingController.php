<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ActType;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;
use App\Models\City;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdatelistingRequest;
use App\Models\State;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $listings = Listing::all(); // Fetch all listings
        
        return view('admin.listing.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::with('children.children')->whereNull('parent_id')->get();
        $acttype = ActType::all();
        $state = State::all(); // Fetch all states
        return view('admin.listing.create', compact('acttype', 'state', 'categories'));
    }
    public function copyl(string $id)
    {
        $news = Listing::findOrFail($id);
        $copyNews = $news->replicate();
        $copyNews->save();
        toastr()->success('Listing copied successfully.');

        

        return redirect()->back();
    }

    /**
     * Fetch cities based on the selected state.
     */
    public function getCitiesByState(Request $request)
    {
        $stateId = $request->state_id;

        if ($stateId) {
            $cities = City::where('state_id', $stateId)->get();
            return response()->json($cities);
        }

        return response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $listing = new Listing();
        $imagePath = handleUpload('images');

       
        $listing->images = $imagePath;
    
        $listing->title = $request->title;
        $listing->sku= $request->sku;
        $listing->shortdescription= $request->shortdescription;
        $listing->description = $request->description;
        $listing->category_id = $request->category_id;
        $listing->price = $request->price;
        $listing->published = $request->published ? 1 : 0;
        $listing->best = $request->best ? 1 : 0;
        $listing->rate = $request->rate ? 1 : 0;
        // Save the listing
        $listing->save();
        toastr()->success('Product created successfully.');
    
        return redirect()->route('admin.listings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $listing = Listing::with(['state', 'city', 'category'])->findOrFail($id); // Ensure category is loaded with listing
        $categories = Category::with('children.children')->whereNull('parent_id')->get();
        // Fetch all states

        return view('admin.listing.edit', compact('listing', 'categories', ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelistingRequest $request, string $id)
    {
        $listing = Listing::findOrFail($id);
        $imagePath = handleUpload('images', $listing);
        
       
        $listing->images = $imagePath ?: $listing->images;
        

        // Update listing details
        $listing->title = $request->title;
        $listing->shortdescription = $request->description;
        $listing->sku = $request->sku;
        $listing->description = $request->description;
       
      
        $listing->price = $request->price;
       
       
        $listing->category_id = $request->category_id; // Update category_id (foreign key)
      
        $listing->published = $request->published ? 1 : 0;
        $listing->best = $request->best ? 1 : 0;
        $listing->rate = $request->rate ? 1 : 0;

        // Save the updated listing
        $listing->save();

        toastr()->success('Listing updated successfully.');

        return redirect()->route('admin.listings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete();
        
        return response(['status' => 'success', 'message' => 'admin.Deleted Successfully!']);
    }
}
