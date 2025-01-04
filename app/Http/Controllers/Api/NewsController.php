<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return response()->json([
            'success' => true,
            'news' => $news,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $news = News::create([
            'category_id' => $request->category_id,
            'title' => json_encode([
                'uz' => $request->title_uz,
                'ru' => $request->title_ru,
                'en' => $request->title_en,
            ],true),
            'description' => json_encode([
                'uz' => $request->description_uz,
                'ru' => $request->description_ru,
                'en' => $request->description_en,
            ], true),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'News created successfully',
            'news' => $news,
        ]);
    }

    public function show(News $news)
    {
        return response()->json([
            'success' => true,
            'news' => $news,
        ]);
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $news->update([
            'category_id' => $request->category_id,
            'title' => json_encode([
                'uz' => $request->title_uz,
                'ru' => $request->title_ru,
                'en' => $request->title_en,
            ],true),
            'description' => json_encode([
                'uz' => $request->description_uz,
                'ru' => $request->description_ru,
                'en' => $request->description_en,
            ], true),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'News updated successfully',
            'news' => $news,
        ]);
    }

    public function delete(News $news)
    {
        $news->delete();

        return response()->json([
            'success' => true,
            'message' => 'News deleted successfully',
        ]);
    }
}
