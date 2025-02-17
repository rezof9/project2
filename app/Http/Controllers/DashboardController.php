<?php

namespace App\Http\Controllers;

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
        return view('backend.dashboard');
    }
}
