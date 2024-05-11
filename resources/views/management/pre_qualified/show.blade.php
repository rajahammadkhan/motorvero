@extends('management.layouts.master')
@section('title')
    Pre Qualified
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Pre Qualified
                                </h4>
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
                                    <p>{{$data->first_name.' '.$data->last_name ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:{{$data->email ?? ''}}">{{$data->email ?? 'No Data Insert'}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Confirm Email</h6>
                                    <p>
                                        <a href="mailto:{{$data->confirm_email ?? ''}}">{{$data->confirm_email ?? 'No Data Insert'}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Phone Number</h6>
                                    <p>
                                        <a href="tel:{{$data->phone_number ?? ''}}">{{$data->phone_number ?? 'No Data Insert'}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Home Address</h6>
                                    <p>{{$data->home_address ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>App Unit</h6>
                                    <p>{{$data->app_unit ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>City</h6>
                                    <p>{{$data->city ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>State</h6>
                                    <p>{{$data->state ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Zip Code</h6>
                                    <p>{{$data->zip_code ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Duration</h6>
                                    <p>{{$data->duration ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Month</h6>
                                    <p>{{$data->month ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Property Type</h6>
                                    <p>{{$data->property_type ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Monthly Pay</h6>
                                    <p>{{$data->monthly_pay ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Employment Status</h6>
                                    <p>{{$data->employment_status ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Employer</h6>
                                    <p>{{$data->employer ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Job Title</h6>
                                    <p>{{$data->job_title ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Duration Of Residence</h6>
                                    <p>{{$data->duration_of_residence ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Month Of Residence</h6>
                                    <p>{{$data->month_of_residence ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Primary Income</h6>
                                    <p>{{$data->primary_income ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Social Security</h6>
                                    <p>{{$data->social_security ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Date Of Birth</h6>
                                    <p>{{$data->date_of_birth ?? 'No Data Insert'}}</p>
                                </div>
                                <div>
                                    <h6>Agreed</h6>
                                    @if ($data->agreed == 1)
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
                                    <h6>Term Condition</h6>
                                    @if ($data->term_condition == 1)
                                        <p><label class="badge badge-info" data-toggle="modal"
                                                  data-target="#active_inactive">Term Condition</label>
                                        </p>
                                    @else
                                        <p><label class="badge badge-danger" data-toggle="modal"
                                                  data-target="#active_inactive">Not Checked Term Condition</label>
                                        </p>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$data->created_at ?? 'No Data Insert'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

