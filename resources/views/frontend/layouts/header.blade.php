<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="https://kit.fontawesome.com/20b4506959.js" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
    <title>@yield('title') | {{config('app.name')}}</title>
    <style>
        .slick-prev {
            display: none !important;
        }

        .slick-next {
            display: none !important;
        }
    </style>
</head>


<body>

<section class="">
    <nav class="topNav d-flex align-items-center justify-content-end">
        <div class="buttons d-flex h-100 align-items-center fw-bold">
            <a href="{{url('/')}}" class="h-50 topNavBtn d-flex align-items-center bdr skew">
                <svg class="me-3" width="18" height="17" viewBox="0 0 18 17" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M4.67517 3.82332L3.7734 6.40081H13.9244L13.0226 3.82332C12.8672 3.38107 12.4491 3.08393 11.9792 3.08393H5.71861C5.24871 3.08393 4.83065 3.38107 4.67517 3.82332ZM1.37212 6.56665L2.5883 3.0943C3.05474 1.76409 4.30893 0.872681 5.71861 0.872681H11.9792C13.3889 0.872681 14.6431 1.76409 15.1095 3.0943L16.3257 6.56665C17.1273 6.89834 17.6939 7.68955 17.6939 8.61206V15.2458C17.6939 15.8574 17.1998 16.3514 16.5883 16.3514H15.4827C14.8711 16.3514 14.377 15.8574 14.377 15.2458V13.5874H3.32078V15.2458C3.32078 15.8574 2.82671 16.3514 2.21516 16.3514H1.10953C0.497982 16.3514 0.00390625 15.8574 0.00390625 15.2458V8.61206C0.00390625 7.68955 0.570539 6.89834 1.37212 6.56665ZM4.42641 9.71768C4.42641 9.10613 3.93233 8.61206 3.32078 8.61206C2.70923 8.61206 2.21516 9.10613 2.21516 9.71768C2.21516 10.3292 2.70923 10.8233 3.32078 10.8233C3.93233 10.8233 4.42641 10.3292 4.42641 9.71768ZM14.377 10.8233C14.9886 10.8233 15.4827 10.3292 15.4827 9.71768C15.4827 9.10613 14.9886 8.61206 14.377 8.61206C13.7655 8.61206 13.2714 9.10613 13.2714 9.71768C13.2714 10.3292 13.7655 10.8233 14.377 10.8233Z"
                            fill="#059DF3"></path>
                </svg>
                MOTORVERO
            </a>

            <div class="h-50 topNavBtn d-flex align-items-center bdr">
                <svg class="me-3" width="18" height="19" viewBox="0 0 18 19" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M9.24353 0.88855C4.52025 0.88855 0.693359 4.72369 0.693359 9.45714C0.693359 14.1906 4.52025 18.0257 9.24353 18.0257C13.9668 18.0257 17.7937 14.1906 17.7937 9.45714C17.7937 4.72369 13.9668 0.88855 9.24353 0.88855ZM9.24353 4.20542C10.9191 4.20542 12.2775 5.56673 12.2775 7.24589C12.2775 8.92506 10.9191 10.2864 9.24353 10.2864C7.56797 10.2864 6.2096 8.92506 6.2096 7.24589C6.2096 5.56673 7.56797 4.20542 9.24353 4.20542ZM9.24353 16.0909C7.21976 16.0909 5.40629 15.1718 4.19272 13.7345C4.84088 12.5114 6.10961 11.6684 7.58865 11.6684C7.6714 11.6684 7.75414 11.6822 7.83344 11.7064C8.28163 11.8515 8.75051 11.9448 9.24353 11.9448C9.73654 11.9448 10.2089 11.8515 10.6536 11.7064C10.7329 11.6822 10.8157 11.6684 10.8984 11.6684C12.3774 11.6684 13.6462 12.5114 14.2943 13.7345C13.0808 15.1718 11.2673 16.0909 9.24353 16.0909Z"
                            fill="#059DF3"></path>
                </svg>
                @guest
                    <a href="{{url('login')}}">LOGIN</a>
                    / <a href="{{url('register')}}">SIGNUP</a>
                @endguest
                @auth
                    @if (Auth::user()->hasRole('User'))
                        <a href="{{ url('my-profile') }}">My
                            Account</a>
                    @else
                        <a href="{{ url('admin/home') }}">My
                            Account</a>
                    @endif
                @endauth

            </div>
            <a href="tel:00000000" class="h-50 topNavBtn d-flex align-items-center">
                <svg class="me-3" width="17" height="17" viewBox="0 0 17 17" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M14.4589 7.77798H16.1255C16.1255 3.50297 12.898 0.278809 8.61719 0.278809V1.94548C12.0022 1.94548 14.4589 4.39797 14.4589 7.77798Z"
                            fill="#059DF3"></path>
                    <path
                            d="M8.62654 5.27884C10.379 5.27884 11.1265 6.02634 11.1265 7.77884H12.7932C12.7932 5.09134 11.314 3.61218 8.62654 3.61218V5.27884ZM11.4782 9.81468C11.3181 9.66914 11.1077 9.59152 10.8914 9.5982C10.6751 9.60489 10.4699 9.69536 10.319 9.85051L8.32487 11.9013C7.84487 11.8097 6.87987 11.5088 5.88654 10.518C4.8932 9.52384 4.59237 8.55634 4.5032 8.07968L6.55237 6.08468C6.70771 5.93395 6.79832 5.7287 6.805 5.51235C6.81169 5.296 6.73394 5.08555 6.5882 4.92551L3.50904 1.53968C3.36324 1.37914 3.1606 1.28177 2.94416 1.26823C2.72773 1.25469 2.51454 1.32606 2.34987 1.46718L0.541537 3.01801C0.397463 3.16261 0.31147 3.35505 0.29987 3.55884C0.28737 3.76718 0.0490371 8.70218 3.8757 12.5305C7.21404 15.868 11.3957 16.1122 12.5474 16.1122C12.7157 16.1122 12.819 16.1072 12.8465 16.1055C13.0503 16.0941 13.2426 16.0077 13.3865 15.863L14.9365 14.0538C15.0778 13.8893 15.1493 13.6762 15.1359 13.4597C15.1225 13.2433 15.0253 13.0406 14.8649 12.8947L11.4782 9.81468V9.81468Z"
                            fill="#059DF3"></path>
                </svg>

                (336) 228-6493
            </a>
        </div>
    </nav>
    <nav class="ps-lg-5 main">
        <div class="logo d-flex justify-content-start align-items-center">
            <a href="{{url('/')}}">
                <img src="{{asset('frontend/images/logo/logo.png')}}" alt="">
            </a>
        </div>
        <div class="hamburger">
            <div class="bars1"></div>
            <div class="bars2"></div>
            <div class="bars3"></div>
        </div>
        <ul class="nav-links navactive">
            <li><a href="{{url('used-car')}}" class="text-uppercase">used cars</a></li>
            <li><a href="{{((url('new-car')))}}" class="text-uppercase">new cars</a></li>
            <li><a href="{{url('certified-car')}}" class="text-uppercase">certified cars</a></li>
            <li><a href="{{url('financing')}}" class="text-uppercase">financing</a></li>
            <li><a href="{{url('research')}}" class="text-uppercase">research</a></li>

            <li>
                <a class="p-0 h-100" href="{{url('sell-car')}}"><button class="book-button">SELL MY CAR</button></a>
            </li>
            <li class="phoneTopBar">
                <div class="buttons d-flex w-100 justify-content-evenly align-items-center">
                    <a href="#" class=" topNavBtn d-flex align-items-center">
                        <svg class="me-3" width="18" height="17" viewBox="0 0 18 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M4.67517 3.82332L3.7734 6.40081H13.9244L13.0226 3.82332C12.8672 3.38107 12.4491 3.08393 11.9792 3.08393H5.71861C5.24871 3.08393 4.83065 3.38107 4.67517 3.82332ZM1.37212 6.56665L2.5883 3.0943C3.05474 1.76409 4.30893 0.872681 5.71861 0.872681H11.9792C13.3889 0.872681 14.6431 1.76409 15.1095 3.0943L16.3257 6.56665C17.1273 6.89834 17.6939 7.68955 17.6939 8.61206V15.2458C17.6939 15.8574 17.1998 16.3514 16.5883 16.3514H15.4827C14.8711 16.3514 14.377 15.8574 14.377 15.2458V13.5874H3.32078V15.2458C3.32078 15.8574 2.82671 16.3514 2.21516 16.3514H1.10953C0.497982 16.3514 0.00390625 15.8574 0.00390625 15.2458V8.61206C0.00390625 7.68955 0.570539 6.89834 1.37212 6.56665ZM4.42641 9.71768C4.42641 9.10613 3.93233 8.61206 3.32078 8.61206C2.70923 8.61206 2.21516 9.10613 2.21516 9.71768C2.21516 10.3292 2.70923 10.8233 3.32078 10.8233C3.93233 10.8233 4.42641 10.3292 4.42641 9.71768ZM14.377 10.8233C14.9886 10.8233 15.4827 10.3292 15.4827 9.71768C15.4827 9.10613 14.9886 8.61206 14.377 8.61206C13.7655 8.61206 13.2714 9.10613 13.2714 9.71768C13.2714 10.3292 13.7655 10.8233 14.377 10.8233Z"
                                    fill="#059DF3"></path>
                        </svg>
                        SPEEDY LIMO FLEET
                    </a>

                    <a href="#" class=" topNavBtn d-flex align-items-center">
                        <svg class="me-3" width="18" height="19" viewBox="0 0 18 19" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M9.24353 0.88855C4.52025 0.88855 0.693359 4.72369 0.693359 9.45714C0.693359 14.1906 4.52025 18.0257 9.24353 18.0257C13.9668 18.0257 17.7937 14.1906 17.7937 9.45714C17.7937 4.72369 13.9668 0.88855 9.24353 0.88855ZM9.24353 4.20542C10.9191 4.20542 12.2775 5.56673 12.2775 7.24589C12.2775 8.92506 10.9191 10.2864 9.24353 10.2864C7.56797 10.2864 6.2096 8.92506 6.2096 7.24589C6.2096 5.56673 7.56797 4.20542 9.24353 4.20542ZM9.24353 16.0909C7.21976 16.0909 5.40629 15.1718 4.19272 13.7345C4.84088 12.5114 6.10961 11.6684 7.58865 11.6684C7.6714 11.6684 7.75414 11.6822 7.83344 11.7064C8.28163 11.8515 8.75051 11.9448 9.24353 11.9448C9.73654 11.9448 10.2089 11.8515 10.6536 11.7064C10.7329 11.6822 10.8157 11.6684 10.8984 11.6684C12.3774 11.6684 13.6462 12.5114 14.2943 13.7345C13.0808 15.1718 11.2673 16.0909 9.24353 16.0909Z"
                                    fill="#059DF3"></path>
                        </svg>

                        LOGIN / SIGNUP
                    </a>
                    <a href="#" class=" topNavBtn d-flex align-items-center">
                        <svg class="me-3" width="17" height="17" viewBox="0 0 17 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M14.4589 7.77798H16.1255C16.1255 3.50297 12.898 0.278809 8.61719 0.278809V1.94548C12.0022 1.94548 14.4589 4.39797 14.4589 7.77798Z"
                                    fill="#059DF3"></path>
                            <path
                                    d="M8.62654 5.27884C10.379 5.27884 11.1265 6.02634 11.1265 7.77884H12.7932C12.7932 5.09134 11.314 3.61218 8.62654 3.61218V5.27884ZM11.4782 9.81468C11.3181 9.66914 11.1077 9.59152 10.8914 9.5982C10.6751 9.60489 10.4699 9.69536 10.319 9.85051L8.32487 11.9013C7.84487 11.8097 6.87987 11.5088 5.88654 10.518C4.8932 9.52384 4.59237 8.55634 4.5032 8.07968L6.55237 6.08468C6.70771 5.93395 6.79832 5.7287 6.805 5.51235C6.81169 5.296 6.73394 5.08555 6.5882 4.92551L3.50904 1.53968C3.36324 1.37914 3.1606 1.28177 2.94416 1.26823C2.72773 1.25469 2.51454 1.32606 2.34987 1.46718L0.541537 3.01801C0.397463 3.16261 0.31147 3.35505 0.29987 3.55884C0.28737 3.76718 0.0490371 8.70218 3.8757 12.5305C7.21404 15.868 11.3957 16.1122 12.5474 16.1122C12.7157 16.1122 12.819 16.1072 12.8465 16.1055C13.0503 16.0941 13.2426 16.0077 13.3865 15.863L14.9365 14.0538C15.0778 13.8893 15.1493 13.6762 15.1359 13.4597C15.1225 13.2433 15.0253 13.0406 14.8649 12.8947L11.4782 9.81468V9.81468Z"
                                    fill="#059DF3"></path>
                        </svg>

                        (336) 228-6493
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- <script>
        $('.navactive').find('li').on('click', function(){
            console.log("hell");
            $(this).find('a').addClass('active')
        })
    </script> -->
</section>
