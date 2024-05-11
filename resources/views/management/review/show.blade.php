@extends('management.layouts.master')
@section('title')
    Review Show - Elite Blue Dashboard
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Review Detail</h4>
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
                                    <p>{{$review->CarName->title}}</p>
                                </div>
                                <div>
                                    <h6>Dealer Name</h6>
                                    <p>{{$review->DealerName->name}}</p>
                                </div>
                                <div>
                                    <h6>Name</h6>
                                    <p>{{$review->name ?? ''}}</p>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <p>
                                        <a href="mailto:{{$review->email ?? ''}}">{{$review->email ?? ''}}</a>
                                    </p>
                                </div>
                                <div>
                                    <h6>Rating</h6>
                                    <p>{{$review->rating ?? ''}}</p>
                                </div>
                                <div>
                                    <h6>Status</h6>
                                    @if ($review->reviews_status == 1)
                                        <label class="badge badge-info" data-toggle="modal"
                                               data-target="#active_inactive">Approved</label>
                                    @else
                                        <label class="badge badge-danger" data-toggle="modal"
                                               data-target="#active_inactive">Pending</label>
                                    @endif
                                </div>
                                <div>
                                    <h6>Comment</h6>
                                    <p>{!! $review->comment ?? '' !!}</p>
                                </div>
                                <div class="text-right">
                                    <h6>Date / Time</h6>
                                    <p class="m-0">{{$review->created_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

