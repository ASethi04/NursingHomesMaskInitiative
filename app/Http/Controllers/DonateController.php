<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    //
    /**
    * Show the application donate screen.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {     
       return view('donate');
   }
}
