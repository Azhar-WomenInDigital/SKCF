<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\CharitablePrograms;
use App\Http\Controllers\Controller;

class CharitableProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = CharitablePrograms::latest()->get();
        return view('backend.charitable-programs.charitable-programs-index', compact('datas'));
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
            'charitable_programs_name' => 'required',
            'status' => 'required',
        ]);
        $charitable_programs = CharitablePrograms::create([
            'charitable_programs_name' => $request->charitable_programs_name,
            'status' => $request->status,
        ]);
        notify()->success("Success","Projects Successfully Created");
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
        $data = CharitablePrograms::findOrFail($id);
        return view('backend.charitable-programs.charitable-programs-edit', compact('data'));
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
            'charitable_programs_name' => 'required',
            'status' => 'required',
        ]);
        $program = CharitablePrograms::findOrFail($id);
        $program->charitable_programs_name = $request->charitable_programs_name;
        $program->status = $request->status;
        $program->save();
        notify()->success("Success","Projects Successfully Updated");
        return redirect()->route('admin.charitable-program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $charitable_programs = CharitablePrograms::findOrFail($id);
        $charitable_programs->delete();
        notify()->success("Success","Program Successfully Deleted");
        return redirect()->back();
    }
}
