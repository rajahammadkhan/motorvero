@extends('frontend.layouts.master')
@section('title')
Site Map
@endsection
@section('content')

<section class="used-car-top-banner">
    <div class="container h-100 d-flex align-items-center">
        <p class="heading"> Site <span> Map </span> </p>
    </div>
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">

        <div class="col-md-12">
            <div>
                <p class="heading text-center">Home </p>
                <div class="row justify-content-center">
                    <div class="col-md-3 col-6">

                        <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                            <div class="card-body p-0">
                                <a href="{{url('/')}}">
                                    <h5 class="card-title text-primary fw-bold fs-6 text-center mb-0 py-3">SELL MY CAR ONLINE</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                            <div class="card-body p-0">
                                <a href="{{url('/#CarsYouMayLike')}}">
                                    <h5 class="card-title text-primary fw-bold fs-6 text-center mb-0 py-3">Cars You May Like</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('new-car')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Buy Car</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('sell-car')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Sell Car</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('customer-reviews')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Customer Reviews</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('Customer-Support')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Customer Support</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('delivery')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">How Delivery Works</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('security')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Security</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('our-team')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Our Team</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('press-room')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Press Room</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('inv-rel')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Investor Relations</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('blogs')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Blog</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('career')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Careers</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('dealer')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Dealer Signup</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('sitemap')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Site Map</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('find-dealer')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Find a Dealer</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('dealer')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Dealer Resources</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('contact')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Contact Us</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('personal-info')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Do Not Sell My Personal Information</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('terms')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Terms of Use</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('privacy')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Privacy</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('ib-ads')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Interest-Based Ads</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('certified-car')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Certified Cars</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('financing')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Financing</h5>
                    </a>
                </div>
            </div>
            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                <div class="card-body ">
                    <a href="{{url('research')}}">
                        <h5 class="card-title text-primary fw-bold fs-6">Research</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection