<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;

class ThemeController extends Controller
{
    //
    public function index()
    {
        return view('theme.landing', [
            'galleries' => Gallery::latest()->get(),
            'articles' => Article::latest()->take(3)->get()
        ]);
    }
}
