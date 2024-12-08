<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    // Display a list of cities
    public function index()
    {
        $cities = City::with('state')->get(); // Fetch cities along with their state information
        return view('admin.cities.index', compact('cities'));
    }

    // Show the form for creating a new city
    public function create()
    {
        $states = State::all(); // Fetch all states to display in the dropdown
        return view('admin.cities.create', compact('states'));
    }

    // Store a newly created city in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id', // Validate that the state exists
        ]);

       
        $city= New City();
        $city->name = $request->name;
        $city->state_id=$request->state_id;
        $city->save();
      //  toastr()->success('City Created Successfully!');
        return redirect()->route('admin.cities.index')->with('success', 'City created successfully!');
    }

    // Show the form for editing the specified city
    public function edit($id)
    {  
        $city = City::findOrFail($id);
        $states = State::all(); // Fetch all states
        return view('admin.cities.edit', compact('city', 'states'));
    }

    // Update the specified city in the database
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
        ]);

        $city = City::findOrFail($id);
        $city->update([
            'name' => $request->name,
            'state_id' => $request->state_id,
        ]);

        return redirect()->route('admin.cities.index')->with('success', 'City updated successfully');
    
    }

    // Remove the specified city from the database
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete(); // Delete the city
        return response(['status' => 'success', 'message' => __('City updated successfully.')]);
    }
    
}
