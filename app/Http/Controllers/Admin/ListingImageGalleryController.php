<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingImageGallery;
use App\Http\Requests\ListingImg;

class ListingImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $images = ListingImageGallery::where('listing_id', $request->id)->get();
        $listingTitle = Listing::select('title')->where('id', $request->id)->first();
        return view('admin.listing.listing-image-gallery.index',compact('images','listingTitle'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListingImg $request)
    {
       
       

        $imagePaths = $this->uploadMultipleImage($request, 'images');

        foreach($imagePaths as $path) {
            $image = new ListingImageGallery();
            $image->listing_id = $request->listing_id;
            $image->image = $path;
            $image->save();
        }

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }
    private function uploadMultipleImage(Request $request, string $inputName, string $path = '/uploads') : ?array
    {
        if ($request->hasFile($inputName)) {
            $images = $request->{$inputName};
            $paths = [];

            foreach ($images as $image) {
                $ext = $image->getClientOriginalExtension();
                $imageName = 'media_' . uniqid() . '.' . $ext;

                $image->move(public_path($path), $imageName);
                $paths[] = $path . '/' . $imageName;
            }

            return $paths;
        }

        return null;
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
      
            $image = ListingImageGallery::findOrFail($id);
           
            $image->delete();

            
        
    }
}
