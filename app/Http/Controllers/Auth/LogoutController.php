<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{

public function logout(Request $request) {
    Auth::logout();
    return redirect('/participate');
  }
}