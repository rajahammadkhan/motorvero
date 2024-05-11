<?php

namespace App\Http\Controllers\Frontend;

use App\Models\DealerDetail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Make;
use App\Models\review;
use App\Models\Contact;
use App\Models\RequestInformation;
use App\Models\Testimonial;
use App\Models\job;
use App\Models\location;
use App\Models\DetailPage;
use App\Models\ContactDealer;
use App\Models\OurTalent;
use App\Models\ApplyNow;
use App\Models\career;
use App\Helpers\DefaultLanguage;
use App\Models\Car;
use App\Models\PostDealer;
use App\Helpers;
use App\Models\Models;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\DealerMail;
use DB;
use Auth;

class FrontHomeController extends Controller
{

    public function Contact()
    {
        return view('frontend.pages.contact');
    }
    public function index(Request $request)
    {

        $make = Make::where('status', 1)->get();
        $review = review::where('reviews_status', 1)->get();
        //$latest = Car::where('status',1)->where('admin_status',1)->latest()->take(4)->get();
        $latest = Car::where('status',1)->where('admin_status',1)->where('deal_type','Great')->latest()->take(4)->get();
        $testimonials = Testimonial::where('status', 1)->get();
        $data = [
            'condition' => 'new',
            'transmission' => 'electric',
            'body_type' => 'MiniVan',
            'paginate' => 10
        ];

        $cars = DefaultLanguage::Cars($data);
        return view('frontend.home.index', compact('make', 'cars', 'review','testimonials','latest'));
    }

    public function fetchModal(Request $request)
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

    public function Career(Request $request)
    {
        $career = career::get();
        $job = job::get()->first();
        $location = location::latest()->take(5)->get();
        $imagePath = null;

        if ($image = $request->file('image')) {
            $path = 'images/media';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($path, $profileImage);
            $imagePath = $path . '/' . $profileImage;

            $data['image'] = $profileImage;
            $img = [
                'image' => $profileImage,
            ];
        }
        return view('frontend.pages.career', compact('career', 'location', 'job'));
    }

    public function JobSearch(Request $request)
    {
        $job = job::select();
        if (isset($request->parent_category)) {
            $job = $job->where('category', $request->parent_category);
        }
        if (isset($request->location)) {
            $locations = location::where('title', $request->location)->get()->first();
            $job = $job->where('location', $locations->id);
        }
        if (isset($request->keyword)) {
            $job = $job->orWhere('title', 'LIKE', "%{$request->keyword}%");
            $job = $job->orWhere('description', 'LIKE', "%{$request->keyword}%");
        }
        $data['job'] = $job->get();
        $data['location'] = location::get();
        return view('frontend/pages/job-search', $data);
    }

    public function JobDetail($slug)
    {
        $data['job'] = job::whereId($slug)->with('locationName')->first();
        return view('frontend/pages/job-detail', $data);
    }

    public function ApplyNow($id)
    {
        $job = job::find($id);
        return view('frontend.pages.apply-now', compact('job'));
    }

    public function ApplyJob(Request $request)
    {
        if ($request->file('resume')) {
            $mainext = $request->file('resume')->getClientOriginalExtension();
            $main_file = 'resume' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->resume->move(public_path('resume'), $main_file);
        } else {
            $main_file = null;
        }

        if ($request->file('cover_letter')) {
            $main_next = $request->file('cover_letter')->getClientOriginalExtension();
            $mainfile = 'cover_letter' . time() . rand(1000, 14000000000) . '.' . $main_next;
            $request->cover_letter->move(public_path('resume'), $mainfile);
        } else {
            $mainfile = null;
        }
        $data = [
            'job_id' => $request->job_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'resume' => $main_file,
            'cover_letter' => $mainfile,
            'linkedin_profile' => $request->linkedin_profile,
            'website' => $request->website,
            'work_authorization' => $request->work_authorization,
            'maintain_authorization' => $request->maintain_authorization,
            'gender' => $request->gender != null ? json_encode($request->gender) : null,
            'transgender_identify' => $request->transgender_identify != null ? json_encode($request->transgender_identify) : null,
            'lgbtqia_identify' => $request->lgbtqia_identify != null ? json_encode($request->lgbtqia_identify) : null,
            'race_ethnicity' => $request->race_ethnicity != null ? json_encode($request->race_ethnicity) : null,
            'veteran_status' => $request->veteran_status != null ? json_encode($request->veteran_status) : null,
            'disability' => $request->disability != null ? json_encode($request->disability) : null,
            'event_manually_resume' => $request->event_manually_resume,
            'event_manually_letter' => $request->event_manually_letter,
        ];
        ApplyNow::create($data);
        return redirect()->back()->with('success', 'Thanks For Submitting Your Application, Our Team Will Be Reach You Soon');
    }

    public function ApplyTalent()
    {
        return view('frontend.pages.apply-talent',);
    }

    public function OurTalent(Request $request)
    {
        if ($request->file('resume')) {
            $mainext = $request->file('resume')->getClientOriginalExtension();
            $main_file = 'resume' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->resume->move(public_path('resume'), $main_file);
        } else {
            $main_file = null;
        }

        if ($request->file('cover_letter')) {
            $main_next = $request->file('cover_letter')->getClientOriginalExtension();
            $mainfile = 'cover_letter' . time() . rand(1000, 14000000000) . '.' . $main_next;
            $request->cover_letter->move(public_path('resume'), $mainfile);
        } else {
            $mainfile = null;
        }
        $data = [
            'title' => $request->title,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'resume' => $main_file,
            'cover_letter' => $mainfile,
            'event_manually_resume' => $request->event_manually_resume,
            'event_manually_letter' => $request->event_manually_letter,
            'department' => $request->department != null ? json_encode($request->department) : null,
        ];
        OurTalent::create($data);
        return redirect()->back()->with('success', 'Thanks For Submitting Your Application, Our Team Will Be Reach You Soon');
    }

    public function dealer()
    {
        return view('frontend.pages.dealer');
    }

    public function UserData(Request $request)
    {
        if (Auth::check()) {
            $value = DetailPage::where('user_id', auth()->user()->id)->where('car_id', $request->car)->get()->first();
            if ($value == null) {
                $data = [
                    'car_id' => $request->car,
                    'user_id' => auth()->user()->id,
                ];
                DetailPage::create($data);
            }
            return true;
        } else {
            return false;
        }
    }

    public function PostDealer(Request $request)
    {

        $userDetail = [
            'name'=>$request->first_name,
            'email'=>$request->work_email,
            'phone_number'=>$request->phone_no,
            'status'=>2,
        ];

        $dealer = [
            'dealership_name' => $request->dealership_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'used_inventory' => $request->used_inventory,
            'website' => $request->website,
        ];
        User::create($userDetail);

        DealerDetail::create($dealer);
        return redirect()->back()->with('success', 'Thanks For Submitting Your Application, Our Team Will Be Reach You Soon');
    }

    public function ContactPost(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Contact::create($data);
        return redirect()->back()->with('success', "Contact Form Submitted Successfully");
    }

    public function CareerPost(Request $request)
    {
        if ($request->file('resume')) {
            $mainext = $request->file('resume')->getClientOriginalExtension();
            $main_file = 'resume' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $request->resume->move(public_path('resume'), $main_file);
        } else {
            $main_file = null;
        }
        $data = [
            'title' => $request->title,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'cover_letter' => $request->cover_letter,
            'resume' => $main_file,
        ];
        career::create($data);
        return redirect()->back()->with('success', 'Career Form Submitted Successfully');
    }

    public function ContactDealer(Request $request)
    {
        $dealer_id = Car::where('id', $request->car_id)->get()->first();
        $data = [
            'car_id' => $request->car_id,
            'dealer_id' => $dealer_id->user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'about_car' => $request->about_car,
            'zip' => $request->zip,
            'email' => $request->email,
            'phone' => $request->phone,
            'comments' => $request->comments,
            'email_me' => $request->email_me,
        ];
        $contacts = ContactDealer::create($data);
        $contact_dealer = [
            'id' => $request->car_id,
            'title' => $request->car_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'about_car' => $request->about_car,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'comments' => $request->comments,
        ];

        Mail::to($request->email)->send(new DealerMail($contact_dealer));
        \Mail::to($request->email)->send(new \App\Mail\DealerMail($contact_dealer));

        return $contacts;
    }

    public function RequestInfo(Request $request)
    {
        $dealer_id = Car::where('id', $request->car_id)->get()->first();
        $data = [
            'car_id' => $request->car_id,
            'dealer_id' => $dealer_id->user_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'area' => $request->area,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        $request_info = RequestInformation::create($data);
        return true;
    }

    public function sendEmail(Request $request)
    {
        $data = Newsletter::where('email', $request->email)->get()->first();
        if ($data == null) {
            $data = ['email' => $request->email];
            Newsletter::create($data);
            return true;
        } else {
            return false;
        }

    }

    public function FetchHome(Request $request)
    {
        $cars = Car::where('cars.status', 1)->where('cars.admin_status', 1);
        if (isset($request->vehicle_type)) {
            $cars->whereIn('cars.vehicle_type', $request->vehicle_type);
        }
        if (isset($request->external_color)) {
            foreach ($request->external_color as $term) {
                $cars->where('cars.external_color', 'LIKE', '%' . $term . '%');
            }
        }
        if (isset($request->internal_color)) {
            foreach ($request->internal_color as $colors) {
                $cars->where('cars.internal_color', 'LIKE', '%' . $colors . '%');
            }
        }
        if (isset($request->vehicle_body_shape)) {
            $cars->whereIn('cars.vehicle_body', $request->vehicle_body_shape);
        }
        if (isset($request->deal_type)) {
            $cars->whereIn('cars.deal_type', $request->deal_type);
        }
        if (isset($request->certified)) {
            $cars->where('cars.certified', $request->certified);
        }
        if (isset($request->owner)) {
            $cars->whereIn('cars.owner', $request->owner);
        }
        if (isset($request->accident_check)) {
            foreach ($request->accident_check as $accident) {
                $cars->where('cars.accident_check', 'LIKE', '%' . $accident . '%');
            }
        }
        if (isset($request->transmission)) {
            $cars->whereIn('cars.transmission', $request->transmission);
        }
        if (isset($request->dealer_rating)) {
            $cars->leftjoin('reviews','cars.id','=','reviews.car_id')
            ->whereIn('reviews.rating', $request->dealer_rating);
        }
        $cars->select(
           'cars.id',
           'cars.user_id',
           'cars.title',
           'cars.dollar_price',
           'cars.deal_type',
           'cars.contact_no',
        );
        $cars = $cars->orderBy('cars.dealer_type', 'asc')->paginate(10);
        $data['car'] = $cars;
        return view('frontend/snippets/listing_car', $data);
    }
}
