<?php

namespace App\Http\Controllers\Backend;

use App\Models\Donar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DonarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Donar::latest()->get();
        return view('backend.donar.donar-index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'donar_name' => 'required',
            'status' => 'required',
            'donar_img' => 'required|mimes:jpg,bmp,png,jpeg',
        ]);
        if ($request->hasfile('donar_img')) {
            $file = $request->file('donar_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
        $file->move('uploads/donar-pic/', $filename);
        }
        $donar = Donar::create([
            'donar_name' => $request->donar_name,
            'status' => $request->status,
            'donar_img' => $filename,
        ]);
        notify()->success("Success","Donar Successfully Created");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Donar::findOrFail($id);
        return view('backend.donar.donar-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'donar_name' => 'required',
            'status' => 'required',
        ]);
        $donar = Donar::findOrFail($id);
        if ($request->hasfile('donar_img')) {
            $image_path = public_path('uploads/donar-pic/' . $donar->donar_img);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('donar_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/donar-pic/', $filename);
        } else {
            $filename = $donar->donar_img;
        }
        $donar->donar_name = $request->donar_name;
        $donar->status = $request->status;
        $donar->donar_img = $filename;
        $donar->save();
        notify()->success("Success","Donar Upload Successfull");
        return redirect()->route('admin.donar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donar = Donar::findOrFail($id);
        $image_path = public_path('uploads/donar-pic/' . $donar->banner_img);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $donar->delete();
        notify()->success("Success","Banner Successfully Deleted");
        return redirect()->back();
    }
}
