<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $deskripsi_pengaduan;
    public $lokasi;
    public $complaints_category_id;
    public $image;

    public function render()
    {
        $categories = ComplaintCategory::all();
        return view('livewire.post-create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {
        $this->validate([
            'title' => ['required'],
            'deskripsi_pengaduan' => ['required'],
            'lokasi' => ['required'],
            'complaints_category_id' => ['required'],
            'image' => ['image']
        ]);

        Complaint::create([
            'title' => $this->title,
            'deskripsi_pengaduan' => $this->deskripsi_pengaduan,
            'slug' => Str::slug($this->title),
            'status' => 'diterima',
            'user_id' => Auth::user()->id,
            'lokasi' => $this->lokasi,
            'complaints_category_id' => $this->complaints_category_id,
            'image' => $this->image
        ]);

        $this->image->store('complaints', 'public');
    }
}
