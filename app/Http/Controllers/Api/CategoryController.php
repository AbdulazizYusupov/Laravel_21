<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryResources;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return CategoryResource::collection($categories);
    }

    public function store(Request $request)
    {

        $category = Category::create([
            'name' => json_encode([
                'uz' => $request->name_uz,
                'ru' => $request->name_ru,
                'en' => $request->name_en
            ], true),
            'sort' => $request->sort,
        ]);

        return new CategoryResource($category);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => [
                'uz' => $request->name_uz,
                'ru' => $request->name_ru,
                'en' => $request->name_en,
            ],
            'sort' => $request->sort ?? $category->sort,
        ]);

        return new CategoryResource($category);
    }


    public function delete(Category $category)
    {
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully',
        ]);
    }
}
