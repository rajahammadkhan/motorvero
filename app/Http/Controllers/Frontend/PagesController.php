<?php

namespace App\Http\Controllers\Frontend;

use App\Models\blog;
use App\Models\dealer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Make;
use App\Models\PressRoom;
use App\Models\Car;
use App\Models\Searches;
use App\Models\Models;
use App\Models\media;
use App\Models\review;
use App\Models\SellCarLog;
use App\Models\SellCarMoreDetail;
use DB;
class PagesController extends Controller
{

    public function PostReview(Request $request)
    {
        $dealer_id = Car::where('id', $request->car_id)->get()->first();
        $data = [
            'car_id' => $request->car_id,
            'dealer_id' => $dealer_id->user_id,
            'rating' => $request->rating,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ];
        review::create($data);
        return redirect()->back()->with('success', 'Reviews Added Successfully');
    }

    public function UsedCar()
    {
        $makes = Make::latest()->get();
        return view('frontend.pages.usedcars', compact('makes'));

    }

    public function NewCar()
    {
        $makes = Make::latest()->get();
        return view('frontend.pages.newcars', compact('makes'));

    }

    public function SellCar(Request $request)
    {
        if ($request->logId) {
            $sellCalLog = SellCarLog::where('id',$request->logId)->first();
            $data['sellCarLogDetail'] =json_decode($sellCalLog->response);
            $data['state'] = $sellCalLog->state;
            $data['sellCarLogId']= $sellCalLog->id;
            if($sellCalLog->type == 'license'){
                return view('frontend.pages.license_plate',$data);
            }else{
                return view('frontend.pages.vin2',$data);
            }

        } else {
            $data['sell_my_car_article'] = blog::where('category','article')
                ->whereHas('articlePageCategory',function ($query){
                    return $query->where('page_name','sell_my_car');
                })->get();

            return view('frontend.pages.sell_car',$data);
        }
    }

    public function SellCarMoreDetail(Request $request)
    {
        $request= $request->all();
        $sellCarLogId = $request['sellCarLogId'];
        $payload = $request['payload'];
        $email = $request['email'];

        $previousRecord = SellCarMoreDetail::where('sell_car_log_id',$sellCarLogId)->first();
        if($previousRecord){
            $previousRecord->delete();
        }

        SellCarMoreDetail::create([
            'sell_car_log_id'=>$sellCarLogId,
            'detail'=>$payload,
            'email'=>$email
        ]);
        return response('seccess',200);
    }

    public function Retrieve()
    {
        return view('frontend.pages.retrieve');
    }

    public function SellMoreCar()
    {
        $data['industry_insight_article'] = blog::where('category','article')
            ->whereHas('articlePageCategory',function ($query){
                return $query->where('page_name','industry_insight');
            })->get();
        return view('frontend.pages.sell_more_car',$data);
    }

    public function Financing()
    {
        return view('frontend.pages.finance');

    }

    public function CertifiedCar()
    {
        return view('frontend.pages.certified_car');

    }

    public function Research()
    {
        $data['makess'] = Make::latest()->limit(30)->get();
        $data['research_article'] = blog::where('category','article')
            ->whereHas('articlePageCategory',function ($query){
                return $query->where('page_name','research');
            })->get();


        return view('frontend.pages.research', $data);

    }
    public function tipsAdvice()
    {
        $data['tip_advice_article'] = blog::where('category','article')
            ->whereHas('articlePageCategory',function ($query){
                return $query->where('page_name','tip_and_advice');
            })->get();
        //return view('frontend.pages.tip_and_advice',$data); /frontend.pages.tips-advice
        return view('frontend.pages.tips-advice',$data);

    }

    public function index(Request $request)
    {
        $make = Make::get();
        return view('frontend.pages.detail', compact('make'));
    }

    public function carReview(Request $request)
    {
        return ('carefiews');
    }

    public function Detail($id)
    {
        $data['car'] = Car::whereStatus(1)->whereId($id)->first();
        $data['diff'] = now()->diffInDays($data['car']->created_at);
        $data['saved'] =DB::table('reactions')->where('type','wishlist')->where('reference_type','car')->where('reference_id',$data['car']->id)->get();
        $data['reviews'] = review::where('dealer_id', $data['car']->user_id)
            ->where('car_id',$data['car']->id)
            ->where('reviews_status', 1)->get();
        if (isset($data['reviews'])) {
            $data['five_star'] = array();
            $data['four_star'] = array();
            $data['three_star'] = array();
            $data['two_star'] = array();
            $data['one_star'] = array();
            foreach ($data['reviews'] as $rows) {
                if ($rows->rating == 5) {
                    array_push($data['five_star'], $rows->rating);
                }
                if ($rows->rating == 4) {
                    array_push($data['four_star'], $rows->rating);
                }
                if ($rows->rating == 3) {
                    array_push($data['three_star'], $rows->rating);
                }
                if ($rows->rating == 2) {
                    array_push($data['two_star'], $rows->rating);
                }
                if ($rows->rating == 1) {
                    array_push($data['one_star'], $rows->rating);
                }
            }
        }

        $ratings = review::where('car_id', $data['car']->id)->where('dealer_id', $data['car']->user_id)->where('reviews_status', 1)->pluck('rating');
        $data['averageRating'] = $ratings->avg();

//        $data['maxRating'] = max(sizeof($data['one_star']), sizeof($data['two_star']), sizeof($data['three_star']), sizeof($data['four_star']), sizeof($data['five_star']));
//
        if ($data['car'] == null) {
            return abort(404);
        }
        $data['related'] = DB::table('cars')->where('cars.status', 1)
            ->where('cars.make_id', $data['car']->make_id)
            ->where('cars.id', '!=', $id)
            ->leftJoin('media', function ($join) {
                $join->on('cars.id', '=', 'media.reference_id')
                    ->where('media.reference_type', '=', 'car');
            })->select('cars.*', 'media.image')
            ->whereRaw('media.id = (SELECT MIN(id) FROM media WHERE cars.id = media.reference_id)')->orderBy('cars.dealer_type','asc')->get();


        $data['media'] = media::where('reference_type', 'car')->whereReferenceId($id)->get();
        return view('frontend.pages.detail', $data);
    }

    public function Listing(Request $request)
    {
        if ($request->ajax() && $request->tracking) {
            if (!auth()->check()) {
                return 5;
            }
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            Searches::create($data);
            return true;
        }


        $car = Car::
        leftJoin('media', 'cars.id', '=', 'media.reference_id')
            ->where('cars.status', 1)
            ->where('media.reference_type', '=', 'car')
//        $car = DB::table('cars')->where('cars.status', 1)
//            ->leftJoin('media', function ($join) {
//                $join->on('cars.id', '=', 'media.reference_id')
//                    ->where('media.reference_type', '=', 'car');
//            });

//        $data = ['condition'=>'new','transmission'=>'electric','body_type'=>'MiniVan'];
//        $car = Car::where('status', 1)->leftJoin('media', function ($join) {
//            $join->on('cars.id', '=', 'media.reference_id');
//        })
//            ->where('media.reference_type', '=', 'car');
            ->when(isset($request->dealer),function ($q) use ($request){
                return $q->where('dealer_type',$request->dealer);
            })
            ->when(isset($request->model) && $request->model != 'null',function ($q) use ($request){
                $q->where('model_id', $request->model);
            });

        if (isset($request->minPrice) && isset($request->maxPrice) && $request->minPrice != null && $request->maxPrice != null) {
            $car = $car->whereBetween('original_price', [$request->minPrice, $request->maxPrice]);
        }

        if (isset($request->condition) && $request->condition != null) {
            $car = $car->where('vehicle_condition', $request->condition);
        }
        if (isset($request->make) && $request->make != null) {
            $car = $car->where('make_id', $request->make);
        }

        if (isset($request->zip) && $request->zip != null) {
            $car = $car->where('zip_code', $request->zip);
        }
        if (isset($request->price) && $request->price != null) {
            $car = $car->where('dollar_price', $request->price);
        }
        if (isset($request->year) && $request->year != null) {
            $car = $car->where('model_year', $request->year);
        }
        if (isset($request->body) && $request->body != null) {
            $car = $car->where('vehicle_body', $request->body);
        }
        $car = $car->select('cars.*', 'media.image')
            ->whereRaw('media.id = (SELECT MIN(id) FROM media WHERE cars.id = media.reference_id)');

        if (isset($data['paginate']) && $data['paginate'] != null) {
            $car = $car->paginate($data['paginate']);
        } else {
            $car = $car->orderBy('dealer_type','asc')->paginate(10);
        }
        $data['car'] = $car;
        $data['cars'] = Car::where('status',1)->orderBy('dealer_type','asc')->get();
        $data['makes'] = Make::where('status',1)->get();
        return view('frontend.pages.listing', $data);

    }

    public function fetchModel(Request $request)
    {
        $data['model'] = Models::where('make_id', $request->make_id)->get(['title', 'id']);
        return response()->json($data);
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }

    public function validationOfPlate(Request $request)
    {
        $view = '';
        $payload=[];
        $newArray = [];
        $record = [];
        if($request->type == 'vin'){
            $vinNum = $request->vin_number??null;
            if(isset($vinNum)){
                $alreadySearchCar = SellCarLog::where('type','vin')->where('vin_number',$vinNum)->first();
                if(isset($alreadySearchCar)){
                    //$record = json_decode($alreadySearchCar->response,true);
                    $record = $alreadySearchCar;
                }else{
                    $response = \App\Helpers\LicencePlateValidation::ValidateVin($vinNum);
                    if ($request['success']) {
                        foreach ($response as $key => $val) {
                            $convertKey = str_replace(array(' ', '(', ')'), '_', $key);
                            $newArray[$convertKey] = $val;
                        }

                        $record = SellCarLog::create([
                            'type'=>'vin',
                            'vin_number' =>$vinNum,
                            'response'=>json_encode($newArray)
                        ]);
                    }
                }

            }

        }else{
            $licensePlateNum = $request->license_plate_no??null;
            $state = $request->state??null;
            if(isset($licensePlateNum) && isset($state)){
                $alreadySearchCar = SellCarLog::where('type','!=','vin')
                    ->where('license_plate_number',$licensePlateNum)
                    ->where('state',$state)
                    ->first();
                if($alreadySearchCar){
                    $record = $alreadySearchCar;
                }else {
                    $response = \App\Helpers\LicencePlateValidation::ValidateLicensePlate($licensePlateNum, $state);
                    if ($request['success']) {
                        foreach ($response as $key => $val) {
                            $convertKey = str_replace(array(' ', '(', ')'), '_', $key);
                            $newArray[$convertKey] = $val;
                        }

                        $record = SellCarLog::create([
                            'type'=>'license',
                            'license_plate_number' =>$licensePlateNum,
                            'state'=>$state,
                            'vin_number'=>$newArray['VIN'],
                            'response'=>json_encode($newArray),
                            //  'created_by'=>auth()->id
                        ]);
                    }

                }
//                $view = 'frontend.pages.vin';
                $payload['records'] = $record;
            }
        }
        if(isset($record) && !empty($record)){
            return response(['redirect_url'=>'sell-car?logId='.$record->id]);
        }else{
            return $this->sendResponseJson([],'Invalid '.(isset($request->license_plate_no)?'Licence Plate':'Vin'),false,400);
        }


    }

    public function SellCarLogs()
    {
        $data['sellCarLogs'] =  SellCarLog::get();

        return view('management.sell_car.index',$data);
    }

    public function SellCarLogsDetail($id)
    {
        $data['sellCarLogs'] =  SellCarLog::with('moreDetails')->where('id',$id)->get();

        return view('management.sell_car.show',$data);
    }

    public function pressRoom()
    {
        $data['pressRoom'] = PressRoom::get();
        return view('frontend.pages.pressroom',$data);
    }

    public function pressRoomDetail($id)
    {
        $data['pressRoomDetail'] = PressRoom::where('id',$id)->first();
        return view('frontend.pages.pressroomdetail',$data);
    }

    public function customerReview()
    {
        $data['allReviews'] = review::get();
        return view('frontend.pages.customerreviews' ,$data);
    }

    public function findDealer()
    {
        $data['allDealer'] = dealer::all();
        return view('frontend.pages.findadealer',$data);
    }

    public function fetchAllModel(Request $request)
    {
        $data = Models::where('make_id',$request->makeId)->get();
        return $this->sendResponseJson($data,'success');
    }

    public function CertifiedCarByTitle($title)
    {

        $car = [];
        $data = [];
        $make = Make::where('slug',$title)->first();

        if(isset($make)){
            $car = Car::
            select('cars.*', 'media.image')
            ->leftJoin('media', 'cars.id', '=', 'media.reference_id')
                ->whereRaw('media.id = (SELECT MIN(id) FROM media WHERE cars.id = media.reference_id)')
                ->where('cars.status', 1)
                ->where('media.reference_type', '=', 'car')
                ->where('cars.make_id', $make->id);
            if (isset($data['paginate']) && $data['paginate'] != null) {
                $car = $car->paginate($data['paginate']);
            } else {
                $car = $car->orderBy('dealer_type','asc')->paginate(10);
            }
        }

        $data['car'] = $car;
        $data['cars'] = Car::where('status',1)->orderBy('dealer_type','asc')->get();
        $data['makes'] = Make::where('status',1)->get();
        return view('frontend.pages.listing', $data);
    }

    public function carPreview()
    {
        $data['used'] = blog::where('category','article')
            ->where('type','used')
            ->whereHas('articlePageCategory',function ($query){
                return $query->where('page_name','car_preview');
            })->get();
        $data['new'] = blog::where('category','article')
            ->where('type','new')
            ->whereHas('articlePageCategory',function ($query){
                return $query->where('page_name','car_preview');
            })->get();
        return view('frontend.pages.car-preview',$data);
    }
}
