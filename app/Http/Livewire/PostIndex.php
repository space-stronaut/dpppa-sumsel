<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use Livewire\Component;

class PostIndex extends Component
{
    protected $listeners = ['added' => 'handleStored'];

    public function render()
    {
        $posts = Complaint::where('status', 'selesai')->get();
        return view('livewire.post-index', [
            'posts' => $posts
        ]);
    }

    public function handleStored($complaint)
    {
        session()->flash('success', 'Complaint successfully added');
    }
}
