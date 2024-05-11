<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\seo;
use App\Models\Testimonial;
use App\Models\media;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Testimonial::get();
        return view('management/testimonial/index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management/testimonial/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('user_profile')) {
            $mainext = $request->file('user_profile')->getClientOriginalExtension();
            $main_file = 'testimonial' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->user_profile->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'user_profile' => $main_file,
        ];
        $slider = Testimonial::create($data);
        return redirect()->route('testimonial.show', $slider->id)->with('success', 'Testimonial added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::where('id', $id)->get()->first();
        return view('management/testimonial/edit', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pages = Testimonial::where('id', $id)->get()->first();
        if ($request->file('user_profile')) {
            $mainext = $request->file('user_profile')->getClientOriginalExtension();
            $main_file = 'testimonial' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->user_profile->move(public_path('images/media'), $main_file);
        } else {
            $main_file = $pages->user_profile;
        }

        $pages->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'user_profile' => $main_file,
        ]);
        return redirect()->back()->with('success', 'Testimonial Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Testimonial::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully');

    }

}
