@extends('frontend.layouts.master')
@section('title')
    Press Room Detail
@endsection
@section('content')
    <style>
        .vincard {
            box-shadow: 0 0.2rem 0.7rem rgb(69 66 66 / 29%) !important;
            border-left: 5px solid #006699 !important;
            border-radius: 0 !important;
        }

        .vin-active {
            color: #00b34a;
            border-left: 5px solid #00b34a !important;
        }
    </style>
    <section class="used-car-top-banner">
        <div class="container h-100 d-flex align-items-center">
            <p class="heading">
                Perfect! Let's confirm <span> where you are selling.</span>
            </p>
        </div>
    </section>
    <section class="sec-gsp-form py-5 bg-white">
        <div class="container">
{{--@dd($data);--}}
            @php

            $data = json_decode($records->response,true);
            $state = $records->state
            @endphp
            <div class="row">
                <div class="col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" id="headingOne" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    License plate or VIN
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="">
{{--                                        <form class="vinForm-XY_fXt" id="vin-form">--}}
                                            <div class="">
                                                <label for="state" class="">
                                                    <span class="">
                                                        State of registration
                                                    </span>
                                                </label>
                                                <div class="">
                                                    <select id="state" class="form-select" aria-label="state"  autocomplete="address-level1" aria-describedby="">
                                                        <option value="" disabled="">Please select the state</option>
                                                        @foreach(App\Helpers\DefaultLanguage::stateOfUsa() as $val)

                                                            <option value="{{$val->name}}" {{($state == $val->name)?'selected':''}}>{{ucfirst($val->name)}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="vinInput-A7ZVAz">
                                                <label for="vin" class="cgds_label-A9LtYE">
                                                    <span class="cgds_label_wrap-_3uWwO">License plate or VIN</span>
                                                </label>
                                                <div>
                                                    <input id="vin" class="form-control" aria-describedby="" placeholder="Enter license plate or VIN" data-valid="true" maxlength="17" autocomplete="on" required=""
                                                           value="{{$data['VIN']}}"
                                                    >
                                                </div>
                                            </div>
                                            <button class="pt-2" type="button">
                                                <div class="form-control">Where is my VIN?</div>
                                            </button>
                                            <div>
                                                <button class="btn btn-primary" id="next">
                                                    Next
                                                </button>
                                            </div>
{{--                                        </form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Where is your car located?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        <lable>Zip Code</lable>
                                        <input type="text" class="form-control" placeholder="Ex: 12345">
                                    </div>
                                    <div class="pt-1">
                                        <button class="btn btn-primary" id="nextZip">
                                            Next
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Car details
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div>
                                        <label for="">
                                            We were able to find your car details from your VIN. If the make/model/year are incorrect then go back and enter another VIN
                                        </label>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Make</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Make" name="make" value="{{$data['Make']}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Model</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model" name="model" value="{{$data['Model']}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Year</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Year" name="year" value="{{$data['Model_Year']}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Trim</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="trim">
                                                <option>1</option>
                                                <option>2</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Transmission</label>
                                            <select  class="form-control" id="exampleFormControlSelect2" name="transmission" >
                                                <option>1</option>
                                                <option selected>{{$data['Transmission_Speeds']}}-Speed {{$data['Transmission_Style']}}</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Engine</label>
                                            <select  class="form-control" id="exampleFormControlSelect2" name="engine">
                                                <option>1</option>
                                                <option selected>{{$data['Displacement__CC_']}}L {{$data['Engine_Brake__hp__From']}}HP V{{$data['Engine_Number_of_Cylinders']}}</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Millage</label><span><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="In order to give you an accurate offer on your vehicle, we need the current mileage (found on your odometer).">info</button></span>
                                            <input class="form-control" type="text" name="millage">
                                        </div>

                                        <div class="pt-1">
                                            <button class="btn btn-primary" id="nextZip">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light p-3 mt-3">
                        <h3> Vehicle summary</h3>
                        <div class="my-2">
                            <h5>License plate or VIN</h5>
                            <p>{{$data['VIN']}}</p>
                        </div>
                        <div class="my-2">
                            <h5>Year make & model</h5>
                            <p>{{$data['Model_Year']}} {{$data['Make']}} {{$data['Model']}}</p>
                        </div>
                        <div class="my-2">
                            <h5>Trim</h5>
                            <p>-</p>
                        </div>
                        <div class="my-2">
                            <h5>Mileage</h5>
                            <p>-</p>
                        </div>
                    </div>
                    <div class="card hover-none my-3 px-3 ">
                        <div class="card-body ps-0">
                            <h5 class="card-title fw-bold fs-6 mb-0 text-primary d-flex ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                </svg>
                                <p class="ps-2 m-0"> Chat With Us</p>
                            </h5>
                        </div>
                    </div>
                    <div class="card hover-none my-3 px-3 ">
                        <div class="card-body ps-0">
                            <a href="tel:0000000000">
                                <h5 class="card-title fw-bold fs-6 mb-0 text-primary d-flex ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <p class="ps-2 m-0">Call</p>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script>
        $('#next').on('click',function () {
            console.log('p')
            $("#headingOne").addClass('collapsed');
            $("#collapseOne").removeClass('show');
            $('#headingTwo').removeClass('collapsed');
            $("#collapseTwo").addClass('show');
        })
        $('#nextZip').on('click',function () {
            $("#headingOne").addClass('collapsed');
            $("#collapseOne").removeClass('show');
            $('#headingTwo').addClass('collapsed');
            $("#collapseTwo").removeClass('show');
            $('#headingThree').removeClass('collapsed');
            $("#collapseThree").addClass('show');
        })
        
    </script>
@endsection
