<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $test = session('locale', 'uz');
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.category', compact('categories', 'test'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|array',
            'name.*' => 'required|string',
            'sort' => 'required|integer',
        ]);

        $category = Category::create([  
            'name' => $request->name,
            'sort' => $request->sort,
        ]);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|array',
            'name.*' => 'required|string',
            'sort' => 'required|integer',
        ]);

        $category->update([
            'name' => $request->name,
            'sort' => $request->sort,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

}
