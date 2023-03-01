<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->get();

        return view('index', compact('categories', 'posts'));
    }
}
