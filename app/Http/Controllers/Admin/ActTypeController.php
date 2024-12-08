<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ActType;
use Illuminate\Http\Request;

class ActTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Acttype=ActType::all();
        return view('admin.actrype.index',compact('Acttype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $Acttype=ActType::all();
        return view('admin.actrype.create',compact('Acttype'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'max:200'],

        ]);
        $acttype= New ActType();
        $acttype->name = $request->name;
        $acttype->save();
        toastr()->success('ActType Created Successfully!');

        return redirect()->route('admin.acttype.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Acttype=ActType::findOrFail($id);
        return view('admin.actrype.edit',compact('Acttype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Acttype=ActType::findOrFail($id);
       
        $Acttype->name =$request->name;
   
        $Acttype->save();

        toastr()->success('ActType Updated Successfully!');

        return redirect()->route('admin.acttype.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Acttype=ActType::findOrFail($id);
        $Acttype->delete();
     
       
    }
}
