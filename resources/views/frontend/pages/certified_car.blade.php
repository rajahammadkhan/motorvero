@extends('frontend.layouts.master')
@section('title')
    Certified Car
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
                    <p class="heading">Find Great Deals On<span> Certified Pre-Owned Cars</span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-5">

                    <h4 class="heading-m text-start">Search Certified Pre-Owned <span> By Make & Model
                        </span></h4>
                    <form action="{{url('listing')}}" method="GET" data-cg-ft="used-cars-search-form">
                        <input type="hidden" name="tracking" value="home">
                        <div class="row by-make-model">
                            <div class="col-md-12">
                                <select name="make" id="maker" class="rounded-3 form-control">
                                    <option value="" selected disabled>All Makes</option>
                                    @foreach(App\Helpers\DefaultLanguage::Make() as $makes)
                                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <select id="mySelect" name="model" class="rounded-0 form-control mt-2">
                                    <option value="">Select Model</option>

                                </select>
                            </div>
                            <div class="col-12 d-flex ">
                                <div class="col mt-2 ">

                                    <select name="year" id="Year" aria-label="startYear" class="form-control"
                                            aria-describedby="">
                                        <option value="" selected disabled>All Years</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2010">2010</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2002">2002</option>
                                        <option value="2000">2000</option>
                                        <option value="1995">1995</option>
                                        <option value="1998">1998</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1991">1991</option>
                                        <option value="1987">1987</option>
                                        <option value="1985">1985</option>
                                        <option value="1981">1981</option>

                                    </select>
                                </div>
                                <p class="col-1 text-center my-auto "> to</p>
                                <div class="col mt-2">
                                    <select name="year" id="endYear" aria-label="endYear" class="form-control"
                                            aria-describedby="">
                                        <option value="" selected disabled>All Years</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2010">2010</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2002">2002</option>
                                        <option value="2000">2000</option>
                                        <option value="1995">1995</option>
                                        <option value="1998">1998</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1991">1991</option>
                                        <option value="1987">1987</option>
                                        <option value="1985">1985</option>
                                        <option value="1981">1981</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex mt-2">
                                <div class="col">

                                    <div class="input-group rounded-3" style="border: 1px solid;">
                                        <span class="input-group-text border-0  bg-transparent smaller"
                                              id="basic-addon1">Zip*</span>
                                        <input type="text" name="zip" id="Zip" placeholder="56540"
                                               class="form-control border-0">
                                        <span class="input-group-text  bg-transparent smaller" id="basic-addon1"
                                              style="border-left:1px solid; z-index: 1 ;">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal"
                                                 data-icon="map-marker-alt"
                                                 class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-fw fa-1x "
                                                 role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor"
                                                      d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col">
                                    <div class="input-group rounded-3" style="border: 1px solid;">
                                        <span class="input-group-text border-0  bg-transparent smaller"
                                              id="basic-addon1">Radius</span>
                                        <select id="distance" aria-label="distance"
                                                class="form-control border-0" aria-describedby="">
                                            <option>10 mi</option>
                                            <option>25 mi</option>
                                            <option>50 mi</option>
                                            <option>75 mi</option>
                                            <option>100 mi</option>
                                            <option>150 mi</option>
                                            <option>200 mi</option>
                                            <option>500 mi</option>
                                            <option>Nationwide</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button type="submit" id="btnSearch"
                                   class="btn btn-primary back-primary w-100 py-2">Search Certified Pre-Owned</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-7 ps-md-4">
                    <div class="certifieddiv">
                        <div class="row">
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/ford')}}"> <img src="{{asset('/images/cpo/ford.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/chevrolet')}}"> <img src="{{asset('/images/cpo/chevrolet.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/jeep')}}"> <img src="{{asset('/images/cpo/jeep.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/dodge')}}"> <img src="{{asset('/images/cpo/dodge.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/toyota')}}"> <img src="{{asset('/images/cpo/toyota.svg')}}" class="w-100"
                                                      alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/honda')}}"> <img src="{{asset('/images/cpo/honda.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div><a href="{{url('certified-car/bmw')}}"> <img src="{{asset('/images/cpo/bmw.svg')}}" class="w-100" alt=""></a>
                                </div>
                            </div>
                            <div class="col-3 p-2 ">
                                <div class="h-100 d-flex justify-content-center align-items-center "><a href=""
                                                                                                        class="clr-primary fw-1">
                                        Browse All CPO</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 sec cpo-new-car py-0">
        <div class="cpo-new-car-price ">
            <div class="container-fluid px-md-5 px-sm-3 px-2 position-relative h-100">
                <div class="row h-75 py-md-auto py-5">
                    <div class="col-md-6 col-12 my-auto ">
                        <h2 class="
                         fw-normal ">
                            New Car Reliability, Used Car Price
                        </h2>
                        <h6 class="my-3 lh-sm">Every Certified Pre-Owned (CPO) vehicle is inspected and comes with a
                            manufacturer warranty. Plus, we'll show you each car's deal rating so you never overpay.
                        </h6>
                        <div class="d-md-flex">
                            <div class="d-flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92 92" height="46" width="46"
                                     fill="#5093ce">
                                    <title>Great Deal</title>
                                    <circle cx="46" cy="46" r="46" class="dealarrow"></circle>
                                    <g fill="#ffffff">
                                        <path d="M38.9,43.126a7.882,7.882,0,0,0,0-6.887,7.891,7.891,0,0,0,0,6.887Z">
                                        </path>
                                        <path
                                                d="M53.105,49.305c.307-.157.618-.306.936-.443a10.694,10.694,0,0,1-.936-.718,11,11,0,0,1-.936.718C52.487,49,52.8,49.148,53.105,49.305Z">
                                        </path>
                                        <path
                                                d="M38.9,48.144a10.694,10.694,0,0,1-.936.718c.318.137.629.286.936.443.307-.157.618-.306.936-.443A11,11,0,0,1,38.9,48.144Z">
                                        </path>
                                        <path d="M47.583,63.372c0-.029,0-.058,0-.087,0,.029,0,.058,0,.087Z"></path>
                                        <path
                                                d="M44.417,63.372h.008c0-.029,0-.058,0-.087C44.42,63.314,44.417,63.343,44.417,63.372Z">
                                        </path>
                                        <polygon
                                                points="46.002 13.58 16.033 42.976 34.345 42.976 34.345 78.42 57.655 78.42 57.655 42.976 75.967 42.976 46.002 13.58">
                                        </polygon>
                                    </g>
                                </svg>
                                <p class="fs-6  fw-bold font-secondary my-auto ms-3 ">Great Deal</p>
                            </div>
                            <div class="d-flex ps-md-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46"
                                     fill="#5093ce">
                                    <title>Manufacturer Warranty</title>
                                    <circle cx="23" cy="23" r="23" class="fileCertificate"></circle>
                                    <path
                                            d="M36.652,13.428l-5.08-5.081a2.909,2.909,0,0,0-2.053-.854H17.154a2.917,2.917,0,0,0-2.907,2.913V17.53a5.906,5.906,0,0,1-1.462-.3,1.137,1.137,0,0,0-.3-.04,1.174,1.174,0,0,0-.828.35A3.693,3.693,0,0,1,9.131,19.02a1.194,1.194,0,0,0-.834.853,3.778,3.778,0,0,1-1.455,2.563,1.238,1.238,0,0,0-.308,1.177,3.821,3.821,0,0,1,0,2.954,1.238,1.238,0,0,0,.308,1.178A3.77,3.77,0,0,1,8.3,30.306a1.194,1.194,0,0,0,.834.854l.271.074v6.3a.968.968,0,0,0,1.4.866l3.443-1.721L17.69,38.4a.975.975,0,0,0,.434.1H34.6A2.908,2.908,0,0,0,37.507,35.6V15.487A2.918,2.918,0,0,0,36.652,13.428Zm-6.9-3.961a.949.949,0,0,1,.448.255L35.284,14.8a.957.957,0,0,1,.255.448H29.755ZM8.509,26.676a5,5,0,0,0,0-3.174,4.959,4.959,0,0,0,1.553-2.729,4.785,4.785,0,0,0,2.658-1.556,5.628,5.628,0,0,0,1.527.251,5.568,5.568,0,0,0,1.526-.252,4.839,4.839,0,0,0,2.657,1.555A4.9,4.9,0,0,0,19.983,23.5a4.942,4.942,0,0,0,0,3.174A4.953,4.953,0,0,0,18.432,29.4a4.632,4.632,0,0,0-2.256,1.173,4.662,4.662,0,0,0-3.859,0A4.705,4.705,0,0,0,10.062,29.4a4.9,4.9,0,0,0-1.553-2.725Zm6.172,8.057a.966.966,0,0,0-.867,0L11.34,35.969V32.322l.019.018a1.145,1.145,0,0,0,1.441.171,2.721,2.721,0,0,1,2.892,0,1.139,1.139,0,0,0,.616.183,1.162,1.162,0,0,0,.826-.351c.008-.008.013-.011.02-.019v3.647l-2.473-1.237Zm20.888.867a.972.972,0,0,1-.969.969H19.093V31.232l.269-.072a1.193,1.193,0,0,0,.834-.853,3.776,3.776,0,0,1,1.455-2.563,1.241,1.241,0,0,0,.308-1.178,3.817,3.817,0,0,1,0-2.954,1.241,1.241,0,0,0-.308-1.178A3.774,3.774,0,0,1,20.2,19.873a1.193,1.193,0,0,0-.833-.854,3.693,3.693,0,0,1-2.527-1.485,1.159,1.159,0,0,0-.651-.313V10.406a.976.976,0,0,1,.969-.974H27.817v6.3a1.447,1.447,0,0,0,1.454,1.45h6.3V35.6Z"
                                            style="fill:#fff"></path>
                                </svg>
                                <p class="fs-6  fw-bold font-secondary my-auto ms-3 ">Manufacturer Warranty</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-12 my-3 d-md-block d-none">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button
                        class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Certified <span>New
                                Cars</span></h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="row px-md-3">
                    @if(App\Helpers\DefaultLanguage::Cars(['certified'=>1, 'condition' => 'New','paginate'=>16]) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['certified'=>1, 'condition' => 'New','paginate'=>20]) as $cars)
                            <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}"
                                                                               class="text-dark h5  fw-bold">Certified {{$cars->title}} </a>
                                <p class="smaller my-2">
                                    Starting at ${{$cars->dollar_price}} </p>
                            </div>
                        @endforeach
                    @else
                        No data found
                    @endif

                </div>

            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button
                        class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Certified <span>Used
                                Cars</span></h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="row px-md-3">
                    @if(App\Helpers\DefaultLanguage::Cars(['certified'=>1, 'condition' => 'Used','paginate'=>16]) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['certified'=>1, 'condition' => 'Used','paginate'=>20]) as $cars)
                            <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}"
                                                                               class="text-dark h5  fw-bold">Certified {{$cars->title}} </a>
                                <p class="smaller my-2">
                                    Starting at ${{$cars->dollar_price}} </p>
                            </div>
                        @endforeach
                    @else
                        No data found
                    @endif

                </div>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(Document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#maker').change(function () {
                let makeId = $(this).val();
                $('#mySelect').empty();
                $.ajax({
                    url: '{{url('fetch-all-model')}}',
                    method: 'POST',
                    dataType: 'json',
                    data:{'makeId':makeId},
                    success: function(data) {
                        // Process the response data
                        let payload = data.data;
                        // Clear existing options

                        if(payload){
                            $('#mySelect').append($('<option>', {
                                text: "Select Model"
                            }));
                            // Add new options based on the received data
                            $.each(payload, function(key, value) {

                                $('#mySelect').append($('<option>', {
                                    value: value.id,
                                    text: value.title
                                }));
                            });
                        }

                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request failed:', status, error);
                    }
                });
            })
        })
        function checkMedia(x) {
            if (x.matches) {
                $(".dropdown_menu").click(function () {
                    $(this).parents('.parent_dropdown').find(".dropdown_items").slideToggle();
                    $(this).parents('.parent_dropdown').find(".dropdown_menu").toggleClass('active');
                    // console.log($(this).parents('.parent_dropdown').find(".dropdown_menu"));
                });
            } else {
                // document.body.style.backgroundColor = "pink";
            }
        }

        var x = window.matchMedia("(max-width: 768px)")
        checkMedia(x)
        x.addListener(checkMedia)

    </script>
    <script src="./assets/js/nav.js"></script>
    <script>
        function checkMedia(x) {
            // if (x.matches) {
            $(".dropdown_menu").click(function () {
                $(this).parents('.parent_dropdown').find(".dropdown_items").slideToggle();
                $(this).parents('.parent_dropdown').find(".dropdown_menu").toggleClass('active');
                // console.log($(this).parents('.parent_dropdown').find(".dropdown_menu"));
            });

            // } else {
            // document.body.style.backgroundColor = "pink";
            // }
        }

        checkMedia('')

        function vehicleprice() {

            let range = document.getElementById('VehiclePriceRange').value
            let amount = document.getElementById('VehiclePrice').value = range
            range = amount
            let downpay = document.getElementById('DownPayment').value
            let downpayment = downpay * 100 / range
            let down = document.getElementById('DownPaymentPercent').innerHTML = downpayment
            downpayment.toFixed(2)

            // document.getElementById('VehiclePriceRange').innerHTML = toLocaleString()
            console.log(toLocaleString());

        }

        vehicleprice()

        // function downpayment(){
        //     let amount = document.getElementById('VehiclePriceRange').value
        //     let downpay = document.getElementById('DownPayment').value
        //     let downpayment = downpay * 100 / amount
        //     let down = document.getElementById('DownPaymentPercent').innerHTML = downpayment
        // }
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("step-count").style.display = "none";
                // document.getElementById("back-arrow").style.display = "none";

            } else {
                document.getElementById("prevBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("step-count").style.display = "inline";
                // document.getElementById("back-arrow").style.display = "inline";
                document.getElementById("ModalLabel").innerHTML = "Applicant";
            }
            // if (n == 0) {
            //     document.getElementById("ModalLabel").innerHTML = "Overview";
            // } else if (n == 1) {
            //     document.getElementById("ModalLabel").innerHTML = "Applicant";
            // }

            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit Your Application";
            } else if (n == (x.length - 2)) {
                document.getElementById("nextBtn").innerHTML = "Next: Review";
            } else if (n == (x.length - 3)) {
                document.getElementById("nextBtn").innerHTML = "Next: Identity";
            } else if (n == (x.length - 4)) {
                document.getElementById("nextBtn").innerHTML = "Next: Your Employment";
            } else if (n == (x.length - 5)) {
                document.getElementById("nextBtn").innerHTML = "Next: Your Residence";
            } else {
                document.getElementById("nextBtn").innerHTML = "Submit";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {

            document.querySelector('.firstnameidtab-2').innerHTML = regForm.firstnameid.value;
            document.querySelector('.firstnameid').innerHTML = regForm.firstnameid.value;
            document.querySelector('.emailid').innerHTML = regForm.emailid.value;
            document.querySelector('.phonenumberid').innerHTML = regForm.phonenumberid.value;
            document.querySelector('.homeaddid').innerHTML = regForm.homeaddid.value;
            document.querySelector('.monthlypayid').innerHTML = regForm.monthlypayid.value;
            document.querySelector('.employerid').innerHTML = regForm.employerid.value;
            document.querySelector('.jobtitleid').innerHTML = regForm.jobtitleid.value;
            document.querySelector('.scnid').innerHTML = regForm.scnid.value;
            document.querySelector('.dobid').innerHTML = regForm.dobid.value;
            document.querySelector('.primaryanumid').innerHTML = regForm.primaryanumid.value;
            document.querySelector('.propertytypeid').innerHTML = regForm.querySelector('[name="propertytype"]').value;
            document.querySelector('.empstatusopt').innerHTML = regForm.querySelector('[name="empstatusopt"]').value;
            console.log(document.querySelector('.propertytypeid').value);
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            // z = document.getElementsByClassName("required-none");
            z = document.getElementsByClassName("field-required");
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...

                if (y[i].value === "") {
                    // add an "invalid" class to the field:
                    // z[i].className = z[i].className.replace("required-none", "required");
                    // z[i].innerHTML = "";
                    z[i].innerHTML = `
                    <div class="required"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg><p class="text-black">Required</p></div>
                    `;
                    // and set the current valid status to false
                    valid = false;
                }
                // var disable = document.getElementById('nextBtn')
                // if (y[i].value == "") {
                //     disable.classList.add('disabled')
                // }

            }


            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
                x[i].innerHTML = "Step " + i + " of 5"
            }
            //... and adds the "active" class on the current step:
            // x[n].innerHTML += " active";
            x[n].className += " active";
            // document.getElementsByClassName('.active').innerHTML = "aaa"
        }

        function myFunction() {
            var x = document.getElementById("scnid");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        //         let firstname = document.getElementById('firstnameid').innerHTML
        //         let fuck = document.getElementById('dcfullname').innerHTML = firstname
        // console.log(fuck);

    </script>
@endsection


