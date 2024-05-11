@extends('frontend.layouts.master')
@section('title')
    {{$blog->title}} - {{config('app.name')}}
@endsection
@section('description')
    {{--Meta Description here --}}
@endsection
@section('keywords')
    {{-- Meta Keywords here --}}
@endsection
@section('content')
    <section class="blogPost mt-5 py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 mt-5 mb-3">
                    <h6 class="text-muted d-flex align-items-center mb-0">

                        <span><a class="text-muted text-decoration-none" href="{{url('/')}}">Home >  </a></span> <span><a class="text-muted text-decoration-none" href="{{url('blogs')}}"> News & Blogs ></a></span>  <p class="headingMini fs-6 mb-0 ms-2">  {{$blog->title}}</p>
                    </h6>
                </div>
{{--                <div class="my-3 col-12">--}}
{{--                    <?php--}}
{{--                    $image = isset($media->image) ? $media->image : 'galleryimage.png' ;--}}

{{--                    ?>--}}
{{--                    <img style="height: 300px;--}}
{{--    object-fit: cover;" class="w-100 blogPost " src="{{asset('images/media/'.$image)}}" alt="{{$blog['title']}}">--}}

{{--                </div>--}}

                <div class="col-12 my-4">
                    <h2 class="text-dark text-uppercase  fw-bold">
                        {{$blog->title}}
                    </h2>
                </div>
                <div class="col-12">
                    <div class="para fs-6 long-description-box">
                        {!! $blog->long_description !!}
                    </div>


                </div>
                <div class="col-12 my-5">
                    <div class="profile">
                        <img src="{{asset('frontend/images/logo/logo.png')}}" alt="proImg" class="rounded-circle">
                        <div class="txt">
                            <h2 class="proTitle">
                                {{$user->name}}
                            </h2>
                            <p class="proTag mb-0">
                                Last Updated On {{date('M, d-Y', strtotime($blog->updated_at))}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

            </div>



            @endsection
            <style>
                .long-description-box img {
                    width: 100%;
                    height: auto;
                    object-fit: contain;
                }

                .long-description-box a {
                    color: #000 !important;
                }
            </style>
