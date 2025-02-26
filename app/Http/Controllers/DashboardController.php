<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        return view('backend.dashboard', compact('perusahaans'));
    }
}
