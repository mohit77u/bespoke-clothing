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

   //show users page
   public function getUsers(Request $request)
   {
      $names = ['zar', 'ake', 'vero', 'kai', 'prof', 'mrs', 'bor', 'heg', 'ste'];
      $emails = ['prof', 'mrs', 'bor', 'heg', 'ste'];
      $users = User::select('*');
      if(isset($request->names))
      {
         // dd($request->names);
         foreach($request->names as $key => $value) {
            $users->orWhere('name', 'like', '%'. $value .'%');
         }
      }

      if(isset($request->emails))
      {
         // dd($request->names);
         foreach($request->emails as $key => $value) {
            $users->orWhere(function($query) use ($value) {
                     $query->orWhere('email', 'like', '%'. $value .'%');
                  });
         }
      }

      $users = $users->get();

      // dd($users);

      return view('frontend.pages.users', compact('names', 'users', 'emails'));
   }

}
