@extends('frontend.layouts.master')
@section('title')
Car Delivery
@endsection
@section('content')
<style>
    .dropdown_menu2 {
        border: 1px solid #70707041;
    }

    .dropdown_items {
        display: none;
    }
</style>
<section class="used-car-top-banner">
    <div class="container h-100 d-flex align-items-center">
        <div>
            <p class="heading">
                Your dream car, <span> delivered. </span>
            </p>
            <p>Any listing with is eligible for Motorvero Delivery and can be shipped directly to you.</p>
        </div>
    </div>
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mt-3">
                <h4 class="fw-bold ">Browse nationwide</h4>
                <p>Limited local stock is a thing of the past. Now you can search our entire eligible inventory to find the perfect ride.</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center mt-3">
                <h4 class="fw-bold ">Negotiate from your home</h4>
                <p>Connect with dealers across the country, pre-qualify online, and purchase your car without leaving your house.</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center mt-3">
                <h4 class="fw-bold ">Get it shipped to your doorstep</h4>
                <p>Your car will be safely transported to you. Don’t like the car after driving it around? Ask the dealership about their return policy before you buy.</p>
            </div>
        </div>
        <hr>

    </div>
    <div class="container-fluid px-md-5 px-sm-3 px-2 my-3">
        <h3 class="text-center my-4">Questions about Motorvero Delivery?</h3>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2 rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What is Motorvero Delivery?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-white rounded-3" style="display: none;">
                    <div class="row    ">
                        <p>It’s an easy way to buy a car that you can’t find in your area. It’s also a great way to practice social distancing.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                        Are all listings available for delivery?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row    ">
                        <p>
                        Only listings with the truck icon are available for delivery.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                        How much does it cost?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row    ">
                        <p>
                        It depends. Some dealers cover all delivery costs. Others may choose to include a flat fee or per mile fee, based on the distance. All fees (if any) are included the car’s listing price and will be indicated separately in search results next to the truck icon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Does delivery impact a car’s Instant Market Value (IMV)?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row">
                        <p>
                        The Instant Market Value (IMV) still represents a fair retail price based on a detailed analysis of comparable current and previous car listings in your local market.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How long does delivery take?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row    ">
                        <p>
                        This varies from dealer to dealer. When inquiring about a car, feel free to ask for a delivery timeframe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How do returns work?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row    ">
                        <p>
                        Returns vary depending on the dealer. Click on a vehicle to view the dealership’s return policy. You can also contact the dealer with further questions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  p-1  py-0 parent_dropdown2">
            <div class="col-12">
                <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">I am a dealer. How do I offer delivery?
                        </h4>
                        <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                    </div>


                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items  bg-white rounded-3 ">
                    <div class="row    ">
                        <p>
                        We're excited you want to participate! Fill out this form, or call 1-800-Motorvero and ask your Motorvero representative about Area Boost.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    function checkMedia(x) {
        // if (x.matches) {
        $(".dropdown_menu2").on('click', function() {
            $(this).parents('.parent_dropdown2').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
            $(this).parents('.parent_dropdown2').siblings().find(".showaccordion").removeClass('showaccordion').slideToggle();
            $(this).parents('.parent_dropdown2').find(".dropdown_menu2").toggleClass('active');
            $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
        });

    }
    checkMedia('')
</script>
@endsection