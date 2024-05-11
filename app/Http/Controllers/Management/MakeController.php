<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $make = Make::latest()->get();
        return view('management/make/index', compact('make'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management/make/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'status' => $request->status,
            'is_electric'=>$request->is_electric
        ];
        Make::create($data);
        return redirect()->route('make.index')->with('success', 'Maker created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $make = Make::find($id);
        return view('management.make.edit', compact('make'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Make $make)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $make = Make::where('id', $id)->get()->first();
        $make->update([
            'title' => $request->title,
            'status' => $request->status,
            'is_electric'=>$request->is_electric
        ]);
        return redirect()->route('make.index')->with('success', 'Maker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Make::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Maker deleted successfully');

    }
}
