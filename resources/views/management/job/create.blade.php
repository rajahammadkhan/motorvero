@extends('management.layouts.master')
@section('title')
    Job Create - {{ config('app.dashboard') }}
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
                <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-5">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('title') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title" required>
                                            </div>
                                        </div>

                                        <div class=" col-12 my-3">
                                            <label for="email_address1"> <strong> Description </strong></label>
                                            <div class="form-line">
                                                <textarea value="{{old('description') }}" type="text"
                                                          name="description"
                                                          id="erp_order_message" class="ckeditor form-control choices"
                                                          cols="30"
                                                          rows="10"></textarea>
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
                                            <option value="{{$locations->id}}">{{$locations->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="email_address1"><strong>Category</strong> </label>
                                <select class="form-control select2" name="category" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" selected disabled>Select Category</option>
                                    <option {{ old('category') == 'engineering' ? 'Selected' : '' }}  value="engineering">
                                        Engineering
                                    </option>
                                    <option {{ old('category') == 'product' ? 'Selected' : '' }}      value="product">
                                        Product
                                    </option>
                                    <option {{ old('category') == 'sales-ads-ops' ? 'Selected' : '' }} value="sales-ads-ops">
                                        Sales & Ads Ops
                                    </option>
                                    <option {{ old('category') == 'business-development' ? 'Selected' : '' }}  value="business-development">
                                        Business Development
                                    </option>
                                    <option {{ old('category') == 'finance-legal-executive' ? 'Selected' : '' }} value="finance-legal-executive">
                                        Finance, Legal and Executive
                                    </option>
                                    <option {{ old('category') == 'marketing' ? 'Selected' : '' }} value="marketing">
                                        Marketing
                                    </option>
                                    <option {{ old('category') == 'internship-co-ops' ? 'Selected' : '' }} value="internship-co-ops">
                                        Internship & Co-ops
                                    </option>
                                    <option {{ old('category') == 'people-talent' ? 'Selected' : '' }} value="people-talent">
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
