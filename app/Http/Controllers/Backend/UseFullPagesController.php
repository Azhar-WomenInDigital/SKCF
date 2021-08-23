<?php

namespace App\Http\Controllers\Backend;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UseFullPagesController extends Controller
{
    //In this controller frequently used functions have been setup :(. In order to use them it is recommended to copy them. It is recommended not to cut or delete them. If the functionalities or usage of the pages have been understood or after usage, remove pages item from sidebar. 
    
    //All Pages can be implemented in starter page
    public function starterPage(){
        return view('backend.useful-pages.starter');
    }
    //Error404 Page Not Found
    public function error404(){
        return view('backend.useful-pages.error-404');
    }
    //Error500 Internal Server Error
    public function error500(){
        return view('backend.useful-pages.error-500');
    }
    //Invoice Page
    public function invoice(){
        return view('backend.useful-pages.invoice');
    }
    //Design Typography 
    public function designBasic(){
        return view('backend.useful-pages.design-basic');
    }
    //Icons
    public function icons(){
        return view('backend.useful-pages.icons');
    }
    //Form 
    public function form(){
        return view('backend.useful-pages.form');
    }
    //All Data table 
    public function allDataTable(){
        return view('backend.useful-pages.all-data-table');
    }
    //The data table has been implemented with sweetalert and delete functionalities functions
    public function dataTable(){
        $datas = Test::latest()->get();
        return view('backend.useful-pages.datatable', compact('datas'));
    }
    public function tableDelete($id){
        $data = Test::find($id);
        $data->delete();
        notify()->success('Your data has been successfully deleted ⚡️');
        return redirect()->back();

    }
}
