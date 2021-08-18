<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use App\Models\Post;
use Faker\Provider\ar_JO\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $complaints = Complaint::orderBy('created_at', 'desc');

        if ($request->cari) {
            $complaints = $complaints->where('title',  'like', "%" . $request->cari . "%");
        }

        $complaints = $complaints->paginate(10);
        return view('admin.complaint.index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ComplaintCategory::all();

        return view('admin.complaint.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $complaint = Complaint::create([
            'title' => $request->title,
            'deskripsi_pengaduan' => $request->deskripsi_pengaduan,
            'slug' => Str::slug($request->title),
            'status' => $request->status,
            'user_id' => $request->user_id,
            'lokasi' => $request->lokasi,
            'complaints_category_id' => $request->complaints_category_id
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imgName = rand().'.'.$image->getClientOriginalExtension();

            $image->move('complaints', $imgName);

            $complaint->image = $imgName;
        }

        $complaint->save();

        return redirect()->route('admin.complaints.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
        return view('admin.complaint.show', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        $categories = ComplaintCategory::all();

        return view('admin.complaint.edit', compact('categories', 'complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $complaint = Complaint::findorFail($id);

        $complaint->title = $request->get('title');
        $complaint->deskripsi_pengaduan = $request->get('deskripsi_pengaduan');
        $complaint->slug = Str::slug($request->get('title'));
        $complaint->status = $request->get('status');
        $complaint->user_id = $request->get('user_id');
        $complaint->lokasi = $request->get('lokasi');
        $complaint->complaints_category_id = $request->get('complaints_category_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imgName = rand().'.'.$image->getClientOriginalExtension();

            $image->move('complaints', $imgName);

            $complaint->image = $imgName;
        }

        $complaint->save();


        return redirect()->route('admin.complaints.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Complaint::find($id)->delete();

        return redirect()->back();
    }
}
