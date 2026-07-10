<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function home()
{
    $posts = Post::latest()->take(3)->get();

    return view('home', compact('posts'));
}

public function dashboard()
{
    $posts = Post::latest()->get();

    return view('dashboard', compact('posts'));
}
}