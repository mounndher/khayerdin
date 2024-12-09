<?php

namespace App\Http\Controllers\Frontend;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogSectionSetting;
use App\Models\Category;
use App\Models\ContactSectionSetting;
use App\Models\Experienace;
use App\Models\Feedback;
use App\Models\FeedbackSectionSetting;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\SkillItem;
use App\Models\SkillSectionSetting;
use App\Models\ServiceInfo;
use App\Http\Controllers\Controller;
use App\Models\Listing;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class HomeController extends Controller
{
    //
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = ServiceInfo::first();
        $services = Service::all();
       
        $products = Listing::where('published', 1)->take(8)->get();
        $categoriess = Category::with('children')->whereNull('parent_id')->get();
        $categories = Category::where('home', 1)
        ->where('status', 1)
        ->get();
    
        $productsBest = Listing::where('published', 1)
              ->where('best',1)
              ->take(4)->get();
        $productsRate = Listing::where('published', 1)
              ->where('rate',1)
              ->take(4)->get();
        return view('frontend.home1',
            compact(
                'hero',
                'typerTitles',
                'services',
                'products',
                'categories',
                'categoriess',
                'productsBest','productsRate',
               
            ));
    }
    public function CategoryCourse($id){
        $category = Listing::where('category_id',$id)
        ->where('home','1')
        ->where('published ','1')
        ->get();
        return view('frontend.home1',
        compact(
            
            'category',
           
        ));

    }
   


    public function shop(Request $request)
{
    $query = Listing::query();

    // Filter by category if specified
    if ($request->has('category') && !empty($request->category)) {
        $query->where('category_id', $request->category);
    }

    // Filter by subcategory if specified
    if ($request->has('subcategory') && !empty($request->subcategory)) {
        $query->where('subcategory_id', $request->subcategory);
    }

    // Filter by childcategory if specified
    if ($request->has('childcategory') && !empty($request->childcategory)) {
        $query->where('childcategory_id', $request->childcategory);
    }

    // Check if a search term is provided
    if ($request->has('search') && !empty($request->search)) {
        $search = $request->search;
        $query->where('title', 'like', '%' . $search . '%') // Search by product title
              ->orWhere('description', 'like', '%' . $search . '%'); // Optionally search by description
    }

    // Paginate the results
    $products = $query->paginate(12);

    // Retrieve categories with children for the sidebar or navigation menu
    $categoriess = Category::with('children')->whereNull('parent_id')->get();

    // Return the view with the products and categories
    return view('frontend.shop', compact('products', 'categoriess'));
}

    

    public function productDetail($id)
{
    $product = Listing::with(['category'])->findOrFail($id);

    // Fetch related products based on the same category (excluding the current product)
    $relatedProducts = Listing::where('category_id', $product->category_id)
                                ->where('id', '!=', $id)
                                ->take(4) // Limit the number of related products
                                ->get();
    $categoriess = Category::with('children')->whereNull('parent_id')->get();
    return view('frontend.product', 
    compact('categoriess', 'product', 'relatedProducts'));
}
public function Contect()
{
    $categoriess = Category::with('children')->whereNull('parent_id')->get();
    return view('frontend.contect',compact('categoriess' ));
}
public function Contectstor(Request $request){
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'number' => 'required|string|max:15',
        'subject' => 'required|string',
        'message' => 'required|string|max:500',
    ]);

    $contact = new ContactSectionSetting();
    $contact->name=$request->name;
    $contact->email=$request->email;
    $contact->number=$request->number;
    $contact->subject=$request->subject;
    $contact->message=$request->message;
    $contact->save();

    return redirect()->route('contect')->with('success', 'Your message has been sent successfully!');
}
public function About()
{
    $categoriess = Category::with('children')->whereNull('parent_id')->get();
    return view('frontend.About',compact('categoriess' ));
}
public function  CategoryListing($id, $slug){
        $listing = Listing::where('category_id',$id)->where('status','1')->get();
        $category = Category::where('id',$id)->first();
        $categories = Category::latest()->get();
     view('frontend.home1',compact('listing','category','categories'));
}



}










