<?php

namespace App\Helpers;

use App\Models\Car;
use App\Models\Make;
use App\Models\Event;
use App\Models\blog;
use App\Models\review;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Request;
use Carbon\Carbon;

class DefaultLanguage
{
    public static function Cars($data = null)
    {
//        $data = ['condition'=>'new','transmission'=>'electric','body_type'=>'MiniVan'];
        $car = Car::where('status', 1)->where('admin_status', 1);

        if (isset($data['condition']) && $data['condition'] != null) {
            $car = $car->where('vehicle_condition', $data['condition']);
        }
        if (isset($data['fuel_type']) && $data['fuel_type'] != null) {
            $fuel = $data["fuel_type"];
            $car = $car->where('fuel_type', $fuel);
        }

        if (isset($data['body_type']) && $data['body_type'] != null) {
            $car = $car->where('vehicle_body', $data['body_type']);
        }
        if (isset($data['certified']) && $data['certified'] != null) {
            $car = $car->where('certified', $data['certified']);
        }

        if (isset($data['paginate']) && $data['paginate'] != null) {
            $car = $car->paginate($data['paginate']);
        } else {
            $car = $car->orderBy('dealer_type','asc')->paginate(10);
        }
        return $car;
    }

    public static function Make()
    {
//        $data = ['condition'=>'new','transmission'=>'electric','body_type'=>'MiniVan'];
        $make = Make::where('status', 1);

        $make = $make->orderBy('title');

        if (isset($data['paginate']) && $data['paginate'] != null) {
            $make = $make->paginate($data['paginate']);
        }
        if (isset($data['make_title']) && $data['make_title'] != null) {
            $make = $make->where('title', $data['make_title']);
        } else {
            $make = $make->get();
        }
        return $make;
    }

    public static function modeModel()
    {
        return Model::orderBy('title')->get();
    }
    public static function electricMake()
    {
//        $data = ['condition'=>'new','transmission'=>'electric','body_type'=>'MiniVan'];
        $make = Make::where('status', 1)->where('is_electric',1);

        $make = $make->orderBy('title');

        if (isset($data['paginate']) && $data['paginate'] != null) {
            $make = $make->paginate($data['paginate']);
        }
        if (isset($data['make_title']) && $data['make_title'] != null) {
            $make = $make->where('title', $data['make_title']);
        } else {
            $make = $make->get();
        }
        return $make;
    }

    public static function Reviews($id, $user_id)
    {
        $ratings = review::where('car_id', $id)->where('dealer_id', $user_id)->where('reviews_status', 1)->pluck('rating');
        if ($ratings->avg() != null) {
            return number_format($ratings->avg());
        } else {
            return 0;
        }


    }

    public static function recentUseCar()
    {
        return $blog = blog::where('type','used')
            ->where('category','research')->get();
    }
    public static function recentNewCar()
    {
        return $blog = blog::where('type','new')
            ->where('category','research')->get();
    }

    public static function stateOfUsa()
    {
        return State::get();
    }

    public static function stringDateToDbFormat($date,$format=null)
    {
        // Parse the string to create a Carbon instance with the specified format
        $carbonDateTime = Carbon::createFromFormat('l d F Y - H:i', $date);

// Now you can work with the Carbon instance
// For example, you can format the date and time in a different way
        $formattedDateTime = $carbonDateTime->format(isset($format)?$format:'Y-m-d H:i:s');

        return $formattedDateTime;
    }

    public static function dbFormatDateToString($date,$format=null)
    {
        // Your input date string
        $inputDateString = '2023-07-29 17:40:31';

// Parse the input date string into a Carbon instance
        $carbonDateTime = Carbon::parse($date);

// Format the Carbon instance in the desired pattern
        $formattedDateTime = $carbonDateTime->format(isset($format)?$format:'l d F Y - H:i');
        return $formattedDateTime;
    }

//    show all events
    public static function allEvents()
    {
        return Event::all();
    }
}
