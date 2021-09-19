<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public function render()
    {
        $posts = Complaint::all();
        return view('livewire.post-index', [
            'posts' => $posts
        ]);
    }
}
