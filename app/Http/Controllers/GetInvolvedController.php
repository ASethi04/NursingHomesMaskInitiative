<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GetInvolvedController extends Controller
{
    //
    public function index()
    {
        $homes = DB::select('SELECT Name, Needs, Address, `Zip Code`, `Mask Type`, `Mask Fabric`, `Mailing Address`, `Other Information` from final');
        return view("get_involved")
            ->with('homes', $homes);
    }
}
