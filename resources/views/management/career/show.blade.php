@extends('management.layouts.master')
@section('title')
    Career Detail
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Career Detail</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card pt-4">
                            <div class="header">
                                <div>
                                    <h6>Title</h6>
                                    <p>{{$career->title}}</p>
                                </div>
                                <div>
                                    <h6>Name</h6>
                                    <p>{{$career->first_name.' '.$career->last_name}}</p>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:{{$career->email}}">{{$career->email}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Phone NO.</h6>
                                    <p>
                                        <a href="tel:{{$career->phone_no}}">{{$career->phone_no}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Cover Letter</h6>
                                    <p>{{$career->cover_letter}}</p>
                                </div>
                                <div>
                                    <h6>Resume</h6>
                                    <p><a href="{{asset('resume'.'/'.$career->resume)}}" target="_blank"><i
                                                    class="far fa-file-pdf fa-lg"></i> click me to pdf</a></p>
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$career->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

