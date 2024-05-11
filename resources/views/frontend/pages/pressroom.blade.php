@extends('frontend.layouts.master')
@section('title')
    Press Room
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
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100 d-flex align-items-center">
            <h1 class="heading"> Press <span>Room</span></h1>
        </div>
    </section>
    <section class="sec-gsp-form py-5 bg-white">
        <div class="container">

            <div class="col-md-12">
                <div class="content row">

                    <div class="menubar col-md-4 d-flex flex-column">
                        @include('frontend.pages.user-sidebar')

                    </div>



                    <div class="col-md-8">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Press Coverage</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Press Release</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Insights</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @if(isset($pressRoom))
                                @foreach($pressRoom as $value)


                                    @if($value->category == 1)
                                        {{--                        press release--}}
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                                                <div class="card-body">
                                                    <a href="{{url('press-room-detail/'.$value->id)}}">
                                                        <h5 class="card-title text-primary fw-bold fs-6">{{$value->title}}</h5>
                                                    </a>
                                                    <p class="card-text fs-6">{{\Carbon\Carbon::parse($value->created_at)->format('F j, Y \a\t g:i A')}}</p>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non laboriosam sequi vero aperiam esse labore reiciendis, voluptas perferendis ad! Ea dolor deserunt maiores harum veniam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($value->category == 2)
                                        {{--                        press coverage--}}
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                                                <div class="card-body ">
                                                    <a href="{{url('press-room-detail/'.$value->id)}}">
                                                        <h5 class="card-title text-primary fw-bold fs-6">{{$value->title}}</h5>
                                                    </a>
                                                    <p class="card-text fs-6">{{\Carbon\Carbon::parse($value->created_at)->format('F j, Y \a\t g:i A')}}</p>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea eveniet tenetur ab velit perferendis dolor autem, esse ipsa. Distinctio blanditiis accusantium suscipit ipsa architecto autem consequatur quos sunt voluptas aperiam!</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($value->category == 3)
                                        {{--                        insight--}}
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="card hover-none bg-light my-3 border-0  rounded px-3 events">
                                                <div class="card-body ">
                                                    <a href="{{url('press-room-detail/'.$value->id)}}">
                                                        <h5 class="card-title text-primary fw-bold fs-6">{{$value->title}}</h5>
                                                    </a>
                                                    <p class="card-text fs-6">{{\Carbon\Carbon::parse($value->created_at)->format('F j, Y \a\t g:i A')}}</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur minima, sed ea illo odit, sequi consectetur assumenda tempore sapiente velit voluptatum incidunt voluptas blanditiis!</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
