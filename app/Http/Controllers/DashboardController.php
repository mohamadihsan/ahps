<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
    	return view('modules.dashboard_admin');
    }

    public function dashboard_client()
    {
    	return view('modules.dashboard_client');
    }
}
