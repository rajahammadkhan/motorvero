@extends('frontend.layouts.master')
@section('title')
    Sell More Car
@endsection
@section('content')


    <style>
        .card:hover .card-img-top {
            transform: scale(1) !important;
            box-shadow: 0;
            cursor: pointer;
        }


        .card-group .card:hover {
            transform: none;
            box-shadow: none;
        }

        .news-letter {
            background-color: #0277bd !important;
            color: #fff;
        }

        .events {
            background-color: rgba(2, 119, 189, 0.1) !important;
        }

        .register-btn {
            border: 1px solid #0277bd !important;
            color: #0277bd !important;
        }

        .products>.card-group .card {
            transform: none;
            box-shadow: none;
        }

        ol li::marker {
            background-color: 'red';
        }

        .banner {
            background-color: #0277bd !important;
        }

        .learn-btn {
            background-color: #cf2632 !important;
        }

        .bg-gradient .card-body {
            background: linear-gradient(90deg, #e8f3ff 0%, #6fc9e3 100%);
        }

        .newsletter-check{
            width: 45px;
        }
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <p class="heading">The road to selling <span>more cars starts here</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ms-auto me-md-3">
        <div class="col-md-9 col-lg-8 col-sm-12 ms-auto banner py-5 px-5">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h3 class='fs-4 text-light fw-bold'>
                        Motorvero delivers informed, ready-to-buy shoppers at a scale that can drive results.
                    </h3>
                </div>
                <div class="col-md-6 mt-sm-0 mt-3">
                    <button class='learn-btn py-2 px-2 border-0 ms-auto'>
                        <a href="" class='text-white'>Learn how Motorvero can help you</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class='industry_insights '>
        <div class="row px-5 mx-auto py-5 bg-light bg-gradient">
            <div class="col-md-12 d-flex justify-content-between flex-wrap mb-5">
                <div class='mb-3 mb-sm-0'>
                    <h1>Industry Insights</h1>
                </div>
                <!-- <div>
                    <a href="#">View more Industry Insights</a>
                </div> -->
            </div>
            @if($industry_insight_article->isNotEmpty())
                @foreach($industry_insight_article as $val)
                    <div class="col-lg-4 mt-5 col-md-6">
                        <div class="card w-100 h-100">
                            <!-- <img class="card-img-top" src="{{asset('frontend/images/sell_car/car_image.jpeg')}}"  alt="Card image cap"> -->
                            <div class="card-body">
                                <h4 class="card-title fw-bold">{{$val->title}}</h4>
                                <p class="card-text mt-5">{!! $val->short_description !!}</p>
                                <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
                            </div>
                        </div>
                    </div>


                @endforeach
            @endif


            {{--            <div class="col-md-6 mt-5 col-lg-4">--}}
            {{--                <div class="card w-100 h-100">--}}
            {{--                    <!-- <img class="card-img-top" src="{{asset('frontend/images/sell_car/car_image3.jpeg')}}"  alt="Card image cap"> -->--}}
            {{--                    <div class="card-body">--}}
            {{--                        <h4 class="card-title fw-bold">Just launched! MotorVero 2022 Consumer Insight Report</h4>--}}
            {{--                        <p class="card-text mt-5">This report features findings from the fifth-annual path-to-purchase study, plus first-ever insights into the path-to-sale. By amplifying the voice of the customer, this report aims to help you adapt your business to the trends that matter most. </p>--}}
            {{--                        <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="col-md-6  mt-5 col-lg-4">--}}
            {{--                <div class="card  w-100 h-100">--}}
            {{--                    <!-- <img class="card-img-top" src="{{asset('frontend/images/sell_car/sell_car.jpeg')}}"  alt="Card image cap"> -->--}}
            {{--                    <div class="card-body">--}}
            {{--                        <h4 class="card-title fw-bold">Motorvero Dealer Voice Report examines challenges facing dealers today</h4>--}}
            {{--                        <p class="card-text mt-5">To get a pulse on dealers’ priorities and how they’ve counteracted common business pressures this past year, we surveyed 300 dealers nationwide. The 2022 Dealer Voice Report examines the results, shedding light on hot topics impacting the industry.</p>--}}
            {{--                        <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        </div>
        <!--  Events  -->
        <div class="row px-5 py-5">
            <div class="col-md-8">
                <div class="card hover-none border-0 shadow rounded px-3 events pb-5">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Events</h5>
                        <hr>
                        @if(App\Helpers\DefaultLanguage::allEvents()->isNotEmpty())
                            @foreach(App\Helpers\DefaultLanguage::allEvents() as $value)
                                <div class='d-flex align-items-center justify-content-between flex-wrap '>
                                    <div>
                                        <h5 class="card-title fw-bold fs-6 text-primary">{{App\Helpers\DefaultLanguage::dbFormatDateToString($value->start_datetime,'d F Y - H:i')}}
                                            {{App\Helpers\DefaultLanguage::dbFormatDateToString($value->end_datetime,'d F Y - H:i')}}</h5>
                                        <h5 class="card-title fw-bold fs-6">{{$value->title}}</h5>
                                        <p class="card-text fs-6">{!! $value->description !!}</p>
                                    </div>
                                    <div class='mt-sm-0 mt-3'>
                                        <button class='btn btn-lg register-btn'>Register</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif




                        {{--                        <h5 class="card-title text-primary fw-bold fs-6">MAY 01 - MAY 03</h5>--}}
                        {{--                        <h5 class="card-title fw-bold fs-6">Digital Dealer 2023</h5>--}}
                        {{--                        <p class="card-text fs-6">See you at Digital Dealer! Come by to our presentation....</p>--}}
                        {{--                        <hr>--}}
                        {{--                        <h5 class="card-title text-primary fs-6 fw-bold">MAY 21 MAY 23</h5>--}}
                        {{--                        <h5 class="card-title fw-bold fs-6">Digital Marketing Strategies Conference</h5>--}}
                        {{--                        <p class="card-text fs-6">See you at DMSC! Come by to our presentation....</p>--}}
                        {{--                        <hr>--}}
                        {{--                        <div class='d-flex align-items-center justify-content-between flex-wrap '>--}}
                        {{--                            <div>--}}
                        {{--                                <h5 class="card-title fw-bold fs-6 text-primary">JUN 19 JUN 22</h5>--}}
                        {{--                                <h5 class="card-title fw-bold fs-6">NIADA Convention & Expo</h5>--}}
                        {{--                                <p class="card-text fs-6">Visit the Motorvero booth at the NIADA Convention in Las Vegas from June 19-22, 2023. Check </p>--}}
                        {{--                            </div>--}}
                        {{--                            <div class='mt-sm-0 mt-3'>--}}
                        {{--                                <button class='btn btn-lg register-btn'>Register</button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>

                <!-- Newsletter --->
                <div>
                    <div class="card mt-5 px-5 py-3 rounded news-letter">
                        <div class="card-body">
                            <h3 class="card-title">Get the latest News</h3>
                            <form class='mt-5'>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="email" class='fw-bold w-100'>Email Adress
                                            <input type="text" class="form-control" placeholder="Email Address">
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <label for="region" class='fw-bold'>
                                            Please Select Your Region
                                        </label>
                                        <select name="" id="" class='w-100 rounded py-2 px-2'>
                                            <option class='fw-bold px-2' value="Selet..">Select..</option>
                                        </select>
                                    </div>

                                    <div class="form-check mt-3 d-flex">
                                        <input class="form-check-input m-0 newsletter-check" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label ps-2" for="defaultCheck1">

                                            By checking this box, I consent to receive marketing communications from Motorvero . We value your privacy and you can learn about our data collection practices in the <a href="#" class="text-white"><u>Motorvero Privacy Policy</u></a>.
                                        </label>
                                    </div>
                                    <div class="">
                                        <button class="btn px-5 btn-lg mt-3 btn-danger text-white fw-bold">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Trending -->
            </div>
            <div class="col-md-4">
                <div class="card px-3 h-100">
                    <div class="card-body">
                        <h4 class="card-title">Trending</h4>
                        <ol>
                            <li class='fs-5 mt-5'>Motorvero Intelligence Report - May 2023 Recap</li>
                            <li class='fs-5 mt-5'>New Motorvero campaign underscores confidence and ease in consumer buying and selling journey</li>
                            <li class='fs-5 mt-5'>Motorvero Top-Rated Dealer Award: What is it and how can you earn it?</li>
                            <li class='fs-5 mt-5'>5 tips for a prosperous tax season</li>
                            <li class='fs-5 mt-5'>Motorvero Dealer Voice Report examines challenges facing dealers today</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->

    <section class='products mb-5 mt-5 px-5 '>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class='fw-bold'>Motorvero Products</h1>
                <p class="lead">Enhance your investment in Motorvero listings with these add-ons.</p>
            </div>

            <!-- First Column -->
            <div class="col-md-6 mb-sm-0 mb-5 col-lg-4">
                <div class="card border-0 px-3 h-100 w-100">
                    <img class="card-img-top w-50 mx-auto" src="{{asset('frontend/images/sell_car/car_image4.jpeg')}}" alt="Card image cap">
                    <div class="card-body mt-5">
                        <h1 class="card-title text-center">Real-time Performance Marketing (RPM)</h1>
                        <p class="card-text text-center mt-4 mb-4">Drive more high-quality shoppers to your website with Motorvero RPM</p>
                        <button class='card-btn px-3 py-2 d-block mx-auto register-btn bg-transparent'>Learn more</button>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-md-6 mb-sm-0 mb-5 col-lg-4">
                <div class="card border-left border-right border-bottom-0 border-top-0 h-100 w-100">
                    <img class="card-img-top w-50 mx-auto" src="{{asset('frontend/images/sell_car/car_image6.jpeg')}}" alt="Card image cap">
                    <div class="card-body px-5 mt-5">
                        <h1 class="card-title text-center">CarOffer</h1>
                        <p class="card-text text-center mt-4 mb-4">Together, Motorvero and CarOffer are reinventing how dealers source and sell vehicles</p>
                        <button class='card-btn px-3 py-2 d-block mx-auto register-btn bg-transparent'>Learn more</button>
                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-md-6 mb-sm-0 mb-5 col-lg-4">
                <div class="card border-0 h-100 w-100">
                    <img class="card-img-top w-50 mx-auto" src="{{asset('frontend/images/sell_car/car_img.jpeg')}}" alt="Card image cap">
                    <div class="card-body mt-5">
                        <h1 class="card-title text-center">Digital Deal</h1>
                        <p class="card-text text-center mt-4 mb-4">Higher quality leads to help dealers close more business in less time</p>
                        <button class='card-btn px-3 py-2 d-block mx-auto register-btn bg-transparent'>Learn more</button>
                    </div>
                </div>
            </div>
            <!-- Column End -->
        </div>
        <!-- Row End -->


    </section>


@endsection
