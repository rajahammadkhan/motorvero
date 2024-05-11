@extends('frontend.layouts.master')
@section('title')
Investor Relations
@endsection
@section('content')
<style>
    .content-items {
        font-size: 20px;

    }

    a {
        text-decoration: none;
        color: #4179ee;
    }

    a:hover {
        text-decoration: none;
        margin-left: 10px;
        margin-right: -10px;
        transition: margin-left 0.4s, margin-right 0.4s;
    }

    /*.card .car-img img{*/
    /*    width: 200px;*/
    /*    height: 200px;*/
    /*}*/
</style>
<section class="used-car-top-banner">
    <div class="container h-100">
    </div>
</section>
<section class="sec-gsp-form bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">

            </div>
            <div class="content ">
                <div class="row">
                    <div class="menubar col-md-4 d-flex flex-column">
                        @include('frontend.pages.user-sidebar')
                    </div>

                    <br>
                    
                    <div class="descriptionbar col-md-8">
                        <h2 class="text-center heading">
                                Investor <span>Relations
                          </h2>
                        <p class="mx-4">
                            Motorvero is a multinational, online automotive platform for buying and selling
                            vehicles that is building upon its industry-leading listings
                            marketplace with both digital retail solutions and the CarOffer
                            online wholesale platform. The Motorvero marketplace gives consumers
                            the confidence to purchase or sell a vehicle either online or in-person;
                            and gives dealerships the power to accurately price, effectively market
                            , instantly acquire and quickly sell vehicles, all with a nationwide reach.
                            The company uses proprietary technology, search algorithms and data analytics
                            to bring trust, transparency, and competitive pricing to the automotive shopping
                            experience. Motorvero also operates online marketplaces in Canada and the United Kingdom.
                        </p>
                    </div>
                </div>
                <br>
                <br>
                <div class=" d-none">
                    <div class="key-matrics row justify-content-between">
                        <h2 class="text-center">Key Metrics</h2>
                        {{-- card 1--}}
                        <div class="card border border-white col-md-4  ">
                            <div class="m-2">
                                <div class="card-img d-flex justify-content-center my-2"><img style="width: 200px; height: 200px" src="https://investors.Motorvero.com/system/files-encrypted/nasdaq_kms/inline-images/revenue.png"></div>
                                <hr>
                                <div class="card-title d-flex flex-column align-items-center">
                                    <p>GLOBAL AVERAGE MONTHLY UNIQUE VISITORS </p>
                                    <br>
                                    <h1><strong>39M</strong></h1>
                                </div>
                            </div>
                        </div>
                        {{-- card 2 --}}

                        <div class="card border border-white col-md-4">
                            <div class="m-2">
                                <div class="card-img d-flex justify-content-center my-2"><img style="width: 200px; height: 200px" src="https://investors.Motorvero.com/system/files-encrypted/nasdaq_kms/inline-images/users.png"></div>
                                <hr>
                                <div class="card-title d-flex flex-column align-items-center">
                                    <p>FY 2022 REVENUE </p>
                                    <br>
                                    <h1><strong>$1,655M</strong></h1>
                                </div>
                            </div>

                        </div>

                        {{-- card 3--}}

                        <div class="card border border-white col-md-4">
                            <div class="m-2">
                                <div class="card-img d-flex justify-content-center my-2"><img style="width: 200px; height: 200px" src="https://investors.Motorvero.com/system/files-encrypted/nasdaq_kms/inline-images/dealers.png"></div>
                                <hr>
                                <div class="card-title d-flex flex-column align-items-center">
                                    <p>GLOBAL PAYING DEALERS </p>
                                    <br>
                                    <h1><strong>31,291</strong></h1>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- data section             --}}




                    <br><br>
                    <div class="row matrics text-center">
                        <p class="">
                            <sup>1*</sup>As of 3/31/2023, represents monthly average for the first quarter of 2023 | <sup>2</sup>As of 3/31/2023
                        </p>
                        <p class="">
                            Please reference our most recent annual or quarterly report filed with the SEC for how we define define our monthly unique visitors and paying dealers.
                            Additional data points related to our business can be found on our Dealer Resource Centers (“DRCs”). Please visit our U.S., Canada and U.K. DRCs at https://dealercenter.Motorvero.com/, https://dealercentre.ca.Motorvero.com/ and https://dealercentre.Motorvero.co.uk/, respectively, for further information.
                        </p>
                    </div>

                    {{-- data section             --}}



                </div>
            </div>
        </div>
    </div>
</section>
@endsection