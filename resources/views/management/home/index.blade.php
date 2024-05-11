@extends('management.layouts.master')
@section('title')
    Dashboard - Admin Control Panel
@endsection
@section('content')
    @if (Auth::user()->hasRole('Admin'))
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a>
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Users</div>
                        <h3 class="mt-2">
                            {{count($users)}}
                            <i class="fas fa-users"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Dealers</div>
                        <h3 class="mt-2">
                            {{count($dealer)}}
                            <i class="fas fa-users-cog"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Pending Approval</div>
                        <h3 class="mt-2">
                            {{count($approval)}}
                            <i class="fas fa-user-clock"></i>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Blog</div>
                        <h3 class="mt-2">
                            {{count($blog)}}
                            <i class="fab fa-blogger-b"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Subscribers</div>
                        <h3 class="mt-2">
                            {{count($newsletter)}}
                            <i class="far fa-newspaper"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Contact Queries</div>
                        <h3 class="mt-2">
                            {{count($contact)}}
                            <i class="fas fa-phone"></i>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Review</div>
                        <h3 class="mt-2">
                            {{count($review)}}
                            <i class="fas fa-star"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Pending Review</div>
                        <h3 class="mt-2">
                            {{count($pending)}}
                            <i class="fas fa-clock"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="counter-box text-center white">
                            <div class="text font-17 mt-3">Pending Blogs Approval</div>
                            <h3 class="mt-2">
                                {{count($blogs_approval)}}
                                <i class="fas fa-user-clock"></i>
                            </h3>
                        </div>
                    </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header d-flex justify-content-between">
                            <h2>
                                <strong>New </strong>Subscribers</h2>
                            <a href="{{url('admin/subscriber')}}">View All</a>
                        </div>
                        <div class="body">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($newsletters as $subscriber)
                                            <tr>
                                                <td>{{$subscriber->id ?? ''}}</td>
                                                <td>{{$subscriber->email ?? ''}}</td>
                                                <td>{{$subscriber->created_at->format('m/d/Y') ?? ''}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->hasRole('Dealer'))
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a>
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Cars</div>
                        <h3 class="mt-2">
                            {{count($total_cars)}}
                            <i class="fas fa-car"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Accepted Cars</div>
                        <h3 class="mt-2">
                            {{count($accept_cars)}}
                            <i class="fas fa-car-alt"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Pending Cars</div>
                        <h3 class="mt-2">
                            {{count($pending_cars)}}
                            <i class="fas fa-car-side"></i>
                        </h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a>
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Total Blogs</div>
                        <h3 class="mt-2">
                            {{count($total_blogs)}}
                            <i class="fas fa-car"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Accepted Blogs</div>
                        <h3 class="mt-2">
                            {{count($accept_blogs)}}
                            <i class="fas fa-car-alt"></i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 mt-3">Pending Blogs</div>
                        <h3 class="mt-2">
                            {{count($pending_blogs)}}
                            <i class="fas fa-car-side"></i>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
@endsection
