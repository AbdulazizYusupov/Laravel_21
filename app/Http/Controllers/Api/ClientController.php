<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $models = News::orderBy('id', 'desc')->get();
        $test = session('locale', 'uz');

        return view('client', [
            'models' => $models,
            'test' => $test,
            'categories' => $categories
        ]);
    }

    public function lang($lang)
    {
        if (!in_array($lang, ['en', 'ru', 'uz'])) {
            abort(404);
        }

        session()->put('locale', $lang);

        return redirect()->back();
    }
}
