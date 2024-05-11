@extends('frontend.layouts.master')
@section('title')
Our Team
@endsection
@section('content')
<style>
    .content-items {
        font-size: 20px;

    }
</style>
<section class="used-car-top-banner">
    <div class="container h-100">
    </div>
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">
        <div class="">
            <div class="col-md-10 mx-auto text-center">
                <h1 class="heading pb-4" data-aos="fade-up">
                    Our
                    <span>Team:</span>
                </h1>

            </div>
            <div class="content row">

                <div class="menubar col-md-4 d-flex flex-column">
                    @include('frontend.pages.user-sidebar')
                </div>
                <div class="descriptionbar col-md-8 mt-md-0 mt-4">
                    <h2><strong>
                            Leadership team:
                        </strong></h2>
                    <br>
                    <h5><strong>Langley Steinert:</strong>Founder/Executive Chairman</h5>
                    <div class="leadership row">
                        <div class="leader-img col-md-4">
                            <img src="{{asset('frontend/images/hunain/hunain1.jpeg')}}"  alt="">
                            <!-- <img src="https://static1.Motorvero.com/gfx/cg/corp/bios/steinertlangley2.jpg"> -->
                        </div>
                        <div class="leader-content col-md-8">
                            <p>
                                Langley Steinert founded motorvero in 2006 with a vision for helping
                                automotive shoppers better navigate their car search. Since then,
                                the company has grown to become a leading global automotive marketplace,
                                helping millions of shoppers find great car deals and connect with top-rated
                                dealers. Prior to founding motorvero, Langley was co-founder and Chairman
                                of TripAdvisor, Inc. an online travel marketplace. He also held management
                                roles at Viaweb (sold to Yahoo! Inc.), Papyrus, and Lotus Development Corp.
                            </p>
                        </div>
                    </div>


                    {{-- second leader                /--}}
                    <br>
                    <br>
                    <h5><strong>Jason Trevisan:</strong>CEO</h5>
                    <div class="leadership row">
                        <div class="leader-img col-md-4">
                        <img src="{{asset('frontend/images/hunain/hunain23.jpeg')}}"  alt="">        
                    </div>
                        <div class="leader-content col-md-8">
                            <p>
                                Jason joined Motorvero in 2015 as Chief Financial Officer, and he was appointed to CEO in 2021. Prior to joining Motovero, Jason was with Polaris Partners for twelve years, serving as General Partner since 2010. Prior to Polaris, he held various management roles in Analytics and Client Services at aQuantive (acquired by Microsoft) and was a consultant with Bain & Company. Jason received his MBA from The Tuck School of Business at Dartmouth College and a BA from Duke University.
                            </p>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="hrrow"></div>

                <br>
                <div class="col-md-12">
                    <div class="teammember my-4">
                        <div class="row position-relative">

                            <div class="col">
                            <img src="{{asset('frontend/images/hunain/hunain33.jpeg')}}"  alt="">
                                <h5>Sam Zales</h5>
                                <p>President & Chief Operating Officer</p>

                                <!-- <div class="teammember-quotes-arrow"></div>
                                <div class="teammember-quotes">

                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quod at, ipsam non distinctio perspiciatis iste officia, in odio, beatae minima magnam facere. Magni animi magnam repudiandae necessitatibus fugit temporibus.
                                </div> -->
                            </div>

                            <div class="col">
                            <img src="{{asset('frontend/images/hunain/hunain43.jpeg')}}"  alt="">
                                <h5>Javier Zamora</h5>
                                <p>General Counsel & Corporate Secretary</p>

                                <!-- <div class="teammember-quotes-arrow"></div>
                                <div class="teammember-quotes">

                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quod at, ipsam non distinctio perspiciatis iste officia, in odio, beatae minima magnam facere. Magni animi magnam repudiandae necessitatibus fugit temporibus.
                                </div> -->
                            </div>
                            <div class="col">
                            <img src="{{asset('frontend/images/hunain/hunain53.jpeg')}}"  alt="">
                                <h5>Matt Quinn</h5>
                                <p>Chief Technology Officer</p>

                                <!-- <div class="teammember-quotes-arrow"></div>
                                <div class="teammember-quotes">

                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quod at, ipsam non distinctio perspiciatis iste officia, in odio, beatae minima magnam facere. Magni animi magnam repudiandae necessitatibus fugit temporibus.
                                </div> -->
                            </div>
                            <div class="col">
                            <img src="{{asset('frontend/images/hunain/hunain63.jpeg')}}"  alt="">
                                <h5>Dafna Sarnoff</h5>
                                <p>Chief Marketing Officer</p>

                                <!-- <div class="teammember-quotes-arrow"></div>
                                <div class="teammember-quotes">

                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quod at, ipsam non distinctio perspiciatis iste officia, in odio, beatae minima magnam facere. Magni animi magnam repudiandae necessitatibus fugit temporibus.
                                </div> -->
                            </div>
                            <div class="col">
                            <img src="{{asset('frontend/images/hunain/hunain73.jpeg')}}"  alt="">
                                <h5>Andrea Eldridge </h5>
                                <p>Chief People Officer</p>

                                <!-- <div class="teammember-quotes-arrow"></div>
                                <div class="teammember-quotes">

                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quod at, ipsam non distinctio perspiciatis iste officia, in odio, beatae minima magnam facere. Magni animi magnam repudiandae necessitatibus fugit temporibus.
                                </div> -->
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-none">
                    <h2><strong>Board of Directors</strong></h2>
                    <br>
                    <br>

                    <h5><strong>Langley Steinert, Chairman</strong></h5>

                    <p>
                        Langley Steinert founded motorvero in 2006 with a
                        vision for helping automotive shoppers better navigate
                        their car search. Since then, the company has grown to become
                        a leading global automotive marketplace, helping
                        millions of shoppers find great car deals and connect
                        with top-rated dealers. Prior to founding motorvero,
                        Langley was co-founder and Chairman of TripAdvisor,
                        Inc. an online travel marketplace. He also held management
                        roles at Viaweb (sold to Yahoo! Inc.), Papyrus, and Lotus
                        Development Corp. In addition to serving as Executive Chairman
                        and Chairman of the Board at motorvero, he also is a Board member
                        at the Tuck School of Business at Dartmouth College, and he is
                        co-founder and Chairman of the Board at ApartmentAdvisor, an apartment
                        rental marketplace. Langley holds an MBA from the Tuck
                        of Business at Dartmouth College and a BA from Georgetown University.
                    </p>

                    <br>

                    <h5><strong>Steve Conine</strong></h5>

                    <p>
                        Steve Conine is Co-Founder and Co-Chairman of Wayfair Inc.
                        , a leading global online destination for the home.
                        Prior to co-founding Wayfair, Mr. Conine served as
                        Chief Technology Officer for Simplify Mobile Corporation,
                        an enterprise software company he co-founded in 2001.
                        He also served as Chief Operating Officer for the
                        London office of iXL Enterprises, Inc. and Chief
                        Technology Officer of Spinners Incorporated,
                        an IT consulting company he co-founded. Mr. Conine
                        holds a Bachelor of Science from Cornell University.
                    </p>

                    <br>


                    <h5><strong>Lori Hickok</strong></h5>

                    <p>
                        Steve Kaufer is Co-Founder, President and Chief Executive Office of Tripadvisor,
                        Inc., an online travel marketplace. He also serves on the Tripadvisor Board of
                        Directors. Prior to co-founding TripAdvisor, Mr. Kaufer served as President of
                        CDS, Inc., an independent software vendor specializing in programming and testing
                        tools. He also serves on the board of the Neuroendocrine Tumor Research Foundation,
                        a non-profit based in Boston. Mr. Kaufer holds a Bachelor of Arts
                        in Computer Science from Harvard University.
                    </p>

                    {{-- data section             --}}

                    <br>


                    <h5><strong>Greg Schwartz</strong></h5>

                    <p>
                        Greg Schwartz is co-founder and CEO of Tomo Networks,
                        a fintech startup that improves the homebuying experience.
                        Prior to Tomo, he served as President, Media and Marketplaces
                        of Zillow Group, Inc., an online real estate marketplace,
                        where he also previously served as Chief Business Officer,
                        as Chief Revenue Officer and as Vice President of Sales.
                        Prior to joining Zillow, he was Vice President of
                        Advertising Sales at CNNMoney.com, a financial media company,
                        and was previously National Accounts Director for the Automotive
                        and Finance Properties of Yahoo!, Inc., an online search company.
                        Mr. Schwartz holds a Bachelor of Arts in Government from Hamilton College.
                    </p>

                    {{-- data section             --}}
                    <br>


                    <h5><strong>Ian Smith</strong></h5>

                    <p>
                        Ian Smith is a Managing Director at Allen & Company LLC,
                        where he focuses on technology companies, providing advice
                        and investment banking services. He also serves on the board
                        of directors of Aurora Innovation, Inc., a privately held provider
                        of autonomous vehicle technology. Mr. Smith holds a Bachelor
                        of Arts from Williams College.
                    </p>

                    {{-- data section             --}}

                    <br>



                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function showQuote(id) {
        var quotes = document.getElementsByClassName('quote');
        for (var i = 0; i < quotes.length; i++) {
            quotes[i].style.display = 'none'; // Hide all quotes
        }
        var quote = document.getElementById(id);
        quote.style.display = 'block'; // Display the clicked quote
    }
</script>
@endsection