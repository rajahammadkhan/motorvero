@extends('frontend.layouts.master')
@section('title')
    New Car - {{config('app.name')}}
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
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <p class="heading">New cars <span> for sale</span>
                    </p>
                    <p> Find one that fits your needs and your budget</p>
                </div>
            </div>
        </div>
    </section>
    <section class="search bg-white py-4">
        <div class="container-fluid px-md-5 px-sm-3 px-2">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="heading text-start">By Make <span> & Model</span></h4>
                    <hr class="mx-auto">
                    @include('frontend.component.filter')

                </div>
                <div class="col-sm-8 ps-md-5">
                    <h2 class="heading text-start mt-sm-0 mt-3">By Body <span>style </span></h2>
                    <hr class="mx-auto ecu">
                    @include('frontend/snippets/body_style')
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 sec used-sec-2 py-0">
        <div class="used-sec-2-key-info ">
            <div class="container-fluid px-md-5 px-sm-3 px-2 position-relative h-100">
                <div class="row h-75 py-md-auto py-5">
                    <div class="col-md-6 col-12 my-auto ">
                        <h2 class="text-white
                         fw-normal font-primary">
                            Key info. All upfront.
                        </h2>
                        <h6 class="text-white my-3 lh-sm">Making information hard to find? Not our thing. The moment you
                            click on any car, you’ll see its deal rating, accident history, number of owners, and days
                            on lot so you know exactly what you’re getting.
                        </h6>
                        <div class="d-flex ">
                            <img src="{{asset('images/icon/icon1.png')}}" class="col-1 col-md-2" alt="">
                            <p class="fs-6  fw-bold font-secondary my-auto ms-3 text-white">Great Deal</p>
                        </div>
                        <div class="d-flex ">
                            <img src="{{asset('images/icon/icon2.png')}}" class="col-1 col-md-2" alt="">
                            <p class="fs-6  fw-bold font-secondary my-auto ms-3 text-white">One owner</p>
                        </div>
                        <div class="d-flex ">
                            <img src="{{asset('images/icon/icon3.png')}}" class="col-1 col-md-2" alt="">
                            <p class="fs-6  fw-bold font-secondary my-auto ms-3 text-white">Accident Check</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 my-3">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container-fluid px-md-5 px-sm-3 px-2">
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How do I know if I am getting a good deal?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>Rest assured you’re getting a good deal thanks to the proprietary MotorVero Instant Market Value (IMV).
                                We analyze every deal and give it a rating from Overpriced to Great.
                                And since we’re the largest online car marketplace, we know a good deal when we see one.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                How do I finance a used car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                Financing a used car through a dealership is easy—and you can even start the process online, right here on MotorVero. Tell us some details, get your pre-qualification, then shop online with real rates.
                                Once you find your dream car, head to the dealer with confidence and tell them you’re pre-qualified on MotorVero. When buying privately, you’ll need to secure financing on your own.
                                Many banks offer private party auto loans—contact your financial institution for more info.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                Can I lease a used car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                Some used cars and certified pre-owned (CPO) cars can be leased.
                                With a lease, you can get lower payments, fewer maintenance worries, and cheaper taxes.
                                Contact the dealer to see if the car you’re interested in is available for lease.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Are loan rates higher for used cars? Why?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row">
                            <p>
                                Yes—for a number of reasons. New cars have better resale value, credit scores are typically higher for new-car buyers, and people with lower scores tend to default on loans more often.
                                Also, some dealerships simply want you to buy a new car, so they may incent you to do so.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How much mileage is too much?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                Typically, most drivers rack up 12,000 miles per year.
                                This means, a 5-year-old car should have roughly 60,000 miles on it.
                                Anything significantly higher or lower may be cause for concern.
                                But mileage isn’t the only factor to consider.
                                Look into a vehicle’s history, condition, maintenance record, and previous ownership.
                                It’s also worth noting that cars are becoming more reliable every year.
                                With proper care, most newer models can expect very long lives on the road.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What's an extented warranty? Is it worth it?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                Extended warranties can provide valuable peace of mind to drivers by extending maintenance coverage for your car.
                                That being said, most consumer advocates advise against buying extended warranties, mostly because they tend to provide more coverage than the typical driver needs.
                                And with cars becoming more reliable every year, extended warranties are even less necessary.
                                This is especially true if you don’t plan to keep the car for very long.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Is it better to
                                buy privately or through a dealer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                There are benefits to both! Through a dealer, prices may be slightly higher, but you’ll get the peace of mind of dealing with a professional business with minimal risk.
                                Private sellers may offer the car you’re looking for at a better price.
                                In the past, buying on your own could be sketchy—but we’ve simplified the process, thanks to MotorVero Pay.
                                We verify sellers and titles, offer secure online transactions and you can find some really great deals. Learn more here.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What’s certified
                                pre-owned (CPO)?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>Certified pre-owned (CPO) cars are lightly used models that offer tremendous value.
                                These cars meet rigorous standards set by car manufacturers, meaning you’ll get a reliable car that’s backed by a warranty.
                                If you’re shopping for a luxury vehicle, CPO may be the perfect middle ground between the high prices of new vehicles and the risk of expensive repairs for used ones.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Is it better to
                                buy a used or new car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>
                                Ultimately, it comes down to personal preference. Many buyers see used cars as a way to get a great deal.
                                Used cars offer more value to buyers and with certified pre-owned (CPO) programs, it’s easy to find a reliable, gently used car.
                                However, the confidence that comes with buying a new car outweighs the upfront costs savings to some.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What additional
                                fees must I pay when buying a used car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row    ">
                            <p>Some dealers may add additional fees onto the price of your car.
                                These “doc fees” tend to vary dealer-by-dealer.
                                You can also expect to see additional fees for sales tax, car insurance, title transfers, inspection, and registration.
                                The amount you’ll pay depends on your state laws.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container-fluid mt-5 px-md-5 px-sm-3 px-2">
            <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="btn dropdown_menu2 bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                        <div class="d-md-block d-flex justify-content-between">
                            <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>New
                                Cars</span></h4>
                            <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                        </div>

                        <hr class="mx-auto ecu-2 d-md-block d-none">

                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items2 bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                        <div class="row px-md-3">

                            @if(App\Helpers\DefaultLanguage::Cars(['condition'=>'New']) != null)
                                @foreach(App\Helpers\DefaultLanguage::Cars(['condition'=>'New', 'paginate'=>16]) as $cars)
                                    <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
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
                $(this).parents('.parent_dropdown2').find   (".dropdown_menu2").toggleClass('active');
                $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
            });

        }
        checkMedia('')



    </script>
@endsection
