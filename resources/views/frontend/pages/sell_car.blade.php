@extends('frontend.layouts.master')
@section('title')
    Sell Car
@endsection
@section('content')
    <style>
        .sell-your-car form {
            padding: 2.5rem 1.5rem;
            border: 1px solid;
            box-shadow: 0 2px 5px;
            border-radius: 20px;
            background-color: white;
        }



        /* .sell-radio {
                text-align: center;
                border: 1px solid var(--bs-border-color);
                border-radius: 40px;
            } */

        .sell-radio input {
            display: none;
        }


        .offer-steps {
            background: #00324d;
            color: #fff;
        }

        .offer-steps ul li {
            list-style: none;
        }

        .offer-step-count {
            display: inline-block;
            border: 1px solid #818d98;
            background-color: #fff;
            color: var(--bs-primary-text-emphasis);
            padding: 0.125rem 0.5rem;
            box-shadow: 0 4px 8px var(--cg-base-box-shadow-color);
            border-radius: var(--bs-border-radius-sm);
            margin: 0 0 1rem;
            font-size: .9rem;
        }

        .rating-box {
            background-color: #00324d;
            padding: 2rem;
            display: inline-block;
            border-radius: 3rem;
            color: #fff;
            margin: 0.5rem auto 3rem;
        }

        .vin {
            display: none;
        }

        .score {
            font-size: 6rem;
            font-weight: 900;
            line-height: 7rem;
        }

        .instant-cash h2 {
            color: hsl(120, 100%, 30%);
        }

        .adivce-resources img {
            height: 150px;
            width: 100%;
        }

        .clr-light {
            color: #707070;
        }

        .dropdown_items {
            display: none;
        }

        .review-instant img {
            height: 500px;
            width: 100%;
            object-fit: cover;
        }

        .dropdown_items ul {
            display: flex;
            flex-flow: column wrap;
            align-content: flex-start;
            list-style: inside;
            height: 15rem;
        }
        .states-support li{
            width: 25%;
        }
    </style>
    <section class="my-4 sell-your-car-bg">
        <div class="container py-3">
            <h1>Sell your car 100% online</h1>
            <h6>Instantly get the best offer, sourced from thousands of dealers.</h6>
            <div class="sell-your-car">
                <div class="col-lg-5 col-md-6">
                    <h5 id="errorMessage"></h5>
                    <form action="/vin" class="" id="sellCarModal">
                        <div class="mb-3 row sell-radio-btn">
                            <div class="col-6 p-0">
                                <div class="sell-radio">
                                    <input type="radio" name="sell-car" id="license-plate" checked>
                                    <label for="license-plate">License Plate</label>
                                </div>
                            </div>
                            <div class="col-6 p-0">
                                <div class="sell-radio">
                                    <input type="radio" name="sell-car" id="vin" >
                                    <label class="col-6" for="vin">VIN</label>
                                </div>
                            </div>


                        </div>
                        <div class="mb-3 row license-plate">
                            <div class="col-sm-8">
                                <label for="" class="col-sm-12">Enter license plate</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="(Ex.) C4R6URU" class="form-control" require id="license_no">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="" class="col-sm-12">State</label>
                                <div class="col-sm-12">
                                    <select class="form-control" id="state">
                                        <option value="" disabled="">Select</option>
                                        @foreach(App\Helpers\DefaultLanguage::stateOfUsa() as $val)
                                            <option value="{{$val->name}}">{{$val->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row vin">
                            <div class="col">
                                <label for="">VIN</label>
                                <input type="text" placeholder="(Ex.) C4R6URU5226123456" class="form-control" id="vin_number">
                                <a class="mt-3" href="">Where is my VIN?</a>
                            </div>
                        </div>
                        <div class="pt-3 row">
                            <div class="btn btn-primary py-2" id="checkValidation">Get Started</div>
                        </div>
                    </form>


                    {{--                    //different form--}}
                    <div>
                        <div class="container h-100 d-flex align-items-center">
                            <p class="heading">
                                Perfect! Let's confirm <span> where you are selling.</span>
                            </p>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item" id="first">

                                        </div>
                                        {{--                                        <div class="accordion-item" id="second">--}}
                                        {{--                                            <h2 class="accordion-header" id="headingTwo">--}}
                                        {{--                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                                        {{--                                                    Where is your car located?--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </h2>--}}
                                        {{--                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
                                        {{--                                                <div class="accordion-body">--}}
                                        {{--                                                    <div>--}}
                                        {{--                                                        <lable>Zip Code</lable>--}}
                                        {{--                                                        <input type="text" class="form-control" placeholder="Ex: 12345">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="pt-1">--}}
                                        {{--                                                        <button class="btn btn-primary" id="nextZip">--}}
                                        {{--                                                            Next--}}
                                        {{--                                                        </button>--}}
                                        {{--                                                    </div>--}}

                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="accordion-item" id="third">--}}
                                        {{--                                            <h2 class="accordion-header" id="headingThree">--}}
                                        {{--                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                        {{--                                                    Car details--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </h2>--}}
                                        {{--                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
                                        {{--                                                <div class="accordion-body">--}}
                                        {{--                                                    <div>--}}
                                        {{--                                                        <label for="">--}}
                                        {{--                                                            We were able to find your car details from your VIN. If the make/model/year are incorrect then go back and enter another VIN--}}
                                        {{--                                                        </label>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlInput1">Make</label>--}}
                                        {{--                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Make" name="make" value="{{$data['Make']}}" readonly>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlInput1">Model</label>--}}
                                        {{--                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model" name="model" value="{{$data['Model']}}" readonly>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlInput1">Year</label>--}}
                                        {{--                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Year" name="year" value="{{$data['Model_Year']}}">--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlSelect1">Trim</label>--}}
                                        {{--                                                            <select class="form-control" id="exampleFormControlSelect1" name="trim">--}}
                                        {{--                                                                <option>1</option>--}}
                                        {{--                                                                <option>2</option>--}}

                                        {{--                                                            </select>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlSelect2">Transmission</label>--}}
                                        {{--                                                            <select  class="form-control" id="exampleFormControlSelect2" name="transmission" >--}}
                                        {{--                                                                <option>1</option>--}}
                                        {{--                                                                <option selected>{{$data['Transmission_Speeds']}}-Speed {{$data['Transmission_Style']}}</option>--}}

                                        {{--                                                            </select>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlSelect2">Engine</label>--}}
                                        {{--                                                            <select  class="form-control" id="exampleFormControlSelect2" name="engine">--}}
                                        {{--                                                                <option>1</option>--}}
                                        {{--                                                                <option selected>{{$data['Displacement__CC_']}}L {{$data['Engine_Brake__hp__From']}}HP V{{$data['Engine_Number_of_Cylinders']}}</option>--}}

                                        {{--                                                            </select>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                        <div class="form-group">--}}
                                        {{--                                                            <label for="exampleFormControlSelect2">Millage</label><span><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="In order to give you an accurate offer on your vehicle, we need the current mileage (found on your odometer).">info</button></span>--}}
                                        {{--                                                            <input class="form-control" type="text" name="millage">--}}
                                        {{--                                                        </div>--}}

                                        {{--                                                        <div class="pt-1">--}}
                                        {{--                                                            <button class="btn btn-primary" id="nextZip">--}}
                                        {{--                                                                Next--}}
                                        {{--                                                            </button>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    </form>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                                {{--                                <div class="col-md-4" id="carDetail">--}}
                                {{--                                    <div class="card bg-light p-3 mt-3">--}}
                                {{--                                        <h3> Vehicle summary</h3>--}}
                                {{--                                        <div class="my-2">--}}
                                {{--                                            <h5>License plate or VIN</h5>--}}
                                {{--                                            <p>{{$data['VIN']}}</p>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="my-2">--}}
                                {{--                                            <h5>Year make & model</h5>--}}
                                {{--                                            <p>{{$data['Model_Year']}} {{$data['Make']}} {{$data['Model']}}</p>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="my-2">--}}
                                {{--                                            <h5>Trim</h5>--}}
                                {{--                                            <p>-</p>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="my-2">--}}
                                {{--                                            <h5>Mileage</h5>--}}
                                {{--                                            <p>-</p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card hover-none my-3 px-3 ">--}}
                                {{--                                        <div class="card-body ps-0">--}}
                                {{--                                            <h5 class="card-title fw-bold fs-6 mb-0 text-primary d-flex ">--}}
                                {{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">--}}
                                {{--                                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />--}}
                                {{--                                                </svg>--}}
                                {{--                                                <p class="ps-2 m-0"> Chat With Us</p>--}}
                                {{--                                            </h5>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="card hover-none my-3 px-3 ">--}}
                                {{--                                        <div class="card-body ps-0">--}}
                                {{--                                            <a href="tel:0000000000">--}}
                                {{--                                                <h5 class="card-title fw-bold fs-6 mb-0 text-primary d-flex ">--}}
                                {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">--}}
                                {{--                                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />--}}
                                {{--                                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />--}}
                                {{--                                                    </svg>--}}
                                {{--                                                    <p class="ps-2 m-0">Call</p>--}}
                                {{--                                                </h5>--}}
                                {{--                                            </a>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>




                    </div>








                </div>
            </div>
        </div>
    </section>
    <section class="offer-steps">
        <div class="container py-5">
            <div class="col-12 pb-5 text-center">
                <div class="title py-3 px-2">
                    <h1>3 simple steps. 1 unbeatable offer.</h1>
                    <h5>Here's how it works.</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 d-none">
                    <iframe width="100%" height="340" src="https://www.youtube.com/embed/MVFq22cxOgA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <ul class="p-0">
                        <li>
                            <div class="offer-step-count">Step 1</div>
                            <div>
                                <h5>Get an instant cash offer</h5>
                                <p>Just enter details like VIN and mileage, and we'll get you the best price for your car
                                    from our dealer network—all in under two minutes.</p>
                            </div>
                        </li>
                        <li>
                            <div class="offer-step-count">Step 2</div>
                            <div>
                                <h5>Have your car picked up</h5>
                                <p>Simply schedule a time that works for you, and we'll come pick up your car. It's that
                                    easy.</p>
                            </div>
                        </li>
                        <li>
                            <div class="offer-step-count">Step 3</div>
                            <div>
                                <h5>Get paid</h5>
                                <p>We'll pay you within two business days via check or direct deposit.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="customer-ratings  ">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4 py-5 text-center">
                    <h1 class="fw-bolder">Word on the street</h1>
                    <h4>See what our customers are saying.</h4>
                    <h3 class="fw-bold">Overall customer rating</h3>

                    <div class="">
                        <div class="rating-box ">
                            <div class="score">4.7</div>
                            <div class="d-flex col justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                     class="_2waTFh">
                                    <path class="_4z5HgY" fill="#ffb100"
                                          d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                    </path>
                                    <path class="_5bxaLR" fill="#ffb100"
                                          d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                     class="_2waTFh">
                                    <path class="_4z5HgY" fill="#ffb100"
                                          d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                    </path>
                                    <path class="_5bxaLR" fill="#ffb100"
                                          d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                     class="_2waTFh">
                                    <path class="_4z5HgY" fill="#ffb100"
                                          d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                    </path>
                                    <path class="_5bxaLR" fill="#ffb100"
                                          d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                     class="_2waTFh">
                                    <path class="_4z5HgY" fill="#ffb100"
                                          d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                    </path>
                                    <path class="_5bxaLR" fill="#ffb100"
                                          d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                    </path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                     class="_2waTFh">
                                    <path class="_4z5HgY" fill="#ffb100"
                                          d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                    </path>
                                    <path class="_5bxaLR" fill="#ffb100"
                                          d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="fw-bold">Over 2,380 reviews</h3>
                    <a href="#">See All Reviews</a>
                </div>
                <div class="col-md-7 rating-review">
                    <div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('frontend/images/sell_car/image9.jpeg')}}" alt="">
                                    <div class="d-flex col justify-content-end my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                                <h2 class="fw-bold">Super easy transaction</h2>
                                <p>11/10/2022</p>
                                <p>Great experience. Super fast and easy transaction. And I got more than I expected for my
                                    van. Highly recommended.</p>
                                <p><u>Read full review</u></p>
                                <br>
                                <br>
                                <p><b>Brian</b> &nbsp; VERIFIED SELLER</p>
                                <p>Sold a Toyota</p>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('frontend/images/sell_car/image9.jpeg')}}" alt="">
                                    <div class="d-flex col justify-content-end my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                                <h2 class="fw-bold">Easy - Peasy!</h2>
                                <p>11/7/2022</p>
                                <p>Honestly, I was a little worried about how easy they made the sale sound. Pleasantly
                                    surprised! Flawless transfer! Great price!</p>
                                <p><u>Read full review</u></p>
                                <br>
                                <br>
                                <p><b>John</b> &nbsp; VERIFIED SELLER</p>
                                <p>Sold a Toyota</p>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('frontend/images/sell_car/image9.jpeg')}}" alt="">
                                    <div class="d-flex col justify-content-end my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                                <h2 class="fw-bold">Fast and pretty easy</h2>
                                <p>11/7/2022</p>
                                <p>We were rushed to sell our car before leaving the country, and the Motorvero's process made
                                    it easy.</p>
                                <p><u>Read full review</u></p>
                                <br>
                                <br>
                                <p><b>Theresa</b> &nbsp; VERIFIED SELLER</p>
                                <p>Sold a Nissan</p>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <img src="{{asset('frontend/images/sell_car/image9.jpeg')}}" alt="">
                                    <div class="d-flex col justify-content-end my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20"
                                             class="_2waTFh">
                                            <path class="_4z5HgY" fill="#ffb100"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                                <h2 class="fw-bold">Incredible process.</h2>
                                <p>11/2/2022</p>
                                <p>This was the easiest car transaction that I have ever made. It was extremely
                                    professional, informative, efficient, and satisfying. I would recommend considering it
                                    to anyone who wa [...]</p>
                                <p><u>Read full review</u></p>
                                <br>
                                <br>
                                <p><b>Chester</b> &nbsp; VERIFIED SELLER</p>
                                <p>Sold a Toyota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4 instant-cash">
        <div class="container py-5">
            <div class="col-12 text-center pb-5">
                <h1 class="fw-bolder">Why get an instant cash offer vs. selling it yourself?</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('frontend/images/sell_car/image5.jpeg')}}" alt="">
                </div>
                <div class="col-md-6 py-5">
                    <h2 class="fw-bold">7-day sale time</h2>
                    <h5>vs. 20 days when you sell it yourself.*</h5>
                    <br>
                    <h2 class="fw-bold">Firm offer</h2>
                    <h5>vs. negotiating with potential buyers.</h5>
                    <br>
                    <h2 class="fw-bold">Free pickup</h2>
                    <h5>vs. coordinating a drop-off.</h5>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="col-12 pt-5">
                    <button class="btn btn-primary px-5 py-2">Get your free offer</button>
                </div>
                <div class="col-12 pt-3">
                    <a href="#"><u>or list for $4.95</u></a>
                </div>
                <div class="col-12 pt-3">
                    <p>*On average according to our private listing data.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h1 class="fw-bold">Articles, advice & resources</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 review-instant">
                        <img src="{{asset('frontend/images/sell_car/image3.jpeg')}}" alt="">
                        <h5 class="fw-bold pt-2">
                            <a href="#">Reviewing Instant Cash Offers for Your Car</a>
                        </h5>
                        <p class="clr-light">by Natalie Harrington</p>
                        <p>There are more options than ever for selling your car, but no matter which you choose, you're
                            going to need certain paperwork.</p>
                    </div>
                    @if($sell_my_car_article->isNotEmpty())

                        <div class="col-md-6">
                            <div class="row adivce-resources">
                                @foreach($sell_my_car_article as $val)
                                        <?php
                                        $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;

                                        ?>
                                    <div class="col-6">
                                        @if($val->media()->image == null)
                                            <img src="{{asset('images/media/'.$image)}}" alt="">
                                        @else
                                            <img 
                                                 src="{{asset('images/media'.'/'.$val->media()->image)}}"
                                                 alt="">
                                        @endif

                                        <h5 class="fw-bold pt-2">
                                            <a href="#">{{$val->title}}</a>
                                        </h5>
                                        <p class="clr-light">by Natalie Harrington</p>
                                        <p>{!! $val->short_description !!}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    @endif
                    {{--                    <div class="col-md-6">--}}
                    {{--                        <div class="row adivce-resources">--}}
                    {{--                            <div class="col-6">--}}
                    {{--                                <img src="{{asset('frontend/images/sell_car/image4.jpeg')}}" alt="">--}}
                    {{--                                <h5 class="fw-bold pt-2">--}}
                    {{--                                    <a href="#">What Paperwork Do I Need to Sell my Car?</a>--}}
                    {{--                                </h5>--}}
                    {{--                                <p class="clr-light">by Natalie Harrington</p>--}}
                    {{--                                <p>There are more options than ever for selling your car, but no matter which you choose,--}}
                    {{--                                    you're going to need certain paperwork.</p>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-6">--}}
                    {{--                                <img src="{{asset('frontend/images/sell_car/image7.jpeg')}}" alt="">--}}
                    {{--                                <h5 class="fw-bold pt-2">--}}
                    {{--                                    <a href="#">Five Clear Signs it’s Time to Sell Your Car</a>--}}
                    {{--                                </h5>--}}
                    {{--                                <p class="clr-light">by Tim O'Sullivan</p>--}}
                    {{--                                <p>From potential profit to suspect safety, here are five clear signs that indicate the time--}}
                    {{--                                    to sell your car might just have arrived [...]</p>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-6">--}}
                    {{--                                <img src="{{asset('frontend/images/sell_car/image1.jpeg')}}" alt="">--}}
                    {{--                                <h5 class="fw-bold pt-2">--}}
                    {{--                                    <a href="#">How To Sell a Car You Haven't Paid Off Yet</a>--}}
                    {{--                                </h5>--}}
                    {{--                                <p class="clr-light">by Matt Smith</p>--}}
                    {{--                                <p>It is possible to sell a car you owe money on. Here's how, along with the pros and cons--}}
                    {{--                                    of selling a car you haven't paid off yet.</p>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-6">--}}
                    {{--                                <img src="{{asset('frontend/images/sell_car/image6.jpeg')}}" alt="">--}}
                    {{--                                <h5 class="fw-bold pt-2">--}}
                    {{--                                    <a href="#">How To Sell Your Car with Motorvero</a>--}}
                    {{--                                </h5>--}}
                    {{--                                <p class="clr-light">by Matt Smith</p>--}}
                    {{--                                <p>Selling your car with Motorvero is easier than ever these days, whether you opt to sell--}}
                    {{--                                    privately or get a Motorvero instant cash of [...]</p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="col-12 text-center mb-4">
            <h1 class="fw-bold">FAQs</h1>
        </div>
        <div class="col-12 text-center mb-4">
            <a href="#"><u>See all</u></a> &nbsp;
            <a href="#"><u>Back to the top</u></a>
        </div>
        <div class="container-fluid px-md-5 px-sm-3 px-2">
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What states support
                                instant offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <ul class="states-support">
                                <li>Alabama</li>
                                <li>Arizona</li>
                                <li>Arkansas</li>
                                <li>California</li>
                                <li>Colorado</li>
                                <li>Connecticut</li>
                                <li>Delaware</li>
                                <li>District of Columbia</li>
                                <li>Florida</li>
                                <li>Georgia</li>
                                <li>Illinois</li>
                                <li>Indiana</li>
                                <li>Iowa</li>
                                <li>Louisiana</li>
                                <li>Maryland</li>
                                <li>Massachusetts</li>
                                <li>Michigan</li>
                                <li>Minnesota</li>
                                <li>Missouri</li>
                                <li>Nebraska</li>
                                <li>Nevada</li>
                                <li>New Jersey</li>
                                <li>New Mexico</li>
                                <li>New York</li>
                                <li>North Carolina</li>
                                <li>Ohio</li>
                                <li>Oklahoma</li>
                                <li>Oregon</li>
                                <li>Pennsylvania</li>
                                <li>Rhode Island</li>
                                <li>South Carolina</li>
                                <li>Tennessee</li>
                                <li>Texas</li>
                                <li>Utah</li>
                                <li>Virginia</li>
                                <li>Washington</li>
                                <li>Wisconsin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                How does the offer process work?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                First, you'll enter some basic details about your car, like the VIN or license plate number,
                                mileage, and condition. If everything checks out, we'll send you the best offer, sourced
                                from thousands of dealers. Once you accept, we'll have you upload a few documents and
                                schedule a pick-up time. On pick-up day, a driver will come get your car and you'll get
                                paid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                How do you determine my offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Our offer matrix tracks demand from dealers nationwide in real time. We use that offer
                                matrix to identify dealers interested in your car, and send you an offer from the dealer
                                that will pay you the most.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How long is my offer
                                valid for?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Your offer will be valid for seven days or after driving 250 additional miles (whichever
                                comes first).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What are my payment
                                options and when do I get paid?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                To get paid promptly, we recommend linking your bank account through our secure portal. This
                                will be the fastest, most hassle-free way to receive your funds. If your bank isn't
                                compatible with our system, we offer a check option, as well.

                                If a bank transfer is selected, payment will be received in one to three business days.

                                If you request a check, we'll likely deliver it on pickup day. Note: You'll have to wait for
                                the check to be activated before you can deposit it. We'll let you know when it's activated.
                                Additionally, many banks have deposit limits and may hold funds for several days before
                                depositing the funds into your account.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Will I always receive
                                an offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Some cars won't be eligible for an offer. Reasons include branded vehicle titles, extensive
                                damage, high mileage, old age, exotic or rare models, non-drivable condition, or no local
                                interest.

                                If your car falls into any of these categories and you're unable to get an offer, you can
                                still list your car privately with us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can you sell a car
                                without a title?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Among other things, a vehicle title shows proof of vehicle ownership, and if there are any
                                outstanding liens against the vehicle. That makes the title an important and necessary
                                document when selling a car. Rules around car titles vary by state, but—generally
                                speaking—if you’ve lost your vehicle’s title, it should be possible to obtain a replacement
                                by contacting your state’s Department of Motor Vehicles (DMV). Note, obtaining a new title
                                invalidates a car’s old title.

                                There are other reasons why you might not be in possession of your car’s title, such as if
                                the car still has a lien against it, or if it was bought from a previous owner that didn’t
                                have the title. Our guide to how to sell a car without a title explains what to do in these
                                scenarios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can you sell a car
                                with a lien?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                It is possible to sell a car that you haven’t finished financing, but only if you can settle
                                the outstanding auto loan with the lender, who in turn will then release the car’s title
                                (assuming they hold it—this varies by state). Note, the amount owed is unlikely to be as
                                simple as multiplying your monthly payment by the number of months left to run on the loan.
                                Instead, you’ll need to contact your lending institution to establish your payoff amount and
                                arrange to settle that figure before you can sell your car. Alternatively, if you trade in
                                your car, the dealer will guide you through the process of settling the loan as part of the
                                purchase of your next vehicle. For more information, see our guide:<a href="#"><u>How toTrade in Car That Isn’t Paid Off.</u></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Do you pay taxes when
                                you sell a car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                The rules and laws on what taxes you pay when selling your car to a private party vary by
                                state (and in some cases even by city). The most important thing to know is that you only
                                pay tax on any profit made from the car sale. If you sell a car for less than you paid for,
                                it there’s no sales tax to pay. However, if you sell your car for more money than you paid
                                for it, the Internal Revenue Services (IRS) considers that a capital gain, and you’ll need
                                to report it when you file your federal and state income taxes. Only after that will you
                                know if you owe any taxes. For more information, read out full guide:<a
                                        href="#"><u>Understanding Taxes When Buying a Selling a Car</u></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Does selling a
                                financed car hurt your credit?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>If you’re worried that selling a financed car might hurt your credit the important point to
                                consider is whether you can settle your debt as agreed with the lender. Contact your lender
                                and ask for your payoff balance, which is a figure based on the remainder of the loan
                                payments plus accompanying interest and fees. If you can sell your car and settle the payoff
                                loan with the lender, then it won’t hurt your credit. If you sell your car but still can’t
                                meet the payoff balance, there are other options open to you, such as refinancing the
                                remaining balance to make payments smaller. Doing this shouldn’t hurt your credit because
                                you’ll still be paying the loan back in full.

                                Alternative routes that will harm your credit include paying a settlement balance, voluntary
                                surrender of the vehicle or repossession of the vehicle. If you’re struggling to pay back
                                your car loan, it’s important to speak to the lender to see what options might be available
                                to you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can I still get an offer if I haven't paid off my car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Yes. If your offer is greater than the amount you owe on your car loan, we'll pay off your loan and send you the difference. If your offer is less than the amount you owe, you'll need to (a) pay off your loan before we can pay you, or (b) pay us the difference before we can pay your lender.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
        var appUrl = "{{ config('app.url') }}";
        var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        $('input[name="sell-car"]').change(function() {
            if ($('#license-plate').is(':checked')) {
                $('.license-plate').css('display', 'flex')
                $('.vin').css('display', 'none')
            } else if ($('#vin').is(':checked')) {
                $('.license-plate').css('display', 'none')
                $('.vin').css('display', 'block')
            }
        });

        function checkMedia(x) {
            // if (x.matches) {
            $(".dropdown_menu2").on('click', function() {
                $(this).parents('.parent_dropdown2').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
                $(this).parents('.parent_dropdown2').siblings().find(".showaccordion").removeClass('showaccordion')
                    .slideToggle();
                $(this).parents('.parent_dropdown2').find(".dropdown_menu2").toggleClass('active');
                $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
            });

        }
        checkMedia('')
        $('#checkValidation').on('click',function (){
            let checkTab = $('#license-plate').prop('checked');
            let data = [];
            if(checkTab){
                let licenseNo = $('#license_no').val();
                let state = $('#state').val();
                data = {
                    'type':'license',
                    'license_plate_no':licenseNo,
                    'state':state
                };
            }else{
                let vinNum = $("#vin_number").val();
                data = {
                    'type':'vin',
                    'vin_number':vinNum,
                };
            }
            $.ajax({
                url: 'validation-plate',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                dataType: 'json',
                data:data,
                success: function(response) {
                    if((response.code)){
                        $('#errorMessage').html(response.message);
                    }else{
                        $('#errorMessage').html('');
                        var redirectUrl = appUrl+response.redirect_url;
                        window.location.href =redirectUrl;
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error here
                    console.log('Error:', error);
                }
            });


        });
    </script>
@endsection
