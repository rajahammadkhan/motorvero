@extends('management.layouts.master')
@section('title')
    Event Edit - {{config('app.dashboard')}}
@endsection
@section('content')
    <style>

        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */
        body {
            min-height: 100vh;
            /*background-color: #757f9a;*/
            /*background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);*/
        }

        /*
</style>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Event</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{route('event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if(Auth::user()->hasRole('Admin'))
                        <input type="hidden" name="admin_status" value="1">
                    @else
                        <input type="hidden" name="admin_status" value="0">
                    @endif
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Title </strong></label>
                                            <div class="form-line">
                                                <input value="{{$event->title}}" type="text" id="erp_question_text"
                                                       class="form-control" name="title"
                                                       placeholder="Title" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="start_date"> <strong> Start Date And Time </strong></label>

                                            <input type="text" name="start_datetime" id="datetime" value="{{App\Helpers\DefaultLanguage::dbFormatDateToString($event->start_datetime)}}"
                                                   class="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="end_date"> <strong>End Date And Time </strong></label>

                                            <input type="text" name="end_datetime" value="{{App\Helpers\DefaultLanguage::dbFormatDateToString($event->end_datetime)}}"
                                                   class="datetimepicker" />
                                        </div>
                                    </div>



                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Short Description </strong></label>
                                            <textarea type="text" name="short_description"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10">

                                                {{$event->description}}
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="row my-2">
                                        <div class=" col-12">
                                            <label for="register_url"> <strong> Register URL </strong></label>
                                            <input value="{{$event->register_url}}" type="text"
                                                   name="register_url"
                                                   id="register_url" class="ckeditor form-control choices"

                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary float-right"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="row my-1">
                                        <div class=" col-12">
                                            <label for="email_address1"><strong>Status </strong></label>
                                            <select class="form-control select2" name="status" id="Quiz-type"
                                                    data-placeholder="Select">
                                                <option value="" disabled>Select</option>
                                                <option {{$event->status == '1' ? 'selected' : ''}}   value=1>
                                                    Active
                                                </option>
                                                <option {{$event->status == '0' ? 'selected' : ''}}  value=0>Close
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <label class="mt-3"><strong>Media Gallery</strong></label>
                                    <div class="row image-box">
                                        <div class="col">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="image" accept=".jpg,.gif,.png,.webp"
                                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                                    <div class="img-thumb">
                                                        @if($event->media()->image == null)
                                                        @else
                                                            <img class="main_img d-block w-100 h-100 position-absolute"
                                                                 src="{{asset('images/media'.'/'.$event->media()->image)}}"
                                                                 alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                @if($event->media()->image == null)

                                                @else
                                                    <a class="btn mt-3 remove_lol fw-normal border-0 shadow-none"
                                                       data-id="{{$event->media()->id}}">Remove</a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-none  cloner" style="display:none;">
                    <div class="row wow-remove">
                        <div class="col">
                            <div class="main_container m-3">
                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                    <div class="select_img d-flex justify-content-center align-items-center">
                                        <div class="dz-message p-3 text-center">
                                            <h3>Click to upload.</h3>
                                        </div>
                                    </div>
                                    <input type="file" name="image"
                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                    <div class="img-thumb">
                                    </div>
                                </div>
                                <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                            </div>
                        </div>

                    </div>
                </div>


@endsection

