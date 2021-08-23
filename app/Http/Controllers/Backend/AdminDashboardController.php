<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //View admin dashboard. This page can only be viewed after admin logging.
    public function dashboard(){
        return view('backend.dashboard');
    }
}
