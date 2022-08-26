<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
   public function index(Request $request){

      if (isset($_COOKIE["token"]))
         print ($_COOKIE["token"]);

    return view('home');
   }
}
