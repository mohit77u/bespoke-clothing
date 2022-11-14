<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //show dashboard page
    public function getDashboardPage()
    {
        return view('admin.dashboard');
    }
}
