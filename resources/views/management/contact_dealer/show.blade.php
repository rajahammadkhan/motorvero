@extends('management.layouts.master')
@section('title')
    Contact Dealer
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Contact Dealer</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card pt-4">
                            <div class="header">
                                <div>
                                    <h6>Car Name</h6>
                                    <p>{{$data->CarName->title}}</p>
                                </div>
                                <div>
                                    <h6>Dealer Name</h6>
                                    <p>{{$data->DealerName->name}}</p>
                                </div>
                                <div>
                                    <h6>Name</h6>
                                    <p>{{$data->first_name.' '.$data->last_name}}</p>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:{{$data->email}}">{{$data->email}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>About Car</h6>
                                    <p>{{$data->about_car}}</p>
                                </div>
                                <div>
                                    <h6>Zip</h6>
                                    <p>{{$data->zip}}</p>
                                </div>
                                <div>
                                    <h6>Phone</h6>
                                    <p>{{$data->phone}}</p>
                                </div>
                                <div>
                                    <h6>Comment</h6>
                                    <p>{{$data->comments}}</p>
                                </div>
                                <div>
                                    <h6>Email Me</h6>
                                    @if ($data->email_me == 1)
                                        <p><label class="badge badge-info" data-toggle="modal"
                                                  data-target="#active_inactive">Checked</label>
                                        </p>
                                    @else
                                        <p><label class="badge badge-danger" data-toggle="modal"
                                                  data-target="#active_inactive">Not Checked</label>
                                        </p>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$data->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

