@extends('frontend.layouts.master')
@section('title')
    Research - {{config('app.name')}}
@endsection
@section('content')
<style>
        .review-instant img {
            height: 500px;
            width: 100%;
            object-fit: cover;
        }

        .all-articals img{
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .adivce-resources img {
            height: 150px;
            width: 100%;
        }
    </style>
    <section class="financing-top-banner">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div>
                    <h3 class="heading text-center">Research <span> New And Used Cars </span></h3>
                    <div class="research-tab d-lg-flex justify-content-center py-4 px-3">
                        <div class="tab-pane fade show col-lg-9" id="byprice" role="tabpanel"
                             aria-labelledby="byprice-tab">
                            <form action="{{url('listing')}}" method="GET">
                                <input type="hidden" name="tracking" value="home">
                                <div class="row px-5">
                                    <div class="col-md-3 col-sm-4  px-2 col-12">
                                        <div class="h-100 d-flex align-items-center">
                                            <select name="make"
                                                    class="minPriceSelector  rounded-4 form-control select-min-price"
                                                    aria-label="Minimum price">
                                                @foreach(App\Helpers\DefaultLanguage::Make() as $makes)
                                                    <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-3 col-sm-4  px-2 col-12">
                                        <div class="h-100 d-flex align-items-center">
                                            <input type="number" name="zip" placeholder="Zip Code "
                                                   class="form-control rounded-4">
                                        </div>

                                    </div>
                                    <div class="col-md-3 col-sm-4  px-2 col-12 ">
                                        <div class="h-100 d-flex align-items-center">
                                            <select name="year" class="form-control rounded-4" id="Year">
                                                <option value="" selected disabled>All Years</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2010">2010</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2002">2002</option>
                                                <option value="2000">2000</option>
                                                <option value="1995">1995</option>
                                                <option value="1998">1998</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1991">1991</option>
                                                <option value="1987">1987</option>
                                                <option value="1985">1985</option>
                                                <option value="1981">1981</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-md-auto my-3 col-12 px-2 d-flex align-items-end">
                                        <button type="submit" class="btn btn-primary back-primary w-100 text-center rounded-4">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container ">
            <div class="row py-5">
                <div class="col-lg-6">
                    <div class="heading mb-3">Recent <span>Used Cars</span></div>
                    @if(App\Helpers\DefaultLanguage::recentUseCar() != null)
                        @foreach(App\Helpers\DefaultLanguage::recentUseCar() as $cars)
                            <div class="card mb-3 border-0 back-light rounded-4">
                                <div class="d-flex g-0 p-2">
                                    <div class="col-md-4 col-5 research-card-img">
                                        <img src="{{asset('images/media/'.$cars->media()->image)}}"
                                             class="img-fluid rounded-start">
                                    </div>
                                    <div class="col-md-8 my-auto col-7 ">
                                        <div class="card-body research-card">
                                            <a href="{{url('blogs',$cars['slug'])}}">
                                                <h6 class="card-title clr-primary">{{$cars->title}}</h6>
                                            </a>
                                            {!!$cars->short_description!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{--                    <div class="d-flex justify-content-center">--}}
                    {{--                        <button class="btn btn-primary back-primary border-0"><a href="{{url('used-car')}}" class="text-white">View More</a></button>--}}
                    {{--                    </div>--}}
                </div>
                <div class="col-lg-6">
                    <div class="heading mb-3">Recent <span>New Cars</span></div>
                    @if(App\Helpers\DefaultLanguage::recentNewCar() != null)
                        @foreach (App\Helpers\DefaultLanguage::recentNewCar() as $cars)
                            <div class="card mb-3 border-0 back-light rounded-4">
                                <div class="d-flex g-0 p-2">
                                    <div class="col-md-4 col-5 research-card-img">
                                        <img src="{{asset('images/media/'.$cars->media()->image)}}"
                                             class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8 col-7 my-auto ">
                                        <div class="card-body research-card">
                                            <a href="{{url('blogs',$cars['slug'])}}">
                                                <h6 class="card-title clr-primary">{{$cars->title}}</h6>
                                            </a>
                                            {!!$cars->short_description!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{--                    <div class="d-flex justify-content-center">--}}
                    {{--                        <button class="btn btn-primary back-primary border-0"><a class="text-white" href="{{url('new-car')}}">View More</a></button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container ">
            <div class="row py-5">
                <h1 class="fw-bold">Articles, advice & resources</h1>
                @if($research_article->isNotEmpty())

                    <div class="col-12">
                        <div class="row adivce-resources">
                            @foreach($research_article as $val)
                                    <?php
                                    $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;

                                    ?>
                                <div class="col-md-4 review-instant">
                                    @if($val->media()->image == null)
                                        <img src="{{asset('images/media/'.$image)}}" alt="">
                                    @else
                                        <img
                                                src="{{asset('images/media'.'/'.$val->media()->image)}}"
                                                alt="">
                                    @endif

                                    <h5 class="fw-bold pt-2">
                                        <a href="#">{{$val->title}}</a>
                                    </h5>
                                    <p class="clr-light">by {{$val->written_by??'No One'}}</p>
                                    <p>{!! $val->short_description !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </section>


    <section>

        <div class="container">
            <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
                <div class="col-12">
                    <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                        <div class="d-md-block d-flex justify-content-between">
                            <h4 class="accordion-heading text-md-center text-start my-auto">All <span>Makers</span>
                            </h4>
                            <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                        </div>

                        <hr class="mx-auto ecu-2 d-md-block d-none">

                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                        <div class="row px-md-3">
                            @if(count($makess)>0)
                                @foreach($makess as $make)
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-sm-4 col-6 ">
                                        <a href="{{url('listing/')."?make=".$make->id}}" class="text-dark fw-bold"><p class="back-light rounded-2 p-2 py-3 fw-bold">{{$make->title}}</p></a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    function checkMedia(x) {
        if (x.matches) {
            $(".dropdown_menu").click(function () {
                $(this).parents('.parent_dropdown').find(".dropdown_items").slideToggle();
                $(this).parents('.parent_dropdown').find(".dropdown_menu").toggleClass('active');
            });
        } else {
        }
    }

    var x = window.matchMedia("(max-width: 768px)")
    checkMedia(x)
    x.addListener(checkMedia)
</script>
