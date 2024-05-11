@extends('management.layouts.master')
@section('title')
    Apply Now
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Apply Now</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card pt-4">
                            <div class="header">
                                <div>
                                    <h6>Job Title</h6>
                                    <p>{{$apply->Job->title ?? ''}}</p>
                                </div>
                                <div>
                                    <h6>Name</h6>
                                    <p>{{$apply->first_name.' '.$apply->last_name}}</p>
                                </div>
                                <div>
                                    <h6>email</h6>
                                    <p>
                                        <a href="mailto:{{$apply->email ?? ''}}">{{$apply->email ?? ''}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>phone</h6>
                                    <p>
                                        <a href="tel:{{$apply->phone ?? ''}}">{{$apply->phone ?? ''}}</a>
                                    </p>
                                </div>
                                @if($apply->resume != null)
                                    <div>
                                        <h6>resume</h6>
                                        <p><a href="{{asset('resume'.'/'.$apply->resume)}}" target="_blank"><i
                                                        class="far fa-file-pdf fa-lg"></i> Click me to Open File</a></p>
                                    </div>
                                @else
                                    <div>
                                        <h6>Event Manually Resume</h6>
                                        <p>{{$apply->event_manually_resume}}</p>
                                    </div>
                                @endif
                                @if($apply->cover_letter != null)
                                    <div>
                                        <h6>Cover Letter</h6>
                                        <p><a href="{{asset('resume'.'/'.$apply->cover_letter)}}" target="_blank"><i
                                                        class="far fa-file-pdf fa-lg"></i>Click me to Open File</a></p>
                                    </div>
                                @else
                                    <div>
                                        <h6>Event Manually Cover Letter</h6>
                                        <p>{{$apply->event_manually_letter}}</p>
                                    </div>
                                @endif
                                <div>
                                    <h6>Linked
                                        in Profile</h6>
                                    <p>
                                        <a href="{{$apply->linkedin_profile ?? ''}}">{{$apply->linkedin_profile ?? ''}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Website</h6>
                                    <p>
                                        <a href="{{$apply->website ?? ''}}">{{$apply->website ?? ''}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Work Authorization</h6>
                                    @if ($apply->work_authorization == 'Yes')
                                        <p><label class="badge badge-info" data-toggle="modal"
                                                  data-target="#active_inactive">Agreed</label>
                                        </p>
                                    @else
                                        <p><label class="badge badge-danger" data-toggle="modal"
                                                  data-target="#active_inactive">Not Checked Agreed</label>
                                        </p>
                                    @endif
                                </div>
                                <div>
                                    <h6>Maintain Authorization</h6>
                                    @if ($apply->maintain_authorization == 'Yes')
                                        <p><label class="badge badge-info" data-toggle="modal"
                                                  data-target="#active_inactive">Agreed</label>
                                        </p>
                                    @else
                                        <p><label class="badge badge-danger" data-toggle="modal"
                                                  data-target="#active_inactive">Not Checked Agreed</label>
                                        </p>
                                    @endif
                                </div>
                                <div>
                                    <h6>Gender</h6>
                                    @if ($apply->gender != null)
                                        <p>{{implode(' , ', json_decode($apply->gender))}}</p>
                                    @endif
                                </div>
                                <div>
                                    <h6>Transgender Identity</h6>
                                    @if ($apply->transgender_identify != null)
                                        <p>{{implode(' , ', json_decode($apply->transgender_identify))}}<label></label>
                                        </p>@endif

                                </div>
                                <div>
                                    <h6>LGBTQIA+ Identity</h6>
                                    @if ($apply->lgbtqia_identify != null)
                                    <p>{{implode(' , ', json_decode($apply->lgbtqia_identify))}}</p>
                                    @endif
                                </div>
                                <div>
                                    <h6>Race/Ethnicity</h6>
                                    @if ($apply->race_ethnicity != null)
                                    <p>{{implode(' , ', json_decode($apply->race_ethnicity))}}</p>
                                    @endif
                                </div>
                                <div>
                                    <h6>Veteran Status</h6>
                                    @if ($apply->veteran_status != null)
                                    <p>{{implode(' , ', json_decode($apply->veteran_status))}}</p>
                                    @endif
                                </div>
                                <div>
                                    <h6>I have a disability</h6>
                                    @if ($apply->disability != null)
                                    <p>{{implode(' , ', json_decode($apply->disability))}}</p>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$apply->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

