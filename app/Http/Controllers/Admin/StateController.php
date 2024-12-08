<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $states=State::all();
        return view('admin.state.index',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $state=State::all();
        return view('admin.state.create',compact('state'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         
        $request->validate([
            'name' => ['required', 'max:200'],

        ]);
        $state= New State();
        $state->name = $request->name;
        $state->save();
        toastr()->success('State Created Successfully!');

        return redirect()->route('admin.state.index');
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
        $state=State::findOrFail($id);
        return view('admin.state.edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $state=State::findOrFail($id);
       
        $state->name =$request->name;
   
        $state->save();

        toastr()->success('state Updated Successfully!');

        return redirect()->route('admin.state.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $state = State::findOrFail($id);

        // Check if the state has any cities associated with it
        if ($state->cities->isEmpty()) {
            // If no cities, delete the state
            $state->delete();

            // Return a success message
            return response(['status' => 'success', 'message' => 'State deleted successfully!']);
          
        } else {
            // If the state has cities, do not delete it
            return response(['status' => 'error', 'message' => 'State has cities and cannot be deleted!']);
        }
           
        
    }
}
