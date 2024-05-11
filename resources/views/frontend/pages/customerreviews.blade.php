@extends('frontend.layouts.master')
@section('title')
Customer Reviews
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
    .content .col-md-6 .reviewcard .card-body {
        height: 240px;
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



                <div class="col-md-6">
                    <h1 class="heading">Dealer Review</h1>
                    <div class="reviewcard reviewcard-r row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0">Testimonial</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Dealer</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0">Testimonial</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Dealer</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="heading">Car Review</h1>
                    <div class="reviewcard reviewcard-r row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0">Good Car</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Car</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0 ">Good Car</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Car</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="heading">User Review</h1>
                    <div class="reviewcard reviewcard-r row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0">Good Car</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Car</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>
                                            <p class="card-text mt-3 mb-0 ">Good Car</p>
                                            <p class="card-text mt-0 "><a class="card-title   fw-bold" href="#">Car</a></p>
                                            <p class="card-text my-3 ">
                                            <div class="_3sopyT">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                    <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                    </path>
                                                    <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                    </path>
                                                </svg>
                                            </div>
                                            </p>
                                            <p class="card-text mt-3 mb-0">Review By</p>
                                            <h4 class="card-title   fw-bold">
                                                Hunain
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="heading">Testimonial</h1>
                    <div class="reviewcard reviewcard-r row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img style="" src="https://eliteblue.net/motorvero/public/images/media/testimonial16867123457366100114.webp">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>

                                            <p class="card-text my-3 "></p>
                                            <p>Using Motorvero I was able to get all of the features that I wanted, well within my budget.</p>
                                            <p></p>
                                            <h4 class="card-title   fw-bold mt-3 ">
                                                Mark N
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                    <img style="" src="https://eliteblue.net/motorvero/public/images/media/testimonial168785667368467848.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body rounded-4 bg-white">

                                            <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                            </svg>

                                            <p class="card-text my-3 "></p>
                                            <p>Using Motorvero I was able to get all of the features that I wanted, well within my budget.</p>
                                            <p></p>
                                            <h4 class="card-title   fw-bold mt-3 ">
                                                Mark N
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection