<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   //show login page
   public function homePage()
   {
      return view('frontend.pages.home');
   }

   //show login page
   public function getUsers()
   {
      $names = ['zar', 'ake', 'vero', 'kai', 'prof', 'mrs', 'bor', 'heg', 'ste'];
      $users = User::select('*');
      foreach($names as $key => $value) {
         $users->orWhere('name', 'like', '%'. $value .'%')
               ->orWhere(function($query) use ($value) {
                  $query->orWhere('user_id', 'like', '%'. $value .'%');
               });
      }

      $users = $users->get();

      dd($users);
   }

}
