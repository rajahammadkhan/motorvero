@extends('frontend.layouts.master')
@section('title')
    Job Details
@endsection
@section('content')
    <style>
        .form-label > [data-required="true"]::after {
            color: hsl(var(--form-error-color));
            content: "*";
            padding-left: 0.25em;
            position: absolute;
        }

        span [data-required] {
            display: block;
            height: 100px;
            width: 100px;
        }

        /* .modal {
            display: block !important;
        } */

        .fade:not(.show) {
            opacity: 0;
        }

        label > [data-required="true"]::after,
        legend > [data-required="true"]::after {
            /* color: hsl(var(--form-error-color)); */
            content: "*";
            padding-left: 0.25em;
            position: absolute;

        }

        .tab {
            display: none;
            color: var(--dark);
        }

        .step {
            /* content: "aaa"; */

            margin: 0 2px;
            /* background-color: #bbbbbb; */
            border: none;
            border-radius: 50%;
            display: none;
            opacity: 0.5;
        }

        .step.active {
            /* content: "step-count"; */
            opacity: 1;
            display: block;
        }

        .tab.invalid > div {
            /* position: absolute; */
            /* content: "Please Fill";
            height: 100px;
            width: 100px;
            background-color: blue; */
            display: none;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            /* background-color: yellow; */
            /* display: none; */

        }

        .required-none {
            display: none;
        }

        .required {
            display: flex;
            color: red;
            font-size: small;
        }

        .required svg {
            margin-top: auto;
            margin-bottom: auto;
        }

        .required p {
            padding-left: 10px;
            margin-bottom: 0;
        }

        #prevBtn {
            cursor: pointer;
        }

        .text-red {
            color: red;
        }

        nav > div > div button.active:after {
            border: 0.5rem solid transparent;
            border-top-color: #fff;
            content: "";
            height: 0;
            left: 50%;
            bottom: -1px;
            position: absolute;
            transform: translateX(-50%) rotate(180deg);
            width: 100;
        }

        .dropdown_items {
            display: none;
        }

        /*.form-title{*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*}*/

        .top-banner {
            /*background-image: url("https://cdn-static.findly.com/wp-content/uploads/sites/1420/2022/07/27203721/PDN-DiversityInc-Banner.jpg");*/
            width: 856px;
            height: 214px;
            zoom: 200%;

        }

        .heading-section {
            margin-right: 15%;
        }

        .heading-section p {
            margin-top: 50px;
            font-size: 20px;
            color: #030000;
            font-weight: bold;
            font-family: sans-serif;
        }

        .heading-section button {
            margin-bottom: 50px;
            font-size: 10px;
        }

        .documentation {
            background-color: #ffffff;
        }

        .btn-white {
            background-color: #ffffff;
        }

        .btn-white:hover {
            background-color: #ffffff;
        }

        .promo-section {
            background-image: url("https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31acdacadd4b8385d322ae_e0d55e8d-0cea-42d9-bf1e-92449749aae3-min.png");
            width: 1300px;
            height: 600px;


        }

        .promo-section h3 {
            font-size: 60px;
            color: #fdfeff;
            font-weight: bold;
            margin-top: 15%;
        }

        .button-promo {
            padding: 20px 5px;
            background-color: #527d89;
            border-radius: 0px;
            color: #ffffff;
            font-size: 16px;
        }

        .button-promo:hover {
            background-color: #0693e3;
            color: #ffffff;
        }

    </style>
    <section class="sec-gsp-form ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-4 mx-auto text-center">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        Job
                        <span>Details:</span>
                    </h1>
                </div>
                <div class="col-md-12 mx-auto">
                    @include('frontend/layouts/error')


                    <div class="main-section col-md-12 m-5">
                        <h3 class="mb-4"><b> {{$job->title}}</b></h3>

                        <div class="d-flex justify-content-arround mt-2">
                            <h5><b>Category:</b></h5>
                            <h5>Inside Sales</h5>
                        </div>
                        <div class="d-flex justify-content-arround mt-2">
                            <h5><b>Location:</b></h5>
                            <h5> {!! $job->locationName->title !!}</h5>
                        </div>
                        <div>
                            <button class="apply-button btn btn-primary py-2 px-3 mt-3 rounded-0"><a class="text-white" href="{{url('apply-now',$job->id)}}">Apply Now</a></button>
                        </div>
                        <div>
                            <h4 class="mt-5"><b>Description</b></h4>
                            <div>
                                {!!$job->description!!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


