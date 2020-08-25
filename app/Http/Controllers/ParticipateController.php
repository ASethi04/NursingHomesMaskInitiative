<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipateController extends Controller
{
    //
    //
    public function index()
    {
        $homes = DB::select('SELECT Name, Needs, Address, `Zip Code`, `Mask Type`, `Mask Fabric`, `Mailing Address`, `Other Information` from nursing_homes');
        //dd($homes);
        return view("participate")
            ->with('homes', $homes);
    }
}
