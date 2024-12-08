<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Listing;

class ListingsController extends Controller
{
    //
    public function index(){
        $listings = Listing::paginate(12);

        $categories = Category::where('status', 1)->get();
        

        return view('frontend.listings', compact('listings', 'categories'));
       
    }
}
