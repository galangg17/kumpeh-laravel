<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $articles = Article::where('is_published', true)->latest()->take(3)->get();
        $stories = Story::all();

        return view('home', compact('products', 'articles', 'stories'));
    }
}
