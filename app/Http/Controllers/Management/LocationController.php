<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::latest()->take(5)->get();
        return view('management/location/index', compact('location'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management/location/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'location' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $data = [
            'title' => $request->location,
            'address' => $request->address,
            'image' => $main_file,
        ];

        location::create($data);
        return redirect()->route('location.index')->with('success', 'location Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $location = location::find($id);
        return view('management/location/edit', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $location = location::find($id);
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'location' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = $location->image;
        }
        $location->update([
            'title' => $request->location,
            'address' => $request->address,
            'image' => $main_file,
        ]);
        return redirect()->route('location.index')->with('success', 'location Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        location::where('id', $id)->delete();
        return redirect()->back()->with('success', 'location Deleted Successfully');
    }
}
