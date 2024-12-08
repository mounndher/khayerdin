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
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = ServiceInfo::first();
        $services = Service::all();
        $about = About::first();
        $products = Listing::where('published', 1)->take(8)->get();
        $categoriess = Category::with('children')->whereNull('parent_id')->get();
        $categories = Category::where('home', 1)
        ->where('status', 1)
        ->get();
    
        
        return view('frontend.home1',
            compact(
                'hero',
                'typerTitles',
                'services',
                'products',
                'categories',
                'categoriess'
               
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
    public function shop(){
        $products = Listing::where('published', 1)->take(12)->get();
        $categoriess = Category::with('children')->whereNull('parent_id')->get();
        return view('frontend.shop',
        compact(
            
            'products','categoriess'
            
           
        ));
    }
    public function productDetail($id)
{
    $productprof = Listing::where('id', $id)->first(); // Fetch the product

   

    $categoriess = Category::with('children')->whereNull('parent_id')->get();

    return view('frontend.product', compact('categoriess', 'productprof'));
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

    // Store or process the data (e.g., save to database, send email, etc.)
    // For example:
    // Contact::create($validated); // Assuming you have a Contact model

    // Return a response or redirect
    return redirect()->route('contect')->with('success', 'Your message has been sent successfully!');
}
public function About()
{
    $categoriess = Category::with('children')->whereNull('parent_id')->get();
    return view('frontend.About',compact('categoriess' ));
}




}










