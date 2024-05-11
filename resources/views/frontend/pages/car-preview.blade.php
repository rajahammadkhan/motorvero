@extends('frontend.layouts.master')
@section('title')
    BY The Number
@endsection
@section('content')
    <style>
        .used-car-privew img {
            height: 100;
            width: 100%;
            object-fit: cover;
        }

        .car-rev-anch a {
            top: 10%;
        }

        .car-articles img {
            width: 100%;
            height: 200px;
        }

        .dropdown_items {
            display: none;
        }

        .dropdown_items ul {
            display: grid;
            grid-template-columns: auto auto auto auto;
            flex-flow: column wrap;
            align-content: flex-start;
            list-style: inside;
            height: 15rem;
        }
    </style>
    <section>
        <div class="container">
            <div class="col-12 fw-bold">
                <h1>Car reviews and advice</h1>
            </div>
            <div class="col-12">
                <p>Find your perfect car with help from our experts</p>
            </div>
            <div class="tab-content p-3 bg-white rounded-3 " id="myTabContentNested">
                <div class="tab-pane fade active show" id="model" role="tabpanel" aria-labelledby="model-tab">
                    <form action="https://eliteblue.net/motorvero/public/listing" method="GET">
                        <input type="hidden" name="condition" value="Used">
                        <input type="hidden" name="tracking" value="home">
                        <div class="row ">
                            <div class="col-md-3 col-12">
                                <div class="h-100">
                                    <select class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus" autocomplete="off" id="idMaker" name="make" aria-label="Select Make">
                                        <option value="" selected="selected" disabled="">All Makes
                                        </option>
                                        <option value="62">Acura </option>
                                        <option value="63">Audi </option>
                                        <option value="64">BMW </option>
                                        <option value="65">Chevyy </option>
                                        <option value="82">Chrysler </option>
                                        <option value="69">Civic </option>
                                        <option value="83">Civic </option>
                                        <option value="78">Dodge </option>
                                        <option value="79">Dodge </option>
                                        <option value="85">electric car </option>
                                        <option value="66">ferrari </option>
                                        <option value="68">Hummer </option>
                                        <option value="81">Jeep </option>
                                        <option value="70">Mazda </option>
                                        <option value="71">Mercedes </option>
                                        <option value="77">Nissan </option>
                                        <option value="80">Porsche </option>
                                        <option value="72">Rolls-Royce </option>
                                        <option value="73">Suzuki </option>
                                        <option value="74">Tesla </option>
                                        <option value="75">Toyota </option>
                                        <option value="86">trsting </option>
                                        <option value="76">Volvo </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="h-100">
                                    <select name="model" class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="carPickerUsed_modelSelect" aria-label="Select Model">
                                        <option value=""> Select Model </option>
                                        <option value="50">B-Series</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12  ">
                                <div class="h-100">
                                    <select name="model" class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="carPickerUsed_modelSelect" aria-label="Select Year">
                                        <option value=""> Select Year </option>
                                        <option value="50">2001</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-flex align-items-end my-md-auto my-3">
                                <button type="submit" class="btn back-primary text-white w-100 text-center">Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
                    <style>
                        .carbody .card {
                            height: 100% !important;
                        }

                        .cardbodyimg {
                            background-color: white;
                            margin: 10px;
                            height: 70px;
                            width: 90%;
                        }

                        .cardbodyimg img {
                            height: 100% !important;
                        }
                    </style>
                    <div class="row m-0">
                        <div class="col-12 px-0 mb-3">
                            <div class="row carbody m-0" role="listbox">
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100 ">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=SUV/Crosover">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="SUV / Crossover Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/suv.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">SUV / Crossover </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100 ">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=Sedan">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Sedan Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/sedan.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Sedan</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=PickUp Truck">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Pickup Truck Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/truck.jpeg" data-src="https://static1.cargurus.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Pickup Truck</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=Coupe">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Coupe Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/coupe.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Coupe</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=HatchBack">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Hatchback Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/hatchback.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Hatchback</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=Covertable">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Hatchback Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/convertible.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Convertible</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=Wagon">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Wagon Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/wagon.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Wagon</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="my-2 col-md-3  col-6 col-sm-4 h-100">
                                    <a href="https://eliteblue.net/motorvero/public/listing?body=MiniVan">
                                        <div class="card">
                                            <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                            <div class="cardbodyimg">
                                                <img draggable="false" alt="Minivan Body Style" src="https://eliteblue.net/motorvero/public/frontend/images/types/minivan.jpeg" class="w-100">
                                            </div>
                                            <div class="cardBody">
                                                <div>
                                                    <h6 class="title">Minivan</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade show" id="byprice" role="tabpanel" aria-labelledby="byprice-tab">
                    <form action="https://eliteblue.net/motorvero/public/listing" method="GET">
                        <div class="row">
                            <div class="col-md-3  col-12">
                                <div class="h-100 d-flex align-items-center">
                                    <p class="mb-0 me-2 ">
                                        Price
                                    </p>
                                    <select name="minPrice" class="minPriceSelector rounded-0 form-control select-min-price" aria-label="Minimum price">
                                        <option value="0">---</option>
                                        <option value="1000">$1,000</option>
                                        <option value="2000">$2,000</option>
                                        <option value="3000">$3,000</option>
                                        <option value="4000">$4,000</option>
                                        <option value="5000">$5,000</option>
                                        <option value="6000">$6,000</option>
                                        <option value="7000">$7,000</option>
                                        <option value="8000">$8,000</option>
                                        <option value="9000">$9,000</option>
                                        <option value="10000">$10,000</option>
                                        <option value="12000">$12,000</option>
                                        <option value="14000">$14,000</option>
                                        <option value="16000">$16,000</option>
                                        <option value="18000">$18,000</option>
                                        <option value="20000">$20,000</option>
                                        <option value="22000">$22,000</option>
                                        <option value="24000">$24,000</option>
                                        <option value="26000">$26,000</option>
                                        <option value="28000">$28,000</option>
                                        <option value="30000">$30,000</option>
                                        <option value="35000">$35,000</option>
                                        <option value="40000">$40,000</option>
                                        <option value="45000">$45,000</option>
                                        <option value="50000">$50,000</option>
                                        <option value="55000">$55,000</option>
                                        <option value="60000">$60,000</option>
                                        <option value="65000">$65,000</option>
                                        <option value="70000">$70,000</option>
                                        <option value="75000">$75,000</option>
                                        <option value="80000">$80,000</option>
                                        <option value="85000">$85,000</option>
                                        <option value="90000">$90,000</option>
                                        <option value="95000">$95,000</option>
                                        <option value="100000">$100,000</option>
                                        <option value="110000">$110,000</option>
                                        <option value="120000">$120,000</option>
                                        <option value="130000">$130,000</option>
                                        <option value="140000">$140,000</option>
                                        <option value="150000">$150,000</option>
                                        <option value="160000">$160,000</option>
                                        <option value="170000">$170,000</option>
                                        <option value="180000">$180,000</option>
                                        <option value="190000">$190,000</option>
                                        <option value="200000">$200,000</option>


                                    </select>
                                </div>

                            </div>
                            <div class="col-md-3 col-12 ">
                                <div class="h-100 d-flex align-items-center">
                                    <p class="mb-0 me-2 ">
                                        Price
                                    </p>
                                    <select name="maxPrice" class="minPriceSelector form-control select-min-price rounded-0" aria-label="Minimum price">
                                        <option value="0">---</option>
                                        <option value="1000">$1,000</option>
                                        <option value="2000">$2,000</option>
                                        <option value="3000">$3,000</option>
                                        <option value="4000">$4,000</option>
                                        <option value="5000">$5,000</option>
                                        <option value="6000">$6,000</option>
                                        <option value="7000">$7,000</option>
                                        <option value="8000">$8,000</option>
                                        <option value="9000">$9,000</option>
                                        <option value="10000">$10,000</option>
                                        <option value="12000">$12,000</option>
                                        <option value="14000">$14,000</option>
                                        <option value="16000">$16,000</option>
                                        <option value="18000">$18,000</option>
                                        <option value="20000">$20,000</option>
                                        <option value="22000">$22,000</option>
                                        <option value="24000">$24,000</option>
                                        <option value="26000">$26,000</option>
                                        <option value="28000">$28,000</option>
                                        <option value="30000">$30,000</option>
                                        <option value="35000">$35,000</option>
                                        <option value="40000">$40,000</option>
                                        <option value="45000">$45,000</option>
                                        <option value="50000">$50,000</option>
                                        <option value="55000">$55,000</option>
                                        <option value="60000">$60,000</option>
                                        <option value="65000">$65,000</option>
                                        <option value="70000">$70,000</option>
                                        <option value="75000">$75,000</option>
                                        <option value="80000">$80,000</option>
                                        <option value="85000">$85,000</option>
                                        <option value="90000">$90,000</option>
                                        <option value="95000">$95,000</option>
                                        <option value="100000">$100,000</option>
                                        <option value="110000">$110,000</option>
                                        <option value="120000">$120,000</option>
                                        <option value="130000">$130,000</option>
                                        <option value="140000">$140,000</option>
                                        <option value="150000">$150,000</option>
                                        <option value="160000">$160,000</option>
                                        <option value="170000">$170,000</option>
                                        <option value="180000">$180,000</option>
                                        <option value="190000">$190,000</option>
                                        <option value="200000">$200,000</option>


                                    </select>
                                </div>

                            </div>
                            <div class="col-md-3  col-12">
                                <div class="h-100 d-flex align-items-center">
                                    <p class="mb-0 me-2 ">
                                        Near
                                    </p>
                                    <input type="number" class="form-control rounded-0">
                                </div>

                            </div>
                            <div class="col-md-3 my-md-auto my-3 col-12 d-flex align-items-end">
                                <button type="submit"><a class="btn btn-primary back-primary w-100 text-center rounded-0">Search</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-8">
                            <h2>Buying a used car</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>

                    </div>
                    <div class="row used-car-privew">
                        @if($used->isNotEmpty())
                            @foreach($used as $val)

                                    <?php
                                    $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;
                                    ?>
                                <div class="col-md-6">
                                    @if($val->media()->image == null)
                                        <img src="{{asset('images/media/'.$image)}}" alt="">
                                    @else
                                        <img
                                                src="{{asset('images/media'.'/'.$val->media()->image)}}"
                                                alt="">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold pt-2">
                                        <a href="#">{{$val->title}}</a>
                                    </h5>
                                    <p>{!! $val->short_description !!}</p>
                                </div>
                            @endforeach
                        @else
                            <h5>No Article Found</h5>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-8">
                            <h2>Buying a new car</h2>
                        </div>
                        <div class="col-4 position-relative">
                            <a href="#" class="fs-5 position-absolute car-rev-anch ">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>

                    </div>
                    <div class="row used-car-privew">
                        @if($new->isNotEmpty())
                            @foreach($new as $val)

                                    <?php
                                    $image = isset($val['image']) ? $val['image'] : 'image4.jpeg' ;
                                    ?>
                                <div class="col-md-6">
                                    @if($val->media()->image == null)
                                        <img src="{{asset('images/media/'.$image)}}" alt="">
                                    @else
                                        <img
                                                src="{{asset('images/media'.'/'.$val->media()->image)}}"
                                                alt="">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold pt-2">
                                        <a href="#">{{$val->title}}</a>
                                    </h5>
                                    <p>{!! $val->short_description !!}</p>
                                </div>
                            @endforeach
                        @else
                            <h5>No Article Found</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Selling your car</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Latest expert reviews</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Previews</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Best by category</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Shopping & negotiating</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="col-12 mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <h2>Ownership & maintenance</h2>
                        </div>
                        <div class="col-4 position-relative car-rev-anch">
                            <a href="#" class="fs-5 position-absolute car-rev-anch">See all articles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                    <div class="col-md-3">
                        <div class="car-articles">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/sell_car/image4.jpeg" alt="">
                        </div>
                        <h5 class="mt-2">Understanding Taxes When Buying and Selling a Car</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="col-12 text-center mb-4">
            <h1 class="fw-bold">FAQs</h1>
        </div>
        <div class="col-12 text-center mb-4">
            <a href="#"><u>See all</u></a> &nbsp;
            <a href="#"><u>Back to the top</u></a>
        </div>
        <div class="container-fluid px-md-5 px-sm-3 px-2">
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What states support
                                instant offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <ul class="states-support">
                                <li>Alabama</li>
                                <li>Arizona</li>
                                <li>Arkansas</li>
                                <li>California</li>
                                <li>Colorado</li>
                                <li>Connecticut</li>
                                <li>Delaware</li>
                                <li>District of Columbia</li>
                                <li>Florida</li>
                                <li>Georgia</li>
                                <li>Illinois</li>
                                <li>Indiana</li>
                                <li>Iowa</li>
                                <li>Louisiana</li>
                                <li>Maryland</li>
                                <li>Massachusetts</li>
                                <li>Michigan</li>
                                <li>Minnesota</li>
                                <li>Missouri</li>
                                <li>Nebraska</li>
                                <li>Nevada</li>
                                <li>New Jersey</li>
                                <li>New Mexico</li>
                                <li>New York</li>
                                <li>North Carolina</li>
                                <li>Ohio</li>
                                <li>Oklahoma</li>
                                <li>Oregon</li>
                                <li>Pennsylvania</li>
                                <li>Rhode Island</li>
                                <li>South Carolina</li>
                                <li>Tennessee</li>
                                <li>Texas</li>
                                <li>Utah</li>
                                <li>Virginia</li>
                                <li>Washington</li>
                                <li>Wisconsin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                How does the offer process work?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                First, you'll enter some basic details about your car, like the VIN or license plate number,
                                mileage, and condition. If everything checks out, we'll send you the best offer, sourced
                                from thousands of dealers. Once you accept, we'll have you upload a few documents and
                                schedule a pick-up time. On pick-up day, a driver will come get your car and you'll get
                                paid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">
                                How do you determine my offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Our offer matrix tracks demand from dealers nationwide in real time. We use that offer
                                matrix to identify dealers interested in your car, and send you an offer from the dealer
                                that will pay you the most.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">How long is my offer
                                valid for?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Your offer will be valid for seven days or after driving 250 additional miles (whichever
                                comes first).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">What are my payment
                                options and when do I get paid?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                To get paid promptly, we recommend linking your bank account through our secure portal. This
                                will be the fastest, most hassle-free way to receive your funds. If your bank isn't
                                compatible with our system, we offer a check option, as well.

                                If a bank transfer is selected, payment will be received in one to three business days.

                                If you request a check, we'll likely deliver it on pickup day. Note: You'll have to wait for
                                the check to be activated before you can deposit it. We'll let you know when it's activated.
                                Additionally, many banks have deposit limits and may hold funds for several days before
                                depositing the funds into your account.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Will I always receive
                                an offer?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Some cars won't be eligible for an offer. Reasons include branded vehicle titles, extensive
                                damage, high mileage, old age, exotic or rare models, non-drivable condition, or no local
                                interest.

                                If your car falls into any of these categories and you're unable to get an offer, you can
                                still list your car privately with us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can you sell a car
                                without a title?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Among other things, a vehicle title shows proof of vehicle ownership, and if there are any
                                outstanding liens against the vehicle. That makes the title an important and necessary
                                document when selling a car. Rules around car titles vary by state, but—generally
                                speaking—if you’ve lost your vehicle’s title, it should be possible to obtain a replacement
                                by contacting your state’s Department of Motor Vehicles (DMV). Note, obtaining a new title
                                invalidates a car’s old title.

                                There are other reasons why you might not be in possession of your car’s title, such as if
                                the car still has a lien against it, or if it was bought from a previous owner that didn’t
                                have the title. Our guide to how to sell a car without a title explains what to do in these
                                scenarios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can you sell a car
                                with a lien?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                It is possible to sell a car that you haven’t finished financing, but only if you can settle
                                the outstanding auto loan with the lender, who in turn will then release the car’s title
                                (assuming they hold it—this varies by state). Note, the amount owed is unlikely to be as
                                simple as multiplying your monthly payment by the number of months left to run on the loan.
                                Instead, you’ll need to contact your lending institution to establish your payoff amount and
                                arrange to settle that figure before you can sell your car. Alternatively, if you trade in
                                your car, the dealer will guide you through the process of settling the loan as part of the
                                purchase of your next vehicle. For more information, see our guide:<a href="#"><u>How toTrade in Car That Isn’t Paid Off.</u></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Do you pay taxes when
                                you sell a car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                The rules and laws on what taxes you pay when selling your car to a private party vary by
                                state (and in some cases even by city). The most important thing to know is that you only
                                pay tax on any profit made from the car sale. If you sell a car for less than you paid for,
                                it there’s no sales tax to pay. However, if you sell your car for more money than you paid
                                for it, the Internal Revenue Services (IRS) considers that a capital gain, and you’ll need
                                to report it when you file your federal and state income taxes. Only after that will you
                                know if you owe any taxes. For more information, read out full guide:<a href="#"><u>Understanding Taxes When Buying a Selling a Car</u></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Does selling a
                                financed car hurt your credit?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>If you’re worried that selling a financed car might hurt your credit the important point to
                                consider is whether you can settle your debt as agreed with the lender. Contact your lender
                                and ask for your payoff balance, which is a figure based on the remainder of the loan
                                payments plus accompanying interest and fees. If you can sell your car and settle the payoff
                                loan with the lender, then it won’t hurt your credit. If you sell your car but still can’t
                                meet the payoff balance, there are other options open to you, such as refinancing the
                                remaining balance to make payments smaller. Doing this shouldn’t hurt your credit because
                                you’ll still be paying the loan back in full.

                                Alternative routes that will harm your credit include paying a settlement balance, voluntary
                                surrender of the vehicle or repossession of the vehicle. If you’re struggling to pay back
                                your car loan, it’s important to speak to the lender to see what options might be available
                                to you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  p-1  py-0 parent_dropdown2">
                <div class="col-12">
                    <button class="button-primary dropdown_menu2  rounded-5 back-light p-2 px-3 fs-2 d-md-block mb-3 w-100">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-black fs-6 fw-bold py-2 text-md-center text-start my-auto">Can I still get an offer if I haven't paid off my car?
                            </h4>
                            <div class="my-auto"><i class="fa-solid fa-angle-down fs-5 clr-dark"></i></div>
                        </div>


                    </button>

                </div>
                <div class="col-12">
                    <div class="dropdown_items  bg-white rounded-3 ">
                        <div class="row px-4">
                            <p>
                                Yes. If your offer is greater than the amount you owe on your car loan, we'll pay off your loan and send you the difference. If your offer is less than the amount you owe, you'll need to (a) pay off your loan before we can pay you, or (b) pay us the difference before we can pay your lender.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function checkMedia(x) {
            // if (x.matches) {
            $(".dropdown_menu2").on('click', function() {
                $(this).parents('.parent_dropdown2').find(".dropdown_items").toggleClass('showaccordion').slideToggle();
                $(this).parents('.parent_dropdown2').siblings().find(".showaccordion").removeClass('showaccordion').slideToggle();
                $(this).parents('.parent_dropdown2').find(".dropdown_menu2").toggleClass('active');
                $(this).parents('.parent_dropdown2').siblings().find(".active").removeClass('active');
            });

        }
        checkMedia('')
    </script>
@endsection
