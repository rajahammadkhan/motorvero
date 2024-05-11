@extends('frontend.layouts.master')
@section('title')
BY The Number
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    .text-fade-blue {
        color: #337ab7;
    }

    .text-green {
        color: #198754;
    }

    .border-right {
        border-right: 3px solid #aaaaaa;
    }

    .price-analysis-report {
        display: flex;
        width: 100%;
        height: 300px;
        justify-content: center;
        align-items: center;
    }
    .car-price-analysis{
        display: grid;
        grid-template-columns: auto auto auto;
    }
    .compare-cars img {
        width: 100px;
        height: 100px;
    }
</style>
<section>
    <div class="container">
        <div class="col-12">
            <h3>What's my car worth?</h3>
            <h5 class="text-fade-blue">Whether you’re <b>buying</b> a car, <b>trading</b> it in, or <b>selling</b> it yourself, we can help</h5>
            <p>We analyze millions of used cars to calculate the CarGurus Instant Market Value and estimated trade-in value of any car.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="border-right p-4">
                    <p>Fill out the details about a car (e.g. <b>zip</b>, <b>mileage</b>, <b>transmission</b> and <b>options</b>) to calculate its <b>CarGurus Instant Market Value.</b></p>
                    <p>Already know the VIN? <i class="bi bi-exclamation-circle-fill"></i><a href="#"><u>Lookup by VIN.</u></a></p>

                    <div class="row ps-4">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-3 py-1">
                                    <p><b>Purpose:</b></p>
                                </div>
                                <div class="col-9">
                                    <select name="" id="" class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus">
                                        <option value="">Select Purpose</option>
                                        <option value="">Buying a car</option>
                                        <option value="">Trading in a car</option>
                                        <option value="">Listing a car for sale</option>
                                        <option value="">Selling my car instantly online</option>
                                        <option value="">Insurance related valuation</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>
                                <form action="{{url('listing')}}" method="GET">
                                    <input type="hidden" name="condition" value="Used">
                                    <input type="hidden" name="tracking" value="home">
                                    <div class="row ">
                                        <div class="col-3 py-1">
                                            <p><b>Make:</b></p>
                                        </div>
                                        <div class="col-9">
                                            <div class="h-100">
                                                <select class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus" autocomplete="off" id="idMaker" name="make" aria-label="Select Make">
                                                    <option value="" selected="selected" disabled>All Makes
                                                    </option>
                                                    @foreach(App\Helpers\DefaultLanguage::Make() as $makes)
                                                    <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3 py-1">
                                            <p><b>Model:</b></p>
                                        </div>
                                        <div class="col-9">
                                            <div class="h-100">
                                                <select name="model" class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="carPickerUsed_modelSelect" aria-label="Select Model">
                                                    <option value="" selected="selected" disabled>All Models
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3 py-1">
                                            <p><b>Year:</b></p>
                                        </div>
                                        <div class="col-9">
                                            <select name="" id="" class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus">
                                                <option value="">2001</option>
                                                <option value="">2002</option>
                                                <option value="">2003</option>
                                                <option value="">2004</option>
                                                <option value="">2006</option>
                                                <option value="">2007</option>
                                                <option value="">2008</option>
                                            </select>
                                        </div>
                                        <div class="col-3 py-1">
                                            <p><b>Trim:</b></p>
                                        </div>
                                        <div class="col-9">
                                            <select name="" id="" class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus">
                                                <option value="">2.0T quattro premiume AWD</option>
                                                <option value="">3.0T quattro premiume AWD</option>
                                                <option value="">4.0T quattro premiume AWD</option>
                                                <option value="">5.0T quattro premiume AWD</option>
                                                <option value="">6.0T quattro premiume AWD</option>
                                                <option value="">7.0T quattro premiume AWD</option>
                                                <option value="">8.0T quattro premiume AWD</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-6 py-1">
                                    <p><b>Zip:</b></p>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <input type="number" name="zip" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="zip" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <p><b>Mileage:</b></p>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <input type="number" name="mileage" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="mileage" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <p><b>Price ($):</b></p>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <input type="number" name="price" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="price" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ps-4">
                        <div class="col-3 py-2">
                            <p><b>Transmission:</b></p>
                        </div>
                        <div class="col-8">
                            <select name="" id="" class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus">
                                <option value="">Select Transmission</option>
                                <option value="">Automatic</option>
                                <option value="">Manual</option>
                                <option value="">Speed</option>
                            </select>
                        </div>
                        <div class="col-3 py-2">
                            <p><b>Engine:</b></p>
                        </div>
                        <div class="col-8">
                            <select name="" id="" class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus">
                                <option value="">Not Sure</option>
                                <option value="">3.3L 3364 hp 16</option>
                                <option value="">5.3L 5364 hp 24</option>
                            </select>
                        </div>
                        <div class="col-3 py-2">
                            <p><b>Wheels:</b></p>
                        </div>
                        <div class="col-8 py-2">
                            <input type="radio" name="" id="alloy">
                            <label for="alloy">Alloy</label>
                        </div>
                        <div class="col-3 py-2">
                            <p><b>Options:</b></p>
                        </div>
                        <div class="col-8">
                            <div class="col-12">
                                <input type="checkbox" name="" id="leather">
                                <label for="leather">Leather Seats</label>
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="" id="navigation">
                                <label for="navigation">Navigation System</label>
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="" id="adaptive">
                                <label for="adaptive">Adaptive Cruise Control</label>
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="" id="blind">
                                <label for="blind">Blind Spot Monitoring</label>
                            </div>
                            <div class="col-12">
                                <input type="checkbox" name="" id="parking">
                                <label for="parking">Parking Sensors</label>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-green">Motorvero Instant Market Value™</h3>
                            <h2 class="text-green"><b>$---</b></h2>
                        </div>
                        <div class="col-12">
                            <p class="">Private Sale Estimate:</p>
                            <p class="">$---</p>
                        </div>
                        <div class="col-12">
                            <p class="">Trade-In Value:</p>
                            <p class="">$---</p>
                        </div>
                        <div class="col-12 mt-3">
                            <h3 class="text-fade-blue">Selling</h3>
                        </div>
                        <hr>
                        <div class="col-12">
                            <h5 class="justify-content-between d-flex">Profit over trade-in: <span>+ $4,600</span></h5>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <div class="col-9">
                                <p class="py-2">Based on Great Deal price of $32,502 <i class="bi bi-exclamation-circle-fill"></i></span></p>
                            </div>
                            <div class="col-3">
                                <button class="book-button">
                                    <a href="#" class="text-dark">Sell my car</a>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 mt-4 p-4">
                            <div class="price-analysis-report">
                                <h5 class="text-center">Price Report</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-center"><b>Buying</b></h5>
                <p class="text-center">Search cars for sale</p>
                <p class="text-center">Enter a car and a zip code to find out how many active listings there are in your area.</p>
                <div class="text-center">
                    <button class="book-button w-50 py-3">Search listings</button>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-center"><b>Selling</b></h5>
                <p class="text-center">Find out how many nearby buyers are searching for your car</p>
                <p class="text-center">Put your car in front of the largest audience of online car shoppers.</p>
                <div class="text-center">
                    <button class="book-button w-50 py-3">Find Buyers</button>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-center"><b>Save for Later</b></h5>
                <p class="text-center">Keep researching, sell later</p>
                <p class="text-center">Not ready to sell your car just yet? Add it to your garage so that it will be saved for later.</p>
                <div class="text-center">
                    <button class="book-button w-50 py-3">Save your car</button>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container">
        <div class="col-md-8">
            <h5>Comparable Listings Nationwide</h5>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="p-2 compare-cars">
                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                    </div>
                </div>
                <div class="col-md-9 py-5">
                    <h6 class="text-fade-blue">2009 Chrysler 300 Limited AWD</h6>
                    <p><b>Location:</b> TOLEDO, OH <b>Price:</b> $9,995 <b>Mileage:</b> 145,368 Miles</p>
                    <ul>
                        <li>Heated Seats</li>
                        <li>Leather Seats</li>
                        <li>Chrome Wheels</li>
                    </ul>
                </div>
                <hr>
                <div class="col-md-3">
                    <div class="p-2 compare-cars">
                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                    </div>
                </div>
                <div class="col-md-9 py-5">
                    <h6 class="text-fade-blue">2009 Chrysler 300 Limited AWD</h6>
                    <p><b>Location:</b> TOLEDO, OH <b>Price:</b> $9,995 <b>Mileage:</b> 145,368 Miles</p>
                    <ul>
                        <li>Heated Seats</li>
                        <li>Leather Seats</li>
                        <li>Chrome Wheels</li>
                    </ul>
                </div>
                <hr>
                <div class="col-md-3">
                    <div class="p-2 compare-cars">
                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                    </div>
                </div>
                <div class="col-md-9 py-5">
                    <h6 class="text-fade-blue">2009 Chrysler 300 Limited AWD</h6>
                    <p><b>Location:</b> TOLEDO, OH <b>Price:</b> $9,995 <b>Mileage:</b> 145,368 Miles</p>
                    <ul>
                        <li>Heated Seats</li>
                        <li>Leather Seats</li>
                        <li>Chrome Wheels</li>
                    </ul>
                </div>
                <hr>
                <div class="col-12 text-center">
                    <a href="#">Browse more 2009 Chrysler 300 listings nationwide</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container">
        <div class="col-12 text-center">
            <h4 class="fw-bolder">Price Analysis for Popular SUVs/Crossovers</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Cadillac-XT5-Price-c27782" title="2019 Cadillac XT5 Price Analysis">
                                2019 Cadillac XT5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,437 listings: $14,995 - $48,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Cadillac-XT6-Price-c28970" title="2020 Cadillac XT6 Price Analysis">
                                2020 Cadillac XT6 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,369 listings: $29,997 - $53,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Blazer-Price-c29365" title="2020 Chevrolet Blazer Price Analysis">
                                2020 Chevrolet Blazer Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,939 listings: $20,888 - $44,743
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Equinox-Price-c29200" title="2020 Chevrolet Equinox Price Analysis">
                                2020 Chevrolet Equinox Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            8,349 listings: $12,795 - $34,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Chevrolet-Tahoe-Price-c29949" title="2021 Chevrolet Tahoe Price Analysis">
                                2021 Chevrolet Tahoe Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,748 listings: $38,995 - $80,990
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Chevrolet-Trailblazer-Price-c29332" title="2021 Chevrolet Trailblazer Price Analysis">
                                2021 Chevrolet Trailblazer Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,520 listings: $15,988 - $34,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Traverse-Price-c29201" title="2020 Chevrolet Traverse Price Analysis">
                                2020 Chevrolet Traverse Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,987 listings: $18,795 - $47,990
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Trax-Price-c29202" title="2020 Chevrolet Trax Price Analysis">
                                2020 Chevrolet Trax Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,794 listings: $11,988 - $28,930
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Dodge-Durango-Price-c30972" title="2021 Dodge Durango Price Analysis">
                                2021 Dodge Durango Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,750 listings: $25,997 - $103,673
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2022-Ford-Bronco-Price-c32086" title="2022 Ford Bronco Price Analysis">
                                2022 Ford Bronco Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,795 listings: $41,000 - $79,977
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Ford-Bronco-Sport-Price-c30714" title="2021 Ford Bronco Sport Price Analysis">
                                2021 Ford Bronco Sport Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,350 listings: $21,990 - $42,401
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Ford-EcoSport-Price-c29162" title="2020 Ford EcoSport Price Analysis">
                                2020 Ford EcoSport Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,419 listings: $12,921 - $28,495
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Ford-Edge-Price-c29619" title="2020 Ford Edge Price Analysis">
                                2020 Ford Edge Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            4,560 listings: $15,990 - $42,944
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Ford-Escape-Price-c29169" title="2020 Ford Escape Price Analysis">
                                2020 Ford Escape Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            6,243 listings: $12,900 - $35,299
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Ford-Expedition-Price-c29639" title="2020 Ford Expedition Price Analysis">
                                2020 Ford Expedition Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,964 listings: $26,988 - $67,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Ford-Explorer-Price-c28421" title="2020 Ford Explorer Price Analysis">
                                2020 Ford Explorer Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            6,705 listings: $14,739 - $50,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-GMC-Acadia-Price-c27785" title="2019 GMC Acadia Price Analysis">
                                2019 GMC Acadia Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,117 listings: $13,300 - $41,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-GMC-Terrain-Price-c29203" title="2020 GMC Terrain Price Analysis">
                                2020 GMC Terrain Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            3,092 listings: $16,900 - $39,990
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Honda-CR-V-Price-c29759" title="2020 Honda CR-V Price Analysis">
                                2020 Honda CR-V Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            4,630 listings: $18,995 - $37,999
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Honda-HR-V-Price-c29880" title="2020 Honda HR-V Price Analysis">
                                2020 Honda HR-V Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,370 listings: $16,995 - $29,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Honda-Pilot-Price-c29624" title="2020 Honda Pilot Price Analysis">
                                2020 Honda Pilot Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,773 listings: $18,500 - $42,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Hyundai-Kona-Price-c30777" title="2021 Hyundai Kona Price Analysis">
                                2021 Hyundai Kona Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,383 listings: $13,694 - $32,999
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Hyundai-Santa-Fe-Price-c29363" title="2020 Hyundai Santa Fe Price Analysis">
                                2020 Hyundai Santa Fe Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,412 listings: $14,989 - $36,991
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Hyundai-Tucson-Price-c29253" title="2020 Hyundai Tucson Price Analysis">
                                2020 Hyundai Tucson Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,929 listings: $13,963 - $32,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-INFINITI-QX60-Price-c28857" title="2020 INFINITI QX60 Price Analysis">
                                2020 INFINITI QX60 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,345 listings: $19,991 - $40,998
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Jeep-Cherokee-Price-c27481" title="2019 Jeep Cherokee Price Analysis">
                                2019 Jeep Cherokee Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            4,290 listings: $10,888 - $35,880
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Jeep-Compass-Price-c29395" title="2020 Jeep Compass Price Analysis">
                                2020 Jeep Compass Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,942 listings: $13,495 - $33,744
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Jeep-Grand-Cherokee-Price-c29397" title="2020 Jeep Grand Cherokee Price Analysis">
                                2020 Jeep Grand Cherokee Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            6,283 listings: $15,980 - $98,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Jeep-Grand-Cherokee-L-Price-c31128" title="2021 Jeep Grand Cherokee L Price Analysis">
                                2021 Jeep Grand Cherokee L Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,902 listings: $32,995 - $62,997
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Jeep-Renegade-Price-c29388" title="2020 Jeep Renegade Price Analysis">
                                2020 Jeep Renegade Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,388 listings: $12,900 - $30,545
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Jeep-Wrangler-Price-c29523" title="2020 Jeep Wrangler Price Analysis">
                                2020 Jeep Wrangler Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            4,247 listings: $26,800 - $57,900
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Kia-Seltos-Price-c29891" title="2021 Kia Seltos Price Analysis">
                                2021 Kia Seltos Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,645 listings: $15,998 - $31,988
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Kia-Sorento-Price-c29617" title="2020 Kia Sorento Price Analysis">
                                2020 Kia Sorento Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,475 listings: $14,995 - $36,158
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Kia-Soul-Price-c28922" title="2020 Kia Soul Price Analysis">
                                2020 Kia Soul Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,901 listings: $8,995 - $27,999
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Kia-Sportage-Price-c29020" title="2020 Kia Sportage Price Analysis">
                                2020 Kia Sportage Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,390 listings: $13,990 - $33,987
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Lexus-RX-Price-c29337" title="2020 Lexus RX Price Analysis">
                                2020 Lexus RX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,628 listings: $31,009 - $54,488
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Mazda-CX-5-Price-c29879" title="2020 Mazda CX-5 Price Analysis">
                                2020 Mazda CX-5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,862 listings: $17,495 - $34,998
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2022-Mercedes-Benz-GLC-Class-Price-c31856" title="2022 Mercedes-Benz GLC-Class Price Analysis">
                                2022 Mercedes-Benz GLC-Class Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,167 listings: $33,800 - $72,999
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Mercedes-Benz-GLE-Class-Price-c28938" title="2020 Mercedes-Benz GLE-Class Price Analysis">
                                2020 Mercedes-Benz GLE-Class Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,415 listings: $34,900 - $73,400
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Nissan-Murano-Price-c29764" title="2020 Nissan Murano Price Analysis">
                                2020 Nissan Murano Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,656 listings: $14,495 - $38,990
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Nissan-Pathfinder-Price-c29748" title="2020 Nissan Pathfinder Price Analysis">
                                2020 Nissan Pathfinder Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,329 listings: $12,900 - $39,990
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Nissan-Rogue-Price-c30634" title="2021 Nissan Rogue Price Analysis">
                                2021 Nissan Rogue Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            4,812 listings: $16,987 - $40,850
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Nissan-Rogue-Sport-Price-c29028" title="2020 Nissan Rogue Sport Price Analysis">
                                2020 Nissan Rogue Sport Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,976 listings: $14,875 - $32,950
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Subaru-Crosstrek-Price-c30774" title="2021 Subaru Crosstrek Price Analysis">
                                2021 Subaru Crosstrek Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,388 listings: $19,995 - $35,176
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Subaru-Forester-Price-c29401" title="2020 Subaru Forester Price Analysis">
                                2020 Subaru Forester Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,872 listings: $10,500 - $37,276
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Subaru-Outback-Price-c29177" title="2020 Subaru Outback Price Analysis">
                                2020 Subaru Outback Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,145 listings: $17,900 - $40,739
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Toyota-4Runner-Price-c30908" title="2021 Toyota 4Runner Price Analysis">
                                2021 Toyota 4Runner Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,385 listings: $28,473 - $63,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Toyota-Highlander-Price-c30910" title="2021 Toyota Highlander Price Analysis">
                                2021 Toyota Highlander Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,481 listings: $25,988 - $50,000
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Toyota-RAV4-Price-c30803" title="2021 Toyota RAV4 Price Analysis">
                                2021 Toyota RAV4 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            5,087 listings: $18,976 - $45,991
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Volkswagen-Atlas-Price-c30286" title="2021 Volkswagen Atlas Price Analysis">
                                2021 Volkswagen Atlas Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $21,955 - $48,275
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2022-Volkswagen-Taos-Price-c31325" title="2022 Volkswagen Taos Price Analysis">
                                2022 Volkswagen Taos Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,331 listings: $20,995 - $36,164
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Volkswagen-Tiguan-Price-c29660" title="2020 Volkswagen Tiguan Price Analysis">
                                2020 Volkswagen Tiguan Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,110 listings: $17,552 - $35,999
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Volvo-XC90-Price-c29120" title="2020 Volvo XC90 Price Analysis">
                                2020 Volvo XC90 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,568 listings: $29,500 - $61,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Sedans</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Cadillac-XT5-Price-c27782" title="2019 Cadillac XT5 Price Analysis">
                                2019 Cadillac XT5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,437 listings: $14,995 - $48,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Cadillac-XT6-Price-c28970" title="2020 Cadillac XT6 Price Analysis">
                                2020 Cadillac XT6 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,369 listings: $29,997 - $53,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Blazer-Price-c29365" title="2020 Chevrolet Blazer Price Analysis">
                                2020 Chevrolet Blazer Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,939 listings: $20,888 - $44,743
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Equinox-Price-c29200" title="2020 Chevrolet Equinox Price Analysis">
                                2020 Chevrolet Equinox Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            8,349 listings: $12,795 - $34,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Chevrolet-Tahoe-Price-c29949" title="2021 Chevrolet Tahoe Price Analysis">
                                2021 Chevrolet Tahoe Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,748 listings: $38,995 - $80,990
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Pickup Trucks</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Cadillac-XT5-Price-c27782" title="2019 Cadillac XT5 Price Analysis">
                                2019 Cadillac XT5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,437 listings: $14,995 - $48,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Cadillac-XT6-Price-c28970" title="2020 Cadillac XT6 Price Analysis">
                                2020 Cadillac XT6 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,369 listings: $29,997 - $53,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Blazer-Price-c29365" title="2020 Chevrolet Blazer Price Analysis">
                                2020 Chevrolet Blazer Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,939 listings: $20,888 - $44,743
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Chevrolet-Equinox-Price-c29200" title="2020 Chevrolet Equinox Price Analysis">
                                2020 Chevrolet Equinox Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            8,349 listings: $12,795 - $34,995
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-Chevrolet-Tahoe-Price-c29949" title="2021 Chevrolet Tahoe Price Analysis">
                                2021 Chevrolet Tahoe Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,748 listings: $38,995 - $80,990
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Minivans</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Coupes</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Wagons</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Vans</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Hatchbacks</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>
        <div class="col-12 text-center mt-5">
            <h4 class="fw-bolder">Price Analysis for Popular Sedans</h4>
        </div>
        <div class="col-12">
            <ul class="car-price-analysis">
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-MDX-Price-c29535" title="2020 Acura MDX Price Analysis">
                                2020 Acura MDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            2,192 listings: $22,752 - $47,688
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Acura-RDX-Price-c29214" title="2020 Acura RDX Price Analysis">
                                2020 Acura RDX Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,447 listings: $23,971 - $46,497
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2021-BMW-X3-Price-c30832" title="2021 BMW X3 Price Analysis">
                                2021 BMW X3 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,651 listings: $24,955 - $56,994
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-BMW-X5-Price-c29267" title="2020 BMW X5 Price Analysis">
                                2020 BMW X5 Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,396 listings: $32,995 - $71,544
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2019-Buick-Encore-Price-c27678" title="2019 Buick Encore Price Analysis">
                                2019 Buick Encore Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,442 listings: $9,995 - $27,480
                        </p>
                    </span>

                </li>
                <li>
                    <span>
                        <h5>

                            <a href="2020-Buick-Envision-Price-c29054" title="2020 Buick Envision Price Analysis">
                                2020 Buick Envision Price Analysis
                            </a>
                        </h5>
                        <p class="bodySM">
                            1,559 listings: $17,911 - $39,995
                        </p>
                    </span>

                </li>
            </ul>
        </div>

    </div>
</section>
@endsection