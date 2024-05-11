@extends('frontend.layouts.master')
@section('title')
Career
@endsection
@section('content')
<style>
    .form-label>[data-required="true"]::after {
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

    label>[data-required="true"]::after,
    legend>[data-required="true"]::after {
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

    .tab.invalid>div {
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

    nav>div>div button.active:after {
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

        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-block: 100px;
    }



    .promo-section h3 {
        font-size: 60px;
        color: #fdfeff;
        font-weight: bold;
    }

    .button-promo {
        padding: 20px 5px;
        background-color: #527d89;
        border-radius: 0px;
        color: #ffffff;
        font-size: 16px;
    }

    .button-promoactive {
        background-color: #0693e3;
        color: #ffffff;
    }

    .documentationtext {
        font-weight: bolder;
        margin: 20px 5px;
        font-family: Apple;
        font-size: 45px;
    }

    .career-card {
        padding: 10px;
    }

    .career-card img {
        width: 100%;
        object-fit: cover;

    }

    .location-card img {
        width: 100% !important;
        object-fit: cover;

    }

    .location-card .card {
        height: 100%;
    }

    .location-card .card-body {
        height: 200px;
    }

    .location-card h4 {
        display: grid;
    }
</style>
<section class="sec-gsp-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <h1 class="heading pb-4" data-aos="fade-up">
                    Career
                    <span>Opprotunities:</span>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto my-4">
                @include('frontend/layouts/error')

                <div class="documentation ">
                    <h2 class="documentationtext p-2">Documentation </h2>
                    <div class="row p-3 documentation-card">
                        <div class="col-md-4  py-1 px-3">
                            <div class="card car-card  rounded-4 back-light p-0">
                                <div class="p-3">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad50aa3067188381598f_efae8f0c-b09e-4fe9-9c27-120093103690.png">
                                </div>
                                <div class="card-body pt-0 px-4 mb-2">
                                    <h6 class="font-secondary  m-0 fw-bold">
                                        Engineering
                                    </h6>
                                    <p class="mb-0 smaller clr-dark mt-1">Join a winning team . Invest in your career. Get
                                        rewarded</p>

                                </div>
                                <div class="card-footer border-0 bg-transparent text-center mb-3">
                                    <a href="{{url('job-search')}}?parent_category={{'engineering'}}" class="py-2 book-button text-white">10 Open Role</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  py-1 px-3 ">
                            <div class="card car-card  rounded-4 back-light p-0">
                                <div class="p-3">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad6f52c0ce6053bd5ccc_51963a0e-e91b-4555-8aae-c9740681e6f91.png">
                                </div>
                                <div class="card-body pt-0 px-4 mb-2">
                                    <h6 class="font-secondary  m-0 fw-bold">
                                        Product
                                    </h6>
                                    <p class="mb-0 smaller clr-dark mt-1">See the best our financing offers on MotorVero today.
                                        Join a winning team. Invest in your career. Get
                                        rewarded.</p>


                                </div>
                                <div class="card-footer border-0 bg-transparent text-center mb-3">
                                    <a href="{{url('job-search')}}?parent_category={{'product'}}" class="py-2 book-button text-white">10 Open Role</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  py-1 px-3">
                            <div class="card car-card  rounded-4 back-light p-0">
                                <div class="p-3">
                                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad8497841e1e463b2eaa_296a154b-8f98-468f-b495-15007af8cbe6.png">
                                </div>
                                <div class="card-body pt-0 px-4 mb-2">
                                    <h6 class="font-secondary  m-0 fw-bold">Sales & Ad Ops</h6>
                                    <p class="mb-0 smaller clr-dark mt-1">Join a winning team. Invest in your career. Get
                                        rewarded.</p>

                                </div>
                                <div class="card-footer border-0 bg-transparent text-center mb-3">
                                    <a href="{{url('job-search')}}?parent_category={{'sales-ads-ops'}}" class="py-2 book-button text-white">10 Open Role</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=" col-md-12 my-5 d-flex flex-column finance-card d-none">
                        <div class="row ">
                            <div class=" col-md-4  border border-white">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; " src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31ad94ba094c37e54fab40_1d048fb8-41a9-4ac0-93e9-7fd1d23fedbd.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Business Development</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <a href="{{url('job-search')}}?parent_category={{'business-development'}}" class="btn btn-white  text-primary">0 Open Role</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-4  border border-white">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; " src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adaa5f6c88b98242d278_29e40f9d-7f38-441e-ab81-a35dc345903b.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Finance, Legal and Executive</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <a href="{{url('job-search')}}?parent_category={{'finance-legal-executive'}} " class="btn btn-white  text-primary">8 Open Role</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-4  border border-white">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; " src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adc196b755b79a9615cf_5b77497f-a1e2-4b2f-9ac4-457f5903a2cb.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Marketing</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <a href="{{url('job-search')}}?parent_category={{'marketing'}} " class="btn btn-white  text-primary">0 Open Role</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-md-4  border border-white">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; " src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adb44017aff72086818d_a66a2716-90fe-4ebf-8c6b-07191290b75b.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">Internships & Co-ops</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <a href="{{url('job-search')}}?parent_category={{'internship-co-ops'}} " class="btn btn-white  text-primary">Visit Internship & co-ops
                                                    page</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" col-md-4  border border-white">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <img class=" " style="width: 70px; height: 70px; " src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31adca506f16f244979a95_5bb5db0f-ae93-4cdc-8474-40e7224ce300.png">
                                        </div>
                                        <div class="my-5">
                                            <h5 class="text-center">People & Talent</h5>
                                            <div class="d-flex justify-content-center my-3">
                                                <a href="{{url('job-search')}}?parent_category={{'people-talent'}} " class="btn btn-white  text-primary">1 Open Role</a>
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
    </div>
    <section class="promo-section d-none">
        <div class="container">
            <div class="row">
                <div>
                    <div class="row text-center text-white justify-content-center position-relative ">
                        <h2>Who We Are?</h2>
                    </div>

                    <div class="whoweareborder">

                        <div class="mb-1 my-sm-0 col-sm ps-sm-0">
                            <div class="button-promo btn btn-sm w-100 h-100">
                                IDEA TESTER
                            </div>
                            <div class="whowearebordercontent">
                                hello
                            </div>
                        </div>
                        <div class="mb-1 my-sm-0 col-sm">
                            <div class="button-promo btn btn-sm w-100 h-100">
                                TEAM PLAYER
                            </div>
                            <div class="whowearebordercontent">
                                hello
                            </div>
                        </div>
                        <div class="mb-1 my-sm-0 col-sm">
                            <div class="button-promo btn btn-sm w-100 h-100">
                                SKILL BUILDER
                            </div>
                            <div class="whowearebordercontent">
                                hello
                            </div>
                        </div>
                        <div class="mb-1 my-sm-0 col-sm">
                            <div class="button-promo btn btn-sm w-100 h-100">
                                SUCCESS SHARER
                            </div>
                            <div class="whowearebordercontent">
                                hello
                            </div>
                        </div>
                        <div class="mb-1 my-sm-0 col-sm pe-sm-0">
                            <div class="button-promo btn btn-sm w-100 h-100">
                                REAL PEOPLE
                            </div>
                            <div class="whowearebordercontent">
                                hello
                            </div>
                        </div>
                    </div>

                    <div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <div class="location-side col-md-12 mb-4">

            <h1 class="my-5 "><b>Locations</b></h1>

            <div class="row">
                @foreach ($location as $data)
                <div class="col-lg-3 location-card col-md-4 col-sm-6  py-3 pb-3 bg-white border-0 research-card">
                    <div class="card">
                        <div class=" my-2 mx-2">
                            <img class=" rounded-1 my-2 mb-2" style="width: 190px; height: 150px;" src="{{asset('images/media/').'/'.$data->image}}">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center  ">{{$data->title}}</h4>
                            {!! $data->address !!}
                            <!-- <p class="card-text text-center mx-2" style="font-size: 15px">{!! $data->address !!}</p> -->
                            {{-- {!! Str::limit($data->address, 70) !!}--}}
                        </div>
                        <div class="card-footer border-0 bg-transparent text-center mb-3">
                            <a href="{{url('job-search')}}?location={{$data->title}}" class="py-2 book-button text-white">10 Open Role</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <div class="row">
            <div class=" my-5 align-items-center">
                <div class=" my-4 ">
                    <img src="https://cdn-static.findly.com/wp-content/uploads/sites/1420/2021/05/17171959/footer_image.png">
                </div>
                <div class="">
                    <h4>Not Ready to Apply, But Still Want Updates?</h4>
                    <div class="my-4">
                        <a href="{{url('apply-talent')}}" class="main-button px-3 p-2"><span style="font-size: 12px;">Join our talent network</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</section>
<script>
    // function checkMedia(x) {
    //     // if (x.matches) {
    //     $(".button-promo").hover(function() {
    //         $(this).parents('.whoweareborder div').siblings().find(".button-promoactive").removeClass('button-promoactive').slideToggle();
    //         $(this).parents('.whoweareborder div').find(".whowearebordercontent").addClass('button-promoactive');
    //         // $(this).parents('.parent_dropdown2').find(".dropdown_menu2").toggleClass('active');
    //         // $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
    //     });

    // }
    // checkMedia('')
    
    // $('.whoweareborder').hover(function() {
    //     $(this).parents('.parent_dropdown2').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
    //     $(this).parents('.parent_dropdown2').siblings().find(".showaccordion").removeClass('showaccordion').slideToggle();
    //     $(this).find('.button-promo').addClass('button-promoactive');
    //     $(this).find('.button-promoactive').parent().siblings().find('.button-promoactive').removeClass('button-promoactive');
    // });
</script>
@endsection