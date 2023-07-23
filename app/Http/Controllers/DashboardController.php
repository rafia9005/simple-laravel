<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $title = 'Dashboard | ngodingsantuy.site';
        return view('dashboard', compact('title'));
    }
}
