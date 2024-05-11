@extends('frontend.layouts.master')
@section('title')
Customer Support
@endsection
@section('content')
<style>
    .aboutdeals>div svg {
        margin: 0;
    }

    .content-items {
        font-size: 20px;

    }

    .menubar a {
        text-decoration: none;
        color: #4179ee;
    }

    .menubar a:hover {
        text-decoration: none;
        margin-left: 10px;
        margin-right: -10px;
        transition: margin-left 0.4s, margin-right 0.4s;
    }
</style>
<section class="used-car-top-banner">
    <div class="container h-100">
    </div>
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">

        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card">
                    <p class="heading-m text-center py-3">
                        Sell My Car
                    </p>
                    <ul class="popArticles">

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Instant Offer: How does the offer process work? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What are my payment options and when do I get paid when going through the instant offer process? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Who is actually buying the car from me? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Which documents do I need to provide to sell my vehicle? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How does picking up my car work? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How is my offer calculated? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Instant Offer: General FAQs </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What do you need from me to generate an instant offer? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Can I sell my vehicle if I have a loan on it? </a></li>
                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How do you confirm my car details are correct? </a></li>

                    </ul>

                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <p class="heading-m text-center py-3">
                        Private Listings
                    </p>
                    <ul class="popArticles">

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Featured Private Listings </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Listing a car privately on CarGurus! </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What is the private sale estimate for my car? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                A buyer wants to test drive my car. What do I do? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How to sell a car privately with a lien </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What is a listing verification photo? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Where can I edit my listing? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Featured Listing Terms and Conditions </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How do I close or extend a listing? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How does private buyer-seller communication work? </a></li>

                    </ul>

                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <p class="heading-m text-center py-3">
                        General

                    </p>
                    <ul class="popArticles">

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What is IMV? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How CarGurus mitigates fraudulent private listings </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                CarGurus Delivery </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How do I contact the seller? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                I wish to unsubscribe from CarGurus </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                What is curbstoning? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Does CarGurus sell cars? </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Dealer Review Content Guidelines </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                Deleting your CarGurus Account </a></li>

                        <li class="mb-3"><a href="{{url('customer-support-detail')}}">
                                How do I search for a car? </a></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

</section>
@endsection