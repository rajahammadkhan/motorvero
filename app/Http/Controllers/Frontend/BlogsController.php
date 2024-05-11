<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\blog;
use App\Models\categories;
use App\Models\coupon;
use App\Models\country;
use App\Models\media;
use App\Models\seo;
use App\Models\User;
use App\Models\store;
use Illuminate\Http\Request;
use Route;
use Session;
use DB;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= array();
        $rows = blog::where('status',1)->orderBy('id', 'DESC')->get();
        foreach ($rows as $row){
            $media = media::where(['reference_id' => $row->id ,'reference_type' =>'blog'])->get()->first();
            $user = User::where('id',$row->user_id)->get()->first();
            $blogs[] =[
                'id'=>$row->id,
                'slug'=>$row->slug,
                'title'=>$row->title,
                'user'=>$user->name,
                'short_description'=>$row->short_description,
                'created_at'=>$row->created_at,
                'image'=>$media != null ? $media->image : null,

            ];
        }
        return view('frontend/blogs/index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        if(isset($_GET['type']))
        {
            $cate = categories::get();

            return view('management/categories/create',compact('cate'));
        }
        else
        {
            return  abort('404');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $img =  $request->image;

        $category_type = base64_decode($_GET['type']);

        if(isset($_GET['type']))
        {
            if ($request->file('image')) {
                $mainext = $request->file('image')->getClientOriginalExtension();
                $main_file = time() . rand(1000, 14000000000) . '.' . $mainext;
                $request->image->move(public_path('images/categories'), $main_file);
            } else {
                $main_file = null;
            }
            $category_type = base64_decode($_GET['type']);


            $data = [
                'title' => $request->title,
                'long_description' => $request->description,
                'status' => $request->status,
                'reference_type' => $category_type,
                'image'=> $main_file,
                'parent_category' => $request->parent_category,
            ];
            $categories = categories::create($data);

            $seo = [
                'reference_id' => $categories->id,
                'meta_title' => $request->meta_title,
                'reference_type' => $category_type,
                'meta_description'=> $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ];

            $search = seo::create($seo);
            return redirect()->back()->with('success','Category Created successfully');

        }
        else
        {
            return  abort('404');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['blog'] = blog::where('slug',$slug)->get()->first();
        if(!$data['blog']){
            return view('404');
        }

        $data['user'] = User::where('id',$data['blog']->user_id)->get()->first();
        $data['seo'] = seo::where(['reference_id' => $data['blog']->id ,'reference_type' =>'blog'])->get()->first();
        $data['media'] = media::where(['reference_id' => $data['blog']->id ,'reference_type' =>'blog'])->get()->first();
        return view('frontend/blogs/show',$data);


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */



}
