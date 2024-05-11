@extends('frontend.layouts.master')
@section('title')
    BY The Number
@endsection
@section('content')
    <style>
        .review-instant img {
            height: 500px;
            width: 100%;
            object-fit: cover;
        }

        .all-articals img{
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .adivce-resources img {
            height: 150px;
            width: 100%;
        }
    </style>
    <section>
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h1 class="fw-bold">Articles, advice </h1>
                <p>Discover our library of in-depth articles and valuable advice</p>
            </div>
            <div class="col-12">
                <div class="row">
                                        <div class="col-md-6 review-instant">
                                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">
                                            <h5 class="fw-bold pt-2">
                                                <a href="#">The Best Used SUVs Under $20,000 in 2023</a>
                                            </h5>
                                            <p class="clr-light">by Craig Fitzgerald</p>
                                            <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>
                                        </div>
                    <div class="col-md-6">
                        <div class="row adivce-resources">
                            @if($tip_advice_article->isNotEmpty())
                                @foreach($tip_advice_article as $val)

                                        <?php
                                        $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;
                                        ?>




                                    <div class="col-md-6">
                                        @if($val->media()->image == null)
                                            <img src="{{asset('images/media/'.$image)}}" alt="">
                                        @else
                                            <img
                                                    src="{{asset('images/media'.'/'.$val->media()->image)}}"
                                                    alt="">
                                        @endif
                                        <div>
                                            <h5 class="fw-bold pt-2">
                                                <a href="#">{{$val->title}}</a>
                                            </h5>
                                            <p class="clr-light">by {{$val->written_by??'No One'}}</p>
                                            <p>{!! substr($val->short_description, 0, 260); !!}</p>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <hr class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-center">Article categories</h1>
                </div>
                <div class="col-md-4 mt-3">
                    <button class="book-button py-3 text-center">
                        <a href="#" class="text-dark fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag fa-w-18" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg> &nbsp;
                            Shopping
                        </a>
                    </button>
                </div>
                <div class="col-md-4 mt-3">
                    <button class="book-button py-3 text-center">
                        <a href="#" class="text-dark fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M416 176c0 97.2-93.1 176-208 176c-38.2 0-73.9-8.7-104.7-23.9c-7.5 4-16 7.9-25.2 11.4C59.8 346.4 37.8 352 16 352c-6.9 0-13.1-4.5-15.2-11.1s.2-13.8 5.8-17.9l0 0 0 0 .2-.2c.2-.2 .6-.4 1.1-.8c1-.8 2.5-2 4.3-3.7c3.6-3.3 8.5-8.1 13.3-14.3c5.5-7 10.7-15.4 14.2-24.7C14.7 250.3 0 214.6 0 176C0 78.8 93.1 0 208 0S416 78.8 416 176zM231.5 383C348.9 372.9 448 288.3 448 176c0-5.2-.2-10.4-.6-15.5C555.1 167.1 640 243.2 640 336c0 38.6-14.7 74.3-39.6 103.4c3.5 9.4 8.7 17.7 14.2 24.7c4.8 6.2 9.7 11 13.3 14.3c1.8 1.6 3.3 2.9 4.3 3.7c.5 .4 .9 .7 1.1 .8l.2 .2 0 0 0 0c5.6 4.1 7.9 11.3 5.8 17.9c-2.1 6.6-8.3 11.1-15.2 11.1c-21.8 0-43.8-5.6-62.1-12.5c-9.2-3.5-17.8-7.4-25.2-11.4C505.9 503.3 470.2 512 432 512c-95.6 0-176.2-54.6-200.5-129zM228 72c0-11-9-20-20-20s-20 9-20 20V86c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V280c0 11 9 20 20 20s20-9 20-20V266.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V72z" />
                            </svg> &nbsp;
                            Selling
                        </a>
                    </button>
                </div>
                <div class="col-md-4 mt-3">
                    <button class="book-button py-3 text-center">
                        <a href="#" class="text-dark fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z" />
                            </svg> &nbsp;
                            Ownership and Maintenance
                        </a>
                    </button>
                </div>
                <div class="col-md-4 mt-3">
                    <button class="book-button py-3 text-center">
                        <a href="#" class="text-dark fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg> &nbsp;
                            News
                        </a>
                    </button>
                </div>
                <div class="col-md-4 mt-3">
                    <button class="book-button py-3 text-center">
                        <a href="#" class="text-dark fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg> &nbsp;
                            Buying Guides
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <hr class="mt-5">
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>All articles</h1>
                </div>
                <div class="col-md-6 form-group">
                    <select name="" id="exampleFormControlSelect1" class="form-control">
                        <option value="">Sorting by most recent</option>
                        <option value="">Sorting by least recent</option>
                    </select>
                </div>
                <div class="row all-articals">
                    @if($tip_advice_article->isNotEmpty())
                        @foreach($tip_advice_article as $val)

                                <?php
                                $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;
                                ?>

                            <div class="col-md-4">

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
                                    <p class="clr-light">by {{$val->written_by??'No One'}}</p>
                                    <p>{!! $val->short_description !!}</p>
                            </div>
                        @endforeach
                    @endif
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}

{{--                        <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image3.jpeg" alt="">--}}
{{--                        <h5 class="fw-bold pt-2">--}}
{{--                            <a href="#">The Best Used SUVs Under $20,000 in 2023</a>--}}
{{--                        </h5>--}}
{{--                        <p class="clr-light">by Craig Fitzgerald</p>--}}
{{--                        <p>Every mainstream manufacturer has at least one SUV model, and many have more. The $20,000 price point puts you in striking distance of some very nice vehicles, but how do you choose? We’ve broken down the used SUV options.</p>--}}

{{--                    </div>--}}

                </div>
{{--                <div class="col-12 d-flex justify-content-center mt-5">--}}
{{--                    <nav aria-label="...">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item disabled">--}}
{{--                                <span class="page-link">Previous</span>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><span class="page-link">--}}
{{--                                1--}}
{{--                                <span class="sr-only">(current)</span>--}}
{{--                            </span></li>--}}
{{--                            <li class="page-item" aria-current="page">--}}
{{--                                <a class="page-link" href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">Next</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
                        <div class="d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
            </div>

        </div>
    </section>
@endsection
