<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\job;
use App\Models\location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = job::with('locationName')->get();
        return view('management/job/index', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location = location::get();
        return view('management/job/create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'category' => $request->category,
        ];
        job::create($data);
        return redirect()->route('job.index')->with('success', 'job Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job = job::find($id);
        $location = location::get();
        return view('management/job/edit', compact('job', 'location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = job::where('id', $id)->get()->first();
        $data->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'category' => $request->category,
        ]);
        return redirect()->route('job.index')->with('success', 'job Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        job::where('id', $id)->delete();
        return redirect()->back()->with('success', 'job Deleted Successfully');
    }
}
