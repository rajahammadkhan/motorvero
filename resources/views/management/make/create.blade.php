@extends('management.layouts.master')
@section('title')
    Make Create - {{ config('app.dashboard') }}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Make </h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{ route('make.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('title') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title" placeholder="Title" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4  card py-4">
                            <div class="d-flex justify-content-end">
                                <div class="col-4">
                                    <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="email_address1"><strong>Status</strong> </label>
                                <select class="form-control select2" name="status" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option selected value="1">Publish
                                    </option>
                                    <option value="0">Draft
                                    </option>
                                </select>
                                <label class="pt-1" for="email_address1"><strong>Electric</strong> </label>
                                <select class="form-control select2" name="is_electric"
                                        data-placeholder="Select">
                                    <option value="1">Yes
                                    </option>
                                    <option selected value="0">No
                                    </option>
                                </select>

                            </div>
                        </div>
                    </div>
                </form>
@endsection