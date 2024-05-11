@extends('frontend.layouts.master')
@section('title')
About
@endsection
@section('content')
<style>
    .aboutdeals>div svg{
        margin: 0;
    }
    .content-items {
        font-size: 20px;

    }

    a {
        text-decoration: none;
        color: #4179ee;
    }

    a:hover {
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

        <div class="col-md-12">
            <div class="content row">

                <div class="menubar col-md-4 d-flex flex-column">
                    @include('frontend.pages.user-sidebar')

                </div>

                <div class="descriptionbar col-md-8">
                    <h3><strong>
                            Building the World’s Most Trusted & Transparent Automotive Marketplace
                        </strong></h3>
                    <br>
                    <br>
                    <h5>Our Story:</h5>

                    <p>
                        Motorvero (Nasdaq: CARG) was founded in 2006 in Cambridge,
                        Massachusetts by Langley Steinert, co-founder of TripAdvisor,
                        who saw an opportunity to create a better car-shopping experience
                        using technology and data analytics. In just over a decade,
                        Motorvero has become the most visited automotive shopping site in the
                        US1, with more car listings than any other major online automotive
                        marketplace in the US.2 Motorvero also operates sites in Canada and the UK.
                        Motorvero began trading on the Nasdaq Global Select Market in October 2017.
                    </p>

                    <br>
                    <br>



                </div>
                <div class="row mt-5">
                    <h4>What Sets Motorvero Apart?</h4>
                    <br>

                    <h5><strong>Best Deals First</strong></h5>

                    <p>
                        Motorvero gives each car a deal rating
                        from great to overpriced and sorts organic
                        search results in that order. Great deals
                        from top-rated dealers always rank at the
                        top of these search results.
                    </p>
                    <br>
                    <div class="d-md-flex aboutdeals">
                        <div class="great my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="006b00" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                            </svg>
                            <p>GREAT DEAL</p>

                        </div>
                        <div class="good my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="006b00" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                            </svg>
                            <p>GOOD DEAL</p>

                        </div>
                        <div class="fair my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="006b00" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                            </svg>
                            <p>FAIR DEAL</p>

                        </div>
                        <div class="high my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="006b00" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                            </svg>
                            <p>HIGH DEAL</p>

                        </div>
                        <div class="overpriced my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="006b00" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                            </svg>
                            <p>OVERPRICED</p>

                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="dataanalytics">

                        <h5><strong>Powerfull data Analysis:</strong></h5>

                        <p>
                            Motorvero's search is powered by complex mathematical
                            algorithms built over many years. These algorithms
                            analyze data on millions of car listings every day,
                            accounting for factors like:
                        </p>
                        <ul>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                    </svg>
                                </div>
                                <p>Price</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                    </svg>
                                </div>
                                <p>
                                    Mileage</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
                                        <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                        <path d="M12 14v7"></path>
                                        <path d="m10 12-6.75-2"></path>
                                        <path d="m14 12 6.75-2"></path>
                                    </svg>
                                </div>
                                <p>

                                    Trim & options</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                    </svg>
                                </div>
                                <p>
                                    Accident history</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                        <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z" />
                                    </svg>
                                </div>
                                <p>
                                    Certified pre-owned (CPO) status</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div>
                                <p>

                                    Location: Our Instant Market Value (IMV) is calculated for over 150 different urban
                                    and rural markets across the US.</p>
                            </li>
                            <li>
                                <div class="analytics-svgs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg>
                                </div>
                                <p>

                                    Dealer reputation: Motorvero uses dealer reputation as a ranking factor based on
                                    thousands of verified dealership reviews from Motorvero shoppers.</p>
                            </li>
                        </ul>
                    </div>

                    <br>
                    <br>

                    <h5><strong>Over 5 Million Listings</strong></h5>

                    <p>
                        That’s more than you’ll find on any other major online automotive marketplace in the US.
                    </p>

                    <br>
                    <br>

                    <h5><strong>Information Transparency</strong></h5>

                    <p>
                        See hard-to-find data right up front, like if a car’s been in an accident, had a price drop,
                        or been sitting on the lot.
                    </p>


                    <br>
                    <br>

                    <h5><strong>Automotive Expertise</strong></h5>

                    <p>
                        Consult expert car reviews and buying guidance from our team of test-drive pros, or connect
                        with other experts in our question-and-answer forum.
                    </p>


                    <br>
                    <br>

                    <h5><strong>Consumer-First Mentality</strong></h5>

                    <p>
                        We focus on building the most transparent, trustworthy experience for our users, and we’ve
                        proven that works for dealers, too. It’s why we have an active network of over 40,000
                        dealers, and more listings on our site than any other major online automotive marketplace in
                        the US.
                    </p>

                    <br>
                    <br>
                    <h5><strong>Non-Stop Innovation</strong></h5>

                    <p>
                        Our engineering and product teams are constantly developing new features and products that
                        make the process of buying and selling a car simpler.
                    </p>

                    <br>
                    <br>

                    <h5><strong>Free Search & Listing Tools</strong></h5>

                    <p>
                        Motorvero's lets consumers search—and dealers list—cars for free. If interested, dealers can
                        pay for subscription services that offer more opportunities to market their dealership and
                        connect with our industry-leading audience1 of shoppers.
                    </p>


                    <br>
                    <br>


                </div>
            </div>
        </div>
    </div>

</section>
@endsection