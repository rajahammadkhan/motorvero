@extends('frontend.layouts.master')
@section('title')
    Dealer
@endsection
@section('content')
    <style>
        .form-label>[data-required="true"]::after {
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

        label>[data-required="true"]::after,
        legend>[data-required="true"]::after {
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

        .tab.invalid>div {
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

        nav>div>div button.active:after {
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

        .lmbutton:hover {
            background-color: #0267a7;
            color: #ffffff;
        }

        .dropdown_items {
            display: none;
        }

        #comment_dealer_next_test {
            transform: rotate(180deg);
        }
        /*.form-title{*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*}*/
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <p class="heading">Dea<span>ler </span>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="sec-gsp-form bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row text-center">
                        <h1 class="heading pb-4">Request a demo</h1>


                        <p>To get started for free or to learn about our premium packages, call 800-CARGURUS or use this form and we'll reach out.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 mx-auto text-center">
                        <h1 class="heading pb-4" data-aos="fade-up">
                            Dealer Application
                            <span>Form</span>
                        </h1>

                    </div>
                    @if(auth()->check() && in_array('User',auth()->user()->getRoleNames()->toArray()))
                        <div class="col-md-12 mx-auto">
                            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                <h1 class="heading pb-4" data-aos="fade-up">
                                    Please Logout First
                                </h1>
                            </div>
                        </div>
                    @else
                        <div class="col-md-12 mx-auto">
                            @include('frontend/layouts/error')
                            <form class="row" method="post" action="{{url('post-dealer') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="dealership_name" class="form-control rounded-0 shadow-none border-0" placeholder="DealerShip Name*" required="">
                                </div>
                                <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="first_name" class="form-control rounded-0 shadow-none border-0" placeholder="First name*" required="">
                                </div>
                                <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="last_name" class="form-control rounded-0 shadow-none border-0" placeholder="Last name*" required="">
                                </div>
                                <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="email" name="work_email" class="form-control rounded-0 shadow-none border-0" placeholder="Your Work email address*" required="">
                                </div>
                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="phone_no" class="form-control rounded-0 shadow-none border-0" placeholder="Phone no*" required="">
                                </div>
                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <select name="state" class="form-control rounded-0 shadow-none border-0" required="">
                                        <option value="">Select State*</option>
                                        <option value="Small">AA</option>
                                        <option value="Medium">AB</option>
                                        <option value="Large">AC</option>
                                        <option value="Large">AD</option>
                                        <option value="Large">AE</option>
                                        <option value="Large">DF</option>
                                        <option value="Large">TG</option>
                                        <option value="Large">NJ</option>
                                    </select>
                                </div>
                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <select name="used_inventory" class="form-control rounded-0 shadow-none border-0" required="">
                                        <option value="">Select Used Inventory Size*</option>
                                        <option value="Small">0-20</option>
                                        <option value="Medium">20-50</option>
                                        <option value="Large">50-100</option>
                                        <option value="Large">100-200</option>
                                        <option value="Large">200+</option>
                                    </select>
                                </div>

                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="zip_code" class="form-control rounded-0 shadow-none border-0" placeholder="Zip Code*" required="">
                                </div>

                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <input type="text" name="website" class="form-control rounded-0 shadow-none border-0" placeholder="website*" required="">
                                </div>
                                <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                    <button type="submit" class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row my-5">
                <div calss="col-md-12 ">
                    <div class="p-4" style="background-color: #0277bd;">
                        <div class="mx-4">
                            <p class="text-center text-white" style="font-size: 30px;">
                                <b> Motorvero has everything you need to accelerate your marketing, inventory, and retail
                                    operations.</b>
                            </p>

                            <p class="text-center text-white mx-4 my-3" style="font-size: 20px;">
                                Dealers know that Motorvero delivers informed, ready-to-buy shoppers at a scale that can
                                drive results. Now, we’re more than that: partnering with Motorvero gives you <b>the
                                    power to reach your destination,</b> whether you want to acquire and sell wholesale,
                                reach more shoppers, retail more effectively, or boost profits.
                            </p>


                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img style="width: 98%; height: 98%;" src="https://images.ctfassets.net/0czyc7nlfvzo/2w0xbf8bvCSYWDOdwY5JA/6c5ae2b63056d0cb4aa5269d73956fcb/CG_Onboarding_DRC_Headers_Getting_Started.png">
                            </div>
                            <div class=" col-md-6">

                                {{-- picture  grid info                --}}
                                <div class="row col-md-12">
                                    <div class="col border-bottom border-white my-auto">
                                        <div class="col-12 text-white">
                                            <h4 class="text-center" style="">Engaged Shoppers</h4>
                                            <p class="text-center" style="">
                                                Reach more shoppers, on more channels, and connect with more
                                                purchase-ready buyers
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col border-start border-white my-auto">
                                        <div class="col-12 text-white">
                                            <h4 class="text-center" style="">A Dynamic Marketplace</h4>
                                            <p class="text-center" style="">
                                                Effectively market, instantly acquire, and quickly sell vehicles, with
                                                nationwide reach
                                            </p>
                                        </div>

                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col border-end dfd border-white my-auto">
                                        <div class="col-12 text-white">
                                            <h4 class="text-center" style="">Data-driven Decision Tools</h4>
                                            <p class="text-center" style="">
                                                The data you need for better inventory management, higher profit
                                                margins, and faster turn
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col border-top my-auto">
                                        <div class="col-12 text-white ">
                                            <h4 class="text-center" style="">One Integrated Platform</h4>
                                            <p class="text-center" style="">
                                                A complete automotive marketplace with all the tools needed to sell
                                                inventory faster
                                            </p>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>


                    </div>
                </div>
                {{-- partner info              --}}


                <div class="container-fluid mx-2" style="background-color: #e2e8f0; ">

                    <div class="row p-3">
                        <div class="col-md-12 my-4">
                            <h2 class="text-center"><b>A partner for the long haul</b></h2>
                        </div>
                        <p class="text-center">In Motorvero, you get a partner dedicated to helping you succeed. The
                            <a href="{{url('by-the-number')}}"><u>statistics bear that out across our integrated platform:</u></a></p>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4">
                            <div class="card py-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">50%</h5>
                                    <p class="card-text text-center ">more visits than our next competitor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card py-5">

                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">3X</h5>
                                    <p class="card-text text-center ">more likely to be the last site consumers
                                        visit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card py-5">

                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">16% / 22%</h5>
                                    <p class="card-text text-center ">increase in speed to sale over AutoTrader /
                                        Cars.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card py-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">$2B</h5>
                                    <p class="card-text text-center ">of inventory traded on CarOffer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card py-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">64%</h5>
                                    <p class="card-text text-center ">increase in close rate on Motorvero pre-qualified
                                        leads</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card py-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-size: 60px; font-weight:500; color: #145ad5">10,000+</h5>
                                    <p class="card-text text-center ">Dealers enrolled with CarOffer - and growing every
                                        day</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="product-side">

                    <div class="row p-3">
                        <div class="col-md-12 my-4">
                            <h2 class="text-center"><b>MotorVero Product</b></h2>
                        </div>
                        <p class="text-center">In Motorvero, you get a partner dedicated to helping you succeed. The
                            statistics bear that out across our integrated platform:</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border border-white">
                                <div class="card-img-top d-flex justify-content-center">
                                    <img class="align-items-center" style="width: 200px; height: 200px;" src="https://images.ctfassets.net/0czyc7nlfvzo/7g1BQU2ePgkZdc7JmVtC6z/d93de3bfe4a95571428c6e69b559b328/CG_Icons_Listings-01.png">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Listings</b></h5>
                                    <p class="card-text text-center mx-3">Our foundational car listings product
                                        effectively drives low-funnel shoppers to your vehicles.</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{url('car-listing')}}" class="lmbutton btn btn-white btn-outline-primary rounded-0">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border border-white">
                                <div class="card-img-top d-flex justify-content-center">
                                    <img class="align-items-center" style="width: 200px; height: 200px;" src="https://images.ctfassets.net/0czyc7nlfvzo/6QKrLmgrDHal30S9e0vUtW/bd0ecea1b6dbf5ff17da90a6ec21967e/CG_Icons_Caroffer-01.png">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>CarOffer</b></h5>
                                    <p class="card-text text-center mx-3">Together, Motorvero and CarOffer are
                                        reinventing how dealers source and sell vehicles</p>

                                    <div class="d-flex justify-content-center">
                                        <a href="{{url('car-offer')}}" class="lmbutton btn btn-white btn-outline-primary rounded-0">Learn
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border border-white">
                                <div class="card-img-top d-flex justify-content-center">
                                    <img class="align-items-center" style="width: 200px; height: 200px;" src="https://images.ctfassets.net/0czyc7nlfvzo/6zAOX5HthVBA8CjUZcLR0G/e2f55ed4fa3ec570787d7c95b00be2fe/CG_Icons_Digital-Marketing-v2-copy.png">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><b>Digital Deal</b></h5>
                                    <p class="card-text text-center mx-3">Higher quality leads to help dealers close
                                        more business in less time</p>

                                    <div class="d-flex justify-content-center">
                                        <a href="{{url('car-deal')}}" class="lmbutton btn btn-white btn-outline-primary rounded-0">Learn
                                            More</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>



                {{-- <div class="personcontent">--}}
                {{-- <div class="row">--}}
                {{-- <div class="col-md-12">--}}
                {{-- <div class="col-md-4 col-12">--}}
                {{-- <img src="//images.ctfassets.net/0czyc7nlfvzo/2VbzZoMkjO1VSyrN9ggjcw/6862b4233c727e537fb9f1ac3bcff32d/Screenshot_2023-05-22_at_12.37.32_PM.png" style="width: 50">--}}
                {{-- </div>--}}
                {{-- <div class="col-md-8 col-12" style="color: blue" >--}}
                {{-- <h2>hello </h2>--}}
                {{-- </div>--}}

                {{-- </div>--}}
                {{-- </div>--}}


                {{-- </div>--}}

            </div>

        </div>


    </section>
    <section class="mt-5 pt-5">
        <div class="container position-relative ecslider">
            <h2 class="heading text-center">Testi<span>monial
            </span></h2>
            <hr class="mx-auto ecu">


            <div class=" slidertestimonial testimonial" id="testimonialdealer">

                <div class="p-3">
                    <div class="card mb-3">
                        <div class=" g-0">
                            <div class="d-flex justify-content-center">

                                <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">

                            </div>
                            <div class="mt-4">
                                <div class="card-body rounded-4 bg-white position-relative">

                                    <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                    </svg>
                                    <p class="card-text my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sit ad, amet doloremque incidunt vel tenetur, nesciunt ea natus harum ipsa labore minima fugit! Distinctio ipsum error, eos minus veritatis tempora culpa, ipsa cum eum nemo deleniti eius inventore blanditiis est saepe omnis sunt quisquam expedita earum atque numquam quidem?</p>
                                    <h4 class="card-title   fw-bold mt-3 ">
                                        Abeer
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="card mb-3">
                        <div class=" g-0">
                            <div class="d-flex justify-content-center">

                                <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">

                            </div>
                            <div class="mt-4">
                                <div class="card-body rounded-4 bg-white position-relative">

                                    <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                    </svg>
                                    <p class="card-text my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sit ad, amet doloremque incidunt vel tenetur, nesciunt ea natus harum ipsa labore minima fugit! Distinctio ipsum error, eos minus veritatis tempora culpa, ipsa cum eum nemo deleniti eius inventore blanditiis est saepe omnis sunt quisquam expedita earum atque numquam quidem?</p>
                                    <h4 class="card-title   fw-bold mt-3 ">
                                        Abeer
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="card mb-3">
                        <div class=" g-0">
                            <div class="d-flex justify-content-center">

                                <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">

                            </div>
                            <div class="mt-4">
                                <div class="card-body rounded-4 bg-white position-relative">

                                    <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                    </svg>
                                    <p class="card-text my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sit ad, amet doloremque incidunt vel tenetur, nesciunt ea natus harum ipsa labore minima fugit! Distinctio ipsum error, eos minus veritatis tempora culpa, ipsa cum eum nemo deleniti eius inventore blanditiis est saepe omnis sunt quisquam expedita earum atque numquam quidem?</p>
                                    <h4 class="card-title   fw-bold mt-3 ">
                                        Abeer
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="card mb-3">
                        <div class=" g-0">
                            <div class="d-flex justify-content-center">

                                <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">

                            </div>
                            <div class="mt-4">
                                <div class="card-body rounded-4 bg-white position-relative">

                                    <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                    </svg>
                                    <p class="card-text my-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sit ad, amet doloremque incidunt vel tenetur, nesciunt ea natus harum ipsa labore minima fugit! Distinctio ipsum error, eos minus veritatis tempora culpa, ipsa cum eum nemo deleniti eius inventore blanditiis est saepe omnis sunt quisquam expedita earum atque numquam quidem?</p>
                                    <h4 class="card-title   fw-bold mt-3 ">
                                        Abeer
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                <a id="comment_dealer_prev_test">
                    <svg class="icon-carousel-control" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                        <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                        <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                        </path>
                    </svg>

                </a>
                <a id="comment_dealer_next_test">
                    <svg class="icon-carousel-control next" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                        <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                        <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section class="sec-gsp-form bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1>Want to see how Motorvero can help you?</h1>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 mx-auto text-center">
                        <h1 class="heading pb-4" data-aos="fade-up">
                            Dealer Application Form
                        </h1>

                    </div>
                    <div class="col-md-12 mx-auto">
                        @include('frontend/layouts/error')
                        <form class="row" method="post" action="{{url('post-dealer') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="dealership_name" class="form-control rounded-0 shadow-none border-0" placeholder="DealerShip Name*" required="">
                            </div>
                            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="first_name" class="form-control rounded-0 shadow-none border-0" placeholder="First name*" required="">
                            </div>
                            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="last_name" class="form-control rounded-0 shadow-none border-0" placeholder="Last name*" required="">
                            </div>
                            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="email" name="work_email" class="form-control rounded-0 shadow-none border-0" placeholder="Your Work email address*" required="">
                            </div>
                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="phone_no" class="form-control rounded-0 shadow-none border-0" placeholder="Phone no*" required="">
                            </div>
                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <select name="state" class="form-control rounded-0 shadow-none border-0" required="">
                                    <option value="">Select State*</option>
                                    <option value="Small">AA</option>
                                    <option value="Medium">AB</option>
                                    <option value="Large">AC</option>
                                    <option value="Large">AD</option>
                                    <option value="Large">AE</option>
                                    <option value="Large">DF</option>
                                    <option value="Large">TG</option>
                                    <option value="Large">NJ</option>
                                </select>
                            </div>
                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <select name="used_inventory" class="form-control rounded-0 shadow-none border-0" required="">
                                    <option value="">Select Used Inventory Size*</option>
                                    <option value="Small">0-20</option>
                                    <option value="Medium">20-50</option>
                                    <option value="Large">50-100</option>
                                    <option value="Large">100-200</option>
                                    <option value="Large">200+</option>
                                </select>
                            </div>

                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="zip_code" class="form-control rounded-0 shadow-none border-0" placeholder="Zip Code*" required="">
                            </div>

                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <input type="text" name="website" class="form-control rounded-0 shadow-none border-0" placeholder="website*" required="">
                            </div>
                            <div class="col-12 my-1 aos-init" data-aos="fade-up">
                                <button type="submit" class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </section>
    <script>
        comment_dealer_prev_test.addEventListener('click', () => {
            console.log("sahi h na");
            document.getElementById('testimonialdealer').querySelector('.slick-prev').click();
        })
        comment_dealer_next_test.addEventListener('click', () => {
            document.getElementById('testimonialdealer').querySelector('.slick-next').click();
        })
    </script>
@endsection
