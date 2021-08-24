<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Banner::latest()->get();
        return view('backend.banner.banner-index', compact('datas'));
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
            'banner_name' => 'required',
            'status' => 'required',
            'banner_img' => 'required|mimes:jpg,bmp,png,jpeg',
        ]);
        if ($request->hasfile('banner_img')) {
            $file = $request->file('banner_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/banner/', $filename);
        }
        $banner = Banner::create([
            'banner_name' => $request->banner_name,
            'status' => $request->status,
            'banner_img' => $filename,
        ]);
        notify()->success("Success","Bannr Successfully Created");
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
        $data = Banner::findOrFail($id);
        return view('backend.banner.banner-edit', compact('data'));
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
            'banner_name' => 'required',
            'status' => 'required',
            'banner_img' => 'required',
        ]);
        $banner = Banner::findOrFail($id);
        if ($request->hasfile('banner_img')) {
            $image_path = public_path('uploads/banner/' . $banner->banner_img);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('banner_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/banner/', $filename);
        } else {
            $filename = $banner->banner_img;
        }
        $banner->banner_name = $request->banner_name;
        $banner->status = $request->status;
        $banner->banner_img = $filename;
        $banner->save();
        notify()->success("Success","Bannr Upload Successfull");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        notify()->success("Success","Bannr Delete Successfull");
    }
}
