@extends('management.layouts.master')
@section('title')
    My Profile -
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> My Profile</h4>
                            </li>

                        </ul>
                    </div>
                </div>

                <form action="{{url('admin/myprofile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">

                                <div class="header">
                                    <div class="row">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Name </strong></label>
                                            <div class="form-line">
                                                <input type="text" id="erp_question_text"
                                                       class="form-control" value="{{Auth()->user()->name}}"
                                                       name="name"
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Phone no: </strong></label>
                                            <div class="form-line">
                                                <input type="text" id="erp_question_text"
                                                       class="form-control" name="phone_number"
                                                       placeholder="Phone no:" value="{{Auth()->user()->phone_number}}">
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Website Link </strong></label>
                                            <div class="form-line">
                                                <input type="text" id="erp_question_text"
                                                       class="form-control" value="{{Auth()->user()->website_link}}"
                                                       name="website_link"
                                                       placeholder="Website Link">
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Map Link </strong></label>
                                            <div class="form-line">
                                                <input type="text" id="erp_question_text"
                                                       class="form-control" value="{{Auth()->user()->map_link}}"
                                                       name="map_link"
                                                       placeholder="Map Link">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-3">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Monday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="monday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->monday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Monday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="monday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->monday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Tuesday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="tuesday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->tuesday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Tuesday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="tuesday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->tuesday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Wednesday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="wednesday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->wednesday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Wednesday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="wednesday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->wednesday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Thursday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="thursday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->thursday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Thursday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="thursday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->thursday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Friday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="friday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->friday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Friday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="friday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->friday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Saturday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="saturday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->saturday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Saturday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="saturday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->saturday_closing_hour}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex mt-2">
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Sunday Opening
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="sunday_opening_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->sunday_opening_hour}}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="email_address1"> <strong> Sunday Closing
                                                        Hour </strong></label>
                                                <div class="form-line">
                                                    <input type="time" id="erp_question_text"
                                                           class="form-control" name="sunday_closing_hour"
                                                           placeholder="Opening Hour"
                                                           value="{{Auth()->user()->sunday_closing_hour}}">
                                                </div>
                                            </div>
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
                                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                        </div>
                                    </div>


                                    <div class="row my-3">

                                        <div class="col-lg-12 mx-auto">

                                            <div class="container">
                                                <h5>Profile Image
                                                </h5>
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' name="image" id="imageUpload"
                                                               accept=".png, .jpg, .jpeg"/>
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                             style="background-image: url({{asset('images/media/profile').'/'.Auth()->user()->image}});">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                <style>
                    .avatar-upload {
                        position: relative;
                        max-width: 205px;
                        margin: 50px auto;
                    }

                    .avatar-upload .avatar-edit {
                        position: absolute;
                        right: 12px;
                        z-index: 1;
                        top: 10px;
                    }

                    .avatar-upload .avatar-edit input {
                        display: none;
                    }

                    .avatar-upload .avatar-edit input + label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all 0.2s ease-in-out;
                    }

                    .avatar-upload .avatar-edit input + label:hover {
                        background: #f1f1f1;
                        border-color: #d6d6d6;
                    }

                    .avatar-upload .avatar-edit input + label:after {
                        content: "\f040";
                        font-family: 'FontAwesome';
                        color: #757575;
                        position: absolute;
                        top: 10px;
                        left: 0;
                        right: 0;
                        text-align: center;
                        margin: auto;
                    }

                    .avatar-upload .avatar-preview {
                        width: 192px;
                        height: 192px;
                        position: relative;
                        border-radius: 100%;
                        border: 6px solid #F8F8F8;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
                    }

                    .avatar-upload .avatar-preview > div {
                        width: 100%;
                        height: 100%;
                        border-radius: 100%;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                </style>
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                                $('#imagePreview').hide();
                                $('#imagePreview').fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#imageUpload").change(function () {
                        readURL(this);
                    });
                </script>
@endsection

