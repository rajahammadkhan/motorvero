@extends('management.layouts.master')
@section('title')
    Job Update - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Job </h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{ route('job.update',$job->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-5">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{ $job->title }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title" required>
                                            </div>
                                        </div>

                                        <div class=" col-12 my-3">
                                            <label for="email_address1"> <strong> Description </strong></label>
                                            <div class="form-line">
                                                <textarea  type="text"
                                                          name="description"
                                                          id="erp_order_message" class="ckeditor form-control choices"
                                                          cols="30"
                                                          rows="10">{!! $job->description !!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4 card py-4">
                            <div class="d-flex justify-content-end">
                                <div class="col-4">
                                    <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="my-4">
                                    <label for="email_address1"><strong>Location</strong> </label>
                                    <select class="form-control select2" name="location" id="Quiz-type"
                                            data-placeholder="Select">
                                        <option value="" selected disabled>Select Location</option>
                                        @foreach ($location as $locations)
                                            <option {{$locations->id == $job->location ? 'selected' : ''}} value="{{$locations->id}}">{{$locations->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="email_address1"><strong>Category</strong> </label>
                                <select class="form-control select2" name="category" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" selected disabled>Select Category</option>
                                    <option {{$job->category == 'engineering' ? 'Selected' : '' }}  value="engineering">
                                        Engineering
                                    </option>
                                    <option {{ $job->category == 'product' ? 'Selected' : '' }}      value="product">
                                        Product
                                    </option>
                                    <option {{ $job->category == 'sales-ads-ops' ? 'Selected' : '' }} value="sales-ads-ops">
                                        Sales & Ads Ops
                                    </option>
                                    <option {{ $job->category == 'business-development' ? 'Selected' : '' }}  value="business-development">
                                        Business Development
                                    </option>
                                    <option {{ $job->category == 'finance-legal-executive' ? 'Selected' : '' }} value="finance-legal-executive">
                                        Finance, Legal and Executive
                                    </option>
                                    <option {{ $job->category == 'marketing' ? 'Selected' : '' }} value="marketing">
                                        Marketing
                                    </option>
                                    <option {{ $job->category == 'internship-co-ops' ? 'Selected' : '' }} value="internship-co-ops">
                                        Internship & Co-ops
                                    </option>
                                    <option {{ $job->category == 'people-talent' ? 'Selected' : '' }} value="people-talent">
                                        People & Talent
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                            </div>
                        </div>
                    </div>
                </form>
@endsection
