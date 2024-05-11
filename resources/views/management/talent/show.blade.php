@extends('management.layouts.master')
@section('title')
    Our Talent
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Our Talent</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card pt-4">
                            <div class="header">
                                <div>
                                    <h6>Name</h6>
                                    <p>{{$talent->first_name.' '.$talent->last_name}}</p>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:{{$talent->email}}">{{$talent->email}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Phone NO.</h6>
                                    <p>
                                        <a href="tel:{{$talent->phone}}">{{$talent->phone}}</a>
                                    </p>
                                </div>
                                @if($talent->resume != null)
                                    <div>
                                        <h6>Resume</h6>
                                        <p><a href="{{asset('resume'.'/'.$talent->resume)}}" target="_blank"><i
                                                        class="far fa-file-pdf fa-lg"></i> Click me to Open File</a></p>
                                    </div>
                                @else
                                    <div>
                                        <h6>Event Manually Resume</h6>
                                        <p>{{$talent->event_manually_resume}}</p>
                                    </div>
                                @endif
                                @if($talent->resume != null)
                                    <div>
                                        <h6>Cover Letter</h6>
                                        <p><a href="{{asset('resume'.'/'.$talent->cover_letter)}}" target="_blank"><i
                                                        class="far fa-file-pdf fa-lg"></i>Click me to Open File</a></p>
                                    </div>
                                @else
                                    <div>
                                        <h6>Event Manually Cover Letter</h6>
                                        <p>{{$talent->event_manually_letter}}</p>
                                    </div>
                                @endif
                                <div>
                                    <h6>Department Name</h6>
                                    @if($talent->department != null)
                                    <p>{{implode(' , ', json_decode($talent->department))}}</p>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$talent->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

