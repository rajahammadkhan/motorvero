<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\JobSearch;
use App\Models\career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $career=career::get();
        return view('management/career/index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $career=career::where('id',$id)->get()->first();
        return view('management/career/show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        career::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Career Deleted Successfully');
    }
}
