@extends('management.layouts.master')
@section('title')
    Car Create - {{ config('app.dashboard') }}
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

        body {
            min-height: 100vh;
            /*background-color: #757f9a;*/
            /*background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);*/
        }
    </style>
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Car</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Vehicle Name </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('title') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="title"
                                                       placeholder="Enter Vehicle Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12 mt-3">
                                            <label for="email_address1"><strong>Select Maker</strong> </label>
                                            <select class="form-control select2" name="make_id" id="addMaker"
                                                    data-placeholder="Select" required>
                                                <option selected disabled>Select maker</option>
                                                @foreach($makers as $maker)
                                                    <option value="{{$maker->id}}">{{$maker->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12 mt-3">
                                            <label for="email_address1"><strong>Select Model</strong> </label>
                                            <select class="form-control select2" name="model_id" id="model"
                                                    data-placeholder="Select" required>
                                                <option value="" disabled selected>Select Model</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Enter Model Year</strong></label>
                                            <div class="form-line">
                                                <input type="number" value="{{ old('model_year') }}"
                                                       id="model_year"
                                                       class="form-control" name="model_year"
                                                       placeholder="Enter Model Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Price __Enter Price In Dollars
                                                    ($) </strong></label>
                                            <div class="form-line">
                                                <input type="number" value="{{ old('dollar_price') }}"
                                                       id="erp_question_text"
                                                       class="form-control" name="dollar_price"
                                                       placeholder="Enter Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Location </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('location') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="location"
                                                       placeholder="Enter Location">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Zip Code </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('zip_code') }}" type="number"
                                                       id="erp_question_text"
                                                       class="form-control" name="zip_code"
                                                       placeholder="Enter Zip Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Contact Number </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('contact_no') }}" type="number"
                                                       id="erp_question_text"
                                                       class="form-control" name="contact_no"
                                                       placeholder="Enter Contact Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Email </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('email') }}" type="email" id="erp_question_text"
                                                       class="form-control" name="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> MileAge </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('mile_age') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="mile_age" placeholder="Enter MileAge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Engine Capacity </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('engine_capacity') }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="engine_capacity"
                                                       placeholder="Enter Engine Capacity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> External Color </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('external_color') }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="external_color"
                                                       placeholder="Enter External Color">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Internal Color </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('internal_color') }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="internal_color"
                                                       placeholder="Enter Internal Color">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> VIN </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('VIN') }}" type="text" id="erp_question_text"
                                                       class="form-control" name="VIN" placeholder="Enter VIN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Title Check </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('title_check') }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="title_check"
                                                       placeholder="Enter Title Check">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Accident Check </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('accident_check') }}" type="text"
                                                       id="erp_question_text"
                                                       class="form-control" name="accident_check"
                                                       placeholder="Enter Accident">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Owner </strong></label>
                                            <div class="form-line">
                                                <input value="{{ old('owner') }}" type="number" id="erp_question_text"
                                                       class="form-control" name="owner" placeholder="Enter Owner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2 mt-3">
                                        <div class=" col-12">
                                            <label for="email_address1"> <strong> Detail </strong></label>
                                            <textarea value="{{ old('details') }}" type="text"
                                                      name="details" id="erp_order_message"
                                                      class="ckeditor form-control choices" cols="30"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  card py-4 h-100">
                            <div class="d-flex justify-content-end">
                                <div class="col-6">
                                    <button class="btn btn-primary  my-2 float-right"> Add Car</button>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Status</strong> </label>
                                <select class="form-control select2" name="status" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option selected value="1">Publish
                                    </option>
                                    <option value="0">Draft
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Vehicle Type</strong> </label>
                                <select class="form-control select2" name="vehicle_type" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" disabled selected>Select Vehicle Type</option>

                                    <option {{ old('vehicle_type') == 'Two Wheeler' ? 'Selected' : '' }} value="Two Wheeler">
                                        Two Wheeler
                                    </option>
                                    <option {{ old('vehicle_type') == 'Four Wheeler' ? 'Selected' : '' }} value="Four Wheeler">
                                        Four Wheeler
                                    </option>

                                    <option {{ old('vehicle_type') == 'Other' ? 'Selected' : '' }} value="Other">Other
                                    </option>
                                </select>
                            </div>
                            @if(Auth::user()->hasRole('Admin'))
                                <div class="col-12 mt-3">
                                    <label for="email_address1"><strong>Deal Type</strong> </label>
                                    <select class="form-control select2" name="deal_type" id="Quiz-type"
                                            data-placeholder="Select">
                                        <option value="" disabled selected>Select Deal Type</option>

                                        <option {{ old('deal_type') == 'Great' ? 'Selected' : '' }} value="Great">Great
                                            Deal
                                        </option>
                                        <option {{ old('deal_type') == 'Fair' ? 'Selected' : '' }} value="Fair">Fair
                                            Deal
                                        </option>

                                        <option {{ old('deal_type') == 'Good' ? 'Selected' : '' }} value="Good">Good
                                            Deal
                                        </option>

                                        <option {{ old('deal_type') == 'High' ? 'Selected' : '' }} value="High">High
                                            Price
                                        </option>
                                    </select>
                                </div>
                            @endif
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Vehicle Body Shape</strong> </label>
                                <select class="form-control select2" name="vehicle_body" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" disabled selected>Select Vehicle Body Shape</option>

                                    <option {{ old('vehicle_body_shape') == 'SUV/Crosover' ? 'Selected' : '' }} value="SUV/Crosover">
                                        SUV / Crosover
                                    </option>
                                    <option {{ old('vehicle_body_shape') == 'Sedan' ? 'Selected' : '' }} value="Sedan">
                                        Sedan
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'PickUp Truck' ? 'Selected' : '' }} value="PickUp Truck">
                                        PickUp Truck
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'Coupe' ? 'Selected' : '' }} value="Coupe">
                                        Coupe
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'HatchBack' ? 'Selected' : '' }} value="HatchBack">
                                        HatchBack
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'Covertable' ? 'Selected' : '' }} value="Covertable">
                                        Covertable
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'Wagon' ? 'Selected' : '' }} value="Wagon">
                                        Wagon
                                    </option>

                                    <option {{ old('vehicle_body_shape') == 'MiniVan' ? 'Selected' : '' }} value="MiniVan">
                                        MiniVan
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Transmission</strong> </label>
                                <select class="form-control select2" name="transmission" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" disabled selected>Select Transmission</option>

                                    <option {{ old('transmission') == 'Automatic' ? 'Selected' : '' }} value="Automatic">
                                        Automatic
                                    </option>
                                    <option {{ old('transmission') == 'Manual' ? 'Selected' : '' }} value="Manual">
                                        Manual
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Fuel Type</strong> </label>
                                <select class="form-control select2" name="fuel_type" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" disabled selected>Select Fuel Type</option>

                                    <option {{ old('fuel_type') == 'Gas' ? 'Selected' : '' }} value="Gas">Gas
                                    </option>
                                    <option {{ old('fuel_type') == 'diesel' ? 'Selected' : '' }} value="diesel">Diesel
                                    </option>
                                    <option {{ old('fuel_type') == 'electric' ? 'Selected' : '' }} value="electric">
                                        Electric
                                    </option>
                                    <option {{ old('fuel_type') == 'hybrid' ? 'Selected' : '' }} value="hybrid">
                                      Hybrid
                                    </option>
                                    <option {{ old('fuel_type') == 'Other' ? 'Selected' : '' }} value="Other">Other
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Vehicle Condition</strong> </label>
                                <select class="form-control select2" name="vehicle_condition" id="Quiz-type"
                                        data-placeholder="Select">
                                    <option value="" disabled selected>Select Vehicle Condition</option>

                                    <option {{ old('vehicle_condition') == 'New' ? 'Selected' : '' }} value="New">New
                                    </option>
                                    <option {{ old('vehicle_condition') == 'Used' ? 'Selected' : '' }} value="Used">Used
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="email_address1"><strong>Certified Preowner (CPO)</strong></label>
                                <label class="d-block">
                                    <input value="1" type="checkbox"
                                           class="continue_selling" name="certified"
                                           class="py-2">
                                    <span class="py-2">Certified Preowned</span>
                                </label>
                            </div>
                            <div class="card">
                                <label class="mt-3"><strong>Media Gallery</strong></label>
                                <div class="card">
                                    <div class="multiimage main_duplicated_par">
                                        <div class="row wow-remove">
                                            <div class="col">
                                                <div class="main_container m-3">
                                                    <div
                                                            class="main imagebox position-relative rounded-3 overflow-hidden">
                                                        <div
                                                                class="select_img d-flex justify-content-center align-items-center">
                                                            <div class="dz-message p-3 text-center">
                                                                <h3>Click to upload.</h3>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="image[]"
                                                               class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                                        <div class="img-thumb">
                                                        </div>
                                                    </div>
                                                    <a
                                                            class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>

                                                    <a class="btn mt-3 firr fw-normal add_clone border-0 shadow-none">Add
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
                <div class="d-none  cloner firr" style="display:none;">
                    <div class="row wow-remove">
                        <div class="col">
                            <div class="main_container m-3">
                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                    <div class="select_img d-flex justify-content-center align-items-center">
                                        <div class="dz-message p-3 text-center">
                                            <h3>Click to upload.</h3>
                                        </div>
                                    </div>
                                    <input type="file" name="image[]"
                                           class="main_file w-100 h-100 form-control position-absolute  opacity-0"/>
                                    <div class="img-thumb">
                                    </div>
                                </div>
                                <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                                <a class="btn mt-3 firr fw-normal add_clone border-0 shadow-none">Add More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        var maxField = 10; //Input fields increment limitation
                        var addButton = $('.add_clone'); //Add button selector
                        var wrapper = $('.team_main'); //Input field wrapper
                        var fieldHTML = jQuery('.cloner.firr .row');
                        var fieldHTML1 = jQuery('.cloner.other .row');
                        var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
                        var x = 1; //Initial field counter is 1

                        //Once add button is clicked
                        $(document).on('click', '.add_clone.firr', function () {
                            var wow = $(this);
                            //Check maximum number of input fields
                            if (x < maxField) {
                                x++;
                                $(wow).parents('.multiimage').append($(fieldHTML).clone());
                            }
                        });
                        $(document).on('click', '.add_clone.other', function () {
                            var wow = $(this);
                            //Check maximum number of input fields
                            if (x < maxField) {
                                x++;
                                $(wow).parents('.multiimage').append($(fieldHTML1).clone());
                            }
                        });
                        //Once remove button is clicked
                        $(document).on('click', '.remove_clone', function (e) {

                            $(this).parents('.wow-remove').remove(); //Remove field html
                            if ($(".multiimage .row").length == 0) {
                                $('.multiimage').append($(fieldHTML).clone());

                            }

                        });
                    });

                    // Tags Input Values
                    $(document).ready(function () {
                        var tagInputEle = $('#package-tags-input');
                        var tags = tagInputEle.tagsinput();

                    });

                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#imageResult')
                                    .attr('src', e.target.result);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $(function () {
                        $('#upload').on('change', function () {
                            readURL(input);
                        });
                    });

                    /*  ==========================================
                        SHOW UPLOADED IMAGE NAME
                    * ========================================== */
                    var input = document.getElementById('upload');
                    var infoArea = document.getElementById('upload-label');

                    input.addEventListener('change', showFileName);

                    function showFileName(event) {
                        var input = event.srcElement;
                        var fileName = input.files[0].name;
                        infoArea.textContent = 'File name: ' + fileName;
                    }
                </script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#addMaker').on('change', function () {
                            var idMaker = this.value;
                            console.log(idMaker);
                            $("#model").html('');
                            $.ajax({
                                url: "{{url('fetch-model')}}",
                                type: "POST",
                                data: {
                                    make_id: idMaker,
                                    _token: '{{csrf_token()}}'
                                },
                                dataType: 'json',
                                success: function (result) {
                                    $('#model').html('<option value=""> Select Model </option>');
                                    $.each(result.model, function (key, value) {
                                        $("#model").append('<option value="' + value
                                            .id + '">' + value.title + '</option>');
                                    });
                                }
                            });
                        });
                    });
                </script>


@endsection
