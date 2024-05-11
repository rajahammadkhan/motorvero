@extends('frontend.layouts.master')
@section('title')
    Dashboard - Admin Control Panel
@endsection
@section('content')
    <style>
        .form-label > [data-required="true"]::after {
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

        label > [data-required="true"]::after,
        legend > [data-required="true"]::after {
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

        .tab.invalid > div {
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

        nav > div > div button.active:after {
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

        .dropdown_items {
            display: none;
        }
        .para p {
            margin: 0 !important;
        }
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <h1 class="heading">
                        News &amp; <span>Blog</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-nb-2 bg-white my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 mx-auto">
                    <form action="/" class="searchBar d-flex justify-content-between align-items-center">
                        <input type="text" id="search" class="rounded-0 w-100 shadow-none border-0 bg-transparent outline-0 text-white" placeholder="Search News &amp; Blogs" required="">
                        <button type="submit" class="searchNB bg-transparent border-0 p-4 pe-0">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.023 15.9033C16.5546 15.4546 16.0988 14.9931 15.656 14.5193C15.284 14.1413 15.06 13.8663 15.06 13.8663L12.26 12.5293C13.381 11.2579 13.9997 9.62126 14 7.92627C14 4.06727 10.86 0.92627 7 0.92627C3.14 0.92627 0 4.06727 0 7.92627C0 11.7853 3.14 14.9263 7 14.9263C8.763 14.9263 10.37 14.2663 11.603 13.1873L12.94 15.9873C12.94 15.9873 13.215 16.2113 13.593 16.5833C13.98 16.9463 14.489 17.4373 14.977 17.9503L16.335 19.3423L16.939 19.9883L19.06 17.8673L18.414 17.2633C18.035 16.8913 17.529 16.3973 17.023 15.9033ZM7 12.9263C4.243 12.9263 2 10.6833 2 7.92627C2 5.16927 4.243 2.92627 7 2.92627C9.757 2.92627 12 5.16927 12 7.92627C12 10.6833 9.757 12.9263 7 12.9263Z" fill="var(--dark)"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-nb-3">
        <div class="container">
            <div class="row column-blog">
                @if ($blogs != null)
                    @foreach ($blogs as $blog)
                        {{-- @dd($blog['id']) --}}
{{--                        @include('frontend/snippets/blog-list')--}}
                        @include('frontend/snippets/blog-grid')
                    @endforeach
                @else
                    <h5 class="py-5"> No Blogs Found</h5>
                @endif
            </div>
            {{--            <div class="row"> --}}
            {{--                <div class="col-12 my-3"> --}}
            {{--                    <button class="main-button mx-auto p-2 form-control w-auto px-4 rounded-0 shadow-none fs-6"> --}}
            {{--                        LOAD MORE --}}
            {{--                    </button> --}}
            {{--                </div> --}}
            {{--            </div> --}}
        </div>
    </section>

@endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".column-blog").filter(function() {
            $(this).toggle($(this).find('.parawf').text().toLowerCase().indexOf(value) > -1)
        });
    });
</script>
