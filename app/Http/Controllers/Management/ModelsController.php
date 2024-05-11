<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Make;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Models::latest()->get();
        return view('management/model/index', compact('models'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Make::get();
        return view('management/model/create', compact('makers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $makers = [
            'title' => $request->title,
            'make_id' => $request->make_id,
            'status' => $request->status,
        ];
        $models = Models::create($makers);
        return redirect()->route('model.index')->with('success', 'Model created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $makers = Make::get();
        $models = Models::where('id', $id)->get()->first();
        return view('management.model.edit', compact('models', 'makers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Models $models)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $models = Models::where('id',$id)->get()->first();
        $models->update([
            'title' => $request->title,
            'make_id' => $request->make_id,
            'status' => $request->status,
        ]);
        return redirect()->route('model.index', $models->id)->with('success', 'Model Updated successfully');

    }

    public function destroy($id)
    {
        Models::where('id',$id)->delete();
        return redirect()->back()->with('Success', 'Model Deleted Successfully');

    }
}
