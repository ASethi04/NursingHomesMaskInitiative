<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   /**
    * Show the application drop in screen.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {     
       return view('home');
   }
}
