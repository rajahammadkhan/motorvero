<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use App\Models\blog;
use App\Models\Contact;
use App\Models\review;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('Admin')) {
            $roleName = 'User';
            $data['users'] = User::whereHas('roles', function ($query) use ($roleName) {
                $query->where('name', $roleName);
            })->get();
            $rolesName = 'Dealer';
            $data['dealer'] = User::whereHas('roles', function ($query) use ($rolesName) {
                $query->where('name', $rolesName);
            })->get();

            $data['cars'] = Car::where('admin_status', 1)->get();
            $data['approval'] = Car::where('admin_status', '!=', 1)->get();
            $data['blogs_approval'] = blog::where('admin_status', '!=', 1)->get();
            $data['review'] = review::where('reviews_status', 1)->get();
            $data['pending'] = review::where('reviews_status', '!=', 1)->get();
            $data['newsletter'] = Newsletter::get();
            $data['newsletters'] = Newsletter::latest()->take(3)->get();
            $data['contact'] = Contact::get();
            $data['blog'] = blog::get();
        } else if(Auth::user()->hasRole('Dealer')){
        $data['total_cars'] = Car::where('user_id', auth()->user()->id)->get();
        $data['accept_cars'] = Car::where('user_id', auth()->user()->id)->where('admin_status', 1)->get();
        $data['pending_cars'] = Car::where('user_id', auth()->user()->id)->where('admin_status', '!=', 1)->get();
    }
    else{
        $data['total_blogs'] = blog::where('user_id', auth()->user()->id)->get();
        $data['accept_blogs'] = blog::where('user_id', auth()->user()->id)->where('admin_status', 1)->get();
        $data['pending_blogs'] = blog::where('user_id', auth()->user()->id)->where('admin_status', '!=', 1)->get();
    }


        return view('management/home/index', $data);
    }

    public function motorveroAdmin()
    {
        return redirect()->route('dashboard.index');
    }
     public function chatIndex()
     {
         return redirect()->to(route('inbox.index'));
     }
}
