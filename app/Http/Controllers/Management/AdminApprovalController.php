<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\media;
use App\Models\Make;
use App\Models\Models;
use Illuminate\Http\Request;

class AdminApprovalController extends Controller
{
    public function index()
    {
        $cars = Car::where('admin_status', 0)->get();
        return view('management/admin_approval/index', compact('cars'));
    }

    public function show($id)
    {
        $makers = Make::get();
        $cars = Car::where('id', $id)->get()->first();
        $multi = media::where('reference_id', $id)->where('reference_type', 'car')->get();
        return view('management/car/edit', compact('makers', 'multi', 'cars'));
    }

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

    public function approvalUpdate(Request $request, $id)
    {
        $review = Car::where('id', $id)->where('admin_status', 0)->get()->first();
        $review->update([
            'deal_type' => $request->deal_type,
            'admin_status' => 1,
        ]);
        return redirect()->back()->with('success', 'Car Approved successfully');
    }

}
