<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;

use App\Models\PressRoom;
use App\Models\media;
use App\Models\seo;
use Illuminate\Http\Request;
use Auth;

class PressRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::user()->hasRole('Admin')) {
            $pressRoom = PressRoom::where('admin_status', 1)->get();
        } else {
            $pressRoom = PressRoom::where('user_id', auth()->user()->id)->get();
        }
        return view('management/press_room/index', compact('pressRoom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management/press_room/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'pressRoom' . time() . rand(1000, 14000000000) . '.' . $mainext;
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
            'category'=>$request->category??null
        ];
        $pressRoom = PressRoom::create($data);
        $multi_image =
            [
                'reference_id' => $pressRoom->id,
                'reference_type' => 'pressRoom',
                'image' => $main_file,
            ];
        media::create($multi_image);
        $seo = [
            'reference_id' => $pressRoom->id,
            'reference_type' => 'pressRoom',
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ];
        seo::create($seo);

        return redirect()->route('press_release.show', $pressRoom->id)->with('success', 'Press created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Auth::user()->hasRole('Admin')) {
            $pressRoom = PressRoom::where('admin_status', 1)->where('id', $id)->get()->first();
        } else {
            $pressRoom = PressRoom::where('user_id', auth()->user()->id)->where('id', $id)->get()->first();
        }
        return view('management.press_room.edit', compact('pressRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PressRoom $pressRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pressRoom = PressRoom::where('id', $id)->get()->first();
        $pressRoom->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'status' => $request->status,
            'admin_status' => $request->admin_status,
            'type'=>$request->type??null,
            'category'=>$request->category??null
        ]);

        $seo = seo::where('reference_id', $id)->get()->first();
        $seo->update([
            'reference_id' => $id,
            'meta_title' => $request->meta_title,
            'reference_type' => 'pressRoom',
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        $media = media::where('reference_id', $id)->where('reference_type', '=', 'pressRoom')->get()->first();
        if ($request->file('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'pressRoom' . time() . rand(1000, 14000000000) . '.' . $ext;
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
                    'reference_type' => 'pressRoom',
                    'image' => $main_file,
                ];

            media::create($multi_image);
        }

        return redirect()->back()->with('success', 'Press updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        PressRoom::where('id', $id)->delete();
        media::where('reference_id', $id)->where('reference_type', '=', 'pressRoom')->delete();
        seo::where('reference_id', $id)->where('reference_type', '=', 'pressRoom')->delete();
        return redirect()->back()->with('success', 'Press deleted successfully');
    }
}
