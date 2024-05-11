@extends('frontend.layouts.master')
@section('title')
    Personal Info
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
    </style>
    <section class="">

    </section>
    <section class="sec-gsp-form py-5">
        <div class="container ">
            <div class="row">

                <div class="col-md-8 mx-auto">
                    @include('frontend/layouts/error')
                    <form class="row d-flex justify-content-center border border-dark p-5 border-2 rounded-3"
                          method="post" action="">
                        @csrf
                        <div class="col-md-8 col-12 mx-auto text-center">
                            <h1 class="heading pb-4" data-aos="fade-up">
                                California Consumer Privacy
                                <span> Act Opt-Out provision (Act)</span>
                            </h1>
                            <p>
                                By submitting this request you are exercising your right to Opt Out of sale of your
                                personal information.
                                This right is subject to certain exemptions as specified in the Act.
                                To learn more about what kinds of information we gather in connection
                                with this website and/or its associated services, please consult our
                                <a href="{{'privacy'}}">Privacy Policy</a>
                            </p>

                        </div>
                        <hr>
                        {{--                        <div class="flex flex-column ">--}}
                        <div class="col-md-8 col-12 my-5 aos-init" data-aos="fade-up">
                            <input type="text" name="first_name"
                                   class="form-control text-dark rounded-0 shadow-none border-0"
                                   placeholder="First name*" required="">
                        </div>

                        <div class="col-md-8 col-12 d-flex justify-content-center mb-3">
                            <div class="form-check mx-4">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    no
                                </label>
                            </div>
                        </div>

                        <div class="col-md-8 col-12 my-1 aos-init" data-aos="fade-up">
                            <button type="submit"
                                    class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                Submit
                            </button>
                        </div>
                        {{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
