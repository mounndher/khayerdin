<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\Category;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subcategories = Subcategory::with('category')->get();
        
        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all(); // Fetch all categories
        return view('admin.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        
        $subcategory = new Subcategory();
       ;
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->category_id = $request->category_id;
        $subcategory->status = $request->status;
        
        $subcategory->save();

        toastr()->success('Category Created Successfully!');

        

        return redirect()->route('admin.subcategory.index');
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
    $subcategory = Subcategory::findOrFail($id); // Find the subcategory or fail
    $categories = Category::all(); // Fetch all categories for dropdown

    return view('admin.subcategory.edit', compact('subcategory', 'categories'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->category_id = $request->category_id;
        $subcategory->status = $request->status == 1 ? 1 : 0;;
    
        $subcategory->save();
    
        toastr()->success('Subcategory Updated Successfully!');
    
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $subcategory = Subcategory::findOrFail($id);
        
        $subcategory->delete();
    }
}
