@extends('frontend.layouts.master')
@section('title')
    Contact
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
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <p class="heading">Contact <span> Us  </span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="sec-gsp-form py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        Are you a

                        <span>dealer?</span>
                    </h1>
                    <div class="row">
                        <div class="col-md-6 my-1 aos-init" data-aos="fade-up">
                            <button type="submit"
                                    class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                Request a Dealer Account
                            </button>
                        </div>
                        <div class="col-md-6 my-1 aos-init" data-aos="fade-up">
                            <button type="submit"
                                    class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                Support for dealer
                            </button>
                        </div>
                    </div>
                </div>


                <div class="col-md-10 mx-auto text-center pt-md-5">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        General Query
                        <span>and Concerns</span>
                    </h1>
                    <p> You are our number one priority. Get in touch now</p>
                    @include('frontend/layouts/error')
                    <form id="contact-form" action="{{ url('post-contact') }}" method="post"
                          enctype="multipart/form-data" class="row">
                        @csrf
                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="name" class="form-control rounded-0 shadow-none border-0"
                                   placeholder="Name*" required="">
                        </div>
                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="phone" class="form-control rounded-0 shadow-none border-0"
                                   placeholder="Email" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="email" class="form-control rounded-0 shadow-none border-0"
                                   placeholder="Phone no*" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="subject" class="form-control rounded-0 shadow-none border-0"
                                   placeholder="Subject" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <textarea type="text" name="message"
                                      class="w-100 form-control rounded-0 shadow-none border-0" rows="10"
                                      placeholder="Type your Message Here..." required=""></textarea>
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <button type="submit"
                                    class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>


                <div class="col-md-10 mx-auto">
                </div>
            </div>
        </div>
    </section>
@endsection


