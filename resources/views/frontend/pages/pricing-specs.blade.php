@extends('frontend.layouts.master')
@section('title')
pricing-specs
@endsection
@section('content')
<style>
    .bg-skylight {
        background-color: #f4f5f5;
    }

    .kia-details {
        background-color: #5093ce29;
        border: 1px solid hsl(180deg 5.15% 80.98%);
    }

    .circle {
        fill: #00000000;
    }

    .inner-circle {
        stroke: hsl(180, 5%, 88%);
    }

    .inner-circle-2 {
        transform: rotate(-90deg);
        transform-origin: 0, 0;
        stroke: hsl(202, 98%, 37%);
        stroke-linecap: round;
    }

    .field-clr {
        height: 1em;
        width: 9.375em;
        background-color: hsl(180, 5%, 88%);
        margin-right: 1em;
        border-radius: 20px;
    }

    .inner-field {
        margin: 2px 0 0 2px;
        height: calc(100% - 4px);
        width: 90%;
        background-color: hsl(202, 98%, 37%);
        border-radius: 20px;
    }

    .exprt-review img {
        width: 385px;
        height: 250px;
        object-fit: cover;
    }

    .exprt-review {
        height: 400px;
        overflow-y: auto;
    }

    .exprt-review {
        background-color: hsl(180, 5%, 96%);
        border: 1px solid hsl(180, 5%, 88%);
        border-top: 0px;
    }

    .review-profile img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .review-profile {
        background-color: hsl(180, 5%, 96%);
    }

    .tab-content {
        border-top: 0px !important;
    }

    .expert-detail.active {
        background-color: #f4f5f5 !important;
    }

    .user-reviews .nav-link {
        border: 1px solid #dfe2e2;
    }

    .user-reviews .nav-link.active {
        border: 1px solid #dee2e6;
    }

    .user-rating {
        border: 1px solid #dfe2e2;
        padding: 30px 10px;
        border-radius: 5px;
    }

    .question img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .dropdown_items ul {
        display: flex;
        flex-flow: column wrap;
        align-content: flex-start;
        list-style: inside;
        height: 15rem;
    }

    .dropdown_items {
        display: none;
    }

    .list-style-none {
        list-style: none;
    }

    .yearly-review{
        height: 1000px;
    }

</style>
<nav aria-label="breadcrumb bg-skylight">
    <ol class="breadcrumb p-3">
        <li class="breadcrumb-item fw-bold text-dark"><a href="https://eliteblue.net/motorvero/public/" class="fw-bold text-dark">Home</a></li>
        <li class="breadcrumb-item fw-bold text-dark"><a href="https://eliteblue.net/motorvero/public/research" class="fw-bold text-dark">Research</a></li>
        <li class="breadcrumb-item active text-dark" aria-current="page">2023 Kia Telluride</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-9">

            <div class="row">
                <div class="col-md-9 d-flex">
                    <h3 class="heading">2023 Kia Telluride Reviews, Pricing & Specs</h3>

                </div>
                <div class="col-md-3">
                    <button class="book-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        Write a review</button>
                </div>
            </div>
            <div class="col-12 my-4">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/qoIc8NAdqPM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="row">
                <div class="col-md-3 p-2 ">
                    <div class="p-3 d-flex align-items-center justify-content-center flex-column text-center kia-details rounded-2 h-100">
                        <h4 class="fw-bold">$35,890 to $52,985</h4>
                        <p>Original MSRP</p>
                    </div>
                </div>
                <div class="col-md-3 p-2 ">
                    <div class="p-3 d-flex align-items-center justify-content-center flex-column text-center kia-details rounded-2 h-100">
                        <h4 class="fw-bold">9
                            of 10</h4>
                        <p>expert review</p>
                    </div>
                </div>
                <div class="col-md-3 p-2 ">
                    <div class="p-3 d-flex align-items-center justify-content-center flex-column text-center kia-details rounded-2 h-100">
                        <h4 class="fw-bold d-flex">
                            <div class="_3sopyT pe-2">
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
                            3.9
                        </h4>
                        <p>avg user rating</p>
                    </div>
                </div>
                <div class="col-md-3 p-2 ">
                    <div class="p-3 d-flex align-items-center justify-content-center flex-column text-center kia-details rounded-2 h-100">
                        <h4 class="fw-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                            </svg></h4>
                        <p>Gallery</p>
                        <p>(3 Photos)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading-m">Pros</h3>
                    <ul class="col-8 lh-lg ps-0 w-100">
                        <li class="d-flex align-items-center fw-bold">
                            <div class="pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi text-success" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </div>
                            Stylish design
                        </li>
                        <li class="d-flex align-items-center fw-bold">
                            <div class="pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi text-success" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </div>
                            Comfortable
                        </li>
                        <li class="d-flex align-items-center fw-bold">
                            <div class="pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi text-success" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </div>
                            Impresive technology
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="heading-m">Cons</h3>
                    <ul class="col-8 lh-lg ps-0 w-100">
                        <li class="d-flex align-items-center fw-bold">
                            <div class="pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi text-warning" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z" />
                                </svg>
                                </svg>
                            </div>
                            Some interior materials feel cheap
                        </li>
                        <li class="d-flex align-items-center fw-bold">
                            <div class="pe-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi text-warning" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z" />
                                </svg>
                            </div>
                            Yeah, umm, that's about it.
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row position-sticky shadow-sm bg-white top-0 z-3">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#expert" class="nav-link">Expert Review</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#user" class="nav-link">User Review</a>
                    </li>
                    <li class="nav-item" role="presentation">
                    <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                </ul>
            </div>
            <section id="expert" class=" expert-reviews">
                <div class="row my-4">
                    <div class="col-md-4 d-flex justify-content-center align-items-center position-relative">
                        <svg width="180" height="180" viewBox="-90 -90 180 180">
                            <circle class="circle inner-circle" stroke-width="16" data-testid="overall-negative-circle" r="74" cx="0" cy="0"></circle>
                            <circle class="circle inner-circle-2" stroke-width="16" data-testid="overall-score-circle" r="74" cx="0" cy="0" style="stroke-dasharray: 464.956, 464.956; stroke-dashoffset: 46.4956;"></circle>
                        </svg>
                        <div class="position-absolute text-center">
                            <div class="heading-m">9</div>
                            <p>out of 10 <br> expert review</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                            Look & feel
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                                <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" />
                            </svg>
                            Performance
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M384 32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H398.4c-5.2 25.8-22.9 47.1-46.4 57.3V448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 128c-17.7 0-32-14.3-32-32s14.3-32 32-32H288V153.3c-23.5-10.3-41.2-31.6-46.4-57.3H128c-17.7 0-32-14.3-32-32s14.3-32 32-32H256c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288H584.4L512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C627.2 382 574.9 416 512 416zM126.8 195.8L54.4 320H199.3L126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C242 382 189.7 416 126.8 416S11.7 382 .9 337.1z" />
                            </svg>
                            </svg>
                            Form & function
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z" />
                                <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                            </svg>
                            Technology
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                            Safety
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                        <div class="col-12 fw-bold">

                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM128 416H64V352c35.3 0 64 28.7 64 64zM64 224V160h64c0 35.3-28.7 64-64 64zM448 352c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM384 256c0 61.9-43 112-96 112s-96-50.1-96-112s43-112 96-112s96 50.1 96 112zM252 208c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z" />
                            </svg>
                            Cost-effectiveness
                            <div class="review-field mt-2 d-flex align-items-center">
                                <div class="field-clr ">
                                    <div class="inner-field"></div>
                                </div>
                                <strong>9/10</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3 exprt-review mb-4">
                    <div class="col-md-6 ">
                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/yJMUco4ppY72OZButxBsv/a765457601e5620f2a03a00bd8b29ec5/CG_2023_Kia_Telluride_X-Pro_Midnight_Lake_Blue_Front_Quarter_View.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                        <p>Kia would disagree.</p>
                    </div>
                    <div class="col-12">
                        <p>This year, the 2023 Telluride gets minor styling changes, new technologies, and some off-roading attitude in the form of new X-Line and X-Pro trim levels. We headed to San Antonio, Texas, which has somehow become the seventh most populous city in the U.S., to sample the Telluride’s new kit. And we remain impressed with this excellent family-size sport-ute.</p>
                    </div>
                </div>
                <div class="row my-4">

                    <div class="px-0">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="nav-item">
                                <a href="#look-feel" class="nav-link expert-detail active" data-bs-toggle="tab">Look & Feel</a>
                            </li>
                            <li class="nav-item">
                                <a href="#performance" class="nav-link" data-bs-toggle="tab">Performance</a>
                            </li>
                            <li class="nav-item">
                                <a href="#form-function" class="nav-link" data-bs-toggle="tab">Form & function</a>
                            </li>
                            <li class="nav-item">
                                <a href="#technology" class="nav-link" data-bs-toggle="tab">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a href="#safety" class="nav-link" data-bs-toggle="tab">Safety</a>
                            </li>
                            <li class="nav-item">
                                <a href="#cost-effect" class="nav-link" data-bs-toggle="tab">Cost-effectiveness</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active exprt-review px-4" id="look-feel">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/102uGs3o8OgV7302vVhefc/dbd0b53230e10555350b46417f40a220/CG_2023_Kia_Telluride_SX_Prestige_Interior_Dashboard_Terracotta_Leather.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade exprt-review px-4" id="performance">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/7ArIP3LRKAbyznFxSlxx5J/320c592196bd13b890e97dec197cb1fe/CG_2023_Kia_Telluride_V6_Engine.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade exprt-review px-4" id="form-function">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/1IBka4UcRqcrWV9BVx1fmf/47b3fdf9a3aa71e50ef886c31e6b238e/CG_2023_Kia_Telluride_Cargo_Space.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade exprt-review px-4" id="technology">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/1jVCU4avtioseSdSq7Ldvg/acdb2ed4ed3dc6d8a3ca540401706058/CG_2023_Kia_Telluride_Infotainment_System_and_Driving_Assistance_Features.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade exprt-review px-4" id="safety">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/5ZeXfu68XsJzrnesjN4e4s/99870fc60f46bc28d82a1a2fec2cba45/CG_2023_Kia_Telluride_SX_Prestige_Interior_Second_Row_Seats_Terracotta_Leather.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade exprt-review px-4" id="cost-effect">
                                <div class="review-field mt-2 d-flex align-items-center">
                                    <div class="field-clr ">
                                        <div class="inner-field"></div>
                                    </div>
                                    <strong>9/10</strong>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Updates and upgrades to the 2023 Kia Telluride improve a wildly successful midsize SUV recipe.</p>
                                        <p>Kia can barely keep up with demand for the Telluride, and its dealers and customers have told the company not to change a single thing, so you’d think it unnecessary for the automaker to invest a single penny upgrading the popular three-row crossover SUV.</p>
                                        <p>Kia would disagree.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/4bklNTn6xNWmnA4ZeuEmhk/c8bb8f09c4a31091c7242e773cadc5df/CG_2023_Kia_Telluride_X-Pro_Midnight_Lake_Blue_Rear_Quarter_View.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>The Telluride X-Line replaces the Nightfall Edition in the lineup. In addition to a raised suspension, the X-Line has a unique grille design, raised roof rails, body-color door handles, and black 20-inch wheels. The X-Pro takes that a step further with exclusive 18-inch wheels and all-terrain tires. In combination with the updated bumper designs, both look the part of a mildly aggressive off-roader.</p>
                                    <p>
                                        Kia’s interior updates are not as obvious. The biggest difference is the available digital instrumentation panel and the standard 12.3-inch touchscreen infotainment system. They reside side-by-side on the dashboard under a curved 24-inch piece of glass, and together they give the Telluride a shove into the future.
                                    </p>
                                    <p>
                                        Otherwise, 2023 Kia Telluride interior changes amount to new colors, minor trim changes, a new steering-wheel design, and modifications to make the center console more functional than before. Both the X-Line and the X-Pro have their trim names embossed into the upper portion of the front seatbacks.
                                    </p>
                                    <p>
                                        Kia offers the 2023 Telluride in LX, S, EX, SX, and SX Prestige trim. The X-Line package is available with EX, SX, and SX Prestige, while the X-Pro package requires SX or SX Prestige trim. Prices start at a manufacturer’s suggested retail price (MSRP) of $35,690 for the LX with front-wheel drive (FWD) and rise to $52,785 for the SX Prestige X-Pro with all-wheel drive (AWD). The destination charge bumps those values up by another $1,335.
                                    </p>
                                    <p>
                                        We sampled two SX Prestige models, one painted Wolf Gray with X-Line trim ($54,120 including destination) and one dipped in the new Midnight Lake Blue with X-Pro trim ($55,120).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-3 review-profile">
                    <div class="col-2">
                        <img src="https://images.ctfassets.net/c9t6u0qhbv9e/328NX6XuHepOxJESJXCxoR/a56f449a781f2bc18ce0efd42e09cfd2/Christian_wardlaw_headshot-1.jpeg" alt="">
                    </div>
                    <div class="col-10">
                        <div class="d-flex">
                            <p class="pe-2">Published Oct 31, 2022 by</p>
                            <a href="#">Christian Wardlaw</a>
                        </div>
                        <p>
                            Christian Wardlaw has 25 years of experience reviewing cars and has served in editorial leadership roles with Edmunds, J.D. Power, the New York Daily News, Autobytel, and Vehix. Chris prefers to focus on the cars people actually buy rather than the cars about which people dream, and emphasizes the importance of fuel economy and safety as much as how much fun a car is to drive. Chris is married to an automotive journalist, is the father of four daughters, and lives in Southern California.
                        </p>
                    </div>
                </div>
            </section>
            <section id="user" class="my-4">
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li class="col-md-4 nav-item">
                            <a href="#user-review" class="nav-link active text-center" data-bs-toggle="tab">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H322.8c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1H178.3zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4 71 71 29.4-29.4c15.6-15.6 15.6-40.9 0-56.6l-14.4-14.4zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5 .2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4L576.1 358.7l-71-71L375.9 417z" />
                                </svg>
                                <div>
                                    <div class="d-flex justify-content-center">
                                        reviews
                                        <div class="_3sopyT px-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14" class="_2waTFh">
                                                <path class="_4z5HgY" fill="#c2ccd4" d="M6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7l3.3,1.7 c0.6,0.3,1.3-0.2,1.2-0.8l-0.6-3.7l2.7-2.6c0.5-0.5,0.2-1.3-0.4-1.4L9.7,3.8L8,0.5C7.7-0.1,6.9-0.1,6.6,0.5L6.6,0.5z">
                                                </path>
                                                <path class="_5bxaLR" fill="#ffb100" d="M7.3,0.1C7,0.1,6.7,0.2,6.6,0.5L5,3.8L1.3,4.4C0.6,4.5,0.4,5.3,0.8,5.7l2.7,2.6L2.9,12 c-0.1,0.7,0.6,1.2,1.2,0.8l3.3-1.7V0.1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p>3.8</p>
                                        <p>(11)</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-4 nav-item">
                            <a href="#question" class="nav-link text-center" data-bs-toggle="tab">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14Z" />
                                </svg>
                                <div>
                                    <div class="d-flex justify-content-center">
                                        reviews
                                        <p class="px-2">(1)</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-4 nav-item">
                            <a href="#comparisons" class="nav-link text-center" data-bs-toggle="tab">

                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                                </svg>
                                <div>
                                    <div class="d-flex justify-content-center">
                                        Comparisons

                                        <p class="px-2">(0)</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-0 mt-3">
                        <div class="tab-pane fade show active" id="user-review">
                            <div class="row">
                                <div class="col-md-9 d-flex">
                                    <h3 class="heading-m">2023 Kia Telluride Reviews, Pricing & Specs</h3>

                                </div>
                                <div class="col-md-3">
                                    <button class="book-button" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                        Write a review</button>
            

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="heading-m fs-5" id="exampleModalLabel">Review</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form accept-charset="UTF-8" action="" method="post">
            <div class="mb-3">
    <label for="" class="form-label">Your Name</label>
    <input type="text" class="form-control" id="" aria-describedby="">
  </div>
            <div class="mb-3">
    <label for="" class="form-label">Your Email</label>
    <input type="email" class="form-control" id="" aria-describedby="">
  </div>
            <div class="mb-3">
    <label for="" class="form-label">Leave Reveiw</label>
    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
  </div>
                        
                        
                    </form>
      </div>
      <div class="modal-footer d-flex">
        <button type="button" class="book-button w-25" data-bs-dismiss="modal">Close</button>
        <button type="button" class="book-button w-50">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                </div>
                                
                            </div>
                            <div class="p-3">
                                <div class="row my-4 user-rating">
                                    <h3 class="heading-m">User rating:</h3>
                                    <div class="col-md-4">
                                        <ul class="mb-0 ps-0">
                                            <li class="d-flex">
                                                <input type="checkbox" name="" id="">
                                                <div class="_3sopyT px-2 d-flex align-items-center">
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

                                                <p class="mb-0 pe-2">3.8</p>
                                                <p class="mb-0">(11)</p>
                                            </li>
                                            <li class="d-flex">
                                                <input type="checkbox" name="" id="">
                                                <div class="_3sopyT px-2 d-flex align-items-center">
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

                                                <p class="mb-0 pe-2">3.8</p>
                                                <p class="mb-0">(11)</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="mb-0 ps-0">
                                            <li class="d-flex">
                                                <input type="checkbox" name="" id="">
                                                <div class="_3sopyT px-2 d-flex align-items-center">
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

                                                <p class="mb-0 pe-2">3.8</p>
                                                <p class="mb-0">(11)</p>
                                            </li>
                                            <li class="d-flex">
                                                <input type="checkbox" name="" id="">
                                                <div class="_3sopyT px-2 d-flex align-items-center">
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

                                                <p class="mb-0 pe-2">3.8</p>
                                                <p class="mb-0">(11)</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="mb-0 ps-0">
                                            <li class="d-flex">
                                                <input type="checkbox" name="" id="">
                                                <div class="_3sopyT px-2 d-flex align-items-center">
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

                                                <p class="mb-0 pe-2">3.8</p>
                                                <p class="mb-0">(11)</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border bg-light ">
                                <div class="col-3 form-control d-flex w-25 align-items-center">
                                    <select name="" id="" class="form-control border-0">
                                        <option value="">Newest to Oldest</option>
                                        <option value="">Oldest to Newest</option>
                                        <option value="">Highest to Lowest</option>
                                        <option value="">Lowest to Highest</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </div>
                                <div class="col-12 mt-3 bg-white shadow">
                                    <div class="row px-3 pt-2">
                                        <div class="d-flex align-items-center">
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
                                            <p class="fw-bold ps-2 mb-0">by anonymous</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <p class="mb-0 px-3 pt-2">
                                        this is goood from testing1 fsdfsdf fsdfsd fsdfsdf dfsdfsdf
                                    </p>
                                    <p class="mb-0 text-end px-3">
                                        <i>Aug 07, 2023</i>
                                    </p>
                                </div>
                                <div class="col-12 mt-3 bg-white shadow">
                                    <div class="row px-3 pt-2">
                                        <div class="d-flex align-items-center">
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
                                            <p class="fw-bold ps-2 mb-0">by anonymous</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <p class="mb-0 px-3 pt-2">
                                        this is goood from testing1 fsdfsdf fsdfsd fsdfsdf dfsdfsdf
                                    </p>
                                    <p class="mb-0 text-end px-3">
                                        <i>Aug 07, 2023</i>
                                    </p>
                                </div>
                                <div class="col-12 mt-3 bg-white shadow">
                                    <div class="row px-3 pt-2">
                                        <div class="d-flex align-items-center">
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
                                            <p class="fw-bold ps-2 mb-0">by anonymous</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <p class="mb-0 px-3 pt-2">
                                        this is goood from testing1 fsdfsdf fsdfsd fsdfsdf dfsdfsdf
                                    </p>
                                    <p class="mb-0 text-end px-3">
                                        <i>Aug 07, 2023</i>
                                    </p>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button class="book-button w-25">Read all reviews (11)</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade question" id="question">
                            <h3 class="heading-m">What users have asked</h3>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <a href="#">
                                        <img src="https://cdn.pixabay.com/photo/2017/06/01/00/44/smiling-2362136_1280.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-md-10 bg-light p-3">
                                    <p class="mb-0">
                                        <a href="#">Sean K</a> asked a <a href="#">Car Selling & Trading In</a> question 6 months ago
                                    </p>
                                    <p class="mb-0 mt-2"><a href="#" class="heading-m">which suv is for tall drivers</a></p>
                                    <p class="mb-0 mt-2">37 views</p>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#">See more Kia Telluride questions
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="comparisons">
                            <h1 class="heading-m">
                                Top Comparisons
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-info-circle ps-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                            </h1>
                            <div class="col-12 text-center py-4">
                                <p class="mb-0">Have you driven a <b>2023 Kia Telluride</b>? <a href="">Compare this car</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pricing" class="pricing">
                <h1 class="heading">
                    2023 Kia Telluride Pricing
                </h1>
                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="d-flex border p-4 align-items-center rounded-2 justify-content-between h-100">
                            <p class="mb-0">ORIGINAL MSRP <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-circle ps-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg></p>

                            <p class="fw-bold mb-0">$35,890 to $50,085</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="d-flex border p-4 h-100 align-items-center rounded-2 justify-content-between">
                            <p class="mb-0">PRICE RANGE <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-circle ps-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg></p>

                            <p class="fw-bold mb-0">$35,890 to $50,085</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="d-flex border p-4 align-items-center h-100 rounded-2 justify-content-between">
                            <p class="mb-0">AVERAGE PRICE ON CG <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-circle ps-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg></p>

                            <p class="fw-bold mb-0">$35,890 to $50,085</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="d-flex border p-4 align-items-center h-100 rounded-2 justify-content-between">
                            <p class="mb-0">YOY PRICE CHANGE <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-circle ps-2" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg></p>

                            <p class="fw-bold mb-0">$35,890 to $50,085</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#">See more price trends
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                        </svg>
                    </a>
                </div>

            </section>
        </div>
        <div class="col-3">
            <div class="yearly-review">
            <h1 class="heading">Other years</h1>
            <ul class="list-style-none">
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
            </ul>
            <h1 class="heading">Related cars</h1>
            <ul class="list-style-none">
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a> <span>2</span> Reviews, <span>0</span> Photos</li>
            </ul>
            </div>
            <div>
            <h1 class="heading">Kia Telluride For Sale</h1>
            <ul class="list-style-none">
                <li><a href="#" class="fw-bold">2024 kia Telluride</a></li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a></li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a></li>
                <li><a href="#" class="fw-bold">2024 kia Telluride</a></li>
            </ul>
            </div>
        </div>
    </div>

</div>
</div>
<script>
    function checkMedia(x) {
        // if (x.matches) {
        $(".dropdown_menu2").on('click', function() {
            $(this).parents('.parent_dropdown2').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
            $(this).parents('.parent_dropdown2').siblings().find(".showaccordion").removeClass('showaccordion')
                .slideToggle();
            $(this).parents('.parent_dropdown2').find(".dropdown_menu2").toggleClass('active');
            $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
        });

    }
    checkMedia('')
    $('#checkValidation').on('click', function() {
        let checkTab = $('#license-plate').prop('checked');
        let data = [];
        if (checkTab) {
            let licenseNo = $('#license_no').val();
            let state = $('#state').val();
            data = {
                'type': 'license',
                'license_plate_no': licenseNo,
                'state': state
            };
        } else {
            let vinNum = $("#vin_number").val();
            data = {
                'type': 'vin',
                'vin_number': vinNum,
            };
        }


    });
</script>
@endsection