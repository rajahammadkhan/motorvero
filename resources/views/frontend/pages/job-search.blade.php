@extends('frontend.layouts.master')
@section('title')
    Job Search
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
                <div class="col-md-12 mx-auto text-center">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        Job Search
                        <span>Results: </span>
                    </h1>

                </div>
                <div class="col-md-12 mx-auto my-4">
                    @include('frontend/layouts/error')


                    <div class="main-section col-md-12 d-flex justify-content-between">

                        <div class=" side-form col-md-3 p-3 bg-light">
                            <p class="heading pb-4 mt-5" style="font-size: 50px" data-aos="fade-up">
                                Job <span>Search</span>
                            </p>
                            <div class="d-flex flex-column">
                                <label><b>Open Roles:</b></label>
                                <input name="keyword" class="p-2 border border-gray rounded-0" style="width:100%"
                                       type="search" placeholder=" Search Jobs">
                            </div>


                            <div class="d-flex flex-column mt-4 ">
                                <label><b>Departments:</b></label>
                                <select class="form-select rounded-0" aria-label="Default select example">
                                    <option value="" selected disabled>Select Departments</option>
                                    <option {{(isset($_GET['parent_category']) && $_GET['parent_category']=='engineering' ? 'selected' : '')}} value="engineering">
                                        Engineering
                                    </option>
                                    <option {{(isset($_GET['parent_category']) && $_GET['parent_category']=='finance-legal-executive' ? 'selected' : '')}} value="finance-legal-executive">
                                        Finance, Legal & executive
                                    </option>
                                    <option {{(isset($_GET['parent_category']) && $_GET['parent_category']=='people-talent' ? 'selected' : '')}} value="people-talent">
                                        People & Talent
                                    </option>
                                    <option {{( isset($_GET['parent_category']) && $_GET['parent_category']=='product' ? 'selected' : '')}} value="product">
                                        Product
                                    </option>
                                    <option {{( isset($_GET['parent_category']) && $_GET['parent_category']=='sales-ads-ops' ? 'selected' : '')}} value="sales-ads-ops">
                                        Sales & ad Ops
                                    </option>
                                </select>

                            </div>


                            <div class="d-flex flex-column mt-4">
                                <label><b>Location:</b></label>
                                <select class="form-select rounded-0" aria-label="Default select example">
                                    <option value="" selected disabled>Location</option>
                                    @foreach($location as $data)
                                        <option {{( isset($_GET['location']) && $_GET['location']== $data->title ? 'selected' : '')}} value="{{$data->title}}">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-5 d-flex justify-content-center">
                                <div class="col-md-6 my-1 aos-init d-flex justify-content-center" data-aos="fade-up">
                                    <form>
                                        <button type="submit"
                                                class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                            Search
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="side-table col-md-8">

                            <table class="table table-border table-striped">
                                <thead class=" bg-dark text-light ">
                                <tr>
                                    <th><h5 class="m-2"><b>Title</b></h5></th>
                                    <th><h5 class="m-2"><b>Location</b></h5></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($job as $job)
                                    <tr>
                                        <td>
                                            <a href="{{url('job-search',$job->id)}}">
                                                <h5 class="text-primary "><b>{{$job->title}}</b></h5>
                                            </a>
                                            <h6 class="text-dark">Enterprise Applications and Analytics</h6>
                                        </td>
                                        <td>{{$job->locationName->title}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>
                                            <h6 class="text-dark text-center">No jobs match your search criteria.
                                            </h6>
                                        </td>
                                    </tr>
                                @endforelse


                                </tbody>

                            </table>
                        </div>

                    </div>


                    <div class="mx-5 my-5 d-flex align-items-center">
                        <div class=" my-4 mx-4">
                            <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2021/05/17171959/footer_image.png">
                        </div>
                        <div class="mx-5">
                            <h4>Not Ready to Apply, But Still Want Updates?</h4>
                            <a href="{{url('apply-talent')}}" class="btn btn-primary rounded-0">Join our talent network</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


