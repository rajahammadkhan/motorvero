@extends('management.layouts.master')
@section('title')
Expert Review Create - {{config('app.dashboard')}}
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
                            <h4 class="page-title"> Expert Review </h4>
                        </li>

                    </ul>
                </div>
            </div>
            <form action="{{route('expert-review.store')}}" method="POST" enctype="multipart/form-data">
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
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Title </strong></label>
                                        <div class="form-line">
                                            <input value="{{old('title') }}" type="text" id="erp_question_text"
                                                class="form-control" name="title" placeholder="Title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Short Description </strong></label>
                                        <textarea value="{{old('short_description') }}" type="text"
                                            name="short_description" id="erp_order_message"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Description </strong></label>
                                        <textarea value="{{old('long_description') }}" type="text"
                                            name="long_description" id="erp_order_message"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card py-4">
                            <div class="header">
                                <div class="row">
                                    <div class="col-12">
                                        <label for=""><strong>pricing & specs</strong></label>
                                        <div class="my-4">
                                            <label for=""><strong>Motorvero Video</strong></label>
                                            <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                <div
                                                    class="select_img d-flex justify-content-center align-items-center">
                                                    <div class="dz-message p-3 text-center">
                                                        <h3>Click to upload.</h3>
                                                    </div>
                                                </div>
                                                <input type="file" name="reviews_video"
{{--                                                    accept=".mp4,.mov,.wmv,.flv,.avi,.avchd,.webm,.mkv"--}}
                                                    class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                                <div class="img-thumb">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <label for=""><strong>MSRP</strong></label>
                                        <input value="" type="number" id="start-price" class="form-control"
                                            name="start_price" placeholder="Starting Price">
                                        <input value="" type="number" id="end-price" class="form-control"
                                            name="end_price" placeholder="Ending Price">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <label for=""><strong>Pros</strong></label>
                                        <textarea value="" type="text" name="pros" id="pros_discrip"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                        <label for="" class="my-2"><strong>Cons</strong></label>
                                        <textarea value="" type="text" name="cons" id="cons_discrip"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                    </div>

                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <label for=""><strong>Expert Reviews</strong></label>
                                        <input value="" type="number" id="Look-feel-inp" class="form-control"
                                            name="look_feel" placeholder="Look-feel">
                                        <input value="" type="number" id="technology-inp" class="form-control"
                                            name="technology" placeholder="technology">
                                        <input value="" type="number" id="performance-inp" class="form-control"
                                            name="performance" placeholder="performance">
                                        <input value="" type="number" id="safety-inp" class="form-control" name="safety"
                                            placeholder="safety">
                                        <input value="" type="number" id="form-function-inp" class="form-control"
                                            name="form_function" placeholder="form-function">
                                        <input value="" type="number" id="cost-inp" class="form-control" name="cost"
                                            placeholder="cost">
                                    </div>
                                    <div class="col-12 my-4">
                                        <label for=""><strong>Expert Description</strong></label>
                                        <textarea value="" type="text" name="expert_description" id="expert_discrip"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12 my-4">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a href="#look-feel" class="nav-link active" data-bs-toggle="tab"
                                                    aria-selected="true" role="tab">Look & Feel</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#performance" class="nav-link" data-bs-toggle="tab"
                                                    aria-selected="false" role="tab">Performance</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#function" class="nav-link" data-bs-toggle="tab"
                                                    aria-selected="false" role="tab">Form & Function</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#technology" class="nav-link" data-bs-toggle="tab"
                                                    aria-selected="false" role="tab">Technology</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#safety" class="nav-link" data-bs-toggle="tab"
                                                    aria-selected="false" role="tab">Safety</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a href="#cost" class="nav-link" data-bs-toggle="tab"
                                                    aria-selected="false" role="tab">Cost-Effectiveness</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="look-feel" role="tabpanel"
                                                aria-labelledby="look-feel-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="look_and_feel_detail"
                                                        id="look_feel_discrip" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="performance" role="tabpanel"
                                                aria-labelledby="performance-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="performance_detail"
                                                        id="performance_discrip" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="function" role="tabpanel"
                                                aria-labelledby="function-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="form_and_function_detail"
                                                        id="form_and_function_detail" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="technology" role="tabpanel"
                                                aria-labelledby="technology-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="technology_detail"
                                                        id="technology_detail" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="safety" role="tabpanel"
                                                aria-labelledby="safety-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="safety_detail"
                                                        id="safety" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="cost" role="tabpanel"
                                                aria-labelledby="cost-tab">
                                                <div class="my-2">
                                                    <textarea value="" type="text" name="cost_effectiveness"
                                                        id="cost_effectiveness" class="ckeditor form-control choices"
                                                        cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <label for=""><strong>Pricing</strong></label>
                                        <div class="col-12 my-4">
                                            <label for=""><strong>Price Range</strong></label>
                                            <input value="" type="number" id="price-range-start" class="form-control"
                                            name="price_range_start" placeholder="price-range-start">
                                            <input value="" type="number" id="price-range-end" class="form-control"
                                            name="price_range_end" placeholder="price-range-end">
                                        </div>
                                        <div class="col-12 my-4">
                                            <label for=""><strong>Avarage Price on CG</strong></label>
                                            <input value="" type="number" id="avg-price-start" class="form-control"
                                            name="avg_price_range_start" placeholder="avg-price-start">
                                            <input value="" type="number" id="avg-price-end" class="form-control"
                                            name="avg_price_range_end" placeholder="avg-price-end">
                                        </div>
                                        <div class="col-12 my-4">
                                            <label for=""><strong>YOY PRICE CHANGE</strong></label>
                                            <input value="" type="number" id="yoy-price-start" class="form-control"
                                            name="yoy_price_start" placeholder="yoy-price-start">
                                            <input value="" type="number" id="yoy-price-end" class="form-control"
                                            name="yoy_price_end" placeholder="yoy-price-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card py-4">
                            <div class="header">
                                <div class="row">
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Meta Title </strong></label>
                                        <div class="form-line">
                                            <input value="{{old('meta_title') }}" type="text" id="meta_title"
                                                class="form-control" name="meta_title" placeholder="Meta Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Meta Description </strong></label>
                                        <textarea value="{{old('meta_description') }}" type="text"
                                            name="meta_description" id="erp_order_message"
                                            class="ckeditor form-control choices" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class=" col-12">
                                        <label for="email_address1"> <strong> Meta Keywords </strong></label>

                                        <div class="form-line">
                                            <input value="{{old('meta_keywords')}}" type="text" id="erp_question_text"
                                                class="form-control" name="meta_keywords" placeholder="Meta Keywords">
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
                                        <div>
                                            <button class="btn btn-primary  my-2 float-right"> Submit</button>
                                        </div>
                                        <div>
                                            <a href="{{url()->previous()}}"
                                                class="btn btn-primary  my-2 float-right pr-2"> Back</a>
                                        </div>


                                    </div>

                                </div>
                                <div class="row my-1">
                                    <div class=" col-12">
                                        <label for="email_address1"><strong>Status </strong></label>
                                        <select class="form-control select2" name="status" id="Quiz-type"
                                            data-placeholder="Select">
                                            <option selected value="1">Publish
                                            </option>
                                            <option value="0">Draft
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class=" col-12">
                                        <label for="email_address1"><strong>Type</strong></label>
                                        <select class="form-control select2" name="type" id="Quiz-type"
                                            data-placeholder="Select">
                                            <option selected>Select</option>
                                            <option value="new">New
                                            </option>
                                            <option value="used">Used
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class=" col-12">
                                        <label for="email_address1"><strong>Select Category</strong></label>
                                        <select class="form-control" name="category" id="category"
                                            data-placeholder="Select">
                                            <option selected>Select</option>
                                            <option value="blog">Blog
                                            </option>
                                            <option value="research">Research
                                            </option>
                                            <option value="article">Article
                                            </option>
                                            <option value="advice">Advice
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2" id="writtenBy" style="display: none">
                                    <div class=" col-12">
                                        <label for="email_address1"><strong>Written By</strong></label>
                                        <input type="text" name="written_by">
                                    </div>
                                </div>
                                <div class="row my-1" id="showPages" style="display: none">
                                    <div class=" col-12">
                                        <label for="email_address1"><strong>Select Pages</strong></label>
                                        <select class="form-control select2 " name="pages[]" multiple
                                            data-placeholder="Select" required>
                                            <option selected disabled>Select</option>
                                            <option value="blog">Blog
                                            </option>
                                            <option value="research">Research
                                            </option>
                                            <option value="sell_my_car">Sell My Car
                                            </option>
                                            <option value="tip_and_advice">Tip And Advice
                                            </option>
                                            <option value="industry_insight">Industry Insight
                                            </option>
                                            <option value="car_preview">Car Preview
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <label class="mt-3"><strong>Media Gallery</strong></label>
                                <div class="multiimage">
                                    <div class="row wow-remove">
                                        <div class="col">
                                            <div class="main_container m-3">
                                                <div class="main imagebox position-relative rounded-3 overflow-hidden">
                                                    <div
                                                        class="select_img d-flex justify-content-center align-items-center">
                                                        <div class="dz-message p-3 text-center">
                                                            <h3>Click to upload.</h3>
                                                        </div>
                                                    </div>
                                                    <input type="file" name="image" accept=".jpg,.gif,.png,.webp"
                                                        class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                                    <div class="img-thumb">
                                                    </div>
                                                </div>
                                                <a
                                                    class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                                            </div>
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
                                    class="main_file w-100 h-100 form-control position-absolute  opacity-0" />
                                <div class="img-thumb">
                                </div>
                            </div>
                            <a class="btn mt-3  fw-normal remove_clone border-0 shadow-none">Remove</a>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                $(document).ready(function () {
                    var maxField = 10; //Input fields increment limitation
                    var addButton = $('.add_clone'); //Add button selector
                    var wrapper = $('.team_main'); //Input field wrapper
                    var fieldHTML = jQuery('.cloner .row');
                    var fieldHTML2 = '<a href="javascript:void(0);" class="remove_button btn btn-dark mx-1">Cancel</a>';
                    var x = 1; //Initial field counter is 1

                    //Once add button is clicked
                    $(document).on('click', '.add_clone', function () {
                        var wow = $(this);
                        //Check maximum number of input fields
                        if (x < maxField) {
                            x++;
                            $(wow).parents('.multiimage').append($(fieldHTML).clone());
                        }
                    });
                    //Once remove button is clicked
                    $(document).on('click', '.remove_clone', function (e) {

                        $(this).parents('.wow-remove').remove(); //Remove field html
                        if ($(".multiimage .row").length == 0) {
                            $('.multiimage').append($(fieldHTML).clone());

                        }

                    });


                    $('#category').on('change', function () {
                        let category = $(this).val();
                        if (category == 'article') {
                            $('#showPages').show();
                            $('#writtenBy').show();
                        } else {
                            $('#showPages').hide();
                            $('#writtenBy').hide();
                        }
                    });
                });

            </script>


            <script>

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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            @endsection