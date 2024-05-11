@extends('frontend.layouts.master')
@section('title')
  Tips And Advice
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


    <section>
        <div class="container">
            <div class="col-12 text-center mb-4">
                <h1 class="fw-bold">Tips And Advice</h1>
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
                    @if($tip_advice_article->isNotEmpty())

                        <div class="col-md-6">
                            <div class="row adivce-resources">
                                @foreach($tip_advice_article as $val)
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
                </div>
            </div>
        </div>
    </section>

@endsection
