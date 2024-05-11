<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\media;
use App\Models\Make;
use App\Models\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')) {
            $cars = Car::where('admin_status', 1)->get();
        } else {
            $cars = Car::where('user_id', auth()->user()->id)->get();
        }
        $multi = media::where('reference_type', 'car')->get()->groupBy('reference_id');
        return view('management/car/index', compact('cars', 'multi'));
    }

    public function getModels(Request $request)
    {
        $data['model'] = Models::where('id', $request->mid)->get(["title", "id"]);
        return response()->json($data);
    }

    public function fetchModel(Request $request)
    {
        $data['model'] = Models::where('make_id', $request->make_id)->get(['title', 'id']);
        return response()->json($data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Make::get();
        return view('management/car/create', compact('makers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prices = array();
        array_push($prices, $request->dollar_price);
        $data = [
            'user_id' => auth()->user()->id,
            'dealer_type' => auth()->user()->dealer_type,
            'title' => $request->title,
            'make_id' => $request->make_id,
            'model_id' => $request->model_id,
            'modal_year' => $request->modal_year,
            'dollar_price' => $request->dollar_price,
            'original_price' => $request->dollar_price,
            'prices' => json_encode($prices),
            'details' => $request->details,
            'location' => $request->location,
            'zip_code' => $request->zip_code,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'mile_age' => $request->mile_age,
            'engine_capacity' => $request->engine_capacity,
            'fuel_type' => $request->fuel_type,
            'vehicle_type' => $request->vehicle_type,
            'transmission' => $request->transmission,
            'vehicle_condition' => $request->vehicle_condition,
            'external_color' => $request->external_color,
            'internal_color' => $request->internal_color,
            'vehicle_body' => $request->vehicle_body,
            'VIN' => $request->VIN,
            'deal_type' => $request->deal_type,
            'title_check' => $request->title_check,
            'accident_check' => $request->accident_check,
            'owner' => $request->owner,
            'status' => $request->status,
            'certified' => $request->certified,
            'admin_status' => $request->admin_status,
        ];

        $cars = Car::create($data);
        if ($request->file('image')) {
            foreach ($request->file('image') as $image) {
                $mainext = $image->getClientOriginalExtension();
                $main_file = 'car' . time() . rand(1000, 14000000000) . '.' . $mainext;
                $image->move(public_path('/images/media'), $main_file);
                $multi_image =
                    [
                        'reference_id' => $cars->id,
                        'reference_type' => 'car',
                        'image' => $main_file,
                    ];
                $multi = media::create($multi_image);
            }
        } else {
            $multi = null;
        }
        return redirect()->route('car.show', $cars->id)->with('success', 'Car Added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Auth::user()->hasRole('Admin')) {
            $cars = Car::where('id', $id)->get()->first();
        } else {
            $cars = Car::where('id', $id)->where('user_id', auth()->user()->id)->get()->first();
        }
        $makers = Make::get();
        $multi = media::where('reference_id', $id)->where('reference_type', 'car')->get();
        return view('management/car/edit', compact('makers', 'multi', 'cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $cars)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cars = Car::where('id', $id)->get()->first();
        $prices = json_decode($cars->prices);
        if (!(in_array($request->dollar_price, $prices))) {
            array_push($prices, $request->dollar_price);
        }

        media::where('reference_id', $id)->where('reference_type', 'car')->delete();
        $cars->update([
            'user_id' => auth()->user()->id,
            'dealer_type' => auth()->user()->dealer_type,
            'title' => $request->title,
            'make_id' => $request->make_id,
            'model_id' => $request->model_id,
            'modal_year' => $request->modal_year,
            'dollar_price' => $request->dollar_price,
            'prices' => json_encode($prices),
            'details' => $request->details,
            'location' => $request->location,
            'zip_code' => $request->zip_code,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'mile_age' => $request->mile_age,
            'engine_capacity' => $request->engine_capacity,
            'fuel_type' => $request->fuel_type,
            'vehicle_type' => $request->vehicle_type,
            'transmission' => $request->transmission,
            'vehicle_condition' => $request->vehicle_condition,
            'external_color' => $request->external_color,
            'internal_color' => $request->internal_color,
            'vehicle_body' => $request->vehicle_body,
            'VIN' => $request->VIN,
            'deal_type' => $request->deal_type,
            'title_check' => $request->title_check,
            'accident_check' => $request->accident_check,
            'owner' => $request->owner,
            'status' => $request->status,
            'certified' => $request->certified,
            'admin_status' => $request->admin_status,
        ]);

        if ($request->file('image')) {
            foreach ($request->file('image') as $image) {
                $mainext = $image->getClientOriginalExtension();
                $main_file = 'car' . time() . rand(1000, 14000000000) . '.' . $mainext;
                $image->move(public_path('/images/media'), $main_file);
                $multi_image =
                    [
                        'reference_id' => $id,
                        'reference_type' => 'car',
                        'image' => $main_file,
                    ];
                $multi = media::create($multi_image);
            }
            if ($request->image_update != null) {
                foreach ($request->image_update as $image) {
                    $multi_image =
                        [
                            'reference_id' => $id,
                            'reference_type' => 'car',
                            'image' => $image,
                        ];
                    $multi = media::create($multi_image);
                }
            }
        } else {
            if ($request->image_update != null) {
                foreach ($request->image_update as $image) {
                    $multi_image =
                        [
                            'reference_id' => $id,
                            'reference_type' => 'car',
                            'image' => $image,
                        ];
                    $multi = media::create($multi_image);
                }
            }
        }

        return redirect()->back()->with('success', 'Car updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        media::where('reference_id', $id)->where('reference_type', 'car')->delete();
        Car::where('id', $id)->delete();
        return redirect()->back()->with('success', "Car Deleted Successfully");
    }

}
