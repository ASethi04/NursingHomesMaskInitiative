<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailOther;

class JoinController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($nursing_home)
    {
        return view('join')->with('nursing_home', $nursing_home);
    }

    /**
     * Store the information the user made when submitting the mask donation form
     *
     */
    public function submit(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'nhome' => 'required',
            'nmasks' => 'required',
            'mats' => 'required',
            'delivery' => 'required',
            'myself' => 'required'
        ]);

        $data = array(
            'Name' => $request->Name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'nhome' => $request->nhome,
            'nmasks' => $request->nmasks,
            'mats' => $request->mats,
            'delivery' => $request->delivery,
            'myself' => $request->myself
        );

        Mail::to('covid19maskinitiative@gmail.com')->send(new SendMailOther($data));
        $user = Auth::user();
        $user->number_of_masks = ($user->number_of_masks) + $request->nmasks;
        $user->other_donations = ($user->other_donations) . " " . ($request->mats);
        $user->save();
        return redirect('/');

        
    }
}
