<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\BlogPageCategory;
use App\Models\media;
use App\Models\seo;
use Illuminate\Http\Request;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')) {
            $blog = blog::where('admin_status', 1)->get();
        } else {
            $blog = blog::where('user_id', auth()->user()->id)->get();
        }
        return view('management/blog/index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management/blog/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'blog' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'admin_status' => $request->admin_status,
            'type'=>$request->type??null,
            'category'=>$request->category??null,
            'written_by'=>$request->written_by
        ];
        $blog = blog::create($data);
        if($blog->category == 'article'){
            if(!empty($request->pages)){
                foreach ($request->pages as $val){
                    //show article to different pages
                    $blogPagesCategory = BlogPageCategory::create([
                        'category_id'=>$blog->id,
                        'page_name'=>$val
                    ]);
                }
            }

        }



        $multi_image =
            [
                'reference_id' => $blog->id,
                'reference_type' => 'blog',
                'image' => $main_file,
            ];
        media::create($multi_image);
        $seo = [
            'reference_id' => $blog->id,
            'reference_type' => 'blog',
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];
        seo::create($seo);

        return redirect()->route('blog.show', $blog->id)->with('success', 'Blog created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Auth::user()->hasRole('Admin')) {
            $blog = blog::where('admin_status', 1)->where('id', $id)->get()->first();
        } else {
            $blog = blog::where('user_id', auth()->user()->id)->where('id', $id)->get()->first();
        }
        return view('management.blog.edit', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        BlogPageCategory::where('category_id',$id)->delete();
        $blog = blog::where('id', $id)->get()->first();
        $blog->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'admin_status' => $request->admin_status,
            'type'=>$request->type??null,
            'category'=>$request->category??null,
            'written_by'=>$request->written_by
        ]);

        if($blog->category == 'article'){
            if(!empty($request->pages)){

                foreach ($request->pages as $val){
                    //show article to different pages
                    $blogPagesCategory = BlogPageCategory::create([
                        'category_id'=>$blog->id,
                        'page_name'=>$val
                    ]);
                }
            }

        }
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        blog::where('id', $id)->delete();
        media::where('reference_id', $id)->where('reference_type', '=', 'blog')->delete();
        seo::where('reference_id', $id)->where('reference_type', '=', 'blog')->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
