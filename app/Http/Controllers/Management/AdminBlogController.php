<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\media;
use App\Models\seo;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = blog::where('admin_status', 0)->get();
        return view('management/admin_blog_approval/index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::where('admin_status', 0)->where('id', $id)->get()->first();
        return view('management/admin_blog_approval/show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::where('id', $id)->get()->first();
        $blog->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'admin_status' => $request->admin_status,
        ]);

        $seo = seo::where('reference_id', $id)->get()->first();
        $seo->update([
            'reference_id' => $id,
            'meta_title' => $request->meta_title,
            'reference_type' => 'blog',
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        $media = media::where('reference_id', $id)->where('reference_type', '=', 'blog')->get()->first();
        if ($request->file('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'blog' . time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = $media->image;
        }
        if ($media != null) {
            $media->update([
                'image' => $main_file,
            ]);
        } else {
            $multi_image =
                [
                    'reference_id' => $id,
                    'reference_type' => 'blog',
                    'image' => $main_file,
                ];

            media::create($multi_image);
        }

        return redirect()->back()->with('success', 'Blog updated successfully');
    }

    public function approvalBlogUpdate($id)
    {
        $review = blog::where('id', $id)->where('admin_status', 0)->get()->first();
        $review->update([
            'admin_status' => 1,
        ]);
        return redirect()->back()->with('success', 'Blog Approved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
