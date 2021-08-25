<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Team;
use App\Models\Donar;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\CharitablePrograms;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index(){
        $data = [];
        $data['banner'] = Banner::where('status', true)->take(1)->latest()->get();
        $data['team'] = Team::where('status', true)->latest()->get();
        $data['program'] = CharitablePrograms::where('status', true)->latest()->get();
        $data['donar'] = Donar::where('status', true)->latest()->get();
        return view('frontend.index', $data);
    }
}
