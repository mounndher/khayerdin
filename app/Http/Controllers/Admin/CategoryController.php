<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    // Show form to create a new category
    public function create()
    {
        // Fetch top-level categories with only their immediate children
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('admin.category.create', compact('categories'));
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'image' => ['required'], // Image is mandatory for creating a new category
            'parent_id' => ['nullable', 'exists:categories,id'], // Validate parent_id if provided
        ]);

        $imagePath = handleUpload('image');

        $category = new Category();
        $category->image = $imagePath;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->home = $request->home == 1 ? 1 : 0;
        $category->status = $request->status == 1 ? 1 : 0;
        $category->parent_id = $request->parent_id; // Save parent_id
        $category->save();

        toastr()->success('Category Created Successfully!');

        return redirect()->route('admin.category.index');
    }

    // Show form to edit an existing category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('admin.category.edit', compact('category', 'categories'));
    }

    // Update an existing category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'image' => ['nullable'], // Image is optional for updating
            'parent_id' => ['nullable', 'exists:categories,id'], // Validate parent_id if provided
        ]);

        $category = Category::findOrFail($id);
        $imagePath = handleUpload('image', $category);

        $category->name = $request->name;
        $category->image = $imagePath ?: $category->image; // Keep the old image if no new one is uploaded
        $category->slug = Str::slug($request->name);
        $category->home = $request->home == 1 ? 1 : 0;
        $category->status = $request->status == 1 ? 1 : 0;
        $category->parent_id = $request->parent_id; // Update parent_id
        $category->save();

        toastr()->success('Category Updated Successfully!');

        return redirect()->route('admin.category.index');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Check if the category has subcategories (children)
        $hasChildren = Category::where('parent_id', $category->id)->count();

        if ($hasChildren > 0) {
            return response([
                'status' => 'error',
                'message' => 'Cannot delete category because it has subcategories.'
            ]);
        }

        $category->delete();

        return response([
            'status' => 'success',
            'message' => 'Category deleted successfully.'
        ]);
    }

    // Toggle status (home or visibility status)
    public function toggleStatus(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $field = $request->name; // E.g., 'home'
        $category->$field = $request->value; // Toggle the field's value
        $category->save();

        return response([
            'status' => 'success',
            'message' => __('Status updated successfully.')
        ]);
    }
}
