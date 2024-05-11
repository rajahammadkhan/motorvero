<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Paginate;
use App\Http\Controllers\Controller;
use App\Models\PreQualified;
use App\Models\media;
use App\Models\Newsletter;
use App\Models\DetailPage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use DB;

class UserDashboardController extends Controller
{

    public function Finance(Request $request)
    {
        $prequalified = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'confirm_email' => $request->confirm_email,
            'phone_number' => $request->phone_number,
            'home_address' => $request->home_address,
            'app_unit' => $request->app_unit,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'duration' => $request->duration,
            'month' => $request->month,
            'property_type' => $request->property_type,
            'monthly_pay' => $request->monthly_pay,
            'employment_status' => $request->employment_status,
            'employer' => $request->employer,
            'job_title' => $request->job_title,
            'duration_of_residence' => $request->duration_of_residence,
            'month_of_residence' => $request->month_of_residence,
            'primary_income' => $request->primary_income,
            'social_security' => $request->social_security,
            'date_of_birth' => $request->date_of_birth,
            'agreed' => $request->agreed,
            'term_condition' => $request->term_condition,
        ];
        PreQualified::create($prequalified);
        $qualified = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'confirm_email' => $request->confirm_email,
            'phone_number' => $request->phone_number,
            'home_address' => $request->home_address,
            'app_unit' => $request->app_unit,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'duration' => $request->duration,
            'month' => $request->month,
            'property_type' => $request->property_type,
            'monthly_pay' => $request->monthly_pay,
            'employment_status' => $request->employment_status,
            'employer' => $request->employer,
            'job_title' => $request->job_title,
            'duration_of_residence' => $request->duration_of_residence,
            'month_of_residence' => $request->month_of_residence,
            'primary_income' => $request->primary_income,
            'social_security' => $request->social_security,
            'date_of_birth' => $request->date_of_birth,
            'agreed' => $request->agreed,
            'term_condition' => $request->term_condition,
        ];

        Mail::to($request->email)->send(new PreQualified($qualified));
        \Mail::to($request->email)->send(new \App\Mail\PreQualified($qualified));
        return true;
    }

    public function LikePost(Request $request)
    {
        $data = [
            'reference_type' => 'car',
            'reference_id' => $request->car_id,
            'user_id' => Auth::user()->id,
            'type' => 'saved',

        ];
        $wow = DB::table('reactions')->insert($data);
        if ($wow) {
            $like = DB::table('reactions')
                ->where('type', 'saved')
                ->where('reference_type', 'car')
                ->where('reference_id', $request->car_id)->get();
            return count($like);
        }
    }

    public function DislikePost(Request $request)
    {
        DB::table('reactions')
            ->where('type', 'saved')
            ->where('user_id', auth()->user()->id)
            ->where('reference_type', 'car')
            ->where('reference_id', $request->car_id)->delete();
        $like = DB::table('reactions')
            ->where('type', $request->reaction)
            ->where('reference_type', 'car')
            ->where('reference_id', $request->car_id)->get();
        return count($like);

    }

    public function wishList(Request $request)
    {
        $reactions = auth()->user()->reactions('car', 'wishlist');
        return view('frontend/dashboard/wishlist/index', compact('reactions'));

    }

    public function searches()
    {
        $data['searches'] = auth()->user()->searches();
        return view('frontend/dashboard/search', $data);
    }

    public function Recommended()
    {
        $carArray=[];
        $recommended = DetailPage::where('user_id', auth()->user()->id)->get();
        $cars_data=[];
        if (count($recommended) > 0) {
            foreach ($recommended as $recommend) {
                $cars = Car::where('id',$recommend->car_id)->get()->first();
                $cars_data= Car::where('model_id',$cars->model_id)->get();

                $carArray=[...$carArray,...$cars_data];

            }
        }

        $data['cars_data']=$carArray;
        return view('frontend/dashboard/recommended', $data);
    }

    public function myProfile()
    {
        $data = User::where('id', Auth()->user()->id)->get();
        return view('frontend/dashboard/profile/index', compact('data'));
    }

    public function updateprofile(Request $request, $id)
    {
        $users = User::where('id', $id)->get()->first();
        if ($request->file('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $main_file = time() . rand(1000, 14000000000) . '.' . $ext;
            $request->image->move(public_path('images/profile'), $main_file);
        } else {
            $main_file = $users->image;
        }

        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'image' => $main_file,

        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');

    }

    public function password()
    {
        return view('frontend/dashboard/profile/password');
    }

    public function updatePassword(Request $request, $id)
    {


        $data = User::where('id', $id)->get()->first();


        $this->validate($request, [

            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',

        ]);

        $hashedPassword = auth()->user()->password;

        if (Hash::check($request->password, $hashedPassword)) {

            if ($request->new_password == $request->confirm_password) {

                $data->update([

                    'password' => Hash::make($request->new_password)
                ]);
                return redirect()->back()->with('success', 'Password Updated Successfully.');

            } else {
                return redirect()->back()->with('wrong', 'New Password & Confirm Password  do not match, please try again.');
            }

        } else {

            return redirect()->back()->with('wrong', 'You Entered a Wrong Current Password');

        }
    }

}
