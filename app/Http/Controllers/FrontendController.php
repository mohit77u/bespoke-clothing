<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     //show login page
     public function homePage()
     {
        return view('frontend.pages.home');
     }
}
