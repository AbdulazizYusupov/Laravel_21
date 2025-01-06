<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        if (in_array($lang, ['uz', 'ru', 'en'])) {
            session(['lang' => $lang]);
            app()->setLocale($lang);
        }
        return redirect()->back();
    }
}
