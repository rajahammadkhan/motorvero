@include('frontend/layouts/header')

<style>
    span.custom-accordion-icon {
        float: right;
        display:none;
    }
    @media (max-width: 767px){
        .row.dealers-price {

            width: 100%;
            margin: auto;
        }
        .row.dealers-price p {
            background: #e7e7e747;
            border: 1px solid #fff;
            margin-bottom: 1px;
        }
        .custom-accordion-box{
            display:none;
            margin-bottom: 10px;
        }
        .heading-m.custom-accordion {
            background: #e7e7e7;
            padding: 5px 15px;
            font-size: 20px !important;
            border-radius: 5px;
            /*margin-block:10px !important;*/
        }
        span.custom-accordion-icon {
            display:block;
        }
    }


    .fadeslider-nav .slick-slide {
        height: 60px;
    }

    .fadeslider-nav .slick-slide img {
        height: 100%;
        object-fit: cover;
        width: 100%;
        padding: 5px;
    }

    .fadeslider .slick-slide {
        height: 375px;
    }

    .fadeslider .slick-slide img {
        height: 100%;
        object-fit: contain;
    }

    .accordion-button:not(.collapsed)::after {
        display: none;
    }

    .accordion-button-css {
        background: none;
        border: 0;
        padding: 5px 20px;
    }

    .accordion-button-css.accordion-button:focus {
        box-shadow: none;
    }

    .accordion-button-css.accordion-button:not(.collapsed) {
        background: transparent;
    }

    .accordion-button-css.accordion-button::after {
        display: none
    }

    .select-rating {
        color: #ffb100;
    }

    .chat-window{
        z-index: 1;
    }

    /* .accordion-border.accordion-button-css{
        --bs-accordion-border-color: transparent;
    } */

</style>
<section class="content">
    @include('frontend/layouts/error')
    @yield('content')
    {{--    <body>--}}
    {{--    @dd($maxRating)--}}
    {{--    <?php--}}
    {{--    if (count($one_star) === $maxRating) {--}}
    {{--    echo "Rating 1 has the maximum value of " . $maxRating;--}}
    {{--    } elseif (count($two_star) === $maxRating) {--}}
    {{--    echo "Rating 2 has the maximum value of " . $maxRating;--}}
    {{--    } elseif (count($three_star) === $maxRating) {--}}
    {{--    echo "Rating 3 has the maximum value of " . $maxRating;--}}
    {{--    } elseif (count($four_star) === $maxRating) {--}}
    {{--    echo "Rating 4 has the maximum value of " . $maxRating;--}}
    {{--    } elseif (count($five_star) === $maxRating) {--}}
    {{--    echo "Rating 5 has the maximum value of " . $maxRating;--}}
    {{--    }--}}
    {{--    ?>--}}

    <div class="container dd">
        <div class="row">
            <p class="heading text-center my-4">{{$car->title}}- <span>$</span><span class="vehicle-price"> {{$car->dollar_price}}</span></p>
            <div class="col-12 d-md-flex d-none justify-content-around ">
                <a href="tel:{{$car->contact_no ?? ''}}" class="py-2 col-4 back-light text-center rounded-4">
                    <p class="clr-dark fs-6 mb-2">
                        Phone
                    </p>
                    <svg aria-hidden="true" width="20px" height="20px" focusable="false" data-prefix="fas"
                         data-icon="mobile-alt" class="svg-inline--fa fa-mobile-alt fa-w-10 _2wJQsw" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="#707070"
                              d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                        </path>
                    </svg>
                </a>
                <a href="mailto:{{$car->email ?? ''}}" class="py-2 col-4 back-light text-center rounded-4">
                    <p class="clr-dark fs-6 mb-2">
                        Email
                    </p>
                    <svg aria-hidden="true" width="20px" height="20px" focusable="false" data-prefix="fal"
                         data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16 _2wJQsw" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#707070"
                              d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z">
                        </path>
                    </svg>
                </a>


            </div>
        </div>

        <div class="row">
            <div class="col-md-6 my-md-5">
                <div class="rounded-4 back-light">
                    <div class="fadeslider" id="fadeslider">
                        @if(isset($media))
                            @foreach($media as $medias)
                                <div>
                                    <img src="{{asset('images/media/'.'/'.$medias->image)}}" class="w-100 p-3" alt="">
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="fadeslider-nav">

                        @if(isset($media))
                            @foreach($media as $medias)
                                <div><img src="{{asset('images/media'.'/'.$medias->image)}}" class=" " alt=""></div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class=" row my-3">
                    <div class="col-4 shoptime">
                        @if($car->User->image != null)
                            <img src="{{asset('images/media/profile'.'/'.$car->User->image)}}" alt="">
                        @else
                            <img src="{{asset('images/logo.jpeg')}}" alt="">
                        @endif
                    </div>
                    <div class="col-8  clr-primary">
                        <div>

                            <div class="" id="accordionExample">
                                <div class="accordion-item accordion-border">
                                    <h2 class="accordion-header">
                                        <button class="p-1 accordion-button accordion-button-css " type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                             <span class="shoptime"><b>
                                            <svg aria-hidden="true" width="18px" height="18px" focusable="false" data-prefix="far"
                                                 data-icon="clock" class=" svg-inline--fa fa-clock fa-w-16 fa-fw " role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                      d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z">
                                </path>
                            </svg>

              @if(date('l') == 'Monday')
                                                         Today {{$car->User->monday_opening_hour != null ? date('h:i A', strtotime($car->User->monday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->monday_closing_hour != null ? date('h:i A', strtotime($car->User->monday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Tuesday')
                                                         Today {{$car->User->tuesday_opening_hour != null ? date('h:i A', strtotime($car->User->tuesday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->tuesday_closing_hour != null ? date('h:i A', strtotime($car->User->tuesday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Wednesday')
                                                         Today {{$car->User->wednesday_opening_hour != null ? date('h:i A', strtotime($car->User->wednesday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->wednesday_closing_hour != null ? date('h:i A', strtotime($car->User->wednesday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Thursday')
                                                         Today {{$car->User->thursday_opening_hour != null ? date('h:i A', strtotime($car->User->thursday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->thursday_closing_hour != null ? date('h:i A', strtotime($car->User->thursday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Friday')
                                                         Today {{$car->User->friday_opening_hour != null ? date('h:i A', strtotime($car->User->friday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->friday_closing_hour != null ? date('h:i A', strtotime($car->User->friday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Saturday')
                                                         Today {{$car->User->saturday_opening_hour != null ? date('h:i A', strtotime($car->User->saturday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->saturday_closing_hour != null ? date('h:i A', strtotime($car->User->saturday_closing_hour)) : 'Closed' }}
                                                     @elseif(date('l') == 'Sunday')
                                                         Today {{$car->User->sunday_opening_hour != null ? date('h:i A', strtotime($car->User->sunday_opening_hour)) : 'Closed' }}
                                                         - {{$car->User->sunday_closing_hour != null ? date('h:i A', strtotime($car->User->sunday_closing_hour)) : 'Closed' }}
                                                     @endif
          </b></span>
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse "
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            @if($car->User->monday_opening_hour != null && $car->User->monday_closing_hour != null)
                                                <span class="shoptime"><b>Monday {{date('h:i A', strtotime($car->User->monday_opening_hour))}} - {{date('h:i A', strtotime($car->User->monday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Monday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->tuesday_opening_hour != null && $car->User->tuesday_closing_hour != null)
                                                <span class="shoptime"><b>Tuesday {{date('h:i A', strtotime($car->User->tuesday_opening_hour))}} - {{date('h:i A', strtotime($car->User->tuesday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Tuesday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->wednesday_opening_hour != null && $car->User->wednesday_closing_hour != null)
                                                <span class="shoptime"><b>Wednesday {{date('h:i A', strtotime($car->User->wednesday_opening_hour))}} - {{date('h:i A', strtotime($car->User->wednesday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Wednesday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->thursday_opening_hour != null && $car->User->thursday_closing_hour != null)
                                                <span class="shoptime"><b>Thursday {{date('h:i A', strtotime($car->User->thursday_opening_hour))}} - {{date('h:i A', strtotime($car->User->thursday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Thursday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->friday_opening_hour != null && $car->User->friday_closing_hour != null)
                                                <span class="shoptime"><b>Friday {{date('h:i A', strtotime($car->User->friday_opening_hour))}} - {{date('h:i A', strtotime($car->User->friday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Friday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->saturday_opening_hour != null && $car->User->saturday_closing_hour != null)
                                                <span class="shoptime"><b>Saturday {{date('h:i A', strtotime($car->User->saturday_opening_hour))}} - {{date('h:i A', strtotime($car->User->saturday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Saturday Closed</b></span>
                                                <br>
                                            @endif
                                            @if($car->User->sunday_opening_hour != null && $car->User->sunday_closing_hour != null)
                                                <span class="shoptime"><b>Sunday {{date('h:i A', strtotime($car->User->sunday_opening_hour))}} - {{date('h:i A', strtotime($car->User->sunday_closing_hour))}}</b></span>
                                                <br>
                                            @else
                                                <span class="shoptime"><b>Sunday Closed</b></span>
                                                <br>
                                            @endif
                                            {{--                                            <span class="shoptime"><b>Tuesday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                            {{--                                            <br>--}}
                                            {{--                                            <span class="shoptime"><b>Wednesday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                            {{--                                            <br>--}}
                                            {{--                                            <span class="shoptime"><b>Thursday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                            {{--                                            <br>--}}
                                            {{--                                            <span class="shoptime"><b>Friday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                            {{--                                            <br>--}}
                                            {{--                                            <span class="shoptime"><b>Saturday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                            {{--                                            <br>--}}
                                            {{--                                            <span class="shoptime"><b>Sunday {{$car->User->monday_opening_hour}} AM - {{$car->User->monday_opening_hour}} PM (Closed Now)</b></span>--}}
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div>
                            <svg aria-hidden="true" focusable="false" width="18px" height="18px" data-prefix="fas"
                                 data-icon="mobile-alt" class="svg-inline--fa fa-mobile-alt fa-w-10 fa-fw " role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                      d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                                </path>
                            </svg>
                            <a href="tel:{{$car->User->phone_number ?? ''}}"
                               class="clr-primary fs-6">{{$car->User->phone_number ?? ''}}</a>
                        </div>
                        <div>
                            <svg aria-hidden="true" focusable="false" width="18px" height="18px" data-prefix="fas"
                                 data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-fw "
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor"
                                      d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                </path>
                            </svg>
                            <a href="{{$car->User->website_link ?? ''}}" class="clr-primary fs-6"> Website</a>
                        </div>
                        <div>
                            <svg aria-hidden="true" focusable="false" width="18px" height="18px" data-prefix="fas"
                                 data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-fw "
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor"
                                      d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                </path>
                            </svg>
                            <a href="{{$car->User->map_link ?? ''}}" target="_blank" class="clr-primary fs-6"> Map & Directions</a>
                        </div>
                        <div>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" width="18px" height="18px"
                                 data-icon="search" class="svg-inline--fa fa-search fa-w-16 fa-fw " role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                      d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z">
                                </path>
                            </svg>
                            <a href="{{url('listing/')."?dealer=".$car->User->id}}" class="clr-primary fs-6">View
                                Inventory</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="heading-m">Vehicle <span>Details</span></p>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/mileage.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->mile_age ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/owner.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->owner ?? ''}} owner</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/electric.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->transmission ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/four.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->vehicle_type ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/other.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->fuel_type ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/battery.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->engine_capacity ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/speedometer.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->mile_age ?? ''}}</p>
                    </div>
                    <div class="col-3 mx-auto text-center">
                        <img src="{{asset('frontend/images/icon/intrior.svg')}}" class="w-50" alt="">
                        <p class="small lh-1">{{$car->internal_color ?? ''}}</p>
                    </div>
                </div>
                <div class="row d-md-none d-flex mb-3">
                    <div class="col-md-12">
                        <a href="tel:{{$car->contact_no ?? ''}}" class="btn mt-3 back-primary text-white w-100 py-2 ">
                            Call  ({{$car->contact_no ?? ''}})
                        </a>
                        <a href="mailto:{{$car->email ?? ''}}" class="btn mt-3 back-primary text-white w-100 py-2">
                            Email {{$car->email ?? ''}}
                        </a>

                        <button class="btn mt-3 back-primary text-white w-100 py-2 togglebutton">
                            Request Information
                        </button>
                        <form id="productform " class="togglebox" style="display:none;">
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <input type="hidden" name="car_name" value="{{$car->title}}">
                            <div class="row my-2 w-100 mx-auto">
                                <div class="back-light py-3 border rounded-2 ">
                                    <div class="pb-3 d-flex justify-content-between">
                                        <p class="heading-m my-auto">Contact <span>Dealer</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-0">Hello, my name is
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6"><input name="first_name" aria-label="First name"
                                                                         autocomplete="given-name"
                                                                         class="d-inline-block form-control w-100 py-1"
                                                                         maxlength="50" placeholder="First name" id="FirstName"
                                                                         type="text" data-cg-ft="lead-form-first-name" value=""></div>
                                            <div class="col-md-6"><input name="last_name" aria-label="Last name" autocomplete="family-name"
                                                                         class="d-inline-block form-control w-100 py-1" id="LastName" maxlength="50"
                                                                         placeholder="Last name" type="text" data-cg-ft="lead-form-last-name"
                                                                         value=""></div></div>
                                        <p class="mb-0">and</p>
                                        <div class="col-12"><select name="about_car" class="d-inline-block form-control  py-1" id="like"
                                                                    data-cg-ft="lead-form-inquiry">
                                                <option value="I'd like to know your best price for this">I'd like to
                                                    know your best price for this
                                                </option>
                                                <option value="I'd like to test drive this">I'd like to test drive
                                                    this
                                                </option>
                                                <option value="I'm interested in this">I'm interested in this</option>
                                                <option value="I'd like a history report for this vehicle">I'd like a
                                                    history report for this vehicle
                                                </option>
                                                <option value="Will like to make payment via crypto currency and get 18% discount.">
                                                    Will like to make payment via crypto currency and get 18% discount.
                                                </option>
                                            </select></div>
                                        <div class="col-12"><strong id="CarName">{{$car->title}}</strong>. I'm in
                                            the area. <input name="zip" aria-label="ZIP" autocomplete="postal-code"
                                                             class="d-inline-block form-control w-auto py-1" maxlength="7"
                                                             placeholder="ZIP" size="7" type="text" data-cg-ft="lead-form-postal-code"
                                                             value=""></div>
                                        <p class="mb-0">You can reach me by email at</p>
                                        <div class="col-12"><input name="email" aria-label="Email Address"
                                                                   autocapitalize="none" autocomplete="email"
                                                                   autocorrect="off"
                                                                   class="d-inline-block form-control w-100 py-1"
                                                                   maxlength="200" placeholder="Email Address"
                                                                   id="EmailAddress" type="email"
                                                                   data-cg-ft="lead-form-email" value=""></div>
                                        <p class="mb-0">or by phone at</p>
                                        <div class="col-12"><input name="phone" aria-label="Phone Number" autocomplete="tel"
                                                                   class="d-inline-block form-control w-100 py-1" maxlength="16"
                                                                   placeholder="123-456-7890 (optional)" type="tel"
                                                                   id="ContactNo" data-cg-ft="lead-form-phone" value=""></div>
                                        <p class="mb-0">Thank
                                            you!</p>

                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-end">
                                            <button class="clr-primary bg-transparent border-0" id="btnComment" type="button">
                                                <svg width="25" height="25" aria-hidden="true" focusable="false"
                                                     data-prefix="fas" data-icon="plus"
                                                     class="svg-inline--fa fa-plus fa-w-14 okoSXx" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                          d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                    </path>
                                                </svg>
                                                add comments
                                            </button>
                                        </div>
                                        <textarea name="comments" id="" cols="30" rows="6" class="border-0 w-100"></textarea>
                                        <label class="d-flex"><input name="email_me" class="_5JMLd3 " type="checkbox" value="1"
                                                                     checked="">
                                            <p class="mb-0 ps-2">
                                                Email
                                                me
                                                new listings for my search
                                            </p>
                                        </label>
                                        <button class="btn mt-3 back-primary text-white w-100 py-2 btnsave">Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class=" border rounded-4 pt-4 px-2 my-3 d-md-block d-none">
                    <div class="row justify-content-around">
                        <p class="heading-m">Finance In <span> Advance </span></p>
                        <div class="col-3 p-0 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 96 74" width="52">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m70.212766 0h-63.82978728c-3.52393617 0-6.38297872 2.85904255-6.38297872 6.38297872v46.80851068c0 3.5239361 2.85904255 6.3829787 6.38297872 6.3829787h63.82978728c3.5239361 0 6.3829787-2.8590426 6.3829787-6.3829787v-46.80851068c0-3.52393617-2.8590426-6.38297872-6.3829787-6.38297872zm2.1276595 53.1914894c0 1.1702127-.9574468 2.1276595-2.1276595 2.1276595h-63.82978728c-1.17021276 0-2.12765957-.9574468-2.12765957-2.1276595v-46.80851068c0-1.17021276.95744681-2.12765957 2.12765957-2.12765957h63.82978728c1.1702127 0 2.1276595.95744681 2.1276595 2.12765957zm-46.8085106-9.0425532v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-9.5744681c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h9.5744681c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm25.5319149 0v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-18.0851064c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h18.0851064c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm13.8297872-35.6382979h-10.6382979c-1.768617 0-3.1914893 1.42287234-3.1914893 3.1914894v6.3829787c0 1.768617 1.4228723 3.1914893 3.1914893 3.1914893h10.6382979c1.768617 0 3.1914894-1.4228723 3.1914894-3.1914893v-6.3829787c0-1.76861706-1.4228724-3.1914894-3.1914894-3.1914894zm-1.0638298 8.5106383h-8.5106383v-4.2553192h8.5106383zm-29.2553191 21.2765957h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446zm3.7234042-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446zm-25.5319149 0v-5.319149c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446zm51.0638298-5.319149v5.319149c0 .8776595-.7180851 1.5957446-1.5957446 1.5957446h-9.5744681c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h9.5744681c.8776595 0 1.5957446.7180851 1.5957446 1.5957447z"
                                          fill="#00a0dd" fill-rule="nonzero" transform="translate(0 14.425532)">
                                    </path>
                                    <g transform="translate(54.106383)">
                                        <path d="m27.5872936 8.59459619 3.7928308 1.90455891 1.8960249 3.8083347c.211671.4244243.6442674.6925102 1.1174677.6925102.4732004 0 .9057967-.2680859 1.1174678-.6925102l1.8960249-3.8083347 3.7928307-1.90455891c.4249399-.21164659.6936766-.64640393.6936766-1.12221749 0-.47581355-.2687367-.91057089-.6936766-1.12221748l-3.7928307-1.90455891-1.8960249-3.8083347c-.4240287-.84969015-1.8109069-.84969015-2.2349355 0l-1.8960249 3.8083347-3.7928308 1.90455891c-.4249399.21164659-.6936766.64640393-.6936766 1.12221748 0 .47581356.2687367.9105709.6936766 1.12221749zm5.2629042-2.07630351c.2449373-.12287123.4436739-.32133858.5667118-.56594399l.9767074-1.95234869.9767074 1.95551039c.1235853.24342877.3222643.44073008.5667119.56278229l1.9565807.97854562-1.9565807.98170732c-.2446049.12333045-.4432141.32167057-.5667119.56594399l-.9767074 1.95551039-.9767074-1.95234869c-.1234977-.24427342-.322107-.44261355-.5667118-.56594399l-1.9565808-.98170732zm4.5565958 23.92795502-1.8958261-3.8083844c-.4239841-.8504844-1.8107168-.8504844-2.234701 0l-1.895826 3.8083844-3.7924329 1.9038006c-.4253272.2114907-.6943906.6464865-.6943906 1.1226237 0 .4761373.2690634.911133.6943906 1.1226237l3.7924329 1.9038007 1.895826 3.8083844c.2116488.4244298.6441998.6925192 1.1173505.6925192.4731508 0 .9057017-.2680894 1.1173505-.6925192l1.8958261-3.8083844 3.7924328-1.9038007c.4253272-.2114907.6943906-.6464864.6943906-1.1226237 0-.4761372-.2690634-.911133-.6943906-1.1226237zm-1.4697573 4.0315075c-.2448264.1233983-.443488.3220677-.5667119.5667344l-.9767074 1.9555104-.9767074-1.9555104c-.1232239-.2446667-.3218854-.4433361-.5667118-.5667344l-1.9565808-.9777552 1.9565808-.9785456c.2448264-.1233983.4434879-.3220678.5667118-.5667344l.9767074-1.95472.9767074 1.95472c.1232239.2446666.3218855.4433361.5667119.5667344l1.9565807.9785456zm-4.0434193-14.0059403c-.0004743-.4896463-.2764504-.9373006-.7135471-1.1574279l-9.0864254-4.5481345-4.5428091-9.10838435c-.4382987-.87715753-1.8718504-.87715753-2.3101492 0l-4.5428091 9.10838435-9.08642539 4.5481345c-.43968713.2181236-.71783469.6667618-.71783469 1.1578318s.27814756.9397082.71783469 1.1578318l9.08642539 4.5521729 4.5428091 9.1035383c.2187945.4377409.6659493.7142382 1.1550746.7142382s.9362801-.2764973 1.1550746-.7142382l4.5428091-9.1035383 9.0864254-4.5505575c.4374794-.2209513.7135471-.6694917.7135471-1.1598511z"
                                              fill="#527d89" fill-rule="nonzero"></path>
                                        <path d="m19.8188651 24.2020076c-.198627.1162427-.3597884.3040033-.4595635.5354129l-2.8459564 6.6425595-2.8459564-6.6425595c-.0997751-.2314096-.2609365-.4191702-.4595635-.5354129l-5.6944801-3.3224015 5.6944801-3.3216536c.1983574-.1166771.3594155-.3043174.4595635-.5354129l2.8459564-6.6425596 2.8459564 6.6425596c.100148.2310955.2612061.4187358.4595635.5354129l5.6944801 3.3216536z"
                                              fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                            <p class="fs-sm mb-0 text-dark small">
                                No impact on your credit score
                            </p>
                        </div>
                        <div class="col-3 p-0 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 92 70" width="52">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m53.7714844 19.3183594 2.3925781-2.3925782c.6425781-.6425781.6425781-1.6816406 0-2.3242187l-.7792969-.7792969c-.6425781-.6425781-1.6816406-.6425781-2.3242187 0l-2.3925781 2.3925782c-4.8945313-4.2382813-11.1425782-6.95898442-18.0058594-7.4101563v-4.4296875h3.4179687c.9023438 0 1.640625-.73828125 1.640625-1.640625v-1.09375c0-.90234375-.7382812-1.640625-1.640625-1.640625h-10.9375c-.9023437 0-1.640625.73828125-1.640625 1.640625v1.09375c0 .90234375.7382813 1.640625 1.640625 1.640625h3.1445313v4.45703125c-15.8183594 1.18945315-28.2871094 14.41015625-28.2871094 30.54296875 0 16.9121094 13.7128906 30.625 30.625 30.625s30.625-13.7128906 30.625-30.625c0-7.6699219-2.8164062-14.6835938-7.4785156-20.0566406zm-23.1464844 46.3066406c-14.5058594 0-26.25-11.7441406-26.25-26.25s11.7441406-26.25 26.25-26.25 26.25 11.7441406 26.25 26.25-11.7441406 26.25-26.25 26.25zm.546875-17.5h-1.09375c-.9023438 0-1.640625-.7382812-1.640625-1.640625v-22.96875c0-.9023438.7382812-1.640625 1.640625-1.640625h1.09375c.9023438 0 1.640625.7382812 1.640625 1.640625v22.96875c0 .9023438-.7382812 1.640625-1.640625 1.640625z"
                                          fill="#00a0dd" fill-rule="nonzero" transform="translate(30)"></path>
                                    <g stroke-linecap="round">
                                        <g stroke="#fff" stroke-width="6.125">
                                            <path d="m9.4375 42.4375h32.375"></path>
                                            <path d="m13.8125 32.8125h32.375"></path>
                                            <path d="m13.8125 23.1875h32.375"></path>
                                        </g>
                                        <g stroke="#527d89" stroke-width="3.5">
                                            <path d="m9.472039 23.1875h34.930922"></path>
                                            <path d="m2.4375 42.4375h32.375"></path>
                                            <path d="m12.016447 32.8125h28.967106"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="fs-sm mb-0 text-dark small"> No impact on your credit score</p>
                        </div>
                        <div class="col-3 p-0 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 79 70" width="52">
                                <g fill="none">
                                    <path d="m10.9375 48.125h-8.75c-1.20859375 0-2.1875.9789063-2.1875 2.1875v17.5c0 1.2085937.97890625 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789063 2.1875-2.1875v-17.5c0-1.2085937-.9789062-2.1875-2.1875-2.1875zm-2.1875 17.5h-4.375v-13.125h4.375zm67.8125-39.375h-8.75c-1.2085937 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789063 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789062-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm-5.6369141-53.5007812c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm-17.5 0h-8.75c-1.2085938 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789062 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789063-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm24.0625-21.875h-8.75c-1.2085937 0-2.1875.9789063-2.1875 2.1875v21.875c0 1.2085937.9789063 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789063 2.1875-2.1875v-21.875c0-1.2085937-.9789063-2.1875-2.1875-2.1875zm-2.1875 21.875h-4.375v-17.5h4.375z"
                                          fill="#00a0dd"></path>
                                    <path d="m68.7380859 12.1242188c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875z"
                                          fill="#527d89"></path>
                                </g>
                            </svg>
                            <p class="fs-sm mb-0 text-dark small"> No impact on your credit score</p>
                        </div>
                        <button data-bs-toggle="modal" data-bs-target="#financing"
                                class="btn back-primary my-4 text-white py-2 w-auto mx-auto fs-6">View financing
                            options
                        </button>
                    </div>

                </div>
                <div class="row my-md-3">
                    <div class="col-12">
                        <p class="heading-m custom-accordion">Dealer's <span>Price</span>
                            <span class="custom-accordion-icon">+</span>
                        </p>
               <div class="custom-accordion-box">
                        <div class="row dealers-price ">
                            <p class="col-6 fw-bold">Location:</p>
                            <p class="col-6">{{$car->location ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Mileage:</p>
                            <p class="col-6">{{$car->mile_age ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Transmission:</p>
                            <p class="col-6">{{$car->transmission ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Exterior Color:</p>
                            <p class="col-6">{{$car->external_color ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Interior Color:</p>
                            <p class="col-6">{{$car->internal_color ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Gas Mileage:</p>
                            <p class="col-6">{{$car->mile_age ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Engine:</p>
                            <p class="col-6">{{$car->engine_capacity ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Drivetrain:</p>
                            <p class="col-6">{{$car->vehicle_type ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Fuel Type:</p>
                            <p class="col-6">{{$car->fuel_type ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">VIN:</p>
                            <p class="col-6">{{$car->VIN ?? ''}}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Major Options:</p>
                            <p class="col-6">{!! $car->details ?? '' !!}</p>
                        </div>
                        <div class="row dealers-price">
                            <p class="col-6 fw-bold">Certified:</p>
                            <p class="col-6">{{$car->certified ? 'yes' : ''}}</p>
                        </div>
               </div>
                    </div>
                </div>

                <p class="heading-m custom-accordion my-md-3">Negotiation
                    <span class="custom-accordion-icon">+</span>
                </p>

                <div class="row my-md-3 custom-accordion-box">
                    <div class="col-md-6 d-flex ">
                        <div>
                            <svg class="_3jNtsN" xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                 viewBox="0 0 100 100">
                                <circle class="wj4Qbu" cx="50" cy="50" r="46" fill="#5093ce"></circle>
                                <g>
                                    <path fill="white"
                                          d="M46.966,25.731H49.3l.583.466a63.512,63.512,0,0,1,9.334,9.452q9.451,11.667,9.451,21.818,0,7.236-3.617,11.318Q60.965,73.334,52.1,74.036a.346.346,0,0,1-.233.116h-.234c-.778.077-1.324.117-1.633.117H48.716q-8.749,0-13.418-5.134a15.841,15.841,0,0,1-3.966-10.968q0-9.1,7.467-19.251.815-1.284,2.566-3.5t2.567-3.384q.816-1.164,1.634-2.567a9.572,9.572,0,0,0,1.05-2.333Zm2.1,4.667a19.3,19.3,0,0,1-1.517,2.684q-.934,1.4-1.633,2.392t-2.1,2.917q-1.4,1.925-1.984,2.741-6.768,9.219-6.767,17.035a12.115,12.115,0,0,0,3.033,8.4q.584.585,1.518,1.4a4.967,4.967,0,0,1-.351-1.168Q37.4,60.036,42.883,52.567l1.749-2.334,1.4,2.567A5.071,5.071,0,0,0,48.6,55.6a1.344,1.344,0,0,0,1.283-.583,6.762,6.762,0,0,0,1.225-4.083A27.413,27.413,0,0,0,50,43l-.7-2.334h3.733l.467.7a25.415,25.415,0,0,1,3.617,6.3,45.726,45.726,0,0,1,3.617,10.5Q61.9,64,60.617,67.735a15.412,15.412,0,0,0,1.634-1.4q2.682-3.033,2.684-8.868,0-8.751-8.635-19.368A58.242,58.242,0,0,0,49.066,30.4Zm5.718,21.935A10.331,10.331,0,0,1,52.8,57.467,4.868,4.868,0,0,1,47.433,59.1a7.341,7.341,0,0,1-2.8-1.867q-2.685,5.25-1.866,8.634,1.283,4.436,6.767,4.667H50q.7,0,1.867-.116a4.976,4.976,0,0,1,.816-.117,5.4,5.4,0,0,0,4.084-3.034q1.4-2.8.234-8.284A45.507,45.507,0,0,0,54.784,52.333Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="ps-2">
                            <p class="fw-bold mb-0">Selling slowly
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" width="15px" height="15px"
                                     data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16 " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z">
                                    </path>
                                </svg>
                            </p>
                            {{--                            <p class="small mb-0"><span class="fw-bold "> 0 days </span> at this dealership</p>--}}
                            <p class="small mb-0"><span class="fw-bold "> {{$diff ?? ''}} days </span> on MotorVero</p>
                            @if(count($saved)>0)
                                <p class="small mb-0"><span class="fw-bold "> {{count($saved)}} </span> saves
                            @else
                                <p class="small mb-0"><span class="fw-bold "> 0 </span> saves
                                    @endif
                                    <svg aria-hidden="true" width="12px" height="12px" focusable="false"
                                         data-prefix="fas"
                                         data-icon="heart" class="svg-inline--fa fa-heart my-auto ms-1 mb-1 fa-w-16 "
                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="#5093ce"
                                              d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                        </path>
                                    </svg>
                                </p>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex">
                        <div>
                            <svg class="_3jNtsN" xmlns="http://www.w3.org/2000/svg" width="45" height="45"
                                 fill="#5093ce" viewBox="0 0 100 100">
                                <circle class="wj4Qbu" cx="50" cy="50" r="46"></circle>
                                <g class="_3fWtHD" fill="white">
                                    <path d="M67.358,67.358a4.339,4.339,0,0,1-4.339-4.339V36.981a4.34,4.34,0,0,1,8.679,0V63.019A4.339,4.339,0,0,1,67.358,67.358Z">
                                    </path>
                                    <path class="RJAfV9" d="M54.34,36.981a4.34,4.34,0,1,0-8.68,0V49h8.68Z"></path>
                                    <path class="line-full"
                                          d="M50,40.641a4.34,4.34,0,0,0-4.34,4.34V63.019a4.34,4.34,0,0,0,8.68,0V44.981A4.34,4.34,0,0,0,50,40.641Z">
                                    </path>
                                    <path class="RJAfV9" d="M36.981,36.981a4.34,4.34,0,1,0-8.679,0V54h8.679Z">
                                    </path>
                                    <path d="M32.641,49.641a4.34,4.34,0,0,0-4.339,4.34v9.038a4.34,4.34,0,0,0,8.679,0V53.981A4.34,4.34,0,0,0,32.641,49.641Z">
                                    </path>
                                </g>
                            </svg>

                        </div>
                        <div class="ps-2">
                            <p class="fw-bold mb-0">Selling slowly
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" width="15px" height="15px"
                                     data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16 " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z">
                                    </path>
                                </svg>
                            </p>
                            <p class="small mb-0"><span
                                        class=" "> Price dropped by ${{min(json_decode($car->prices,true))-max(json_decode($car->prices,true)) ?? ''}}</span>
                            </p>

                        </div>

                    </div>
                    <div class="col-3">

                        <div class="negotiation">

                            <p class="d-flex">
                                <smaller class=" ">original</smaller>
                            </p>
                            <p>${{$car->original_price ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="negotiation">
                            <p class="d-flex"><span class="clr-low">&#8226;</span>
                                <smaller class=" ">low</smaller>
                            </p>
                            <p>${{min(json_decode($car->prices,true)) ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="negotiation">
                            <p class="d-flex"><span class="clr-high">&#8226;</span>
                                <smaller class=" ">high</smaller>
                            </p>
                            <p>${{max(json_decode($car->prices,true)) ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="negotiation">
                            <p class="d-flex">
                                <smaller class=" ">current</smaller>
                            </p>
                            <p>${{$car->dollar_price ?? ''}}</p>
                        </div>
                    </div>
                    <div class="mt-3 px-2">
                        <button class="btn border col-md-5 col-sm-6">Show Price History</button>
                    </div>
                    <p class="pt-3">Price History comprises prices posted on MotorVero for this vehicle. Price may
                        exclude certain taxes, fees, and/or charges. See seller for details.</p>
                    <hr>
                </div>
                <div class="row my-md-3">
                    <div class="col-md-12">
                        <p class="heading-m custom-accordion">Vehicle <span> History </span>
                            <span class="custom-accordion-icon">+</span>
                        </p>

                        <div class="row custom-accordion-box">
                            <div class="col-lg-6 d-flex my-2">
                                <div>
                                    <div class="circle-svg">
                                        <svg aria-hidden="true" focusable="false" width="45" height="45" data-prefix="fal"
                                             data-icon="check-circle"
                                             class="svg-inline--fa fa-check-circle fa-w-16 Gzg7Yj _5fqf2p" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="white"
                                                  d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ps-2 my-auto">
                                    <p class="fw-bold mb-0">Title Check
                                    </p>
                                    <p>{{$car->title_check ?? ''}}</p>
                                </div>

                            </div>
                            <div class="col-lg-6 d-flex my-2">
                                <div>
                                    <div class="circle-svg">
                                        <svg aria-hidden="true" width="45px" height="45px" focusable="false" data-prefix="fal"
                                             data-icon="car" class="svg-inline--fa fa-car fa-w-16 Gzg7Yj _5fqf2p" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="white"
                                                  d="M120.81 248c-25.96 0-44.8 16.8-44.8 39.95 0 23.15 18.84 39.95 44.8 39.95l10.14.1c39.21 0 45.06-20.1 45.06-32.08-.01-24.68-31.1-47.92-55.2-47.92zm10.14 56c-3.51 0-7.02-.1-10.14-.1-12.48 0-20.8-6.38-20.8-15.95s8.32-15.95 20.8-15.95 31.2 14.36 31.2 23.93c0 7.17-10.54 8.07-21.06 8.07zm260.24-56c-24.1 0-55.19 23.24-55.19 47.93 0 11.98 5.85 32.08 45.06 32.08l10.14-.1c25.96 0 44.8-16.8 44.8-39.95-.01-23.16-18.85-39.96-44.81-39.96zm0 55.9c-3.12 0-6.63.1-10.14.1-10.53 0-21.06-.9-21.06-8.07 0-9.57 18.72-23.93 31.2-23.93s20.8 6.38 20.8 15.95-8.32 15.95-20.8 15.95zm114.8-140.94c-7.34-11.88-20.06-18.97-34.03-18.97H422.3l-8.07-24.76C403.5 86.29 372.8 64 338.17 64H173.83c-34.64 0-65.33 22.29-76.06 55.22l-8.07 24.76H40.04c-13.97 0-26.69 7.09-34.03 18.97s-8 26.42-1.75 38.91l5.78 11.61c3.96 7.88 9.92 14.09 17 18.55-6.91 11.74-11.03 25.32-11.03 39.97V400c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48v-16H384v16c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48V271.99c0-14.66-4.12-28.23-11.03-39.98 7.09-4.46 13.04-10.68 17-18.57l5.78-11.56c6.24-12.5 5.58-27.05-1.76-38.92zM128.2 129.14C134.66 109.32 153 96 173.84 96h164.33c20.84 0 39.18 13.32 45.64 33.13l20.47 62.85H107.73l20.47-62.84zm-89.53 70.02l-5.78-11.59c-1.81-3.59-.34-6.64.34-7.78.87-1.42 2.94-3.8 6.81-3.8h39.24l-6.45 19.82a80.69 80.69 0 0 0-23.01 11.29c-4.71-1-8.94-3.52-11.15-7.94zM96.01 400c0 8.83-7.19 16-16 16h-16c-8.81 0-16-7.17-16-16v-16h48v16zm367.98 0c0 8.83-7.19 16-16 16h-16c-8.81 0-16-7.17-16-16v-16h48v16zm0-80.01v32H48.01v-80c0-26.47 21.53-48 48-48h319.98c26.47 0 48 21.53 48 48v48zm15.12-132.41l-5.78 11.55c-2.21 4.44-6.44 6.97-11.15 7.97-6.94-4.9-14.69-8.76-23.01-11.29l-6.45-19.82h39.24c3.87 0 5.94 2.38 6.81 3.8.69 1.14 2.16 4.18.34 7.79z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ps-2  my-auto">
                                    <p class="fw-bold mb-0">Accident Check</p>
                                    <p>{{$car->accident_check ?? ''}}</p>
                                </div>


                            </div>
                            <div class="col-lg-6 d-flex my-2">
                                <div>
                                    <div class="circle-svg">
                                        <svg aria-hidden="true" width="45px" height="45px" focusable="false" data-prefix="fal"
                                             data-icon="user" class="svg-inline--fa fa-user fa-w-14 hDGpPy _5fqf2p" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="white"
                                                  d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ps-2 my-auto">
                                    <p class="fw-bold mb-0">Owner</p>
                                    <p>{{$car->owner ?? ''}}</p>
                                </div>

                            </div>
                            <a href="" class="clr-primary fs-6 my-3 lh-sm">Save 20% on the full AutoCheck Vehicle History
                                Report</a>
                            <p class="clr-dark small">Vehicle history data provided by Experian AutoCheck on Jul 12, 2021.
                                This data, and any reliance on it, is subject to the <a href="" class="clr-primary">
                                    AutoCheck Terms </a> and Conditions and the <a href="" class="clr-primary "> Motorvero
                                    Terms of Use. </a></p>
                            <hr class="my-4">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="heading-m custom-accordion">
                            Contactless <span>Services</span>
                            <span class="custom-accordion-icon">+</span>
                        </p>
                        <div class="custom-accordion-box">
                            <ul class="Contactless ">

                                <li>
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <svg height="18" width="22">
                                                <path d="M18.703 18c.622 0 1.125-.556 1.125-1.238V8.768c1.687-.71 2.376-2.94 1.335-4.598L18.882.527A1.125 1.125 0 0017.929 0H3.726c-.387 0-.749.2-.953.527L.492 4.17C-.55 5.829.14 8.058 1.828 8.768v7.994c0 .682.502 1.238 1.125 1.238zM13.426 7.878a2.33 2.33 0 01-1.758-.79l-.84-.936-.837.935c-.457.51-1.08.791-1.758.791s-1.3-.28-1.758-.79l-.84-.936-.837.935a2.332 2.332 0 01-1.758.791c-.112 0-.221-.007-.33-.02-.605-.081-1.107-.465-1.382-1.048a2.145 2.145 0 01.116-2.036l2.282-3.649h14.203l2.282 3.642c.38.605.422 1.382.116 2.036-.274.583-.777.967-1.382 1.047a2.564 2.564 0 01-.33.021 2.33 2.33 0 01-1.758-.79l-.837-.929-.837.935a2.331 2.331 0 01-1.757.791zm5.273 3.372H2.953V9h.087a3.471 3.471 0 002.595-1.164 3.477 3.477 0 005.189 0 3.477 3.477 0 005.19 0A3.485 3.485 0 0018.61 9h.088zM2.995 16.885c-.01-.007-.042-.045-.042-.123v-4.387h15.75v4.387c0 .07-.029.11-.008.113z"
                                                      fill="#707070"></path>
                                            </svg>
                                        </div>
                                        <div class=" small">
                                            <p class="mb-0 fw-bold">Private dealer appointments </p>
                                            <p class="clr-dark"> Practice social distancing and get a specific time to visit
                                                this dealer to enjoy
                                                a solo test drive.
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <svg height="19" width="16">
                                                <path d="M10.687 11.5a3.946 3.946 0 003.938-3.937V7c0-3.722-3.028-6.75-6.75-6.75S1.125 3.278 1.125 7v.563a.563.563 0 001.125 0V7a5.632 5.632 0 015.625-5.625A5.632 5.632 0 0113.5 7v.563a2.818 2.818 0 01-2.813 2.812H9.562c0-.621-.504-1.125-1.125-1.125H7.312a1.125 1.125 0 000 2.25zm-5.612-1.003c-.002-.041-.013-.08-.013-.122a2.64 2.64 0 01.314-1.125c-.484-.531-.877-1.546-.877-2.265a3.361 3.361 0 013.376-3.36h.015a3.361 3.361 0 013.36 3.36c0 .715-.39 1.726-.87 2.257 0 .003.004.005.005.008h.302c.515-.001 1.154-.357 1.426-.794.157-.459.262-.943.262-1.456 0-2.484-2.016-4.5-4.5-4.5s-4.5 2.016-4.5 4.5c0 1.421.671 2.672 1.7 3.497zm9.55 7.753c.621 0 1.125-.504 1.125-1.125 0-2.484-2.016-4.5-4.5-4.5h-.165c-.428 0-.844.102-1.248.24a7.313 7.313 0 01-1.963.323 7.313 7.313 0 01-1.962-.324c-.404-.137-.819-.238-1.245-.238H4.5A4.502 4.502 0 000 17.125c0 .621.504 1.125 1.125 1.125zm0-1.126l-13.5.001A3.381 3.381 0 014.5 13.75h.167c.243 0 .524.057.884.179.624.211 1.665.383 2.323.383.659 0 1.7-.172 2.323-.383.363-.123.645-.18.888-.18h.165a3.381 3.381 0 013.375 3.375z"
                                                      fill="#707070"></path>
                                            </svg>
                                        </div>
                                        <div class=" small">
                                            <p class="mb-0 fw-bold">Virtual appointments </p>
                                            <p class="clr-dark">Schedule a virtual meeting with this dealer and get a video
                                                tour of this car.
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <svg height="20" width="28">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M10.812 16.125l4.5-.012a.563.563 0 00.563-.562V7.006l1.436 1.174a.327.327 0 00.178.063.319.319 0 00.218-.104l.355-.436a.327.327 0 00.063-.177.318.318 0 00-.106-.22L9.833.626a1.315 1.315 0 00-.71-.25c-.22 0-.538.112-.71.25L.23 7.307a.319.319 0 00-.103.218c0 .055.028.135.063.178l.355.436a.319.319 0 00.218.103.327.327 0 00.175-.061l1.437-1.174v8.543c0 .31.252.563.562.563h4.5A.563.563 0 008 15.55v-4.5l2.25.01v4.503c0 .311.252.563.562.563zm.563-1.123v-4.506a.566.566 0 00-.561-.563l-3.375-.01h-.002a.563.563 0 00-.562.563v4.505H3.5V6.088l5.625-4.59 5.625 4.59-.004 8.903h.004z"
                                                          fill="#707070" fill-rule="nonzero"></path>
                                                    <path d="M13.88 13.772l2.233-2.878L17 17h-3z" fill="#fff"></path>
                                                    <path d="M24.25 19.75a2.25 2.25 0 002.25-2.25h1.125a.375.375 0 00.375-.375V15.25A2.25 2.25 0 0025.75 13h-.375l-2.55-3.187c-.248-.31-.773-.563-1.171-.563h-5.013a1.5 1.5 0 00-1.393.943L14.125 13v.053A1.497 1.497 0 0013 14.5v2.625c0 .207.168.375.375.375H14.5a2.25 2.25 0 104.5 0h3a2.25 2.25 0 002.25 2.25zM23.934 13h-4.372v-2.625h2.092c.115 0 .221.051.293.14zm-5.497 0h-3.1l.955-2.39a.374.374 0 01.349-.235h1.796zm-3.625 3.375h-.687V14.5c0-.207.168-.375.375-.375h11.25c.62 0 1.125.505 1.125 1.125v1.125h-.687c-.39-.67-1.107-1.125-1.938-1.125s-1.548.455-1.938 1.125h-3.624a2.24 2.24 0 00-1.938-1.125 2.24 2.24 0 00-1.938 1.125zm1.938 2.25a1.125 1.125 0 110-2.25 1.125 1.125 0 010 2.25zm7.5 0a1.125 1.125 0 110-2.25 1.125 1.125 0 010 2.25z"
                                                          fill="#707070" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class=" small">
                                            <p class="mb-0 fw-bold">Free test drive at home</p>
                                            <p class="clr-dark"> Try a no-commitment, free test drive at home. Car will be
                                                dropped off (within 25 miles of the dealership) so you can safely test drive
                                                on your own.
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <svg height="19" width="21">
                                                <path d="M16.312 18.25a2.25 2.25 0 001.569-3.863.844.844 0 00-.819-.637H6.654l-.422-2.25h11.65c.4 0 .745-.28.827-.672l1.523-7.312a.844.844 0 00-.826-1.016H4.545L4.252.938a.844.844 0 00-.83-.688h-3A.422.422 0 000 .672v.281c0 .233.189.422.422.422h2.767l2.459 13.111A2.25 2.25 0 109.563 16v-.002a2.65 2.65 0 00-.302-1.123h5.103c-.166.287-.301.79-.301 1.123V16a2.25 2.25 0 002.25 2.25zm1.342-7.875H6.022l-1.266-6.75H19.06zm-10.342 6.75c-.62 0-1.125-.505-1.125-1.125s.505-1.125 1.125-1.125S8.437 15.38 8.437 16s-.504 1.125-1.125 1.125zm9 0c-.62 0-1.125-.505-1.125-1.125s.505-1.125 1.125-1.125 1.125.505 1.125 1.125-.504 1.125-1.125 1.125z"
                                                      fill="#707070"></path>
                                            </svg>
                                        </div>
                                        <div class=" small">
                                            <p class="mb-0 fw-bold">Contactless purchase </p>
                                            <p class="clr-dark"> Pay or finance this car completely remotely—either by phone
                                                or email. Paperwork will be delivered to you.
                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div class="col-1">
                                            <svg height="17" width="25">
                                                <g fill="none" fill-rule="evenodd" stroke="#707070"
                                                   transform="translate(1 .568)">
                                                    <g stroke-linecap="round">
                                                        <path d="M2.587 0h11.7v6.501h7.51l1.527 1.953v5.066H3.082"
                                                              stroke-linejoin="round"></path>
                                                        <path d="M.626 3.268h7.063M0 6.432h6.163M1 9.432h3.088"></path>
                                                    </g>
                                                    <circle cx="7" cy="13.432" fill="#fff" r="2.5"></circle>
                                                    <circle cx="18" cy="13.432" fill="#fff" r="2.5"></circle>
                                                    <path d="M14.3 1.389h5.22l1.984 4.854" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class=" small">
                                            <p class="mb-0 fw-bold">Free home drop-off </p>
                                            <p class="clr-dark"> Ready to buy? This dealer will drop your new car off at
                                                your home, free of charge within 25 miles of the dealership.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <p class="small clr-dark">Unless prohibited by applicable rules or regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="">
                        <div class="back-light px-3 py-4">
                            <h6 class="text-center fw-bold">Notify me when the price drops.</h6>
                            <form>
                                <div class="d-flex justify-content-between my-auto">
                                    <div class="col-8 h-100">
                                        <input type="Email" class="form-control" id="inputPassword2"
                                               placeholder="Email">
                                    </div>
                                    <div class="col ps-1 h-100">
                                        <button type="submit" class="btn back-primary h-100 w-100 text-white my-auto">
                                            Email
                                            Me
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="small mt-4 mb-0 text-center fst-italic">By clicking "Email me," you agree to
                                our Privacy Policy and Terms of Use.</p>
                        </div>
                    </div>
                </div>
                <div class="row my-md-3 mx-auto">
                    <p class="heading-m ">
                        Dealer <span>Reviews</span>

                    </p>
                    <div class="row">
                        <div class="d-flex col">
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
                                <path class="_4z5HgY" fill="#c2ccd4"
                                      d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                </path>
                                <path class="_5bxaLR" fill="#c2ccd4"
                                      d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                </path>
                            </svg>
                            <p class="col small ps-3">{{count($reviews) ?? ''}} reviews</p>
                        </div>
                        <div class="_3cdntu">
                            <div class="d-flex">
                                <div class="_3UnWEw my-auto">
                                    <div class="_3sopyT my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="_42zXRc rounded-2 my-auto">
                                    <div class="UmP4ca rounded-2"
                                         style="width: {{ (count($reviews)> 0) &&  round(count($five_star) * 100 / count($reviews), 0) }}%;"></div>
                                </div>
                                <div class="hVKvZS">{{ (count($reviews)> 0) && round(count($five_star) * 100 / count($reviews), 0) }}
                                    %
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="_3UnWEw my-auto">
                                    <div class="_3sopyT my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="_42zXRc rounded-2 my-auto">
                                    <div class="UmP4ca rounded-2"
                                         style="width: {{(count($reviews)> 0) && round(count($four_star) * 100 / count($reviews), 0) }}%;"></div>
                                </div>
                                <div class="hVKvZS">{{(count($reviews)> 0) && round(count($four_star) * 100 / count($reviews), 0) }}
                                    %
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="_3UnWEw my-auto">
                                    <div class="_3sopyT my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="_42zXRc rounded-2 my-auto">
                                    <div class="UmP4ca rounded-2"
                                         style="width: {{(count($reviews)> 0) && round(count($three_star) * 100 / count($reviews), 0) }}%;"></div>
                                </div>
                                <div class="hVKvZS">{{(count($reviews)> 0) && round(count($three_star) * 100 / count($reviews), 0) }}
                                    %
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="_3UnWEw my-auto">
                                    <div class="_3sopyT my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="_42zXRc rounded-2 my-auto">
                                    <div class="UmP4ca rounded-2"
                                         style="width: {{(count($reviews)> 0) && round(count($two_star) * 100 / count($reviews), 0) }}%;"></div>
                                </div>
                                <div class="hVKvZS">{{(count($reviews)> 0) && round(count($two_star) * 100 / count($reviews), 0) }}
                                    %
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="_3UnWEw my-auto">
                                    <div class="_3sopyT my-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20"
                                             height="20" class="_2waTFh">
                                            <path class="_4z5HgY" fill="#c2ccd4"
                                                  d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                            </path>
                                            <path class="_5bxaLR" fill="#ffb100"
                                                  d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="_42zXRc rounded-2 my-auto">
                                    <div class="UmP4ca rounded-2"
                                         style="width:{{(count($reviews)> 0) && round(count($one_star) * 100 /count($reviews),0)}}%;"></div>
                                </div>
                                <div class="hVKvZS">{{(count($reviews)> 0) && round(count($one_star) * 100 / count($reviews), 0) }}
                                    %
                                </div>
                            </div>
                        </div>
                        <div class=" my-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn back-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#addreview">
                                Add Reviews
                            </button>

                            <!-- Modal -->
                            <div class="modal fade rating-modal" id="addreview" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Dealer Reviews</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{url('post-review')}}" method="POST"
                                                  {{--                                                  id="myForm" --}}
                                                  onsubmit="submitFormData(event)">
                                                @csrf
                                                <input type="hidden" name="car_id" id="car_id" value="{{$car->id}}">
                                                <div>
                                                    <label>Rating*</label>
                                                    <div class="rate">
                                                        <input class="rating-star" type="radio" id="star5" name="rating"
                                                               value="5"/>
                                                        <label class="rating-star" for="star5" title="text">5
                                                            stars</label>
                                                        <input class="rating-star" type="radio" id="star4" name="rating"
                                                               value="4"/>
                                                        <label class="rating-star" for="star4" title="text">4
                                                            stars</label>
                                                        <input class="rating-star" type="radio" id="star3" name="rating"
                                                               value="3"/>
                                                        <label class="rating-star" for="star3" title="text">3
                                                            stars</label>
                                                        <input class="rating-star" type="radio" id="star2" name="rating"
                                                               value="2"/>
                                                        <label class="rating-star" for="star2" title="text">2
                                                            stars</label>
                                                        <input class="rating-star" type="radio" id="star1" name="rating"
                                                               value="1" required/>
                                                        <label class="rating-star" for="star1" title="text">1
                                                            star</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="">Name<code>*</code></label>
                                                    <input type="text" class="form-control" id="ratingname" name="name"
                                                           required>
                                                    <div class="field-required"></div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="">Email<code>*</code></label>
                                                    <input type="email" required class="form-control" id="ratingemail"
                                                           name="email">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for="">Comment <code>*</code></label>
                                                    <textarea name="comment" id="ratingcomment" rows="5"
                                                              class="form-control d-block mb-3" style="display: none;"
                                                              required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn back-primary text-white" id="seReview">See Reviews</button>
                            <div id="seReviews" style="display: none">
                                @foreach($reviews as $review)
                                    <div class="rounded-3 border border-muted bg-light shadow-sm my-3 p-3">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="imgg">
                                                <img class="rounded-circle"
                                                     src="{{asset('frontend/images/user-profile.png')}}"
                                                     style="width: 50px; height: 50px" alt="">
                                            </div>
                                            <style>
                                                .peelay {
                                                    color: #ffb100;
                                                }

                                                .pheekay {
                                                    color: #c2ccd4;
                                                }
                                            </style>
                                            <div>
                                                <p class="fs-6 text-main mb-0">{{$review->name ?? ''}}</p>
                                                @for ($x = 1; $x<=$review->rating; $x++)
                                                    <i class="fa fa-star peelay" aria-hidden="true"></i>
                                                @endfor

                                                @for ($x = $review->rating; $x <= 4; $x++) <i class="fa fa-star pheekay"
                                                                                              aria-hidden="true"></i>
                                                @endfor

                                            </div>
                                        </div>
                                        <p class="fs-6 text-dark mt-2 tr-4 mb-0">
                                            {{$review->comment ?? ''}}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p class="fs-6">All reviews are verified visits to the dealer. <a class="clr-primary" href="">Learn
                                More</a></p>
                        <hr>
                    </div>

                </div>
                <div class="row my-3 d-md-flex d-none">
                    <p class="heading-m custom-accordion">finance in <span>advance</span>
                        <span class="custom-accordion-icon">+</span>
                    </p>
                    <div class="custom-accordion-box">
                        <div class="_4w1r1J">
                            <ol class="p-0">
                                <li>Estimate your payment</li>
                                <li>Get pre-qualified</li>
                                <li>Shop with real, personalized rates</li>
                            </ol>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="estimate-payment text-center my-auto py-2 rounded-2">
                                    <p class="fs-5 fw-bold my-4">Your estimated payment is</p>
                                    <!-- <h1 class="my-3 estimate-payment-price" id="estimatepay">
                                        $10 <span>/ mo*</span>
                                    </h1> -->
                                    <span class="_2aSBdU">
                                        <span class="my-3 dollar">
                                            $
                                            <span class="downamount my-3 estimate-payment-price">
                                                0.00
                                            </span>
                                            <div class="d-none">
                                                - $
                                                <span class="upamount my-3 estimate-payment-price">
                                                    688
                                                </span>
                                            </div>
                                        </span>
                                        / mo*
                                    </span>

                                </div>
                            </div>
                            <div class="">
                                <div class="col-12 mb-4">
                                    <div class="mt-3">Down Payment (<span id="DownPaymentPercent">0</span>%)</div>
                                    <input placeholder="$0.00" class="form-control w-100 VehiclePricea downPayment"
                                           name="downPayment" type="number">
                                    <div class="mt-4">Credit score</div>
                                    <div class="d-flex justify-content-between selectScore mt-2 border-0 cal-btn">
                                        <label class="_56Te6L _3aSadT">
                                            <input data-down="14" data-up="24" aria-label="Rebuilding <640" class="_5LPSVN"
                                                   name="score" type="radio" value="REBUILDING">
                                            <div class="cevdhy">Rebuilding<br>&lt;640</div>
                                        </label><label class="_56Te6L _3aSadT"><input data-down="5" data-up="10"
                                                                                      aria-label="Fair 641-699"
                                                                                      class="_5LPSVN" name="score"
                                                                                      type="radio" value="FAIR">
                                            <div class="cevdhy">Fair<br>641-699</div>
                                        </label><label class="_56Te6L _3aSadT " aria-selected="true"><input data-down="4"
                                                                                                            data-up="6"
                                                                                                            aria-label="Good 700-749"
                                                                                                            class="_5LPSVN"
                                                                                                            name="score"
                                                                                                            type="radio"
                                                                                                            value="GOOD"
                                                                                                            checked="">
                                            <div class="cevdhy">Good<br>700-749</div>
                                        </label><label class="_56Te6L _3aSadT"><input data-down="3.45" data-up="4.5"
                                                                                      aria-label="Excellent 750-850"
                                                                                      class="_5LPSVN" name="score"
                                                                                      type="radio" value="EXCELLENT">
                                            <div class="cevdhy">Excellent<br>750-850</div>
                                        </label>
                                    </div>
                                    <div class="mt-4">Loan Term</div>
                                    <div class="d-flex justify-content-between selectMonths mt-2 border-0 cal-btn">

                                        <label class="_56Te6L _3aSadT" data-month="36" aria-selected="true"><input
                                                    class="_5LPSVN" name="term" type="radio" value="36">
                                            <div class="cevdhy">36 mo</div>
                                        </label><label class="_56Te6L _3aSadT" data-month="48"><input class="_5LPSVN"
                                                                                                      name="term"
                                                                                                      type="radio"
                                                                                                      value="48">
                                            <div class="cevdhy">48 mo</div>
                                        </label><label class="_56Te6L _3aSadT " data-month="60"><input class="_5LPSVN"
                                                                                                       name="term"
                                                                                                       type="radio"
                                                                                                       value="60"
                                                                                                       checked="">
                                            <div class="cevdhy">60 mo</div>
                                        </label><label class="_56Te6L _3aSadT" data-month="72"><input class="_5LPSVN"
                                                                                                      name="term"
                                                                                                      type="radio"
                                                                                                      value="72">
                                            <div class="cevdhy">72 mo</div>
                                        </label>

                                    </div>
                                    <p class="my-3 text-center">Sounds good? Submit a pre-qualification request now to
                                        get your personalized rates
                                    </p>
                                    <div class="row my-3">
                                        <button data-bs-toggle="modal" data-bs-target="#financing"
                                                class="btn back-primary text-white">View Financing Options
                                        </button>
                                    </div>
                                    <div class="row mt-3 text-center">
                                        <p> Already pre-qualified? <a href="" class="clr-primary"> Retrieve your
                                                offer</a></p>
                                        <p class="fst-italic small">*Estimated payments are for informational purposes
                                            only and may or may not account for financing pre-qualifications,
                                            acquisition fees, destination charges, tax, title, and other fees and
                                            incentives or represent a financing offer or guarantee of credit from the
                                            seller. APR depends on actual loan terms.</p>
                                        <p class="smaller">Vehicle information is provided by the seller or other third
                                            parties; MotorVero is not responsible for the accuracy of such information.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <p class="text-center smaller">Are you the seller of this listing? <a class="clr-primary" href="">Make
                                a correction.</a></p>
                    </div>

                </div>

                <!-- <div aria-hidden="false" style="height: auto; overflow: visible; display: block;">
                    <fieldset><label class="_56Te6L">
                            <div class="_47Pmwz">Down Payment</div>
                            <input placeholder="$0.00" class="_5LPSVN downPayment" name="downPayment" type="number">
                        </label>
                        <fieldset><label class="_56Te6L _3Fiqjt" role="group" aria-label="Credit score">
                                <div class="_47Pmwz">
                                    <div class="_4hK8Jr">Credit score</div>
                                </div>
                                <div class="_3er81u selectScore"><label class="_56Te6L _3aSadT"><input data-down="14"
                                                                                                       data-up="24"
                                                                                                       aria-label="Rebuilding <640"
                                                                                                       class="_5LPSVN"
                                                                                                       name="score"
                                                                                                       type="radio"
                                                                                                       value="REBUILDING">
                                        <div class="cevdhy">Rebuilding<br>&lt;640</div>
                                    </label><label class="_56Te6L _3aSadT"><input data-down="5" data-up="10"
                                                                                  aria-label="Fair 641-699"
                                                                                  class="_5LPSVN" name="score"
                                                                                  type="radio" value="FAIR">
                                        <div class="cevdhy">Fair<br>641-699</div>
                                    </label><label class="_56Te6L _3aSadT " aria-selected="true"><input data-down="4"
                                                                                                        data-up="6"
                                                                                                        aria-label="Good 700-749"
                                                                                                        class="_5LPSVN"
                                                                                                        name="score"
                                                                                                        type="radio"
                                                                                                        value="GOOD"
                                                                                                        checked="">
                                        <div class="cevdhy">Good<br>700-749</div>
                                    </label><label class="_56Te6L _3aSadT"><input data-down="3.45" data-up="4.5"
                                                                                  aria-label="Excellent 750-850"
                                                                                  class="_5LPSVN" name="score"
                                                                                  type="radio" value="EXCELLENT">
                                        <div class="cevdhy">Excellent<br>750-850</div>
                                    </label></div>
                            </label><label class="_56Te6L _3Fiqjt" role="group" aria-label="Loan term">
                                <div class="_47Pmwz">
                                    <div class="_4hK8Jr">Loan term</div>
                                </div>
                                <div class="_3er81u selectMonths"><label class="_56Te6L _3aSadT" data-month="36"
                                                                         aria-selected="true"><input class="_5LPSVN"
                                                                                                     name="term"
                                                                                                     type="radio"
                                                                                                     value="36">
                                        <div class="cevdhy">36 mo</div>
                                    </label><label class="_56Te6L _3aSadT" data-month="48"><input class="_5LPSVN"
                                                                                                  name="term"
                                                                                                  type="radio"
                                                                                                  value="48">
                                        <div class="cevdhy">48 mo</div>
                                    </label><label class="_56Te6L _3aSadT " data-month="60"><input class="_5LPSVN"
                                                                                                   name="term"
                                                                                                   type="radio"
                                                                                                   value="60"
                                                                                                   checked="">
                                        <div class="cevdhy">60 mo</div>
                                    </label><label class="_56Te6L _3aSadT" data-month="72"><input class="_5LPSVN"
                                                                                                  name="term"
                                                                                                  type="radio"
                                                                                                  value="72">
                                        <div class="cevdhy">72 mo</div>
                                    </label></div>
                            </label></fieldset>
                    </fieldset>
                    <div class="_23i73Y">Sounds good? Submit a pre-qualification request now to get
                        your
                        personalized rates
                    </div>
                </div> -->
            </div>
            <div class="col-md-6 my-5 d-md-block d-none">
                <div class="row">
                    <div class="back-light border rounded-2 py-2">
                        <div class="d-flex">

                            @if($car->deal_type=='Great')
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                     viewBox="0 0 34 34" role="img" class="_2ycVuW" style="transform: rotate(-90deg);">
                                    <circle fill="#006b00" cx="17" cy="17" r="15"></circle>
                                    <path width="20px" height="20px" class="ZZmvu1" fill="white"
                                          d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z"></path>
                                </svg>
                                <p class="fw-bolder ps-2 my-auto clr-primary">Great DEAL</p>
                            @elseif($car->deal_type=='Fair')
                                <div class="deal-fair">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30px"
                                         height="30px"
                                         viewBox="0 0 34 34" role="img" class="_2ycVuW"
                                         style="transform: rotate(-90deg);">
                                        <circle fill="#00bd00" cx="17" cy="17" r="15"></circle>
                                        <path width="20px" height="20px" class="ZZmvu1" fill="white"
                                              d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z"></path>
                                    </svg>
                                </div>
                                <p class="fw-bolder ps-2 my-auto clr-primary">Fair DEAL</p>
                            @elseif($car->deal_type=='Good')
                                <div class="deal-good">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30px"
                                         height="30px"
                                         viewBox="0 0 34 34" role="img" class="_2ycVuW"
                                         style="transform: rotate(-90deg);">
                                        <circle fill="#009b00" cx="17" cy="17" r="15"></circle>
                                        <path width="20px" height="20px" class="ZZmvu1" fill="white"
                                              d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z"></path>
                                    </svg>
                                </div>
                                <p class="fw-bolder ps-2 my-auto clr-primary">Good DEAL</p>
                            @elseif($car->deal_type=='High')
                                <div class="deal-high">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30px"
                                         height="30px"
                                         viewBox="0 0 34 34" role="img" class="_2ycVuW"
                                         style="transform: rotate(-90deg);">
                                        <circle fill="#ff8400" cx="17" cy="17" r="15"></circle>
                                        <path width="20px" height="20px" class="ZZmvu1" fill="white"
                                              d="M25.779,17l-7.97-7.97v4.857H8.221v6.226h9.588V24.97Z"></path>
                                    </svg>
                                </div>
                                <p class="fw-bolder ps-2 my-auto clr-primary">High Price </p>
                            @endif
                        </div>
                        <p class="smaller mb-0 mt-3">DEALER RATING</p>
                        @for ($x = 1; $x <= $averageRating; $x++)
                            <i class="fa fa-star select-rating" aria-hidden="true"></i>
                        @endfor
                        @for ($x = $averageRating; $x <= 4; $x++)
                            <i class="fa fa-star text-light" aria-hidden="true"></i>
                        @endfor
                        {{--                            <div class="_3sopyT">--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20" class="_2waTFh">--}}
                        {{--                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                        {{--                                    </path>--}}
                        {{--                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                        {{--                                    </path>--}}
                        {{--                                </svg>--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20" class="_2waTFh">--}}
                        {{--                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                        {{--                                    </path>--}}
                        {{--                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                        {{--                                    </path>--}}
                        {{--                                </svg>--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20" class="_2waTFh">--}}
                        {{--                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                        {{--                                    </path>--}}
                        {{--                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                        {{--                                    </path>--}}
                        {{--                                </svg>--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20" class="_2waTFh">--}}
                        {{--                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                        {{--                                    </path>--}}
                        {{--                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                        {{--                                    </path>--}}
                        {{--                                </svg>--}}
                        {{--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="20" height="20" class="_2waTFh">--}}
                        {{--                                    <path class="RZugQc" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">--}}
                        {{--                                    </path>--}}
                        {{--                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">--}}
                        {{--                                    </path>--}}
                        {{--                                </svg>--}}
                        {{--                            </div>--}}
                    </div>
                </div>
                <div class="row my-2">
                    <div class="back-light border rounded-2 py-3 d-flex justify-content-between">

                        <p class="  my-auto">We're Online</p>
                        <div class="chat-btn d-none">
                            <svg width="26" height="26" fill="none" stroke="currentColor" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 8h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-2v4l-4-4H9a1.995 1.995 0 0 1-1.414-.586">
                                </path>
                                <path d="M7.586 17.414 11 14h4a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2v4l.586-.586Z">
                                </path>
                            </svg>
                            {{--                            <button class="mb-0" >chat</button>--}}
                            <button >Open Chat</button>
                            <livewire:single-chat />





                        </div>



                    </div>
                    <div style="display: none" id="chatPannel">
                        {{--                        <input type="hidden" wire:model="dealerId" value="{{$car->user_id}}">--}}
                        <livewire:single-chat />
                    </div>
                </div>
                <form id="productform">
                    <input type="hidden" name="car_id" value="{{$car->id}}">
                    <input type="hidden" name="car_name" value="{{$car->title}}">
                    <div class="row my-2">
                        <div class="back-light py-3 border rounded-2 ">
                            <div class="pb-3 d-flex justify-content-between">
                                <p class="heading-m my-auto">Contact <span>Dealer</span></p>
                            </div>
                            <div>
                                <p class="mb-0">Hello, my name is
                                </p>
                                <div class="row">
                                    <div class="col-md-6"><input name="first_name" aria-label="First name"
                                                                 autocomplete="given-name"
                                                                 class="d-inline-block form-control w-100 py-1"
                                                                 maxlength="50" placeholder="First name" id="FirstName"
                                                                 type="text" data-cg-ft="lead-form-first-name" value=""></div>
                                    <div class="col-md-6"><input name="last_name" aria-label="Last name" autocomplete="family-name"
                                                                 class="d-inline-block form-control w-100 py-1" id="LastName" maxlength="50"
                                                                 placeholder="Last name" type="text" data-cg-ft="lead-form-last-name"
                                                                 value=""></div></div>
                                <p class="mb-0">and</p>
                                <div class="col-12"><select name="about_car" class="d-inline-block form-control  py-1" id="like"
                                                            data-cg-ft="lead-form-inquiry">
                                        <option value="I'd like to know your best price for this">I'd like to
                                            know your best price for this
                                        </option>
                                        <option value="I'd like to test drive this">I'd like to test drive
                                            this
                                        </option>
                                        <option value="I'm interested in this">I'm interested in this</option>
                                        <option value="I'd like a history report for this vehicle">I'd like a
                                            history report for this vehicle
                                        </option>
                                        <option value="Will like to make payment via crypto currency and get 18% discount.">
                                            Will like to make payment via crypto currency and get 18% discount.
                                        </option>
                                    </select></div>
                                <div class="col-12"><strong id="CarName">{{$car->title}}</strong>. I'm in
                                    the area. <input name="zip" aria-label="ZIP" autocomplete="postal-code"
                                                     class="d-inline-block form-control w-auto py-1" maxlength="7"
                                                     placeholder="ZIP" size="7" type="text" data-cg-ft="lead-form-postal-code"
                                                     value=""></div>
                                <p class="mb-0">You can reach me by email at</p>
                                <div class="col-12"><input name="email" aria-label="Email Address"
                                                           autocapitalize="none" autocomplete="email"
                                                           autocorrect="off"
                                                           class="d-inline-block form-control w-100 py-1"
                                                           maxlength="200" placeholder="Email Address"
                                                           id="EmailAddress" type="email"
                                                           data-cg-ft="lead-form-email" value=""></div>
                                <p class="mb-0">or by phone at</p>
                                <div class="col-12"><input name="phone" aria-label="Phone Number" autocomplete="tel"
                                                           class="d-inline-block form-control w-100 py-1" maxlength="16"
                                                           placeholder="123-456-7890 (optional)" type="tel"
                                                           id="ContactNo" data-cg-ft="lead-form-phone" value=""></div>
                                <p class="mb-0">Thank
                                    you!</p>

                            </div>
                            <div>
                                <div class="d-flex justify-content-end">
                                    <button class="clr-primary bg-transparent border-0" id="btnComment" type="button">
                                        <svg width="25" height="25" aria-hidden="true" focusable="false"
                                             data-prefix="fas" data-icon="plus"
                                             class="svg-inline--fa fa-plus fa-w-14 okoSXx" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                  d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                            </path>
                                        </svg>
                                        add comments
                                    </button>
                                </div>
                                <textarea name="comments" id="" cols="30" rows="6" class="border-0 w-100"></textarea>
                                <label class="d-flex"><input name="email_me" class="_5JMLd3 " type="checkbox" value="1"
                                                             checked="">
                                    <p class="mb-0 ps-2">
                                        Email
                                        me
                                        new listings for my search
                                    </p>
                                </label>
                                <button class="btn mt-3 back-primary text-white w-100 py-2 btnsave">Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row my-2">
                    <div class="border smaller rounded-2 clr-dark" aria-hidden="false">
                        <p class="j4mavS mb-0">By submitting
                            my
                            contact information on MotorVero, I agree to receive communications from
                            MotorVero, from the vehicle’s seller, and from the seller’s agent(s). If
                            I
                            include my phone number, I agree to receive calls and text messages
                            (including
                            via automation). I can opt out at any time. I also agree to the <a href="#"
                                                                                               title="View our Terms of Use"
                                                                                               target="_blank"
                                                                                               class="text-black text-decoration-underline small">Terms
                                of Use</a> and <a href="#" title="View MotorVero Privacy Policy" target="_blank"
                                                  class="text-black text-decoration-underline small">Privacy Policy</a>,
                            which
                            explain
                            how my data is used to better understand my vehicle shopping interests.
                            This
                            consent is not a condition of any purchase. Standard message and data
                            rates may
                            apply.</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="border rounded-2 " aria-hidden="false">
                        <p class="heading text-center">Related <span>Search</span></p>
                        <div class="autoplay">
                            @foreach($related as $relate)
                                <div class="">

                                    <div class="card car-card border-0 rounded-4 h-100 text-center p-0">
                                        <div class="p-3">
                                            <img src="{{asset('images/media/').'/'.$relate->image}}"
                                                 class="card-img-top h-auto deals-card-img rounded-4" alt="...">
                                        </div>
                                        <div class="card-body pt-0 px-4 mb-2">
                                            <a href="{{url('detail',$relate->id)}}">

                                                <p class="mb-0 mt-1">{{$relate->title}}</p>
                                                <p class="mb-0 mt-1">$ {{$relate->dollar_price}} </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-md-5">
        <div class="row w-100 mx-auto">
            <div class="border">
                <p class="heading text-center">Why Use <span>MotorVero?</span></p>
                <p class="fs-6">We'll help you find great deals among the millions of
                    vehicles available nationwide
                    on MotorVero,
                    and we'll provide you with dealer reviews and vehicle history for each
                    one. After all, over 30
                    million shoppers use MotorVero to find great deals on <a href="./usedcars.html"
                                                                             class="clr-primary fs-6"> used cars </a>and
                    <a href="./newcars.html" class="clr-primary fs-6"> new cars </a> in
                    their area. And when it's time
                    to get rid of your old ride, <a href="./usedcars.html" class="clr-primary fs-6"> sell your car
                    </a> simply and securely on MotorVero.
                    <br><br>
                    Once you're ready to narrow down your search results, go ahead and
                    filter by price, mileage,
                    transmission, trim, days on lot, drivetrain, color, engine, options, and
                    deal ratings. And if
                    you only want to see cars with a single owner, recent price drops,
                    photos, or available
                    <a href="./usedcars.html" class="clr-primary fs-6">financing</a>, our
                    filters can help with that
                    too.
                </p>
            </div>
        </div>
    </div>
    <div class="modal  fade" id="financing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="container modal-css modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 ">
                <div class="modal-header">

                    <div class="col">
                        <svg id="prevBtn" onclick="nextPrev(-1)" xmlns="http://www.w3.org/2000/svg" width="16"
                             height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </div>
                    <div class="col text-center">
                        <div id="step-count" style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        <h1 class="modal-title fs-5 mx-auto" id="ModalLabel">Overview</h1>
                    </div>
                    <div class="d-flex col justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#707070"
                             class="bi bi-lock-fill my-auto" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                        <p class=" my-auto">Secure</p>
                        <button type="button" class="btn-close ms-0 my-auto" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body p-0 py-4">
                    <form id="regForm" method="POST">
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab p-3">
                            <div class="">
                                <p class="fs-4 fw-bold text-center">Shop with real rates in hand</p>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="modal-fianceinadiv text-center w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 96 74"
                                             width="52">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="m70.212766 0h-63.82978728c-3.52393617 0-6.38297872 2.85904255-6.38297872 6.38297872v46.80851068c0 3.5239361 2.85904255 6.3829787 6.38297872 6.3829787h63.82978728c3.5239361 0 6.3829787-2.8590426 6.3829787-6.3829787v-46.80851068c0-3.52393617-2.8590426-6.38297872-6.3829787-6.38297872zm2.1276595 53.1914894c0 1.1702127-.9574468 2.1276595-2.1276595 2.1276595h-63.82978728c-1.17021276 0-2.12765957-.9574468-2.12765957-2.1276595v-46.80851068c0-1.17021276.95744681-2.12765957 2.12765957-2.12765957h63.82978728c1.1702127 0 2.1276595.95744681 2.1276595 2.12765957zm-46.8085106-9.0425532v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-9.5744681c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h9.5744681c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm25.5319149 0v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-18.0851064c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h18.0851064c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm13.8297872-35.6382979h-10.6382979c-1.768617 0-3.1914893 1.42287234-3.1914893 3.1914894v6.3829787c0 1.768617 1.4228723 3.1914893 3.1914893 3.1914893h10.6382979c1.768617 0 3.1914894-1.4228723 3.1914894-3.1914893v-6.3829787c0-1.76861706-1.4228724-3.1914894-3.1914894-3.1914894zm-1.0638298 8.5106383h-8.5106383v-4.2553192h8.5106383zm-29.2553191 21.2765957h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446zm3.7234042-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446zm-25.5319149 0v-5.319149c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446zm51.0638298-5.319149v5.319149c0 .8776595-.7180851 1.5957446-1.5957446 1.5957446h-9.5744681c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h9.5744681c.8776595 0 1.5957446.7180851 1.5957446 1.5957447z"
                                                      fill="#00a0dd" fill-rule="nonzero"
                                                      transform="translate(0 14.425532)">
                                                </path>
                                                <g transform="translate(54.106383)">
                                                    <path d="m27.5872936 8.59459619 3.7928308 1.90455891 1.8960249 3.8083347c.211671.4244243.6442674.6925102 1.1174677.6925102.4732004 0 .9057967-.2680859 1.1174678-.6925102l1.8960249-3.8083347 3.7928307-1.90455891c.4249399-.21164659.6936766-.64640393.6936766-1.12221749 0-.47581355-.2687367-.91057089-.6936766-1.12221748l-3.7928307-1.90455891-1.8960249-3.8083347c-.4240287-.84969015-1.8109069-.84969015-2.2349355 0l-1.8960249 3.8083347-3.7928308 1.90455891c-.4249399.21164659-.6936766.64640393-.6936766 1.12221748 0 .47581356.2687367.9105709.6936766 1.12221749zm5.2629042-2.07630351c.2449373-.12287123.4436739-.32133858.5667118-.56594399l.9767074-1.95234869.9767074 1.95551039c.1235853.24342877.3222643.44073008.5667119.56278229l1.9565807.97854562-1.9565807.98170732c-.2446049.12333045-.4432141.32167057-.5667119.56594399l-.9767074 1.95551039-.9767074-1.95234869c-.1234977-.24427342-.322107-.44261355-.5667118-.56594399l-1.9565808-.98170732zm4.5565958 23.92795502-1.8958261-3.8083844c-.4239841-.8504844-1.8107168-.8504844-2.234701 0l-1.895826 3.8083844-3.7924329 1.9038006c-.4253272.2114907-.6943906.6464865-.6943906 1.1226237 0 .4761373.2690634.911133.6943906 1.1226237l3.7924329 1.9038007 1.895826 3.8083844c.2116488.4244298.6441998.6925192 1.1173505.6925192.4731508 0 .9057017-.2680894 1.1173505-.6925192l1.8958261-3.8083844 3.7924328-1.9038007c.4253272-.2114907.6943906-.6464864.6943906-1.1226237 0-.4761372-.2690634-.911133-.6943906-1.1226237zm-1.4697573 4.0315075c-.2448264.1233983-.443488.3220677-.5667119.5667344l-.9767074 1.9555104-.9767074-1.9555104c-.1232239-.2446667-.3218854-.4433361-.5667118-.5667344l-1.9565808-.9777552 1.9565808-.9785456c.2448264-.1233983.4434879-.3220678.5667118-.5667344l.9767074-1.95472.9767074 1.95472c.1232239.2446666.3218855.4433361.5667119.5667344l1.9565807.9785456zm-4.0434193-14.0059403c-.0004743-.4896463-.2764504-.9373006-.7135471-1.1574279l-9.0864254-4.5481345-4.5428091-9.10838435c-.4382987-.87715753-1.8718504-.87715753-2.3101492 0l-4.5428091 9.10838435-9.08642539 4.5481345c-.43968713.2181236-.71783469.6667618-.71783469 1.1578318s.27814756.9397082.71783469 1.1578318l9.08642539 4.5521729 4.5428091 9.1035383c.2187945.4377409.6659493.7142382 1.1550746.7142382s.9362801-.2764973 1.1550746-.7142382l4.5428091-9.1035383 9.0864254-4.5505575c.4374794-.2209513.7135471-.6694917.7135471-1.1598511z"
                                                          fill="#527d89" fill-rule="nonzero"></path>
                                                    <path d="m19.8188651 24.2020076c-.198627.1162427-.3597884.3040033-.4595635.5354129l-2.8459564 6.6425595-2.8459564-6.6425595c-.0997751-.2314096-.2609365-.4191702-.4595635-.5354129l-5.6944801-3.3224015 5.6944801-3.3216536c.1983574-.1166771.3594155-.3043174.4595635-.5354129l2.8459564-6.6425596 2.8459564 6.6425596c.100148.2310955.2612061.4187358.4595635.5354129l5.6944801 3.3216536z"
                                                          fill="#fff"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <p class="fs4 mb-sm-0 text-dark  px-1">
                                            Only Takes Minutes
                                        </p>
                                    </div>
                                    <div class="modal-fianceinadiv text-center w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 92 70"
                                             width="52">
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="m53.7714844 19.3183594 2.3925781-2.3925782c.6425781-.6425781.6425781-1.6816406 0-2.3242187l-.7792969-.7792969c-.6425781-.6425781-1.6816406-.6425781-2.3242187 0l-2.3925781 2.3925782c-4.8945313-4.2382813-11.1425782-6.95898442-18.0058594-7.4101563v-4.4296875h3.4179687c.9023438 0 1.640625-.73828125 1.640625-1.640625v-1.09375c0-.90234375-.7382812-1.640625-1.640625-1.640625h-10.9375c-.9023437 0-1.640625.73828125-1.640625 1.640625v1.09375c0 .90234375.7382813 1.640625 1.640625 1.640625h3.1445313v4.45703125c-15.8183594 1.18945315-28.2871094 14.41015625-28.2871094 30.54296875 0 16.9121094 13.7128906 30.625 30.625 30.625s30.625-13.7128906 30.625-30.625c0-7.6699219-2.8164062-14.6835938-7.4785156-20.0566406zm-23.1464844 46.3066406c-14.5058594 0-26.25-11.7441406-26.25-26.25s11.7441406-26.25 26.25-26.25 26.25 11.7441406 26.25 26.25-11.7441406 26.25-26.25 26.25zm.546875-17.5h-1.09375c-.9023438 0-1.640625-.7382812-1.640625-1.640625v-22.96875c0-.9023438.7382812-1.640625 1.640625-1.640625h1.09375c.9023438 0 1.640625.7382812 1.640625 1.640625v22.96875c0 .9023438-.7382812 1.640625-1.640625 1.640625z"
                                                      fill="#00a0dd" fill-rule="nonzero" transform="translate(30)">
                                                </path>
                                                <g stroke-linecap="round">
                                                    <g stroke="#fff" stroke-width="6.125">
                                                        <path d="m9.4375 42.4375h32.375"></path>
                                                        <path d="m13.8125 32.8125h32.375"></path>
                                                        <path d="m13.8125 23.1875h32.375"></path>
                                                    </g>
                                                    <g stroke="#527d89" stroke-width="3.5">
                                                        <path d="m9.472039 23.1875h34.930922"></path>
                                                        <path d="m2.4375 42.4375h32.375"></path>
                                                        <path d="m12.016447 32.8125h28.967106"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <p class="fs4 mb-sm-0 text-dark  px-1">
                                            No impact on your credit score
                                        </p>
                                    </div>
                                    <div class=" text-center w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="52" viewBox="0 0 79 70"
                                             width="42">
                                            <g fill="none">
                                                <path d="m10.9375 48.125h-8.75c-1.20859375 0-2.1875.9789063-2.1875 2.1875v17.5c0 1.2085937.97890625 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789063 2.1875-2.1875v-17.5c0-1.2085937-.9789062-2.1875-2.1875-2.1875zm-2.1875 17.5h-4.375v-13.125h4.375zm67.8125-39.375h-8.75c-1.2085937 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789063 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789062-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm-5.6369141-53.5007812c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm-17.5 0h-8.75c-1.2085938 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789062 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789063-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm24.0625-21.875h-8.75c-1.2085937 0-2.1875.9789063-2.1875 2.1875v21.875c0 1.2085937.9789063 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789063 2.1875-2.1875v-21.875c0-1.2085937-.9789063-2.1875-2.1875-2.1875zm-2.1875 21.875h-4.375v-17.5h4.375z"
                                                      fill="#00a0dd"></path>
                                                <path d="m68.7380859 12.1242188c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875z"
                                                      fill="#527d89"></path>
                                            </g>
                                        </svg>
                                        <p class="fs4 mb-sm-0 text-dark  px-1">
                                            Personalized Real Rates
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 my-3">
                                    <button class="py-3 btn btn-primary back-primary w-100 border-0 rounded-1"
                                            type="button" onclick="nextPrev(1)">Get
                                        Started
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="tab ">
                            <h2 class="text-center">We'd like to get to know you better</h2>
                            <h6 class="text-center clr-dark">We need some basic information to confirm
                                your identity.
                            </h6>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-6">
                                    <label for="FirstName" class="form-label ">First Name
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" id="firstnameid" class="form-control" name="first_name" required>
                                    <div class="field-required">
                                        hello
                                    </div>

                                </div>
                                <div class="mt-3 form__field applicant col-md-6">
                                    <label for="LastName" class="form-label">Last Name
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" class="form-control" id="lastnameid" name="last_name" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-6">
                                    <label for="email" class="form-label  ">Email
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="email" id="emailid" class="form-control" name="email" required>
                                    <div class="field-required"></div>

                                </div>
                                <div class="mt-3 form__field applicant col-md-6">
                                    <label for="confirmemail" class="form-label">Confirm Email
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="email" class="form-control " id="confirmemailid" name="confirm_email"
                                           required>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <p class="small mt-3">
                                    When you provide your email address, our
                                    participating lenders may use it to send important information about
                                    this
                                    application.
                                </p>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-6">
                                    <label for="phonenumber" class="form-label">Phone Number
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="number" class="form-control " id="phonenumberid" name="phone_number"
                                           required>
                                    <div class="field-required"></div>
                                    <p class="small">Example: (555) 555-1234</p>

                                </div>
                            </div>
                            <!-- <div class="back-light">
                                <div class="py-4">
                                    <div class="d-flex ">
                                        <div class="lock mx-2">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="lock" class="svg-inline--fa fa-lock fa-w-14 "
                                                width="15px" height="15px" role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="red"
                                                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="ps-1">
                                            <p class="small mb-0">
                                                In order to see if you pre-qualify, our
                                                participating leaders needs the
                                                following information. <span class="text-red fw-bold">
                                                    This will not
                                                    impact
                                                    your credit score. </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mx-2">
                                        <div class="mt-3 form__field applicant col-md-6">
                                            <label for="scn" class="form-label  ">Social Security Number
                                                <span data-required="true" aria-hidden="true"></span>
                                            </label>
                                            <input type="number" help="Example: 123-45-6789"
                                                maxlength="11" id="scnid" class="form-control"
                                                name="scn" required >
                                            <div class="field-required"></div>
                                        </div>
                                        <div class="mt-3 form__field applicant col-md-6">
                                            <label for="dob" class="form-label">Date of birth
                                                <span data-required="true" aria-hidden="true"></span>
                                            </label>
                                            <input type="date" class="form-control " id="dobid"
                                                name="dob" required>
                                            <div class="field-required"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="tab">
                            <h3 class="text-center ">Hi <span class="firstnameidtab-2"></span>! Where do
                                you live?</h3>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-8">
                                    <label for="homeadd" class="form-label  ">Home address
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" id="homeaddid" class="form-control" name="home_address" required>
                                    <div class="field-required">
                                        hi
                                    </div>

                                </div>
                                <div class="mt-3 form__field applicant col-md-4">
                                    <label for="appunit" class="form-label">Apt/Unit
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" class="form-control" id="appunitid" name="app_unit" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-12">
                                    <label for="city" class="form-label">City
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" id="cityid" class="form-control" name="city" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-8">
                                    <label for="state" class="form-label  ">State
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>

                                    <select type="text" id="stateid" class="form-control" name="state" required>

                                        <option value="" disabled selected>Select a state</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>

                                    </select>
                                    <div class="field-required"></div>

                                </div>
                                <div class="mt-3 form__field applicant col-md-4">
                                    <label for="zipcode" class="form-label">Zip code
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" class="form-control" id="zipcodeid" name="zip_code" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <label for="durationofempe" class="form-label">Duration of
                                        employment
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <div class="row col">
                                        <div class="col">
                                            <select type="text" id="durationofempeid" class="form-control col"
                                                    name="duration" required>
                                                <option value="" disabled selected>Select Years</option>
                                                <option value="0">0 years</option>
                                                <option value="1">1 years</option>
                                                <option value="2">2 years</option>
                                                <option value="3">3 years</option>
                                                <option value="4">4 years</option>
                                                <option value="5">5 years</option>
                                                <option value="6">6 years</option>
                                                <option value="7">7 years</option>
                                                <option value="8">8 years</option>
                                                <option value="9">9 years</option>
                                                <option value="10">10 years</option>
                                                <option value="11">11 years</option>
                                                <option value="12">12 years</option>
                                                <option value="13">13 years</option>
                                                <option value="14">14 years</option>
                                                <option value="15">15 years</option>
                                                <option value="16">16 years</option>
                                                <option value="17">17 years</option>
                                                <option value="18">18 years</option>
                                                <option value="19">19 years</option>
                                                <option value="20">20 years</option>
                                                <option value="21">21 years</option>
                                                <option value="22">22 years</option>
                                                <option value="23">23 years</option>
                                                <option value="24">24 years</option>
                                                <option value="25">25 years</option>
                                                <option value="26">26 years</option>
                                                <option value="27">27 years</option>
                                                <option value="28">28 years</option>
                                                <option value="29">29 years</option>
                                                <option value="30">30 years</option>
                                                <option value="31">31 years</option>
                                                <option value="32">32 years</option>
                                                <option value="33">33 years</option>
                                                <option value="34">34 years</option>
                                                <option value="35">35 years</option>
                                                <option value="36">36 years</option>
                                                <option value="37">37 years</option>
                                                <option value="38">38 years</option>
                                                <option value="39">39 years</option>
                                                <option value="40">40 years</option>
                                                <option value="41">41 years</option>
                                                <option value="42">42 years</option>
                                                <option value="43">43 years</option>
                                                <option value="44">44 years</option>
                                                <option value="45">45 years</option>
                                                <option value="46">46 years</option>
                                                <option value="47">47 years</option>
                                                <option value="48">48 years</option>
                                                <option value="49">49 years</option>
                                                <option value="50">50 years</option>
                                                <option value="51">51 years</option>
                                                <option value="52">52 years</option>
                                                <option value="53">53 years</option>
                                                <option value="54">54 years</option>
                                                <option value="55">55 years</option>
                                                <option value="56">56 years</option>
                                                <option value="57">57 years</option>
                                                <option value="58">58 years</option>
                                                <option value="59">59 years</option>
                                                <option value="60">60 years</option>
                                                <option value="61">61 years</option>
                                                <option value="62">62 years</option>
                                                <option value="63">63 years</option>
                                                <option value="64">64 years</option>
                                                <option value="65">65 years</option>
                                                <option value="66">66 years</option>
                                                <option value="67">67 years</option>
                                                <option value="68">68 years</option>
                                                <option value="69">69 years</option>
                                                <option value="70">70 years</option>
                                                <option value="71">71 years</option>
                                                <option value="72">72 years</option>
                                                <option value="73">73 years</option>
                                                <option value="74">74 years</option>
                                                <option value="75">75 years</option>
                                                <option value="76">76 years</option>
                                                <option value="77">77 years</option>
                                                <option value="78">78 years</option>
                                                <option value="79">79 years</option>
                                                <option value="80">80 years</option>
                                                <option value="81">81 years</option>
                                                <option value="82">82 years</option>
                                                <option value="83">83 years</option>
                                                <option value="84">84 years</option>
                                                <option value="85">85 years</option>
                                                <option value="86">86 years</option>
                                                <option value="87">87 years</option>
                                                <option value="88">88 years</option>
                                                <option value="89">89 years</option>
                                                <option value="90">90 years</option>
                                                <option value="91">91 years</option>
                                                <option value="92">92 years</option>
                                                <option value="93">93 years</option>
                                                <option value="94">94 years</option>
                                                <option value="95">95 years</option>
                                                <option value="96">96 years</option>
                                                <option value="97">97 years</option>
                                                <option value="98">98 years</option>
                                                <option value="99">99 years</option>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <select type="text" id="durationofempemonthid" class="form-control col"
                                                    name="month" required>
                                                <option selected value="" disabled>Select Months
                                                </option>
                                                <option value="0">0 months</option>
                                                <option value="1">1 months</option>
                                                <option value="2">2 months</option>
                                                <option value="3">3 months</option>
                                                <option value="4">4 months</option>
                                                <option value="5">5 months</option>
                                                <option value="6">6 months</option>
                                                <option value="7">7 months</option>
                                                <option value="8">8 months</option>
                                                <option value="9">9 months</option>
                                                <option value="10">10 months</option>
                                                <option value="11">11 months</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="field-required"></div>

                                </div>

                            </div>
                            <div class="row mx-2" id="propertytypeid">
                                <p class="mb-0 mt-3">Property type</p>
                                <div class="p-0 mt-3 form__field applicant col">
                                    <input type="radio" id="ownid" class="opacity-0 " name="property_type" value="own"
                                           required>
                                    <label for="ownid" class="rounded-0 border bg-transparent w-100 form-label btn ">Own
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <div class="field-required"></div>

                                </div>
                                <div class="p-0 mt-3 form__field applicant col">
                                    <input type="radio" class=" opacity-0" id="rentid" name="property_type"
                                           value="Rent">
                                    <label for="rentid" class="rounded-0 border bg-transparent w-100 form-label btn ">Rent
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <div class="field-required"></div>

                                </div>
                                <div class="p-0 mt-3 form__field applicant col">
                                    <input type="radio" class="opacity-0 " id="otherid" name="property_type"
                                           value="Other">
                                    <label for="otherid" class="rounded-0 border bg-transparent w-100 form-label btn ">Other
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <div class="field-required"></div>
                                </div>
                            </div>

                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-12">
                                    <label for="monthlypayid" class="form-label  ">Monthly Pay
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="number" id="monthlypayid" class="form-control" name="monthly_pay"
                                           required>
                                    <div class="field-required"></div>

                                </div>
                            </div>


                        </div>
                        <div class="tab">
                            <h3 class="text-center">You're almost done.</h3>
                            <h6 class="text-center">Just a few questions about your
                                employment.</h6>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <!-- <label for="state" class="form-label  ">State
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label> -->
                                    <select id="empstatusid" class="form-control" name="employment_status" required>
                                        <option name="empstatusopt" value="">Select employment status
                                        </option>
                                        <option name="empstatusopt" value="Full-time">Full-time</option>
                                        <option name="empstatusopt" value="Part-time">Part-time</option>
                                        <option name="empstatusopt" value="Self-employed">Self-employed
                                        </option>
                                        <option name="empstatusopt" value="Unemployed">Unemployed
                                        </option>
                                        <option name="empstatusopt" value="Retired">Retired</option>
                                        <option name="empstatusopt" value="Military">Military</option>
                                        <option name="empstatusopt" value="Other">Other</option>
                                    </select>
                                    <div class="field-required"></div>

                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <label for="employer" class="form-label">Employer
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" id="employerid" class="form-control" name="employer" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>

                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <label for="jobtitle" class="form-label  ">Job Title
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="text" id="jobtitleid" class="form-control" name="job_title" required>
                                    <div class="field-required"></div>

                                </div>
                            </div>


                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <label for="durationofresidence" class="form-label">Duration of
                                        residence
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <div class="row col">
                                        <div class="col">
                                            <select type="text" id="durationofresidenceid" class="form-control col"
                                                    name="duration_of_residence" required>
                                                <option value="" disabled selected>Select Years</option>
                                                <option value="0">0 years</option>
                                                <option value="1">1 years</option>
                                                <option value="2">2 years</option>
                                                <option value="3">3 years</option>
                                                <option value="4">4 years</option>
                                                <option value="5">5 years</option>
                                                <option value="6">6 years</option>
                                                <option value="7">7 years</option>
                                                <option value="8">8 years</option>
                                                <option value="9">9 years</option>
                                                <option value="10">10 years</option>
                                                <option value="11">11 years</option>
                                                <option value="12">12 years</option>
                                                <option value="13">13 years</option>
                                                <option value="14">14 years</option>
                                                <option value="15">15 years</option>
                                                <option value="16">16 years</option>
                                                <option value="17">17 years</option>
                                                <option value="18">18 years</option>
                                                <option value="19">19 years</option>
                                                <option value="20">20 years</option>
                                                <option value="21">21 years</option>
                                                <option value="22">22 years</option>
                                                <option value="23">23 years</option>
                                                <option value="24">24 years</option>
                                                <option value="25">25 years</option>
                                                <option value="26">26 years</option>
                                                <option value="27">27 years</option>
                                                <option value="28">28 years</option>
                                                <option value="29">29 years</option>
                                                <option value="30">30 years</option>
                                                <option value="31">31 years</option>
                                                <option value="32">32 years</option>
                                                <option value="33">33 years</option>
                                                <option value="34">34 years</option>
                                                <option value="35">35 years</option>
                                                <option value="36">36 years</option>
                                                <option value="37">37 years</option>
                                                <option value="38">38 years</option>
                                                <option value="39">39 years</option>
                                                <option value="40">40 years</option>
                                                <option value="41">41 years</option>
                                                <option value="42">42 years</option>
                                                <option value="43">43 years</option>
                                                <option value="44">44 years</option>
                                                <option value="45">45 years</option>
                                                <option value="46">46 years</option>
                                                <option value="47">47 years</option>
                                                <option value="48">48 years</option>
                                                <option value="49">49 years</option>
                                                <option value="50">50 years</option>
                                                <option value="51">51 years</option>
                                                <option value="52">52 years</option>
                                                <option value="53">53 years</option>
                                                <option value="54">54 years</option>
                                                <option value="55">55 years</option>
                                                <option value="56">56 years</option>
                                                <option value="57">57 years</option>
                                                <option value="58">58 years</option>
                                                <option value="59">59 years</option>
                                                <option value="60">60 years</option>
                                                <option value="61">61 years</option>
                                                <option value="62">62 years</option>
                                                <option value="63">63 years</option>
                                                <option value="64">64 years</option>
                                                <option value="65">65 years</option>
                                                <option value="66">66 years</option>
                                                <option value="67">67 years</option>
                                                <option value="68">68 years</option>
                                                <option value="69">69 years</option>
                                                <option value="70">70 years</option>
                                                <option value="71">71 years</option>
                                                <option value="72">72 years</option>
                                                <option value="73">73 years</option>
                                                <option value="74">74 years</option>
                                                <option value="75">75 years</option>
                                                <option value="76">76 years</option>
                                                <option value="77">77 years</option>
                                                <option value="78">78 years</option>
                                                <option value="79">79 years</option>
                                                <option value="80">80 years</option>
                                                <option value="81">81 years</option>
                                                <option value="82">82 years</option>
                                                <option value="83">83 years</option>
                                                <option value="84">84 years</option>
                                                <option value="85">85 years</option>
                                                <option value="86">86 years</option>
                                                <option value="87">87 years</option>
                                                <option value="88">88 years</option>
                                                <option value="89">89 years</option>
                                                <option value="90">90 years</option>
                                                <option value="91">91 years</option>
                                                <option value="92">92 years</option>
                                                <option value="93">93 years</option>
                                                <option value="94">94 years</option>
                                                <option value="95">95 years</option>
                                                <option value="96">96 years</option>
                                                <option value="97">97 years</option>
                                                <option value="98">98 years</option>
                                                <option value="99">99 years</option>
                                            </select>

                                        </div>
                                        <div class="col">
                                            <select type="text" id="durationofresidenceidmonthid"
                                                    class="form-control col" name="month_of_residence" required>
                                                <option selected value="" disabled>Select Months
                                                </option>
                                                <option value="0">0 months</option>
                                                <option value="1">1 months</option>
                                                <option value="2">2 months</option>
                                                <option value="3">3 months</option>
                                                <option value="4">4 months</option>
                                                <option value="5">5 months</option>
                                                <option value="6">6 months</option>
                                                <option value="7">7 months</option>
                                                <option value="8">8 months</option>
                                                <option value="9">9 months</option>
                                                <option value="10">10 months</option>
                                                <option value="11">11 months</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="field-required"></div>

                                </div>

                            </div>

                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-12">
                                    <label for="primaryanum" class="form-label  ">Primary Annual Income
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input type="number" id="primaryanumid" class="form-control" name="primary_income"
                                           required>
                                    <div class="field-required"></div>

                                </div>
                            </div>

                        </div>
                        <div class="tab">
                            <h3 class="text-center ">Last two questions!</h3>
                            <h6 class="text-center ">In order to see if you pre-qualify, our
                                participating lenders
                                need the following information.This will not impact your credit score.
                            </h6>
                            <div class="row mx-2">
                                <div class="mt-3 form__field applicant col-md-12">
                                    <div class="py-4">
                                        <div class="d-flex ">
                                            <div class="lock">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                     data-icon="lock" class="svg-inline--fa fa-lock fa-w-14 "
                                                     width="15px" height="15px" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="red"
                                                          d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="ps-1">
                                                <p class="small mb-0">
                                                    We take your privacy very seriously. Your data is
                                                    safe, secure, and we will never share it without
                                                    your permission.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="scn" class="form-label">Social Security
                                                    Number
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="password" help="Example: 123-45-6789" maxlength="11"
                                                       id="scnid" class="form-control" name="social_security"
                                                       required="" oninput="myFunction()">
                                                <div class="field-required"></div>

                                            </div>
                                            <div class="mt-3 form__field applicant col-md-6">
                                                <label for="dob" class="form-label">Date of birth
                                                    <span data-required="true" aria-hidden="true"></span>
                                                </label>
                                                <input type="date" class="form-control " id="dobid" name="date_of_birth"
                                                       required="">
                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="tab">
                            <h3 class="text-center">Double check everything before you submit your
                                application</h3>

                            <div>
                                <div class="row mx-2">
                                    <div class="mt-3 form__field applicant col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black">Personal</h5>
                                            <p onclick="nextPrev(-4)">Edit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Name</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black firstnameid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Email address</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black emailid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Phone</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black phonenumberid"></h6>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div>
                                <div class="row mx-2">
                                    <div class="mt-3 form__field applicant col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black">Residence</h5>
                                            <p onclick="nextPrev(-3)">Edit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Address</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black homeaddid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Property type</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black propertytypeid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Months in residence</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black durationofresidenceid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Monthly payment</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black monthlypayid"></h6>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div>
                                <div class="row mx-2">
                                    <div class="mt-3 form__field applicant col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black">Employment</h5>
                                            <p onclick="nextPrev(-2)">Edit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Status</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black empstatusopt"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Employer</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black employerid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Job Title</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black jobtitleid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Months employed</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black "></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Primary annual income</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black primaryanumid"></h6>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div>
                                <div class="row mx-2">
                                    <div class="mt-3 form__field applicant col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black">Identity information</h5>
                                            <p onclick="nextPrev(-1)">Edit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold">Social Security Number</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black scnid"></h6>
                                        </div>
                                    </div>
                                    <div class="row form__field applicant ">
                                        <div class="col-6">
                                            <h6 class="fw-bold ">Date of birth</h6>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-black dobid"></h6>
                                        </div>
                                    </div>

                                    <hr>
                                </div>
                            </div>
                            <div>
                                <div class="back-light">
                                    <div class="py-4">
                                        <div>
                                            <h6 class="mx-3 ">Borrower agreement</h6>
                                            <div class="modal-detail-overview mx-3">
                                                            <span>By clicking “I agree”, you: <br> <br> 1. Authorize
                                                                Motorvero to share with Motorvero Participating Lenders
                                                                the information you have provided, so that they may
                                                                evaluate your eligibility for auto financing
                                                                pre-qualification;<br> <br> 2. Are providing written
                                                                instructions to each Motorvero Participating Lender under
                                                                the Fair Credit Reporting Act and are authorizing each
                                                                Motorvero Participating Lender to obtain information from
                                                                your personal credit profile from credit reporting
                                                                agencies, so that any Motorvero Participating Lender may
                                                                evaluate your eligibility for auto financing
                                                                pre-qualification;<br> <br> 3. Authorize each Motorvero
                                                                Participating Lender to share with Motorvero your credit
                                                                tier, range or band, so that Motorvero can show you
                                                                estimated finance offers for select vehicles displayed
                                                                on Motorvero’ website, for which you are pre-qualified,
                                                                pending confirmation of information to be provided later
                                                                in your complete credit application;<br> <br> 4.
                                                                Authorize Motorvero to share a Motorvero Participating
                                                                Lender’s response to your pre-qualification request
                                                                along with your pre-qualified terms and preferences,
                                                                including vehicle information, with participating
                                                                dealers; <br> <br>5. Authorize Motorvero to share with
                                                                its service providers the information you have provided
                                                                to Motorvero, to facilitate your financing experience at
                                                                the dealership; and <br> <br> 6. Authorize each Motorvero
                                                                Participating Lender to (1) share the information
                                                                provided by Motorvero from your pre-qualification request
                                                                with other Motorvero Participating Lenders, (2) share its
                                                                response to your pre-qualification request along with
                                                                your pre-qualified terms with Motorvero, and (3) share
                                                                its response to your pre-qualification request along
                                                                with your pre-qualified terms and preferences, including
                                                                vehicle information, with participating dealers. The
                                                                option to share with the dealer is not available at all
                                                                participating dealerships.</span>
                                            </div>
                                            <div class="px-1 mt-3 form__field applicant row">
                                                <div class="form-check d-flex">
                                                    <input class="" type="checkbox" name="agreed" value="1"
                                                           id="Borroweragreementid">
                                                    <label class="form-check-label ps-2 mb-0 form-label text-black"
                                                           for="Borroweragreementid">
                                                        I have read and agree to the borrower agreement
                                                        above.
                                                        <span data-required="true" aria-hidden="true"></span>
                                                    </label>
                                                </div>

                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mx-3 ">Terms & Conditions</h6>
                                            <div class="modal-detail-overview mx-3">
                                                <div class="UJ_0c"><span>By submitting my information, I certify that all of the information and statements in this form are true and complete and are made for the purpose of evaluating if I pre qualify for auto financing and facilitating my loan experience at the dealer. I authorize each Motorvero Participating Lender to obtain information from my personal credit profile from credit reporting agencies to check my credit and employment history. I authorize each Motorvero Participating Lender to obtain such information solely to evaluate if I pre qualify for auto financing and acknowledge that this is not an application for credit. By providing my email address and/or cell phone number, I am giving my prior express consent to receive email messages, calls and text messages regarding my request for pre qualification from each Motorvero Participating Lender or its authorized agents at that number, including calls and messages made by using an auto-dialer or prerecorded message. <br> <br> By submitting this form, I consent to receive by electronic means only, including through the email address I provided above, all required disclosures and related documents, and I understand that these electronic disclosures may not be available in any paper or non electronic form, so if I would like to retain a copy for my records, I may print or download these disclosures. I understand that consent to electronic delivery is a requirement for submitting this form online, and that my consent cannot be withdrawn once my form is submitted.<br> <br> I understand that to access, view, and retain disclosures electronically, I will need a valid e-mail address and the ability to receive and read e-mails. If my e-mail address changes, I agree to notify each Motorvero Participating Lender at the following phone numbers: <br> Capital One, by contacting customer service at +1 (888) 571-1528 <br> Westlake Financial, by contacting customer service at +1 (866) 669-0679 <br> Global Lending Services (GLS), by contacting customer service at +1 (877) 856-5029 <br> I will also need the most recent version of Adobe Reader which can be downloaded for free at get.adobe.com/reader/. Additionally, my computer must meet certain hardware and software requirements of each Motorvero Participating Lender’s website. To access and retain the information subject to this consent and to receive disclosures electronically, my personal computer will need a supported Internet web browser which supports the latest W3C HTML / DOM recommendations and 128 bit SSL encryption. I will also need access to a printer or the ability to download information to keep copies for my records. By submitting this form, I acknowledge that I have or have access to equipment that allows me to access, view and retain disclosures electronically in accordance with these standards. <br> <br> If jointly checking for pre qualification online through this website, both persons jointly and individually consent to receive by electronic means only, including through the email address provided above, all required disclosures and related documents, including, but not limited to, eligibility decision notices required by the Equal Credit Opportunity Act. All individuals attest that they are authorized to receive the required disclosures and to contract on behalf of all individuals. <br> <br> I acknowledge that I have reviewed each Motorvero Participating Lender’s Privacy Statements.</span>
                                                </div>
                                            </div>
                                            <div class="px-1 mt-3 form__field applicant row">
                                                <div class="form-check d-flex">
                                                    <input class="" type="checkbox" name="term_condition" value="1"
                                                           id="termsandconditions">
                                                    <label class="form-check-label ps-2 mb-0 form-label text-black"
                                                           for="termsandconditions">
                                                        I have read and agree to the terms and conditions above.
                                                        <span data-required="true" aria-hidden="true"></span>
                                                    </label>
                                                </div>

                                                <div class="field-required"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 my-3 px-3">
                            <button class="py-3 btn back-primary text-white w-100 border-0 rounded-1 "
                                    onclick="nextPrev(1)" id="nextBtn" type="button"></button>
                        </div>
                        <!-- <div style="overflow:auto;" class="modal-next-btn">


                                <button class="btn btn-primary" type="button" >Next</button>

                        </div> -->
                        <div class="col-12 px-3">
                            <div class="modal-detail">
                                            <span><b>How Pre-Qualification Works with Motorvero Participating
                                                    Lenders</b>
                                                <br> Obtain conditional pre-qualification for auto financing with a
                                                Motorvero
                                                Participating Lender (listed below) prior to visiting a
                                                participating
                                                dealer. Participating Lenders may review the information you provide
                                                to
                                                determine whether you pre-qualify with no impact to your credit
                                                score. If
                                                you pre-qualify with one or more of our Participating Lenders, you
                                                will be
                                                able to see your monthly payments, APRs and offer summaries for
                                                vehicles you
                                                may be considering. Your request for pre-qualification may not be
                                                submitted
                                                to all Participating Lenders. <br><br> Remember, your
                                                pre-qualification can
                                                only be used for the purchase of one, personal use vehicle. The
                                                offer
                                                summary will include an estimate of the financing terms (including
                                                down
                                                payment) you could qualify for when you apply for financing at the
                                                dealer.
                                                When you are ready to finance a vehicle, you can send your offer
                                                summary to
                                                a participating dealer to let them know you are conditionally
                                                pre-qualified
                                                for auto financing with a Motorvero Participating Lender. If you have
                                                recently applied and funded another loan with a Motorvero
                                                Participating
                                                Lender, this might impact your eligibility for a new loan with this
                                                pre-qualification. <br><br> <b>Motorvero Participating Lenders</b>
                                                <br> •
                                                Capital One, <a href="https://www.capitalone.com/cars" target="_blank">www.capitalone.com/cars</a> <br> • Westlake
                                                Financial,
                                                <a href="https://www.westlakefinancial.com" target="_blank">www.westlakefinancial.com</a> <br> • Global
                                                Lending
                                                Services, <a href="https://www.glsllc.com" target="_blank">www.glsllc.com</a> <br><br>
                                                <b><em>General Disclosures
                                                        Regarding Motorvero Financing pre-qualification</em></b>
                                                <br><br>
                                                <b>Monthly Payment, APR, and Product Terms</b> <br> Monthly payment
                                                and
                                                Annual Percentage Rate (APR) terms are not final until your
                                                financing is
                                                completed at a participating dealer. These terms are based on
                                                information
                                                you provide and might change if you update any information in the
                                                Motorvero
                                                financing experience or at the dealer. <br><br> Pre-qualification
                                                does not
                                                guarantee that you will receive financing or any particular
                                                financing terms,
                                                which are subject to change based on each Motorvero Participating
                                                Lender’s
                                                evaluation of your credit application submitted at the dealer and
                                                any
                                                required documents. <br><br> To pre-qualify, you must be at least 18
                                                years
                                                old, have a valid street address within the contiguous United States
                                                or an
                                                APO/FPO address. <br><br> <b>Using Your Motorvero Financing
                                                    Pre-Qualification
                                                    at a Dealer</b> <br> When you visit a participating dealer, show
                                                them
                                                your offer summary for the vehicle you would like to finance.
                                                Sharing with
                                                the dealer will allow that dealer to access your pre-qualified terms
                                                and
                                                preferences, including vehicle information. (Sharing is not a
                                                mandatory
                                                step.) Then you will fill out a credit application and provide any
                                                information needed for review to complete your financing. A credit
                                                application at the dealer will result in one or more inquiries
                                                posted to
                                                your credit file. After negotiating purchase terms and receiving
                                                dealer
                                                credit approval, you will sign a contract with the dealer reflecting
                                                both
                                                your purchase and financing terms. Your purchase will result in a
                                                retail
                                                installment contract with the dealer as the original creditor.
                                                <br><br>
                                                <b>Amount Financed Restrictions</b> <br> Your maximum Amount
                                                Financed may be
                                                based on income, key credit characteristics, the vehicle you are
                                                purchasing,
                                                the details of the financing deal, and/or the specific dealership
                                                from which
                                                you purchase the vehicle. The Amount Financed may include the
                                                vehicle sales
                                                price, tax, title, licensing fees, dealer fees, and any optional
                                                products,
                                                like service contracts and/or extended warranties, that you choose
                                                to
                                                purchase from the dealer. See “Additional Disclosures for
                                                Participating
                                                Lenders” section below for additional restrictions. <br><br>
                                                <b>APR</b> <br>
                                                APR is the Annual Percentage Rate. Advertised rates depend on the
                                                individual's credit and key financing characteristics, including but
                                                not
                                                limited to the Amount Financed, term, loan-to-value (LTV) ratio,
                                                down
                                                payment amount, and vehicle characteristics. A representative
                                                example of
                                                payment terms is as follows: a $1000 down payment, an amount
                                                financed of
                                                $22,000 with an APR of 10.00%, and a term of 72 months would have a
                                                monthly
                                                payment of $407.57. Cash down may be required in order to complete
                                                your
                                                purchase; down payments vary depending on your credit approval.
                                                Estimated
                                                rates are subject to change without notice. <br><br> Representative
                                                APR is
                                                based on the individual's credit and key financing characteristics,
                                                including but not limited to the amount financed, term, the
                                                loan-to-value
                                                (LTV) ratio, and vehicle mileage. Your actual APR will be based on
                                                your
                                                specific situation. <br><br> <b>Dealer Participation
                                                    Requirements</b> <br>
                                                Motorvero Participating Lenders provide financing for new and used
                                                vehicles
                                                purchased from participating dealers and offer pre-qualification at
                                                participating dealers through dealer websites. The list of
                                                Participating
                                                dealers is subject to change. Motorvero Participating Lenders may not
                                                offer
                                                financing for certain dealers, auto brokers, or private party
                                                sellers.
                                                Motorvero Financing pre-qualification program does not offer
                                                financing for
                                                lease buyouts. <br><br> <b>Vehicle Type Restrictions</b> <br>
                                                Pre-qualification terms with Motorvero Participating Lenders can only
                                                be used
                                                at participating dealer locations in connection with the purchase of
                                                a new
                                                or used car, light truck, minivan, or SUV intended for personal use.
                                                Certain
                                                Motorvero Participating Lenders do not offer financing for commercial
                                                vehicles, motorcycles, recreational vehicles (RVs), ATVs, boats,
                                                camper
                                                vans, motor homes, vehicles with a history of chronic malfunctions
                                                and/or
                                                manufacturer or dealer buy back (alternatively referred to as a
                                                lemon)
                                                branded title vehicles, lease buyouts, or vehicles without a Vehicle
                                                Identification Number (VIN) or title issued. Motorvero Participating
                                                Lenders
                                                may determine a vehicle to be commercial or otherwise ineligible
                                                based on
                                                the model and/or information provided to such Lenders. See
                                                “Additional
                                                Disclosures for Participating Lenders” section below for additional
                                                restrictions. <br><br> <b>Third Party Information and Additional
                                                    Products</b> <br> Motorvero Participating Lenders use third party
                                                information, otherwise available, to enhance your auto financing
                                                experience.
                                                Third party information includes, but is not limited to, trade-in
                                                values,
                                                car images, dealer reported mileage, the price, description, and
                                                availability of optional products that may be able to be financed
                                                with the
                                                vehicle (e.g., service contracts, GAP, and protection products),
                                                dealer
                                                advertised price and car details. Please note that third parties,
                                                including
                                                participating dealers, provide this information and that Motorvero
                                                Participating Lenders do not make any express or implied
                                                representations or
                                                warranties with respect to the accuracy of the provided third party
                                                information. You should verify the accuracy of any third party
                                                information
                                                on your own. All trademarks are the property of their respective
                                                owners.
                                                Vehicle images may not be representative of the dealer advertised
                                                vehicle.
                                                Cars are subject to prior sale and availability should be confirmed
                                                with the
                                                dealer. Dealer advertised prices for vehicles and other additional
                                                products
                                                are subject to change without notice. <br><br> Dealer advertised
                                                prices for
                                                vehicles and other optional products may be negotiable and may not
                                                include
                                                tax, title, license, and other fees charged by the dealer. Other
                                                fees may
                                                include, but are not limited to, document fees, dealer preparation
                                                fees, and
                                                delivery charges. You should verify with the dealer what is included
                                                in the
                                                dealer advertised price. You should also verify tax, title, and
                                                license fees
                                                with the dealer. Should you choose to purchase any additional
                                                products,
                                                including GAP, service contract and/or extended warranty, from a
                                                participating dealer, such charges may impact your financing terms.
                                                Those
                                                additional products may or may not be offered or sold by a Motorvero
                                                Participating Lender. <br><br> <b>Privacy</b> <br> When you fill out
                                                your
                                                pre-qualification request, you are providing your information to
                                                Motorvero so
                                                that Motorvero can facilitate your request for pre-qualification from
                                                a
                                                Motorvero Participating Lender. Motorvero will use and share the
                                                information
                                                you provide consistent with the written instructions you provide to
                                                Motorvero
                                                in your pre-qualification request and in accordance with its Privacy
                                                Policy,
                                                available at: <a href="https://www.Motorvero.com/Cars/privacyPolicy.html"
                                                                 target="_blank">www.Motorvero.com/Cars/privacyPolicy.html</a>.
                                                Additionally, should you complete your pre-qualification request on
                                                the
                                                Motorvero website, Motorvero Participating Lenders may use the
                                                information you
                                                provide in order to determine whether you may be eligible to
                                                pre-qualify for
                                                financing from one or more Motorvero Participating Lenders and to
                                                send you
                                                important information about your pre-qualification request. For
                                                complete
                                                information, see each Motorvero Participating Lender’s privacy
                                                policies at:
                                                <br><br> •&nbsp;For Capital One, see <a
                                                        href="https://www.capitalone.com/privacy" target="_blank">www.capitalone.com/privacy</a> <br> • For
                                                Westlake
                                                Financial, see <a
                                                        href="https://www.westlakefinancial.com/privacy-policy/"
                                                        target="_blank">www.westlakefinancial.com/privacy-policy/</a>
                                                <br>
                                                •&nbsp;For Global Lending Services, see <a
                                                        href="https://www.glsllc.com/privacy-1/" target="_blank">www.glsllc.com/privacy-1/</a> <br><br>
                                                <b><em>Additional
                                                        Disclosures for Capital One</em></b> <br><br> <b>Applicant
                                                    Restrictions</b> <br> • Minimum monthly income required is
                                                $1,500 or
                                                $1,800, depending on your credit qualifications. <br> •&nbsp;Any
                                                existing
                                                Capital One accounts must be in good standing (not over limit, past
                                                due, or
                                                delinquent). <br> •&nbsp;Pre-qualification terms expire 30 days from
                                                the
                                                date your pre-qualification request is received. <br><br> <b>Amount
                                                    Financed
                                                    Restrictions</b> <br> •&nbsp;For new and used vehicles, the
                                                minimum
                                                Amount Financed is $4,000 <br><br> <b>Vehicle Type Restrictions</b>
                                                <br> •
                                                Vehicle must be 2013 model year or newer and have fewer than 120,000
                                                miles.
                                                In some instances, you may be able to purchase a 2008 model year
                                                with fewer
                                                than 150,000 miles. <br> •&nbsp;Certain vehicle makes, including but
                                                not
                                                limited to, Oldsmobile, Daewoo, Saab, Suzuki or Isuzu are not
                                                eligible for
                                                financing. <br><br> <b><em>Additional Disclosures for Westlake
                                                        Financial</em></b> <br><br> <b>Applicant Restrictions</b>
                                                <br> •
                                                Existing Westlake/Western Funding/Wilshire Consumer Credit accounts
                                                must be
                                                in good standing <br> • No Open Bankruptcies <br> • Maximum of one
                                                open
                                                derogatory account (not including collection accounts and student
                                                loan
                                                accounts) <br> • Open auto loans require further review, and in most
                                                cases
                                                must be traded-in or paid-off <br> • Out-of-state purchases are
                                                subject to
                                                review <br> • Customer address must be a permanent, non-commercial
                                                property
                                                <br><br> <b>Amount Financed Restrictions</b> <br> • Minimum amount
                                                financed
                                                is $4,000 <br><br> <b>Vehicle Type Restrictions</b> <br>
                                                •&nbsp;Exotic makes
                                                (Ferrari, Maserati, Lamborghini, McLaren etc.) ineligible <br> •
                                                Branded
                                                titles and commercial vehicles ineligible. <br><br>
                                                <b><em>Additional
                                                        Disclosures for Global Lending Services</em></b> <br><br>
                                                <b>Applicant Restrictions</b> <br> • Applicant and co-applicant must
                                                be
                                                older than 18 years of age. <br> •&nbsp;Applicant or co-applicant’s
                                                primary
                                                source of income cannot be self-employment income or 1099 income.
                                                <br> • At
                                                least one applicant must have a gross monthly income of $1,800 or
                                                greater.
                                                <br> • Applicant(s) should have at least 2 years of job history with
                                                no
                                                employment gaps and a max of 2 jobs within the last 2 years. <br> •
                                                No open
                                                bankruptcies or recent major derogatories. <br> • A
                                                pre-qualification is
                                                valid for 30 days from the date the pre-qualification is granted.
                                                <br><br>
                                                <b>Amount Financed Restrictions </b> <br> • Minimum amount financed
                                                is
                                                $6,500 <br><br> <b>Vehicle Type Restrictions</b> <br> • Vehicle must
                                                be less
                                                than 10 years old. <br> • Vehicle must have less than 122,000 miles
                                                <br> •
                                                Exotic makes, discontinued makes, smart car, electric, gray market,
                                                modified, weather damaged, branded title, salvage title,
                                                remanufactured
                                                title, manufacturer "lemon law" buybacks, commercial, limousine,
                                                taxi,
                                                delivery, tow, or heavy duty, and any vehicle not listed in NADA/KBB
                                                are
                                                ineligible for financing.</span>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                    </form>


                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="./assets/js/nav.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.field-required').html(`
                    <div class="required"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg><p class="text-black">Required</p></div>
                    `);
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

        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit Your Application";
            $('#nextBtn').addClass('btnsave')
            // document.getElementById("nextBtn").addc = "Submit Your Application";
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
        document.querySelector('.propertytypeid').innerHTML = regForm.querySelector('[name="property_type"]').value;
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
            // document.getElementById("regForm").submit();
            $('body').on('click', '.btnsave', function (event) {
                event.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{url('finance')}}",
                    type: "POST",
                    data: $('#regForm').serialize(),
                    dataType: "json",
                    beforeSend: function () {
                        // Show the preloader
                        $('.preloader').show();
                    },
                    success: function (response) {
                        $('#regForm').trigger('reset');
                        // alert('Thank you');

                    },
                    error: function (xhr, status, error) {
                        // Handle the error if needed
                    },
                    complete: function () {
                        // Hide the preloader
                        $('.preloader').hide();
                        $('.modal-dialog-centered').hide();
                        var tymodal = document.getElementById('tyModal');
                        var tymodalll = document.getElementById('tymodalll');
                        tymodal.style.display = 'block';
                        tymodalll.style.display = 'flex';
                        // setTimeout(closety, 5000)
                    }
                });
            });

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

            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                var sibling = y[i].nextElementSibling;
                sibling.style.display = "block";

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

    function closety() {
        var tymodal = document.getElementById('tyModal');
        tymodal.style.display = 'none';
        location.reload()
    }

    $(document).ready(function () {
        $('#seReview').click(function () {
            $("#seReviews").slideToggle();
        });

        $('.btnsave').on('click', function (event) {
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{url('contact-dealer')}}",
                type: "POST",
                data: $('#productform').serialize(),
                dataType: "json",
                success: function (response) {
                    $('#productform').trigger('reset');
                    toastr.success('Message Send Successfully')
                }
            });
        });

        $('#btnOpenSearch').click(function (e) {
            if ($(this).text() == "Search") {
                $('.leftPanelWrapper').show();
                $(this).text("Hide Search");
            } else {
                $('.leftPanelWrapper').hide();
                $(this).text("Search");
            }
        })
        // if (window.innerWidth <= 768) {
        //     $('.leftPanelWrapper').hide();
        // }
        // $(window).resize(function () {
        //     if (window.innerWidth <= 768) {
        //         $('.leftPanelWrapper').hide();
        //     }
        // })

    })

    async function avvv() {
        let s = await swal("Request Sent", "Request Sent Soccessfully.", "success");
        if (s) {
            $('[data-bs-dismiss="modal"]').trigger('click');
        }
        //    swal.fire({
        //         position: 'top-end',
        //         icon: 'success',
        //         title: 'Your work has been saved',
        //         showConfirmButton: false,
        //         timer: 1500
        //     })
    }

    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
<script>
    $('.fadeslider').slick({
        autoplay: false,

        autoplaySpeed: 2000,
        responsive: [{
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                asNavFor: '.fadeslider-nav'
            }
        },]
    });
    $('.fadeslider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.fadeslider',
        centerMode: true,
        focusOnSelect: true
    });
    $('.autoplay').slick({
        infinite: true,

        autoplay: true,
        // loop:infinite,
        autoplaySpeed: 2000,
        // prevArrow: false,
        // nextArrow: false,
        responsive: [

            {
                breakpoint: 5500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            // {
            //     breakpoint: 480,
            //     settings: {
            //         slidesToShow: 1,
            //         slidesToScroll: 1
            //     }
            // }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    async function successwal() {
        let e = await swal("Reviews Saved", "Reviews Saved Successfully.", "success");
        if (e) {
            $('[data-bs-dismiss="modal"]').trigger('click');
        }
    }

    // async function errorswal() {
    //     let s = await swal("*Fields Required", "All Fields Are Required.", "warning");
    //
    //     //    swal.fire({
    //     //         position: 'top-end',
    //     //         icon: 'success',
    //     //         title: 'Your work has been saved',
    //     //         showConfirmButton: false,
    //     //         timer: 1500
    //     //     })
    // }

    function validateForm2() {
        var name = document.getElementById("ratingname").value;
        var email = document.getElementById("ratingemail").value;
        var star = document.getElementById("star1").checked;
        var cmnt = document.getElementById("ratingcomment").value;

        if (name === "" || email === "" || star === false || cmnt === "") {
            // event.preventDefault(); // Prevent form submission
            console.log("hello bro")
            // errorswal()
        } else {
            console.log("good bro");
            successwal()
        }

    }

    validateForm2()
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('.custom-accordion').on('click',function(){

            $(this).siblings('.custom-accordion-box').slideToggle();
        })
 $('.togglebutton').on('click',function(){

            $(this).siblings('.togglebox').slideToggle();
        })






        onload();
        $('#startChat').on('click',function () {
            $('#startChat').hide();
            $('#chatPannel').show();
        })
    });

    function onload() {
        var data = {
            'car': $('#car_id').val(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('user-data')}}",
            type: "POST",
            data: data,
            success: function (response) {
                console.log(data);
            },
        });
    }

    function submitFormData(event) {
        var form = document.getElementById('myForm').submit;
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting normally

            var formData = new FormData(form); // Create a new FormData object

            // Optional: Add additional data to the FormData object
            formData.append('extra_field', 'extra_value');

            // Send the form data via AJAX
            var request = new XMLHttpRequest();
            request.open('POST', form.action);
            request.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // Add CSRF token if needed
            request.send(formData);

            // Handle the response
            request.onreadystatechange = function () {
                if (request.readyState === XMLHttpRequest.DONE) {
                    if (request.status === 200) {
                        // Request successful, do something with the response
                        console.log(request.responseText);
                    } else {
                        // Request failed, handle the error
                        console.error('Error:', request.status);
                    }
                }
            };
        });
    }



</script>
{{--</body>--}}
</section>
@include('frontend/layouts/footer')
