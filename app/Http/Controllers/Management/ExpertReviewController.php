<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;

use App\Models\ExpertReview;
use App\Models\media;
use App\Models\seo;
use Illuminate\Http\Request;
use Auth;

class ExpertReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['expertReviews'] = ExpertReview::all();
        return view('management.ExpertReview.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.ExpertReview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('reviews_video')) {
            $mainext = $request->file('reviews_video')->getClientOriginalExtension();
            $main_file = 'expertReview' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->reviews_video->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $payload = [
          'title' => $request->title ?? null,
          'short_description' => $request->short_description ?? null,
          'long_description' => $request->long_description ?? null,
          'start_price' => $request->start_price ?? null,
          'end_price' => $request->end_price ?? null,
          'pros' => $request->pros ?? null,
          'cons' => $request->cons ?? null,
          'look_feel' => $request->look_feel ?? null,
          'technology' => $request->technology ?? null,
          'performance' => $request->performance ?? null,
          'safety' => $request->safety ?? null,
          'form_function' => $request->form_function ?? null,
          'cost' => $request->cost ?? null,
          'expert_description' => $request->expert_description ?? null,
          'look_and_feel_detail' => $request->look_and_feel_detail ?? null,
          'performance_detail' => $request->performance_detail ?? null,
          'form_and_function_detail' => $request->form_and_function_detail ?? null,
          'safety_detail' => $request->safety_detail ?? null,
          'cost_effectiveness' => $request->cost_effectiveness ?? null,
          'price_range_start' => $request->price_range_start ?? null,
          'price_range_end' => $request->price_range_end ?? null,
          'avg_price_range_start' => $request->avg_price_range_start ?? null,
          'avg_price_range_end' => $request->avg_price_range_end ?? null,
          'yoy_price_start' => $request->yoy_price_start ?? null,
          'yoy_price_end' => $request->yoy_price_end ?? null,
          'meta_description' => $request->meta_description ?? null,
          'meta_keyword' => $request->meta_keywords ?? null,
          'status' => $request->status ?? null,
          'type' => $request->type ?? null,
          'category' => $request->category ?? null,
          'written_by' => $request->written_by ?? null,
          'admin_status' => $request->admin_status ?? null,
          'user_id' =>  auth()->user()->id,
        ];

        $expertReview =  ExpertReview::create($payload);

        $multi_image =
            [
                'reference_id' => $expertReview->id,
                'reference_type' => 'Expert_Review',
                'image' => $main_file,
            ];
        media::create($multi_image);
        $seo = [
            'reference_id' => $expertReview->id,
            'reference_type' => 'Expert_Review',
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];

        seo::create($seo);

        return redirect('expert-review');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpertReview  $expertReview
     * @return \Illuminate\Http\Response
     */
    public function show(ExpertReview $expertReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpertReview  $expertReview
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpertReview $expertReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpertReview  $expertReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpertReview $expertReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpertReview  $expertReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpertReview $expertReview)
    {
        //
    }
}
