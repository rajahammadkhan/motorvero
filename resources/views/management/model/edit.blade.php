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
                                <h4 class="page-title"> Model</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{ route('model.update',$models->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{$models->title ?? ''}}" type="text"
                                                       id="erp_question_text"
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
                            <div class="row">
                                <div class="col-12">
                                    <label for="email_address1"><strong>Status</strong> </label>
                                    <select class="form-control select2" name="status" id="Quiz-type"
                                            data-placeholder="Select" required>
                                        <option {{ $models->status == 1 ? 'Selected' : '' }} value=1>Publish
                                        </option>
                                        <option {{ $models->status == 0 ? 'Selected' : '' }} value=0>draft
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="email_address1"><strong>Select Maker</strong> </label>
                                    <select class="form-control select2" name="make_id" id="Quiz-type"
                                            data-placeholder="Select">
                                            @if(count($makers)>0)
                                        @foreach($makers as $maker)
                                            <option {{$maker->id == $models->make_id ? 'selected' : ''}} value='{{$maker->id}}'>{{$maker->title}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection