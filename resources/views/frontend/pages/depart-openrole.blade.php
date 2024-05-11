@extends('frontend.layouts.master')
@section('title')
    Depart Open Role
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
    <section class="top-banner">
        <div class="container h-100">
            <div class="heading-section row align-items-center h-100">
                <div class="heading-material d-flex justify-content-center">
                    <p>We are re-engineering car shopping.Want to join us? </p>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="button101 btn btn-success btn-sm rounded-0 ">See open Roles</button>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-gsp-form ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        Career Application
                        <span>Form</span>
                    </h1>

                </div>
                <div class="col-md-12 mx-auto my-4">
                    @include('frontend/layouts/error')
                    <div class="documentation ">

                        <h2 class="p-2">Documentation </h2>
                        <div class="card-section d-flex justify-content-center">
                            {{--                        card   01--}}
                            <div class="card col-md-4 position-static mx-1">
                                <div class="card-header">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad50aa3067188381598f_efae8f0c-b09e-4fe9-9c27-120093103690.png">
                                </div>
                                <div class="card-body">
                                    <h4 class="color-dark text-center"><b>Engineering</b></h4>
                                    <p class="color-light text-center">Engage your curiosity. Work on challenging
                                        projects. Collaborate often.</p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" href="{{'depart-open-role'}}"
                                                class="btn btn-primary rounded-0 d-flex justify-content-center">10 Open
                                            Roles
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{--                        card 02--}}

                            <div class="card col-md-4 mx-1">
                                <div class="card-header">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad6f52c0ce6053bd5ccc_51963a0e-e91b-4555-8aae-c9740681e6f91.png">
                                </div>
                                <div class="card-body">
                                    <h4 class="color-dark text-center"><b>Product</b></h4>
                                    <p class="color-light text-center">Foster teamwork. Push rapid experiments. Measure
                                        and iterate.</p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button"
                                                class="btn btn-primary rounded-0 d-flex justify-content-center">1 Open
                                            Roles
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{--                        card 3--}}

                            <div class="card col-md-4 mx-1">
                                <div class="card-header">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad8497841e1e463b2eaa_296a154b-8f98-468f-b495-15007af8cbe6.png">
                                </div>
                                <div class="card-body">
                                    <h4 class="color-dark text-center"><b>Sales & Ad Ops</b></h4>
                                    <p class="color-light text-center">Join a winning team. Invest in your career. Get
                                        rewarded.</p>
                                    <div class="d-flex justify-content-center">
                                        <button type="button"
                                                class="btn btn-primary rounded-0 d-flex justify-content-center">7 Open
                                            Roles
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--                        2nd card section                       --}}

                        <div class=" col-md-12 my-5 d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <div class="card col-md-4 mx-1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; "
                                                 src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad94ba094c37e54fab40_1d048fb8-41a9-4ac0-93e9-7fd1d23fedbd.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Business Development</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <input class="btn btn-white  text-primary" type="button"
                                                       value="0 Open Role">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                {{--                        sec2 card2--}}
                                <div class="card col-md-4 mx-1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; "
                                                 src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adaa5f6c88b98242d278_29e40f9d-7f38-441e-ab81-a35dc345903b.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Finance, Legal and Executive</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <input class="btn btn-white  text-primary" type="button"
                                                       value="8 Open Roles">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{--                        sec2 card3 --}}
                                <div class="card col-md-4 mx-1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; "
                                                 src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adc196b755b79a9615cf_5b77497f-a1e2-4b2f-9ac4-457f5903a2cb.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Marketing</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <input class="btn btn-white  text-primary" type="button"
                                                       value="0 Open Roles">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=" my-2 d-flex justify-content-center">
                                {{--                        sec2 card4           --}}
                                <div class="card col-md-4 mx-1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; "
                                                 src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adb44017aff72086818d_a66a2716-90fe-4ebf-8c6b-07191290b75b.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Internships & Co-ops</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <input class="btn btn-white  text-primary" type="button"
                                                       value="Visit internships and co-ops page">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{--                        sec2 card 5    --}}
                                <div class="card col-md-4 mx-1">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; "
                                                 src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adca506f16f244979a95_5bb5db0f-ae93-4cdc-8474-40e7224ce300.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">People & Talent</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <input class="btn btn-white  text-primary" type="button"
                                                       value="1 Open Roles">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="promo-section">
                        <div class="d-flex justify-content-center position-relative ">
                            <h3>Who We Are?</h3>
                        </div>

                        <div class="d-flex justify-content-center col-md-12">
                            <button class="button-promo btn btn-sm col-md-2 mx-1"> IDEA TESTER</button>
                            <button class="button-promo btn btn-sm col-md-2 mx-1"> TEAM PLAYER</button>
                            <button class="button-promo btn btn-sm col-md-2 mx-1"> SKILL BUILDER</button>
                            <button class="button-promo btn btn-sm col-md-2 mx-1"> SUCCESS SHARER</button>
                            <button class="button-promo btn btn-sm col-md-2 mx-1"> REAL PEOPLE</button>
                        </div>

                        <div>

                        </div>

                    </div>

                    <div class="location-side col-md-12 mb-4">
                        <div class="row">
                            <h1 class="my-5 mx-4"><b>Locations</b></h1>

                            <div class="card-section d-flex justify-content-center mx-3">
                                {{--  card 1  --}}
                                <div class="card col-md-2 mx-2 col-sm-6">
                                    <div class="card-img-top my-2 mx-2">
                                        <img class="rounded-1" style="width: 190px; height: 150px;"
                                             src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adee18518013cbbf2c70_4726a8fc-b067-429e-9622-36bb7d24fb9e.png">
                                    </div>
                                    <h4 class="card-title text-center my-2">Cambridge, MA</h4>
                                    <p class="card-text text-center my-2">Close to Kendall Square and MIT, Motorvero’
                                        global headquarters are located in one of the country’s top tech hubs.</p>
                                    <div class=" mx-2 px-4">
                                        <a href="#" class="btn btn-primary rounded-0  ">See Open Roles</a>
                                    </div>
                                </div>

                                {{--  card 2  --}}
                                <div class="card col-md-2 mx-2 col-sm-6">
                                    <div class="card-img-top my-2 mx-2">
                                        <img class="rounded-1" style="width: 190px; height: 150px;"
                                             src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adff1d10582af9c0b46e_e50135be-8651-4812-96ef-9336b466bb57.png">
                                    </div>
                                    <h4 class="card-title text-center my-2">Detroit, MI</h4>
                                    <p class="card-text text-center my-2">America’s automotive capital is home to
                                        members of our ad team who work with top auto manufacturers.</p>
                                    <div class=" mx-2 px-4">
                                        <a href="#" class="btn btn-primary rounded-0 my-4 ">See Open Roles</a>
                                    </div>
                                </div>

                                {{--  card 3  --}}
                                <div class="card col-md-2 mx-2 col-sm-6">
                                    <div class="card-img-top my-2 mx-2">
                                        <img class="rounded-1" style="width: 190px; height: 150px;"
                                             src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2022/11/28192915/Raleigh-NC-400x275.png">
                                    </div>
                                    <h4 class="card-title text-center my-2">Raleigh, NC</h4>
                                    <p class="card-text text-center my-2">Located in downtown Raleigh, our newest office
                                        is home to a robust research and development center.</p>
                                    <div class=" mx-2 px-4">
                                        <a href="#" class="btn btn-primary rounded-0 my-4 ">See Open Roles</a>
                                    </div>
                                </div>

                                {{--  card 4  --}}
                                <div class="card col-md-2 mx-2 col-sm-6">
                                    <div class="card-img-top my-2 mx-2">
                                        <img class="rounded-1" style="width: 190px; height: 150px;"
                                             src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2022/11/28192915/Raleigh-NC-400x275.png">
                                    </div>
                                    <h4 class="card-title text-center my-2">CLondon, England</h4>
                                    <p class="card-text text-center my-2">Pistonheads, a Motorvero company, is based in
                                        central London. It’s easily accessible via three nearby train stations.</p>
                                    <div class=" mx-2 px-4">
                                        <a href="#" class="btn btn-primary rounded-0">See Open Roles</a>
                                    </div>
                                </div>

                                {{--  card 5  --}}
                                <div class="card col-md-2 mx-2 col-sm-6">
                                    <div class="card-img-top my-2 mx-2">
                                        <img class="rounded-1 mx-1" style="width: 190px; height: 150px;"
                                             src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ae1a4e0e3655c7809901_24fd6499-570b-4c5f-8a0d-68037632601a.png">
                                    </div>
                                    <h4 class="card-title text-center my-2">Dublin, Ireland</h4>
                                    <p class="card-text text-center my-2">At our European headquarters, you’ll find a
                                        team dedicated to growing our international business.</p>
                                    <div class=" mx-2 px-4">
                                        <a href="#" class="btn btn-primary rounded-0 my-4 ">See Open Roles</a>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                    <div class="mx-5 my-5 d-flex align-items-center">
                        <div class=" my-4 mx-4">
                            <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2021/05/17171959/footer_image.png">
                        </div>
                        <div class="mx-5">
                            <h4>Not Ready to Apply, But Still Want Updates?</h4>
                            <a href="#" class="btn btn-primary rounded-0">Join our talent network</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection


