<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'complaints' => Complaint::count(),
            'process' => Complaint::where('status', 'diproses')->count(),
            'success' => Complaint::where('status', 'selesai')->count(),
            'user' => User::where('role', 2)->count(),
        ]);
    }
}
