@extends('frontend.layouts.master')
@section('title')
Home
@endsection
@section('content')
<style>
    #home_next_newcar svg {
        transform: rotate(180deg);

    }

    .electriccarintab:checked~label {
        background-color: #5093ce !important;

    }

    .electriccarintab~label {
        margin: 3px !important;
        border: none !important;
        background-color: var(--primary-light) !important;
        color: white;
        border-radius: 5px;
        padding: 9px;
    }

    .electriccarintab [name="buynewelec"]:checked~label {
        margin: 3px !important;
        border: none !important;
        background-color: var(--primary-light) !important;
        color: white;
        border-radius: 5px;
        padding: 9px;
    }
</style>
{{-- <style>--}}
{{-- .card.car-card {--}}
{{-- background: #92b1cb !important;--}}
{{-- }--}}
{{-- </style>--}}
{{-- @dd(App\Helpers\DefaultLanguage::Cars(['condition'=>'new','body_type'=>'MiniVan']))--}}
<section class="top-banner">
    <div class="container-fluid my-auto h-100 sec-1 d-flex align-items-center justify-content-center ">
        <div class="row w-100">
            <div class="col-lg-7 col-md-9 mx-auto home-tab rounded-4 col-12" id="content">
                <div class="sec-1-main tabintotab py-3 w-100">
                    <h1 class="text-main m-0 heading-m clr-primary fw-bolder">
                        MotorVero To You
                    </h1>
                    <ul class="nav nav-tabs mt-2 border-0 " id="myTab" role="tablist">

                        <li class="nav-item col px-1 mt-1 position-relative" role="presentation">
                            <a class="h-100 d-none d-md-flex align-items-center justify-content-center tab-btn nav-link active btn tab-btn text-white" id="profile-tab" data-bs-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy Used</a>
                            <a class="h-100 d-flex align-items-center justify-content-center d-md-none tab-btn nav-link active btn tab-btn text-white" id="profile-tab" data-bs-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Used</a>
                        </li>
                        <li class="nav-item col px-1 mt-1 position-relative" role="presentation">
                            <a class="h-100 d-none d-md-flex align-items-center justify-content-center  tab-btn nav-link btn tab-btn text-white" id="buy_new-tab" data-bs-toggle="tab" href="#buy_new" role="tab" aria-controls="buy_new" aria-selected="false" tabindex="-1">Buy New</a>
                            <a class="h-100 d-md-none d-flex align-items-center justify-content-center  tab-btn nav-link btn tab-btn text-white" id="buy_new-tab" data-bs-toggle="tab" href="#buy_new" role="tab" aria-controls="buy_new" aria-selected="false" tabindex="-1">New</a>
                        </li>
                        <li class="nav-item d-none col px-1 mt-1 position-relative" role="presentation">
                            <a class="h-100 d-flex align-items-center justify-content-center  tab-btn nav-link btn tab-btn text-white" id="electric_car-tab" data-bs-toggle="tab" href="#electric_car" role="tab" aria-controls="electric_car" aria-selected="false" tabindex="-1">Electric Car</a>
                        </li>
                        <li class="nav-item col px-1 mt-1 position-relative" role="presentation">
                            <a class="d-md-block d-none nav-link btn tab-btn text-white px-0 tab-btn" id="certified-tab" data-bs-toggle="tab" href="#certified" role="tab" aria-controls="certified" aria-selected="false" tabindex="-1">Certified
                                Pre-Owned</a>
                            <a class="h-100 d-flex align-items-center d-md-none justify-content-center  tab-btn nav-link btn tab-btn text-white px-0" id="certified-tab" data-bs-toggle="tab" href="#certified" role="tab" aria-controls="certified" aria-selected="false" tabindex="-1">CPO</a>
                        </li>
                        <li class="nav-item col px-1 mt-1 position-relative" role="presentation">
                            <a class="h-100 d-flex align-items-center justify-content-center  tab-btn nav-link btn tab-btn text-white" id="financing-tab" data-bs-toggle="tab" href="#financing" role="tab" aria-controls="financing" aria-selected="false" tabindex="-1">Financing</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3 bg-white rounded-3 pb-0 " id="myTabContent">

                        <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                            <ul class="nav nav-tabs align-items-center justify-content-center text-center" id="myTabNested" role="tablist">
                                <li class="col-md-3 nav-item position-relative  col-6 px-1" role="presentationnested">
                                    <a class="nav-link active" id="model-tab" data-bs-toggle="tab" href="#model" role="tab" aria-controls="model" aria-selected="true"  style="margin: 0 !important;"> By
                                        Make/Model</a>
                                </li>
                                <li class="col-md-3 nav-item position-relative  col-6 px-1" role="presentationnested">
                                    <a class="nav-link" id="price-tab" data-bs-toggle="tab" href="#price" role="tab" aria-controls="price" aria-selected="false" tabindex="-1" style="margin: 0 !important;">By Body Style</a>
                                </li>
                                <li class="col-md-3 nav-item position-relative  col-6 px-1" role="presentationnested">
                                    <a class="nav-link " id="byprice-tab" data-bs-toggle="tab" href="#byprice" role="tab" aria-controls="byprice" aria-selected="false" tabindex="-1" style="margin: 0 !important;">By
                                        Price</a>
                                </li>
                                <li class="col-md-3 nav-item position-relative  col-6 px-1" role="presentationnested">
                                    <input class="electriccarintab d-none" type="checkbox" id="electriccarintab1">
                                    <label class="w-100 nav-link" for="electriccarintab1">Electric Car</label>
                                </li>
                            </ul>

                            <div class="tab-content p-3 bg-white rounded-3 " id="myTabContentNested">
                                <div class="tab-pane fade active show" id="model" role="tabpanel" aria-labelledby="model-tab">
                                    <form action="{{url('listing')}}" method="GET">
                                        <input type="hidden" name="condition" value="Used">
                                        <input type="hidden" name="tracking" value="home">
                                        <div class="row ">
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus" autocomplete="off" id="idMaker" name="make" aria-label="Select Make">
                                                        <option value="" selected="selected" disabled>All Makes
                                                        </option>
                                                        @foreach(App\Helpers\DefaultLanguage::Make() as $makes)
                                                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select name="model" class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="carPickerUsed_modelSelect" aria-label="Select Model">
                                                        <option value="" selected="selected" disabled>All Models
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12  ">
                                                <div class="">
                                                    <input type="number" name="zip" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="zip" placeholder="Near ZIP">
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
                                    @include('frontend/snippets/body_style')
                                </div>
                                <div class="tab-pane fade show" id="byprice" role="tabpanel" aria-labelledby="byprice-tab">
                                    <form action="{{url('listing')}}" method="GET">
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
                        <div class="tab-pane  fade" id="buy_new" role="tabpanel" aria-labelledby="buy_new-tab">
                            <ul class="nav nav-tabs" id="myTabNested" role="tablist">
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link active " id="model1-tab" data-bs-toggle="tab" href="#model1" role="tab" aria-controls="model1" aria-selected="true">By
                                        Make/Model</a>
                                </li>
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link " id="price1-tab" data-bs-toggle="tab" href="#price1" role="tab" aria-controls="price1" aria-selected="false" tabindex="-1">By
                                        Body
                                        Style</a>
                                </li>
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link   " id="byprice1-tab" data-bs-toggle="tab" href="#byprice1" role="tab" aria-controls="byprice1" aria-selected="false" tabindex="-1">By
                                        Price</a>
                                </li>
                                <li class="nav-item position-relative" role="presentationnested">
                                    <input class="electriccarintab d-none" type="checkbox" id="electriccarintab2">
                                    <label class=" " for="electriccarintab2">Electric Car</label>
                                </li>
                            </ul>

                            <div class="tab-content p-3 bg-white rounded-3 " id="myTabContentNested">
                                <div class="tab-pane fade active show" id="model1" role="tabpanel" aria-labelledby="model-tab">
                                    <form action="{{url('listing')}}" method="GET">
                                        <input type="hidden" name="tracking" value="home">
                                        <input type="hidden" name="condition" value="New">
                                        <div class="row">
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus px-0" autocomplete="off" name="make" aria-label="Select Make">
                                                        <option value="" selected="selected" disabled>
                                                            Select Makes
                                                        </option>
                                                        @foreach($make as $makes)

                                                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="buyPickerUsed_modelSelect" name="model" aria-label="Select Model">
                                                        <option value="" selected="selected" disabled>All Models
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12  ">
                                                <div class="">
                                                    <input type="number" name="zip" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="zip" placeholder="Near ZIP">
                                                    <!-- <label class="p-0" for="zip">Near ZIPaaa</label> -->
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12 d-flex align-items-end my-md-auto my-3">
                                                <button type="submit" class="btn back-primary text-white w-100 text-center">
                                                    Search
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="price1" role="tabpanel" aria-labelledby="price-tab">
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
                                <div class="tab-pane fade show" id="byprice1" role="tabpanel" aria-labelledby="byprice-tab">
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
                                                <select name="minPrice" class="minPriceSelector form-control select-min-price rounded-0" aria-label="Minimum price">
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
                                            <a href="#" class="btn btn-primary back-primary w-100 text-center rounded-0">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- electric car --}}
                        <div class="tab-pane  fade" id="electric_car" role="tabpanel" aria-labelledby="electric_car-tab">
                            <ul class="nav nav-tabs" id="myTabNested" role="tablist">
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link active " id="model1-tab" data-bs-toggle="tab" href="#model1" role="tab" aria-controls="model1" aria-selected="true">By
                                        Make/Model</a>
                                </li>
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link " id="price1-tab" data-bs-toggle="tab" href="#price1" role="tab" aria-controls="price1" aria-selected="false" tabindex="-1">By
                                        Body
                                        Style</a>
                                </li>
                                <li class="nav-item position-relative" role="presentationnested">
                                    <a class="nav-link   " id="byprice1-tab" data-bs-toggle="tab" href="#byprice1" role="tab" aria-controls="byprice1" aria-selected="false" tabindex="-1">By
                                        Price</a>
                                </li>
                                <li class="nav-item position-relative d-flex" role="presentationnested">
                                    <div>
                                        <input class="electriccarintab d-none" type="radio" name="buynewelec" id="electriccarintab3">
                                        <label class=" " for="electriccarintab3">New Car</label>
                                    </div>
                                    <div>
                                        <input class="electriccarintab d-none" type="radio" name="buynewelec" id="electriccarintab4">
                                        <label class=" " for="electriccarintab4">Used Car</label>
                                    </div>
                                </li>
                            </ul>

                            <div class="tab-content p-3 bg-white rounded-3 " id="myTabContentNested">
                                <div class="tab-pane fade active show" id="model1" role="tabpanel" aria-labelledby="model-tab">
                                    <form action="{{url('listing')}}" method="GET">
                                        <input type="hidden" name="tracking" value="home">
                                        <input type="hidden" name="condition" value="new">
                                        <div class="row">
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select class="form-control box-shadow-0 tab-dropdown maker tab-dropdown-focus" autocomplete="off" id="idMaker" name="make" aria-label="Select Make">
                                                        <option value="" selected="selected" disabled>All Makes
                                                        </option>
                                                        @foreach(App\Helpers\DefaultLanguage::electricMake() as $makes)
                                                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select class="form-control box-shadow-0 tab-dropdown model tab-dropdown-focus" autocomplete="off" id="buyPickerUsed_modelSelect" name="model" aria-label="Select Model">
                                                        <option value="" selected="selected" disabled>All Models
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12  ">
                                                <div class="">
                                                    <input type="number" name="zip" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="zip" placeholder="Near ZIP">
                                                    <!-- <label class="p-0" for="zip">Near ZIPaaa</label> -->
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12 d-flex align-items-end my-md-auto my-3">
                                                <button type="submit" class="btn back-primary text-white w-100 text-center">
                                                    Search
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="price1" role="tabpanel" aria-labelledby="price-tab">
                                    <div class="row">
                                        <div class="col-12 px-0 mb-3">
                                            <div class="row carbody" role="listbox">
                                                <div class="card col-md-3  col-6 col-sm-4 h-100 " role="option" aria-selected="false" data-body="bg6" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="SUV / Crossover Body Style" src="{{asset('frontend/images/types/suv.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">SUV / Crossover </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100 " role="option" aria-selected="false" data-body="bg6" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Sedan Body Style" src="{{asset('frontend/images/types/sedan.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Sedan</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg5" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Pickup Truck Body Style" src="{{asset('frontend/images/types/truck.jpeg')}}" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Pickup Truck</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg0" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/coupe.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Coupe Body Style" src="{{asset('frontend/images/types/coupe.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Coupe</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg3" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/hatchback.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Hatchback Body Style" src="{{asset('frontend/images/types/hatchback.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Hatchback</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg1" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/convertible.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Hatchback Body Style" src="{{asset('frontend/images/types/convertible.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Convertible</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="true" data-body="bg9" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/wagon.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Wagon Body Style" src="{{asset('frontend/images/types/wagon.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Wagon</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg4" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/minivan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Minivan Body Style" src="{{asset('frontend/images/types/minivan.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Minivan</h6>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="byprice1" role="tabpanel" aria-labelledby="byprice-tab">
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
                                                <select name="minPrice" class="minPriceSelector form-control select-min-price rounded-0" aria-label="Minimum price">
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
                                            <a href="#" class="btn btn-primary back-primary w-100 text-center rounded-0">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end--}}
                        <div class="tab-pane fade" id="certified" role="tabpanel" aria-labelledby="certified-tab">
                            <div class="tab-content p-3 bg-white rounded-3 " id="myTabContentNested">
                                <div class="tab-pane fade active show" id="model" role="tabpanel" aria-labelledby="model-tab">
                                    <form action="{{url('listing')}}" method="GET">
                                        @csrf
                                        <input type="hidden" name="condition" value="Old">
                                        <div class="row">
                                            <div class="col-md-3 col-12">
                                                <div class="h-100">
                                                    <select name="make" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" autocomplete="off" id="carPickerUsed_makerSelect" aria-label="Select Make">
                                                        <option value="" selected="selected" disabled>
                                                            All Makes
                                                        </option>
                                                        @foreach($make as $makes)
                                                        <option value="{{$makes->id}}">{{$makes->title}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12  ">
                                                <div class="">
                                                    <input type="number" name="zip" class="form-control box-shadow-0 tab-dropdown tab-dropdown-focus" id="zip" placeholder="Near ZIP">
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
                                    <div class="row">
                                        <div class="col-12 px-0 mb-3">
                                            <div class="row carbody" role="listbox">
                                                <div class="card col-md-3  col-6 col-sm-4 h-100 " role="option" aria-selected="false" data-body="bg6" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="SUV / Crossover Body Style" src="{{asset('frontend/images/types/suv.jpeg')}}" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">SUV / Crossover </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100 " role="option" aria-selected="false" data-body="bg6" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>

                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Sedan Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/sedan.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Sedan</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg5" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Pickup Truck Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/pickup.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Pickup Truck</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg0" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/coupe.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Coupe Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/coupe.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/coupe.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Coupe</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg3" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/hatchback.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Hatchback Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/hatchback.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/hatchback.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Hatchback</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg1" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/convertible.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Convertible Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/convertible.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/convertible.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Convertible</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="true" data-body="bg9" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/wagon.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Wagon Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/wagon.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/wagon.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Wagon</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-md-3  col-6 col-sm-4 h-100" role="option" aria-selected="false" data-body="bg4" tabindex="0">
                                                    <input type="checkbox" name="carModel" class="carModelCheckbox" id="">
                                                    <div class="mediaContainer">
                                                        <div>
                                                            <div class="media">
                                                                <div class="embedResponsive embed-responsive-16by9 mediaContainer">
                                                                    <div class="thumb-container">
                                                                        <div class="image embedResponsiveItem" style="background-image: URL('https://static1.Motorvero.com/gfx/reskin/bodystyle/small/minivan.png?io=true&amp;format=jpg&amp;auto=webp')">
                                                                        </div>
                                                                        <picture class="embedResponsiveItem">
                                                                            <img draggable="false" alt="Minivan Body Style" src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/minivan.png?io=true&amp;format=jpg&amp;auto=webp" data-src="https://static1.Motorvero.com/gfx/reskin/bodystyle/small/minivan.png?io=true&amp;format=jpg&amp;auto=webp" class="w-100">
                                                                        </picture>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardBody">
                                                        <div>
                                                            <h6 class="title">Minivan</h6>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="byprice" role="tabpanel" aria-labelledby="byprice-tab">
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
                                                <select name="minPrice" class="minPriceSelector form-control select-min-price rounded-0" aria-label="Minimum price">
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
                                            <a href="#" class="btn btn-primary back-primary w-100 text-center rounded-0">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="financing" role="tabpanel" aria-labelledby="financing-tab">
                            <div class="row py-3">
                                <div class="col-12 mb-3">
                                    <h5 class="text-dark fw-bold text-center ">
                                        Shop with real rates in hand


                                    </h5>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 96 74" width="32">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m70.212766 0h-63.82978728c-3.52393617 0-6.38297872 2.85904255-6.38297872 6.38297872v46.80851068c0 3.5239361 2.85904255 6.3829787 6.38297872 6.3829787h63.82978728c3.5239361 0 6.3829787-2.8590426 6.3829787-6.3829787v-46.80851068c0-3.52393617-2.8590426-6.38297872-6.3829787-6.38297872zm2.1276595 53.1914894c0 1.1702127-.9574468 2.1276595-2.1276595 2.1276595h-63.82978728c-1.17021276 0-2.12765957-.9574468-2.12765957-2.1276595v-46.80851068c0-1.17021276.95744681-2.12765957 2.12765957-2.12765957h63.82978728c1.1702127 0 2.1276595.95744681 2.1276595 2.12765957zm-46.8085106-9.0425532v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-9.5744681c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h9.5744681c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm25.5319149 0v1.0638298c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-18.0851064c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-1.0638298c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h18.0851064c.8776596 0 1.5957447.7180851 1.5957447 1.5957447zm13.8297872-35.6382979h-10.6382979c-1.768617 0-3.1914893 1.42287234-3.1914893 3.1914894v6.3829787c0 1.768617 1.4228723 3.1914893 3.1914893 3.1914893h10.6382979c1.768617 0 3.1914894-1.4228723 3.1914894-3.1914893v-6.3829787c0-1.76861706-1.4228724-3.1914894-3.1914894-3.1914894zm-1.0638298 8.5106383h-8.5106383v-4.2553192h8.5106383zm-29.2553191 21.2765957h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446zm3.7234042-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446zm-25.5319149 0v-5.319149c0-.8776596.7180852-1.5957447 1.5957447-1.5957447h7.4468085c.8776596 0 1.5957447.7180851 1.5957447 1.5957447v5.319149c0 .8776595-.7180851 1.5957446-1.5957447 1.5957446h-7.4468085c-.8776595 0-1.5957447-.7180851-1.5957447-1.5957446zm51.0638298-5.319149v5.319149c0 .8776595-.7180851 1.5957446-1.5957446 1.5957446h-9.5744681c-.8776596 0-1.5957447-.7180851-1.5957447-1.5957446v-5.319149c0-.8776596.7180851-1.5957447 1.5957447-1.5957447h9.5744681c.8776595 0 1.5957446.7180851 1.5957446 1.5957447z" fill="#00a0dd" fill-rule="nonzero" transform="translate(0 14.425532)">
                                            </path>
                                            <g transform="translate(54.106383)">
                                                <path d="m27.5872936 8.59459619 3.7928308 1.90455891 1.8960249 3.8083347c.211671.4244243.6442674.6925102 1.1174677.6925102.4732004 0 .9057967-.2680859 1.1174678-.6925102l1.8960249-3.8083347 3.7928307-1.90455891c.4249399-.21164659.6936766-.64640393.6936766-1.12221749 0-.47581355-.2687367-.91057089-.6936766-1.12221748l-3.7928307-1.90455891-1.8960249-3.8083347c-.4240287-.84969015-1.8109069-.84969015-2.2349355 0l-1.8960249 3.8083347-3.7928308 1.90455891c-.4249399.21164659-.6936766.64640393-.6936766 1.12221748 0 .47581356.2687367.9105709.6936766 1.12221749zm5.2629042-2.07630351c.2449373-.12287123.4436739-.32133858.5667118-.56594399l.9767074-1.95234869.9767074 1.95551039c.1235853.24342877.3222643.44073008.5667119.56278229l1.9565807.97854562-1.9565807.98170732c-.2446049.12333045-.4432141.32167057-.5667119.56594399l-.9767074 1.95551039-.9767074-1.95234869c-.1234977-.24427342-.322107-.44261355-.5667118-.56594399l-1.9565808-.98170732zm4.5565958 23.92795502-1.8958261-3.8083844c-.4239841-.8504844-1.8107168-.8504844-2.234701 0l-1.895826 3.8083844-3.7924329 1.9038006c-.4253272.2114907-.6943906.6464865-.6943906 1.1226237 0 .4761373.2690634.911133.6943906 1.1226237l3.7924329 1.9038007 1.895826 3.8083844c.2116488.4244298.6441998.6925192 1.1173505.6925192.4731508 0 .9057017-.2680894 1.1173505-.6925192l1.8958261-3.8083844 3.7924328-1.9038007c.4253272-.2114907.6943906-.6464864.6943906-1.1226237 0-.4761372-.2690634-.911133-.6943906-1.1226237zm-1.4697573 4.0315075c-.2448264.1233983-.443488.3220677-.5667119.5667344l-.9767074 1.9555104-.9767074-1.9555104c-.1232239-.2446667-.3218854-.4433361-.5667118-.5667344l-1.9565808-.9777552 1.9565808-.9785456c.2448264-.1233983.4434879-.3220678.5667118-.5667344l.9767074-1.95472.9767074 1.95472c.1232239.2446666.3218855.4433361.5667119.5667344l1.9565807.9785456zm-4.0434193-14.0059403c-.0004743-.4896463-.2764504-.9373006-.7135471-1.1574279l-9.0864254-4.5481345-4.5428091-9.10838435c-.4382987-.87715753-1.8718504-.87715753-2.3101492 0l-4.5428091 9.10838435-9.08642539 4.5481345c-.43968713.2181236-.71783469.6667618-.71783469 1.1578318s.27814756.9397082.71783469 1.1578318l9.08642539 4.5521729 4.5428091 9.1035383c.2187945.4377409.6659493.7142382 1.1550746.7142382s.9362801-.2764973 1.1550746-.7142382l4.5428091-9.1035383 9.0864254-4.5505575c.4374794-.2209513.7135471-.6694917.7135471-1.1598511z" fill="#527d89" fill-rule="nonzero"></path>
                                                <path d="m19.8188651 24.2020076c-.198627.1162427-.3597884.3040033-.4595635.5354129l-2.8459564 6.6425595-2.8459564-6.6425595c-.0997751-.2314096-.2609365-.4191702-.4595635-.5354129l-5.6944801-3.3224015 5.6944801-3.3216536c.1983574-.1166771.3594155-.3043174.4595635-.5354129l2.8459564-6.6425596 2.8459564 6.6425596c.100148.2310955.2612061.4187358.4595635.5354129l5.6944801 3.3216536z" fill="#fff"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="fs-sm mb-0 text-dark smaller">
                                        No impact on your credit score
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 92 70" width="32">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m53.7714844 19.3183594 2.3925781-2.3925782c.6425781-.6425781.6425781-1.6816406 0-2.3242187l-.7792969-.7792969c-.6425781-.6425781-1.6816406-.6425781-2.3242187 0l-2.3925781 2.3925782c-4.8945313-4.2382813-11.1425782-6.95898442-18.0058594-7.4101563v-4.4296875h3.4179687c.9023438 0 1.640625-.73828125 1.640625-1.640625v-1.09375c0-.90234375-.7382812-1.640625-1.640625-1.640625h-10.9375c-.9023437 0-1.640625.73828125-1.640625 1.640625v1.09375c0 .90234375.7382813 1.640625 1.640625 1.640625h3.1445313v4.45703125c-15.8183594 1.18945315-28.2871094 14.41015625-28.2871094 30.54296875 0 16.9121094 13.7128906 30.625 30.625 30.625s30.625-13.7128906 30.625-30.625c0-7.6699219-2.8164062-14.6835938-7.4785156-20.0566406zm-23.1464844 46.3066406c-14.5058594 0-26.25-11.7441406-26.25-26.25s11.7441406-26.25 26.25-26.25 26.25 11.7441406 26.25 26.25-11.7441406 26.25-26.25 26.25zm.546875-17.5h-1.09375c-.9023438 0-1.640625-.7382812-1.640625-1.640625v-22.96875c0-.9023438.7382812-1.640625 1.640625-1.640625h1.09375c.9023438 0 1.640625.7382812 1.640625 1.640625v22.96875c0 .9023438-.7382812 1.640625-1.640625 1.640625z" fill="#00a0dd" fill-rule="nonzero" transform="translate(30)"></path>
                                            <g stroke-linecap="round">
                                                <g stroke="#fff" stroke-width="6.125">
                                                    <path d="m9.4375 42.4375h32.375"></path>
                                                    <path d="m13.8125 32.8125h32.375"></path>
                                                    <path d="m13.8125 23.1875h32.375"></path>
                                                </g>
                                                <g stroke="#527d89" stroke-width="3.5">
                                                    <path d="m9.472039 23.1875h34.930922"></path>
                                                    <path d="m2.4375 42.4375h32.375"></path>
                                                    <path d="m12.016447 32.8125h28.967106"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="fs-sm mb-0 text-dark smaller"> No impact on your credit score</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 0 79 70" width="32">
                                        <g fill="none">
                                            <path d="m10.9375 48.125h-8.75c-1.20859375 0-2.1875.9789063-2.1875 2.1875v17.5c0 1.2085937.97890625 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789063 2.1875-2.1875v-17.5c0-1.2085937-.9789062-2.1875-2.1875-2.1875zm-2.1875 17.5h-4.375v-13.125h4.375zm67.8125-39.375h-8.75c-1.2085937 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789063 2.1875 2.1875 2.1875h8.75c1.2085938 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789062-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm-5.6369141-53.5007812c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm-17.5 0h-8.75c-1.2085938 0-2.1875.9789062-2.1875 2.1875v39.375c0 1.2085938.9789062 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789062 2.1875-2.1875v-39.375c0-1.2085938-.9789063-2.1875-2.1875-2.1875zm-2.1875 39.375h-4.375v-35h4.375zm24.0625-21.875h-8.75c-1.2085937 0-2.1875.9789063-2.1875 2.1875v21.875c0 1.2085937.9789063 2.1875 2.1875 2.1875h8.75c1.2085937 0 2.1875-.9789063 2.1875-2.1875v-21.875c0-1.2085937-.9789063-2.1875-2.1875-2.1875zm-2.1875 21.875h-4.375v-17.5h4.375z" fill="#00a0dd"></path>
                                            <path d="m68.7380859 12.1242188c1.0048829.6234374 2.1792969 1.0007812 3.4494141 1.0007812 3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 .75332031.153125 1.46425781.3869141 2.13828125l-12.25 9.79999995c-1.0048828-.6248046-2.1792969-1.0021484-3.4494141-1.0021484s-2.4445313.3773438-3.4494141 1.0021484l-12.25-9.79999995c.2337891-.67265625.3869141-1.38496094.3869141-2.13828125 0-3.62441406-2.9380859-6.5625-6.5625-6.5625s-6.5625 2.93808594-6.5625 6.5625c0 1.01171875.2474609 1.9578125.65625 2.81367187l-13.15507812 13.15507813c-.85585938-.4087891-1.80195313-.65625-2.81367188-.65625-3.62441406 0-6.5625 2.9380859-6.5625 6.5625s2.93808594 6.5625 6.5625 6.5625c3.6244141 0 6.5625-2.9380859 6.5625-6.5625 0-1.0117188-.2474609-1.9578125-.65625-2.8136719l13.1550781-13.1550781c.8558594.4087891 1.8019531.65625 2.8136719.65625 1.2701172 0 2.4445313-.3773438 3.4494141-1.0021484l12.25 9.8c-.2337891.6740234-.3869141 1.3863281-.3869141 2.1396484 0 3.6244141 2.9380859 6.5625 6.5625 6.5625s6.5625-2.9380859 6.5625-6.5625c0-.7533203-.153125-1.465625-.3869141-2.1396484zm3.4494141-7.7492188c1.2058594 0 2.1875.98164062 2.1875 2.1875s-.9816406 2.1875-2.1875 2.1875-2.1875-.98164062-2.1875-2.1875.9816406-2.1875 2.1875-2.1875zm-65.625 26.25c-1.20585938 0-2.1875-.9816406-2.1875-2.1875s.98164062-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.98164062 2.1875-2.1875 2.1875zm21.875-21.875c-1.2058594 0-2.1875-.98164062-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.98164062 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875zm21.875 17.5c-1.2058594 0-2.1875-.9816406-2.1875-2.1875s.9816406-2.1875 2.1875-2.1875 2.1875.9816406 2.1875 2.1875-.9816406 2.1875-2.1875 2.1875z" fill="#527d89"></path>
                                        </g>
                                    </svg>
                                    <p class="fs-sm mb-0 text-dark smaller"> No impact on your credit score</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12 my-auto ">
                                    <a href="{{url('financing')}}" class="btn btn-primary back-primary w-100 text-center">See my
                                        options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec sec-2 py-5">
    <div class="container position-relative ">
        <div class="row  py-md-auto py-5">
            <div class="col-md-6 col-12 my-auto">
                <h2 class="text-white text-uppercase fw-normal font-primary">
                    Sell My Car online Now in Seconds
                </h2>
                <h6 class="text-white my-3">Fill inn few details, Know your Car Value, and leave pickup to us.
                </h6>
                <a href="{{url('sell-car')}}" class="button button-light px-md-5 text-center">Get your offer</a>
            </div>
            <div class="col-md-6 col-12 my-3">
                <div class="main-car">
                    <img src="{{asset('frontend/images/index/gari.png')}}" class="w-100" draggable="false" alt="Gari">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5" id="CarsYouMayLike">
    <div class="homepage redesign mt-5 pt-5">
        <div class="container">
            <article class="recent-search my-6">
                <div>
                    <h2 class="heading text-start">Good <span> Deals </span></h2>

                    <div class="row p-3 ">
                        @foreach($latest as $late)
                        <div class="col-md-3  p-1">
                            <div class="card car-card border-0 rounded-4 back-light p-0">
                                <div class="p-3">
                                    @if($late->featuredImage()->image != null)
                                    <img style="" src="{{asset('images/media'.'/'.$late->featuredImage()->image)}}">
                                    @else
                                    <img src="{{asset('frontend/images/index/sedan.webp')}}" class="card-img-top cars-card-img rounded-4" alt="...">
                                    @endif
                                </div>
                                <div class="card-body pt-0 px-4 mb-2">
                                    <a href="{{url('detail/'.$late->id)}}">
                                        <h6 class="font-secondary card-head m-0 fw-bold text-dark">
                                            {{$late->title}}
                                        </h6>
                                    </a>
                                    <h6 class="card-text mt-1">{{$late->User->name ?? ''}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}

                        {{-- <img src="{{asset('frontend/images/index/subaru_forester.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">Subaru Forester</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}

                        {{-- <img src="{{asset('frontend/images/index/gmc_sierra.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">GMC</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}
                        {{-- <img src="{{asset('frontend/images/index/toyota.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">GMC</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="mt-5" id="CarsYouMayLike">
    <div class="homepage redesign mt-5 pt-5">
        <div class="container">
            <article class="recent-search my-6">
                <div>
                    <h2 class="heading text-start">Cars You <span> May Like </span></h2>

                    <div class="row p-3 ">
                        @foreach($latest as $late)
                        <div class="col-md-3  p-1">
                            <div class="card car-card border-0 rounded-4 back-light p-0">
                                <div class="p-3">
                                    @if($late->featuredImage()->image != null)
                                    <img style="" src="{{asset('images/media'.'/'.$late->featuredImage()->image)}}">
                                    @else
                                    <img src="{{asset('frontend/images/index/sedan.webp')}}" class="card-img-top cars-card-img rounded-4" alt="...">
                                    @endif
                                </div>
                                <div class="card-body pt-0 px-4 mb-2">
                                    <a href="{{url('detail/'.$late->id)}}">
                                        <h6 class="font-secondary card-head m-0 fw-bold text-dark">
                                            {{$late->title}}
                                        </h6>
                                    </a>
                                    <h6 class="card-text mt-1">{{$late->User->name ?? ''}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}

                        {{-- <img src="{{asset('frontend/images/index/subaru_forester.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">Subaru Forester</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}

                        {{-- <img src="{{asset('frontend/images/index/gmc_sierra.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">GMC</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- <div class="col-md-3  p-1">--}}
                        {{-- <div class="card car-card border-0 rounded-4 back-light p-0">--}}
                        {{-- <div class="p-3">--}}
                        {{-- <img src="{{asset('frontend/images/index/toyota.webp')}}"--}}
                        {{-- class="card-img-top cars-card-img rounded-4" alt="...">--}}
                        {{-- </div>--}}
                        {{-- <div class="card-body pt-0 px-4 mb-2">--}}
                        {{-- <h6 class="font-secondary card-head m-0 fw-bold">GMC</h6>--}}
                        {{-- <h6 class="card-text mt-1">Clovis, CA</h6>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container home-electric-cars">
        <h2 class="heading text-center">Populor<span>Electric Cars </span></h2>
        <hr class="mx-auto ecu">
        <div class="autoplay2 ecslider" id="autoplay2">
            @if(App\Helpers\DefaultLanguage::Cars(['fuel_type'=>'new_electric']) != null)
            @foreach(App\Helpers\DefaultLanguage::Cars(['fuel_type'=>'new_electric']) as $cars)

            <div class="p-1 ">
                <div class="card car-card border-0 rounded-4 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('images/media'.'/'.$cars->featuredImage()->image)}}" class="card-img-top cars-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary mb-1 card-head m-0 fw-bold text-truncate">
                            <a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}}
                            </a>
                        </h6>
                        <small>
                            {{$cars->User->name}}
                        </small>
                        {{-- <h6 class="card-text mt-2 smaller">The original Tesla Roadster put the all-electri--}}
                        </h6>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            No data found
            @endif
        </div>

        <div class="carousel-control-group my-5 text-end">

            <a id="home_prev_newcar">
                <svg class="icon-carousel-control" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z"></path>
                </svg>

            </a>
            <a id="home_next_newcar">
                <svg class="icon-carousel-control next" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container home-electric-cars">
        <h2 class="heading text-center">Electric<span> Cars </span></h2>
        <hr class="mx-auto ecu">
        <div class="autoplay ecslider" id="autoplay">
            @if(App\Helpers\DefaultLanguage::Cars(['fuel_type'=>'electric']) != null)
            @foreach(App\Helpers\DefaultLanguage::Cars(['fuel_type'=>'electric']) as $cars)

            <div class="p-1 ">
                <div class="card car-card border-0 rounded-4 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('images/media'.'/'.$cars->featuredImage()->image)}}" class="card-img-top cars-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary mb-1 card-head m-0 fw-bold text-truncate">
                            <a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}}
                            </a>
                        </h6>
                        <small>
                            {{$cars->User->name}}
                        </small>
                        {{-- <h6 class="card-text mt-2 smaller">The original Tesla Roadster put the all-electri--}}
                        </h6>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            No data found
            @endif
        </div>

        <div class="carousel-control-group my-5 text-end">

            <a id="home_prev">
                <svg class="icon-carousel-control" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z"></path>
                </svg>

            </a>
            <a id="home_next">
                <svg class="icon-carousel-control next" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <h2 class="heading text-center">Get Best Cars For Sale Deals<span> Know What Car To Buy </span></h2>
        <hr class="mx-auto ecu">
        <div class="row p-3 ">
            <div class="col-md-4  py-1 px-3">
                <div class="card car-card  rounded-4 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('frontend/images/index/homecard1.jpeg')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">


                        <p class="mb-0 smaller clr-dark mt-1">Knowing the complete details about your car before
                            purchas. Talk to a Car Dealer Directly</p>
                        <h6 class="font-secondary  m-0 fw-bold">
                            Know the best Car Brands to buy
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4  py-1 px-3 ">
                <div class="card car-card  rounded-4 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('frontend/images/index/homecard2.jpeg')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary  m-0 fw-bold">
                            Finance Your dream Car
                        </h6>
                        <p class="mb-0 smaller clr-dark mt-1">See the best our financing offers on MotorVero today.
                            Find
                            Out if you're Pre-Qualified for your Car.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4  py-1 px-3">
                <div class="card car-card  rounded-4 back-light p-0">
                    <div class="p-3">
                        <img src="{{asset('frontend/images/index/homecard3.jpeg')}}" class="card-img-top deals-card-img rounded-4" alt="...">
                    </div>
                    <div class="card-body pt-0 px-4 mb-2">
                        <h6 class="font-secondary  m-0 fw-bold">Know The Best Car Deals</h6>
                        <p class="mb-0 smaller clr-dark mt-1">See Vehicle Details, Car history, price
                            drops,Reviews, to
                            make best decision on Cars for Sale</p>
                    </div>
                </div>
            </div>
            <div class="row  justify-content-center mt-3">
                <p class="smaller text-center w-md-75">Finance in Advance is a product of MotorVero, Inc. Subject to
                    final agreement between
                    you &amp; dealership. Financing not completed on site. Pre-qualification and rates subject to
                    your
                    acceptance and satisfaction of terms and conditions of participating lender.</p>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container position-relative ecslider">
        <h2 class="heading text-center">What Our <span>Users Are Saying
            </span></h2>
        <hr class="mx-auto ecu">


        <div class="fadeslider fadeslider-r" id="fadeslider">
            @foreach($review as $views)
            <div class="p-3">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body rounded-4 bg-white">

                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                </svg>
                                <p class="card-text my-3 ">{{$views->comment}}</p>
                                <h4 class="card-title   fw-bold mt-3 ">
                                    {{$views->name}}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">

            <a id="comment_home_prev">
                <svg class="icon-carousel-control" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                    </path>
                </svg>

            </a>
            <a id="comment_home_next">
                <svg class="icon-carousel-control next" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="mt-5 pt-5">
    <div class="container position-relative ecslider">
        <h2 class="heading text-center">Testi<span>monial
            </span></h2>
        <hr class="mx-auto ecu">


        <div class=" slidertestimonial testimonial" id="testimonial">
            @foreach($testimonials as $testimonial)
            <div class="p-3">
                <div class="card mb-3">
                    <div class=" g-0">
                        <div class="d-flex justify-content-center">
                            @if($testimonial->user_profile != null)
                            <img style="" src="{{asset('images/media'.'/'.$testimonial->user_profile)}}">
                            @else
                            <img src="https://eliteblue.net/motorvero/public/frontend/images/index/yt-1.webp" alt="">
                            @endif
                        </div>
                        <div class="mt-4">
                            <div class="card-body rounded-4 bg-white position-relative">

                                <svg width="28" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.804 15.265c0 1.916-.63 3.517-1.89 4.804C9.654 21.356 8.164 22 6.445 22c-1.719 0-3.222-.644-4.511-1.93C.644 18.781 0 17.24 0 15.444c0-1.796.773-3.981 2.32-6.555L7.476 0h4.984L9.28 9.339c2.35 1.137 3.524 3.113 3.524 5.926zm15.196 0c0 1.916-.63 3.517-1.89 4.804C24.85 21.356 23.36 22 21.64 22c-1.718 0-3.222-.644-4.51-1.93-1.29-1.288-1.934-2.83-1.934-4.625 0-1.796.773-3.981 2.32-6.555L22.672 0h4.984l-3.18 9.339C26.827 10.476 28 12.452 28 15.265z" fill="#746aff" fill-rule="evenodd"></path>
                                </svg>
                                <p class="card-text my-3 ">{!! $testimonial->description !!}</p>
                                <h4 class="card-title   fw-bold mt-3 ">
                                    {{$testimonial->title ?? ''}}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">

            <a id="comment_home_prev_test">
                <svg class="icon-carousel-control" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                    </path>
                </svg>

            </a>
            <a id="comment_home_next_test">
                <svg class="icon-carousel-control next" xmlns="http://www.w3.org/2000/svg" width="36.439" height="34.769">
                    <rect x=".455" y=".455" width="35.529" height="33.859" rx=".147" ry=".147" fill="transparent" stroke="#5093ce" stroke-width="2px"></rect>
                    <path fill="#5093ce" d="M10.527 17.384l15.385 9.127V8.258l-15.385 9.126z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container ">

        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>Makers</span>
                        </h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Make() != null)
                        @foreach(App\Helpers\DefaultLanguage::Make() as $maker)
                        <div class="col-lg-2 col-md-3 col-sm-3 col-sm-4 col-6 ">
                            <a class="text-dark fw-bold" href="{{url('listing/')."?make=".$maker->id}}">
                                <p class="back-light rounded-2 p-2 py-3 fw-bold "> {{$maker->title}} </p>
                            </a>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>Wagons</span>
                        </h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Cars(['body_type'=>'Wagon']) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['body_type'=>'Wagon','paginate'=>16]) as $cars)
                        <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                            <p class="smaller my-2">
                                Starting at ${{$cars->dollar_price}} </p>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif

                    </div>
                </div>
            </div>


        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular
                            <span>HatchBack</span>
                        </h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i></div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Cars(['body_type'=>'HatchBack']) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['body_type'=>'HatchBack','paginate'=>16]) as $cars)
                        <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                            <p class="smaller my-2">
                                Starting at ${{$cars->dollar_price}} </p>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular
                            <span>Coupe</span>
                        </h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i>
                        </div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="col-12">
                    <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                        <div class="row px-md-3">
                            @if(App\Helpers\DefaultLanguage::Cars(['body_type'=>'Coupe']) != null)
                            @foreach(App\Helpers\DefaultLanguage::Cars(['body_type'=>'Coupe','paginate'=>16]) as $cars)
                            <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                                <p class="smaller my-2">
                                    Starting at ${{$cars->dollar_price}} </p>
                            </div>
                            @endforeach
                            @else
                            No data found
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>PickUp
                                Truck</span>
                        </h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i>
                        </div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Cars(['body_type'=>'PickUp Truck','paginate'=>16]) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['body_type'=>'PickUp Truck']) as $cars)
                        <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                            <p class="smaller my-2">
                                Starting at ${{$cars->dollar_price}} </p>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>Used
                                Cars</span></h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i>
                        </div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Cars(['condition'=>'Used','paginate'=>16]) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['condition'=>'Used']) as $cars)
                        <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                            <p class="smaller my-2">
                                Starting at ${{$cars->dollar_price}} </p>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-md-4 p-1 py-md-5 py-0 parent_dropdown">
            <div class="col-12">
                <button class="btn dropdown_menu bg-md-auto bg-white rounded-3 shadow-md-none shadow-sm p-2 px-3 border-0 fs-2 d-md-block mb-3 w-100">
                    <div class="d-md-block d-flex justify-content-between">
                        <h4 class="accordion-heading text-md-center text-start my-auto">Popular <span>New
                                Cars</span></h4>
                        <div class="d-md-none d-block my-auto"><i class="fa-solid fa-angle-down fs-5"></i>
                        </div>
                    </div>

                    <hr class="mx-auto ecu-2 d-md-block d-none">

                </button>

            </div>
            <div class="col-12">
                <div class="dropdown_items bg-md-auto bg-white rounded-3 p-md-0 p-3 mb-md-0 mb-3">
                    <div class="row px-md-3">
                        @if(App\Helpers\DefaultLanguage::Cars(['condition'=>'New','paginate'=>16]) != null)
                        @foreach(App\Helpers\DefaultLanguage::Cars(['condition'=>'New']) as $cars)
                        <div class="lh-1 col-md-3 col-sm-4 col-6 my-2 "><a href="{{url('detail/'.$cars->id)}}" class="text-dark h5  fw-bold">{{$cars->title}} </a>
                            <p class="smaller my-2">
                                Starting at ${{$cars->dollar_price}} </p>
                        </div>
                        @endforeach
                        @else
                        No data found
                        @endif

                    </div>
                </div>
            </div>
        </div>

</section>
<script>
    $(document).ready(function() {
        $('.maker').on('change', function() {
            var Maker = this.value;
            var InnerHtml = $(this).parents('form').find('.model')
            $.ajax({
                url: "{{url('makedependentmodel')}}",
                type: "POST",
                data: {
                    make_id: Maker,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $(InnerHtml).empty();
                    $(InnerHtml).append('<option value=""> Select Model </option>');
                    $.each(result.model, function(key, value) {
                        $(InnerHtml).append('<option value="' + value
                            .id + '">' + value.title + '</option>');
                    });
                }
            });
        });
    });
</script>
@endsection
<script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function() {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                    }
                    parent.appendChild(elem);
                }
            }

            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function(msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    } else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#carPickerUsed_makerSelect').select2();
        dropdownSearch: true

    });
</script>