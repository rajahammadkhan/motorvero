@extends('management.layouts.master')
@section('title')
    Location Create - {{ config('app.dashboard') }}
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
                                <h4 class="page-title">Location</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <form action="{{ route ('location.update', $location->id )}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card py-4">
                                <div class="header">
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong>Title</strong></label>
                                            <div class="form-line">
                                                <input value="{{$location->title}}" id="erp_question_text"
                                                       class="form-control" name="location"
                                                       placeholder="Enter Location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <label for="email_address1"> <strong> Address </strong></label>
                                            <textarea type="text"
                                                      name="address"
                                                      id="erp_order_message" class="ckeditor form-control choices"
                                                      cols="30"
                                                      rows="10">{{$location->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  card py-4 h-100">
                            <div class="d-flex justify-content-end">
                                <div class="col-6">
                                    <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
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
                                                        @if($location->image != null)
                                                            <div class="img-thumb">
                                                                <img class="main_img d-block w-100 h-100 position-absolute"
                                                                     src="{{ asset('images/media' . '/' . $location->image) }}"
                                                                     alt="">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @if($location->image != null)
                                                        <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                                                    @endif
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
@endsection
