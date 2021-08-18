<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCategory;
use Illuminate\Http\Request;

class ComplaintCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = ComplaintCategory::orderBy('created_at', 'desc');

        if ($request->search) {
            $categories = $categories->where('name',  'like', "%" . $request->search . "%");
        }

        $categories = $categories->paginate(10);

        return view('admin.complaint-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.complaint-category.create');
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

         ComplaintCategory::create($request->all());

         return redirect()->route('admin.complaint-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplaintCategory $complaintCategory)
    {
        return view('admin.complaint-category.edit', compact('complaintCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplaintCategory $complaintCategory)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = $request->all();
        $complaintCategory->update($data);

        return redirect()->route('admin.complaint-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ComplaintCategory::find($id)->delete();

        return redirect()->back();
    }
}
