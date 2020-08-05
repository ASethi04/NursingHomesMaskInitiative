<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    /**
    * Show the application about screen.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {     
       return view('about');
   }
}
