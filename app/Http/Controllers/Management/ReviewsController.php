<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\review;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = review::get();
        return view('management/review/index', compact('review'));
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
        $review = review::where('id',$id)->get()->first();
        return view('management/review/show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reviews $reviews)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $review = review::where('id',$id)->get()->first();
        $review->update([
            'reviews_status' => $request->reviews_status,
        ]);
        return redirect()->back()->with('success', 'Review Approved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = review::where('id',$id)->update([
            'deleted_by'=>auth()->user()->id,
            'deleted_at'=>\Carbon\Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}
