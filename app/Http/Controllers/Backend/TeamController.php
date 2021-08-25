<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Team::latest()->get();
        return view('backend.team.team-index', compact('datas'));
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
            'member_name' => 'required',
            'status' => 'required',
            'member_img' => 'required|mimes:jpg,bmp,png,jpeg',
        ]);
        if ($request->hasfile('member_img')) {
            $file = $request->file('member_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team-member-pic/', $filename);
        }
        $team = Team::create([
            'member_name' => $request->member_name,
            'tw_link' => $request->tw_link,
            'f_link' => $request->f_link,
            'inst_link' => $request->inst_link,
            'li_link' => $request->li_link,
            'status' => $request->status,
            'member_img' => $filename,
        ]);
        notify()->success("Success","Member Successfully Created");
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
        $data = Team::findOrFail($id);
        return view('backend.team.team-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::findOrFail($id);
        return view('backend.team.team-edit', compact('data'));
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
            'member_name' => 'required',
            'status' => 'required',
        ]);
        $team = Team::findOrFail($id);
        if ($request->hasfile('member_img')) {
            $image_path = public_path('uploads/team-member-pic/' . $team->member_img);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('member_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team-member-pic/', $filename);
        }else {
            $filename = $team->member_img;
        }
        $team->member_name = $request->member_name;
        $team->member_img = $request->member_img;
        $team->tw_link = $request->tw_link;
        $team->f_link = $request->f_link;
        $team->inst_link = $request->inst_link;
        $team->li_link = $request->li_link;
        $team->status = $request->status;
        $team->member_img = $filename;
        $team->save();
        notify()->success("Success","Member Successfully Updated");
        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $image_path = public_path('uploads/team-member-pic/' . $team->member_img);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $team->delete();
        notify()->success("Success","Member Successfully Deleted");
        return redirect()->back();
    }
}
