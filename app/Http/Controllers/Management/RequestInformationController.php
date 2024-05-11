<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;
use App\Models\RequestInformation;
use Illuminate\Http\Request;

class RequestInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RequestInformation::get();
        return view('management.request_info.index',compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RequestInformation::find($id);
        return view('management.request_info.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestInformation $requestInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestInformation $requestInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RequestInformation::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Request Information deleted successfully');
    }
}
