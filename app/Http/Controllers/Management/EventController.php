<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;

use App\Models\Car;
use App\Models\Event;
use App\Models\media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers\DefaultLanguage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('management.event.index', compact('events'));
    }

    public function create()
    {
        return view('management.event.create');
    }

    public function store(Request $request)
    {
        if ($request->file('image')) {
            $mainext = $request->file('image')->getClientOriginalExtension();
            $main_file = 'event' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->image->move(public_path('images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $startDateTime = $request->start_datetime;
        $endDateTime = $request->end_datetime;

        $startDateTime = DefaultLanguage::stringDateToDbFormat($startDateTime);

        $endDateTime = DefaultLanguage::stringDateToDbFormat($endDateTime);


        $validate = $request->validate(
            [
                'title' => 'required|max:255',
                'short_description' => 'required',
                'start_datetime' => 'required',
                'end_datetime' => 'required',
            ]
        );
        if(!empty($validate)){
            $data = [
                'title' => $request->title,
                'description' => $request->short_description,
                'start_datetime' => $startDateTime,
                'end_datetime' =>$endDateTime,
                'created_by'=>auth()->user()->id,
                'register_url'=>$request->register_url
            ];



            $event=Event::create($data);
            $multi_image =
                [
                    'reference_id' => $event->id,
                    'reference_type' => 'event',
                    'image' => $main_file,
                ];
            media::create($multi_image);
            return redirect('/event')->with('success', 'Event created successfully!');
        }

    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('management.event.edit', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('management.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {


        $startDateTime = $request->start_datetime;
        $endDateTime = $request->end_datetime;

        $startDateTime = DefaultLanguage::stringDateToDbFormat($startDateTime);

        $endDateTime = DefaultLanguage::stringDateToDbFormat($endDateTime);

        $validation = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'nullable',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
        ]);
        if(!empty($validation)){


            $data = [
                'title' => $request->title,
                'description' => $request->short_description,
                'start_datetime' => $startDateTime,
                'end_datetime' =>$endDateTime,
                'created_by'=>auth()->user()->id,
                  'register_url'=>$request->register_url
            ];



            $event = Event::findOrFail($id);
            $event->update($data);

            $media = media::where('reference_id', $id)->where('reference_type', '=', 'event')->get()->first();
            if ($request->file('image')) {
                $ext = $request->file('image')->getClientOriginalExtension();
                $main_file = 'event' . time() . rand(1000, 14000000000) . '.' . $ext;
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
                        'reference_type' => 'event',
                        'image' => $main_file,
                    ];

                media::create($multi_image);
            }

        }

        return redirect('/event')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/event')->with('success', 'Event deleted successfully!');
    }
}
