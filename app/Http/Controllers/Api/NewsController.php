<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $test = session('locale', 'uz');
        $categories = Category::all();
        $news = News::with('category')->orderBy('id', 'desc')->paginate(10);
        return view('admin.news', ['news' => $news, 'categories' => $categories, 'test' => $test]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|array',
            'title.*' => 'required|string',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        News::create($data);

        return redirect()->back()->with('success', 'News created successfully.');
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|array',
            'title.*' => 'required|string',
            'description' => 'required|array',
            'description.*' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news->update($data);

        return redirect()->back()->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete('public/' . $news->image);
        }

        $news->delete();
        return redirect()->back()->with('success', 'News deleted successfully.');
    }
}
