<?php

namespace App\Http\Controllers\Management;

use App\Helpers\DefaultLanguage;
use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Contact;
use App\Models\EnquireNow;
use App\Models\media;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::latest()->get()->all();
        return view('management/contact/index', compact('data'));
    }

    public function subscriber()
    {
        $data = Newsletter::latest()->get()->all();
        return view('management/contact/newsletter', compact('data'));
    }

    public function allEnquire()
    {
        $data = EnquireNow::Leftjoin('packages', 'packages.id', '=', 'enquire_nows.package_id')
            ->select('packages.id AS pack_id', 'packages.title', 'enquire_nows.*')->get();
        return view('management/enquire/index', compact('data'));
    }

    public function getEnquire($id)
    {
        $data = EnquireNow::Leftjoin('packages', 'packages.id', '=', 'enquire_nows.package_id')
            ->where('enquire_nows.id', $id)
            ->select('packages.title', 'enquire_nows.*')->get()->first();
        return view('management/enquire/show', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contact::where('id', $id)->get()->first();
        return view('management/contact/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }

    public function subscriberDelete($id)
    {
        Newsletter::find($id)->delete();
        return redirect()->back()->with('success', 'Subscriber Deleted Successfully');
    }

    public function imageDelete(Request $request)
    {
        $categories = media::where('id', $request->id)->delete();
        return true;
    }
}
