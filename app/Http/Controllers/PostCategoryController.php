<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = PostCategory::orderBy('created_at', 'desc');

        if ($request->search) {
            $categories = $categories->where('name',  'like', "%" . $request->search . "%");
        }

        $categories = $categories->paginate(10);

        return view('admin.post-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required'
        ]);

        PostCategory::create($request->all());

        Alert::success('Berhasil', 'Kategori telah di tambahkan');
        return redirect()->route('admin.post-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        return view('admin.post-category.edit', compact('postCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = $request->all();
        $postCategory->update($data);

        Alert::success('Berhasil', 'Kategori telah di edit');
        return redirect()->route('admin.post-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        $postCategory->delete();

        Alert::success('Berhasil', 'Kategori telah di hapus');
        return redirect()->route('admin.post-categories.index');
    }
}
