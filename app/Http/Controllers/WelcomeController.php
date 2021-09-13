<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }
}
