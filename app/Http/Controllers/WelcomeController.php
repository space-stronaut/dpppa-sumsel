<?php

namespace App\Http\Controllers;

use App\Models\Document;
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

    public function download($id)
    {
        $file = Document::find($id);

        return response()->download(storage_path('app/public/'.$file->file));
    }

    public function dokumen()
    {
        $documents = Document::all();

        return view('dokumen', compact('documents'));
    }
}
