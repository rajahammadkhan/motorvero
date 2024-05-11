@extends('frontend.layouts.master')
@section('title')
    vin  Detail
@endsection
@section('content')
    <style>
        .sec-gsp-form :is(input[type="text"], input[type="email"], input[type="number"], textarea, select) {
            background-color: #E5E5E5A6 !important;
            color: var(--white);
        }

        input,
        select {
            color: black !important;
        }

        .vincard-css {
            box-shadow: 0 0.2rem 0.7rem rgb(69 66 66 / 29%) !important;
            border-left: 5px solid #006699 !important;
            border-radius: 0 !important;
        }

        .vincard-css:has(.openonclick) {
            color: #00b34a;
            border-left: 5px solid #00b34a !important;
        }

        .openonclick {
            color: #00b34a;
        }

        .openonclick svg {
            display: block !important;
        }

        .vincard svg {
            display: none;

        }

        .vincard-panel {
            display: none;
            padding-inline: 0px;
        }

        .pickclr {
            padding: 5px;
        }

        .form-clr input:checked~label {
            border: 1px solid;
        }

        .pickclr>div {
            width: 25px;
            height: 25px;
            background: black;
            border-radius: 100%;
            margin-inline: auto;
            margin-block: 5px;
            box-shadow: 0 0.1rem 0.4rem #0000004d !important;

        }

        .form-clr .col-3 {
            display: flex;
            justify-content: center;
        }

        .vehiclecheck label {
            padding-left: 10px;
        }

        .accident input {
            display: none;
        }

        .accident label {
            border: 2px solid #007bff;
            width: 100%;
            text-align: center;
            padding-block: 5px;
        }

        .accident input:checked~label {
            background-color: #007bff;
            color: white;
        }

        #defectsdetail {
            display: none;
        }

        #partsyesdetail {
            display: none;
        }

        #vehicleLeased {
            display: none;
            color: red;
        }

        #Leased {
            display: none;
            color: red;
        }

        #defectsdetail label {
            padding-left: 5px;
        }

        .next-2-vin {
            display: none;
        }

        .alertcss {
            position: absolute;
            top: 10%;
            z-index: 999999;
            display: flex;
            justify-content: center;
            width: 100%;
            display: none;
        }

        #closealert {
            cursor: pointer;
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

            <div class="row">
                <div class="col-md-8">
                    <div class="card hover-none bg-light my-3 border-0  px-3  vincard-css vin-active-css">
                        <h5 class="card-title fw-bold fs-6 mb-0 d-flex justify-content-between py-4 vincard vin-active">License plate or VIN
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                            </svg>
                        </h5>
                        <div class="card-body px-0 vincard-panel">
                            <input type="hidden" id="sellCarLogId" value="{{$sellCarLogId}}">
                            <form id="form0">
                                <!-- Form 1 fields -->
                                <label for="">State of registration</label>
                                <select type="text" placeholder="Connecticut" class="form-control mt-3 form-select" id="state">
                                    <option selected disabled>Please select the state</option>
                                    @foreach(App\Helpers\DefaultLanguage::stateOfUsa() as $val)

                                        <option value="{{$val->name}}" {{$state == $val->name?"selected":''}}>{{$val->code}}</option>
                                    @endforeach
                                </select>
                                <label class="mt-3" for="">License plate or VIN
                                </label>
                                <input type="text" name="field0" value="{{$sellCarLogDetail->VIN}}" placeholder="Enter License plate or VIN" class="form-control mt-3" required>
                                <br>
                                <button class="mt-3 btn btn-primary" type="button" onclick="nextAccordion(0)">Next</button>
                            </form>
                        </div>
                    </div>
                    <div class="card hover-none bg-light my-3 border-0  px-3 vincard-css">
                        <h5 class="card-title fw-bold fs-6 mb-0  d-flex justify-content-between py-4 vincard">Where is your car located?
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                            </svg>
                        </h5>
                        <div class="card-body  vincard-panel">
                            <div id="form1">
                                <!-- Form 2 fields -->
                                <label for="">Zip Code</label>
                                <input type="text" name="field1" id="zip_code" placeholder="e.g 02115" class="form-control w-50 mt-3" required>
                                <br>
                                <button class="mt-3 btn btn-primary" type="button" onclick="nextAccordion(1)">Next</button>
                            </div>

                        </div>
                    </div>
                    <div class="card hover-none bg-light my-3 border-0  px-3 vincard-css">
                        <h5 class="card-title fw-bold fs-6 mb-0  d-flex justify-content-between py-4 vincard">Car details
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                            </svg>
                        </h5>
                        <div class="card-body  vincard-panel">
                            <form id="form2">
                                <!-- Form 3 fields -->
                                We were able to find your car details from your VIN. If the make/model/year are incorrect then go back and enter another VIN.
                                <label for="">Make</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Make" name="make" value="{{$sellCarLogDetail->Make}}" readonly>
                                <label class="mt-3" for="">Model</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model" name="model" value="{{$sellCarLogDetail->Model}}" readonly>
                                <label class="mt-3" for="">Year</label>
                                <input type="text" class="form-control" readonly id="exampleFormControlInput1" placeholder="Year" name="year" value="{{$sellCarLogDetail->Model_year}}">
                                <label class="mt-3" for="">Trim</label>
                                <select type="text" class="form-control mt-3 form-select" required>
                                    <option value="" disabled="">Select Trim</option>
                                    <option value="t54055">Altitude 4WD</option>
                                    <option value="t54054">Altitude FWD</option>
                                    <option value="t52314">Latitude 4WD</option>
                                    <option value="t52313">Latitude FWD</option>
                                    <option value="t52311">Limited 4WD</option>
                                    <option value="t52310">Limited FWD</option>
                                    <option value="t52309">Sport 4WD</option>
                                    <option value="t52308">Sport FWD</option>
                                    <option value="t52312">Trailhawk 4WD</option>

                                </select>
                                <label class="mt-3" for="">Transmission</label>
                                <select  class="form-control" id="exampleFormControlSelect2" name="transmission" required>
                                    <option value="" disabled="">Select Transmissions</option>
                                    <option>1</option>
                                    <option selected>{{$sellCarLogDetail->Transmission}}</option>

                                </select>
                                <label class="mt-3" for="">Engine (optional)</label>
                                <select type="text" class="form-control mt-3 form-select">
                                    <option value="" disabled="">Select Engine</option>
                                    <option>1</option>
                                    <option selected>{{$sellCarLogDetail->Displacement_Nominal}}L {{$sellCarLogDetail->Engine_HorsePower}}HP V{{$sellCarLogDetail->Engine_type}}</option>

                                </select>
                                <label class="mt-3" for="">Mileage
                                </label>
                                <input type="text" id="milage" name="field2" placeholder="Current Mileage" class="form-control mt-3" required>
                                <br>


                                <button class="mt-3 btn btn-primary" type="button" onclick="nextAccordion(2)">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card hover-none bg-light my-3 border-0  px-3 vincard-css ">
                        <h5 class="card-title fw-bold fs-6 mb-0  d-flex justify-content-between py-4 vincard">Special features
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                            </svg>
                        </h5>
                        <div class="card-body  vincard-panel">
                            Select your exterior color
                            <form id="form3">
                                <!-- Form 4 fields -->
                                <div class="row form-clr mb-4">
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="black" class="mt-3 d-none" required value="black">
                                        <label class="mt-3 pickclr" for="black">
                                            <div style="background-color: black;"></div>
                                            Black
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Blue" class=" mt-3 d-none" required value="blue">
                                        <label class="mt-3 pickclr" for="Blue">
                                            <div style="background-color: #009ddb;"></div>
                                            Blue
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Brown" class=" mt-3 d-none" required value="brown">
                                        <label class="mt-3 pickclr" for="Brown">
                                            <div style="background-color: #a1662b;"></div>
                                            Brown
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Gold" class="mt-3 d-none" required value="gold">
                                        <label class="mt-3 pickclr" for="Gold">
                                            <div style="background-color: #f5d86f;"></div>
                                            Gold
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Gray" class="mt-3 d-none" required value="gray">
                                        <label class="mt-3 pickclr" for="Gray">
                                            <div style="background-color: #c3cdd5;"></div>
                                            Gray
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Green" class=" mt-3 d-none" required value="green">
                                        <label class="mt-3 pickclr" for="Green">
                                            <div style="background-color: #00b34a;"></div>
                                            Green
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Orange" class=" mt-3 d-none" required value="orange">
                                        <label class="mt-3 pickclr" for="Orange">
                                            <div style="background-color: #ff8400;"></div>
                                            Orange
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Pink" class="mt-3 d-none" required value="pink">
                                        <label class="mt-3 pickclr" for="Pink">
                                            <div style="background-color: #fa3889;"></div>
                                            Pink
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Purple" class="mt-3 d-none" required value="purple">
                                        <label class="mt-3 pickclr" for="Purple">
                                            <div style="background-color: #c139ef;"></div>
                                            Purple
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Red" class=" mt-3 d-none" required value="red">
                                        <label class="mt-3 pickclr" for="Red">
                                            <div style="background-color: #ef3945;"></div>
                                            Red
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Silver" class=" mt-3 d-none" required value="silver">
                                        <label class="mt-3 pickclr" for="Silver">
                                            <div style="background-color: #dee3e8;"></div>
                                            Silver
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Teal" class="mt-3 d-none" required value="teal">
                                        <label class="mt-3 pickclr" for="Teal">
                                            <div style="background-color: #319aaa;"></div>
                                            Teal
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="White" class=" mt-3 d-none" required value="white">
                                        <label class="mt-3 pickclr" for="White">
                                            <div style="background-color: #ffffff;"></div>
                                            White
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Yellow" class=" mt-3 d-none" required value="yellow">
                                        <label class="mt-3 pickclr" for="Yellow">
                                            <div style="background-color: #ffd400;"></div>
                                            Yellow
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <input type="radio" name="field3" id="Unknown" class="mt-3 d-none" required value="unknown">
                                        <label class="mt-3 pickclr" for="Unknown">
                                            <div style="background: linear-gradient(335.64deg,#1a2a6c 10.84%,#b21f1f 56.16%,#fdbb2d 92.13%);"></div>
                                            Unknown
                                        </label>
                                    </div>
                                </div>
                                <p>Vehicle Options</p>
                                <div>
                                    <div class="vehiclecheck">
                                        <label for="">Wheel</label>
                                        <div class="d-flex">
                                            <input type="checkbox" id="alloy" value="alloy">
                                            <label for="leather">Alloy Wheels</label>
                                        </div>
                                        <div class="d-flex">
                                            <input type="checkbox" id="steel" value="steel">
                                            <label for="navigation">Steel Wheels</label>
                                        </div>
                                        <div class="d-flex">
                                            <input type="checkbox" id="premium" value="premium">
                                            <label for="sunroofmoonroof">Premium Wheels</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="">Package</label>
                                    <div class="d-flex">
                                        <input type="checkbox" id="sport" value="sport">
                                        <label for="leather">Sport Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="power_mirror" value="power_mirror">
                                        <label for="navigation">Power Mirror Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="power" value="power">
                                        <label >Power Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="preferred" value="preferred">
                                        <label >Preferred Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="tow" value="tow">
                                        <label >Tow Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="quick_order" value="quick_order">
                                        <label >Quick Order Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="value" value="value">
                                        <label >Value Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="se" value="se">
                                        <label >SE Package</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="off_road" value="off_road">
                                        <label >Off Road Package</label>
                                    </div>
                                </div>

                                <br>
                                <button class="mt-3 btn btn-primary" type="button" onclick="nextAccordion(3)">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card hover-none bg-light my-3 border-0  px-3 vincard-css">
                        <h5 class="card-title fw-bold fs-6 mb-0 d-flex justify-content-between py-4 vincard">Condition and history
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                            </svg>
                        </h5>
                        <div class="card-body  vincard-panel">
                            <form id="form4">
                                <!-- Form 5 fields -->
                                <div class="accident row">
                                    <p>Has the vehicle ever been in an accident?</p>
                                    <div class="col-4">
                                        <input type="radio" name="field4" id="acc2" required value="2">
                                        <label for="acc2">2+</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="field4" id="acc1" required value="1">
                                        <label for="acc1">1</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="field4" id="accnone" required value="0">
                                        <label for="accnone">none</label>
                                    </div>
                                </div>
                                <div class=" mt-3">
                                    <p>What is the condition of the vehicle?</p>
                                    <select name="field5" id="vehiclecondition" onchange="vehicleconditionfunc(this)" class="form-control mt-3 form-select" required="">
                                        <option value="please select an option" disabled="" selected="">Please select an option</option>
                                        <option value="amazing">Amazing</option>
                                        <option value="Good">Good</option>
                                        <option value="Roungh">Roungh</option>
                                    </select>
                                    <div id="vehicleconditiontext" class="mt-3 px-1"></div>
                                </div>
                                <div class=" mt-3">
                                    <p>How are the tires?</p>
                                    <select name="field6" id="tirecondition" onchange="tireconditionfunc(this)" class="form-control mt-3 form-select" required="">
                                        <option value="please select an option" disabled="" selected="">Please select an option</option>
                                        <option value="GoodtoGo">Good to Go</option>
                                        <option value="Goodtire">Mismatched</option>
                                        <option value="NeedReplacement">Need Replacement</option>
                                    </select>
                                    <div id="tireconditiontext" class="mt-3 px-1"></div>
                                </div>
                                <div class="accident row mt-3">
                                    <p>Any Wheel Damage?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field7" id="Damageyes" required value="yes">
                                        <label for="Damageyes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field7" id="Damageno" required value="no">
                                        <label for="Damageno">No</label>
                                    </div>
                                </div>
                                <div class="accident row mt-3">
                                    <p>Does your vehicle have mechanical defects or dashboard warnings?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field8" value="yes" id="defectsyes" required >
                                        <label for="defectsyes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field8" id="defectsno" required value="no">
                                        <label for="defectsno">No</label>
                                    </div>
                                </div>

                                <div id="defectsdetail">
                                    Select all that apply:
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine">
                                        <label for="defectengine">Engine (e.g. Check Engine light on dashboard)</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine1">
                                        <label for="defectengine1">Transmission</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine2">
                                        <label for="defectengine2">Air-Conditioning</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine3">
                                        <label for="defectengine3">Electrical (e.g. SRS/Airbag light on dashboard)</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine4">
                                        <label for="defectengine4">Tire Pressure (e.g. TPMS light on dashboard)</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="defectengine5">
                                        <label for="defectengine5">Other (explain):</label>
                                    </div>
                                </div>


                                <div class=" row mt-3">
                                    <h5>Does your vehicle have any issues that would stop us from driving it?</h5>
                                    <div>
                                        <p>
                                            In order for us to pick up your vehicle, we should be able to drive it. This means no dead battery, no flat tire, and no problems that prevent the car from starting or running
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field14"  required value="yes">
                                        <label >Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field14"  required value="no">
                                        <label >No</label>
                                    </div>
                                </div>

                                <div class="exterior_damage row mt-3">
                                    <h5>Does your vehicle have any exterior damage, including hail damage?</h5>
                                    <div class="col-6">
                                        <input type="radio" name="field15" id="exterior_damage" required value="yes">
                                        <label for="exteriorYes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field15"  required value="no">
                                        <label for="exteriorNo">No</label>
                                    </div>
                                </div>

                                <div id="exterior_damage_options" style="display: none">
                                    Select all that apply:
                                    <div class="d-flex">
                                        <input type="checkbox" id="scuff">
                                        <label for="">Scuffs</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="scratches">
                                        <label for="defectengine1">Scratches</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="chips">
                                        <label for="defectengine2">Chips</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="fading_paint">
                                        <label for="defectengine3">Fading Paint</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="dents">
                                        <label for="defectengine4">Dents</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="dings">
                                        <label for="defectengine5">Dings</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="rust">
                                        <label for="defectengine5">Rust</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="hail">
                                        <label for="defectengine5">Hail Damage</label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="other">
                                        <label for="defectengine5">Other (explain)</label>
                                    </div>
                                </div>

                                <div class="accident row mt-3">
                                    <p>Does the windshield need replacing, have cracks, or have chips larger than a dime?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field9" id="cracksyes" required value="yes">
                                        <label for="cracksyes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field9" id="cracksno" required value="no">
                                        <label for="cracksno">No</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <p>Are there any aftermarket parts on the vehicle?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field10" id="partsyes" value="yes" required>
                                        <label for="partsyes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field10" id="no" value="no" required>
                                        <label for="partsno">No</label>
                                    </div>
                                </div>
                                <div id="partsyesdetail" class="mt-3" style="display: none">
                                    <label for="">What are the aftermarket parts?
                                    </label>
                                    <input type="text" class="form-control" id="after_market_part_detail" name="after_market_part_detail" id="">
                                </div>
                                <div class="accident row mt-3">
                                    <p>Has your vehicle ever been smoked in?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field11" id="smokedyes" required value="yes">
                                        <label for="smokedyes">Yes</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field11" id="smokedno" required value="no">
                                        <label for="smokedno">No</label>
                                    </div>
                                </div>
                                <div class="accident row mt-3">
                                    <p>How many keys are there for this vehicle?</p>
                                    <div class="col-6">
                                        <input type="radio" name="field12" id="keysyes" required value="1">
                                        <label for="keysyes">1</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="field12" id="keysno" required value="2">
                                        <label for="keysno">2+</label>
                                    </div>
                                </div>
                                <div class="accident row">
                                    <p>What's the ownership status of your vehicle?</p>
                                    <div class="col-4">
                                        <input type="radio" name="field13" id="vehicleOwned" required value="owned">
                                        <label for="vehicleOwned">Owned</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="field13" value="leased" id="vehicleLeased" required>
                                        <label for="vehicleLeased">Leased</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="radio" name="field13" id="vehicleFinanced" required value="financed">
                                        <label for="vehicleFinanced">Financed</label>
                                    </div>
                                </div>
                                <div id="leased">
                                    Sorry, we don’t currently support sales for leased vehicles.
                                    But you can still sell it with us! First, you’ll need to pay off your lease and collect the vehicle’s title.
                                </div>

                                <button class="mt-3 btn btn-primary" id="movetosubmit" type="button" onclick="nextAccordion(4)">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="emailclose">
                        <div class="vincard 5vin-card">
                            <p>Where should we send a copy of your offer?</p>

                        </div>
                        <div class="card-body  vincard-panel" style="display: block !important;">
                            <form id="form5">
                                <!-- Form 5 fields -->
                                <div class="col-md-6">
                                    <input id="receiverEmail" type="email" name="field16" placeholder="abc@gmail.com" class="form-control ">
                                </div>
                                <div id="getoffer">
                                    <button class="mt-3 btn btn-primary  addclass" onclick="formSubmit()">Get My Offer</button>
                                    <!-- <button class="btn btn-primary mt-3 disabled">Get My Offer</button> -->
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light p-3 mt-3">
                        <h3> Vehicle summary</h3>
                        <div class="my-2">
                            <h5>License plate or VIN</h5>
                            <p>{{$sellCarLogDetail->VIN}}</p>
                        </div>
                        <div class="my-2">
                            <h5>Year make & model</h5>
                            <p>{{$sellCarLogDetail->Model_year}} {{$sellCarLogDetail->Make}} {{$sellCarLogDetail->Model}}</p>
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
        <div class="alertcss">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
                <symbol id="info-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </symbol>
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>

            <div class="alert alert-primary d-flex align-items-center col-8 shadow position-fixed" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="25px" height="25px">
                    <use xlink:href="#info-fill" />
                </svg>
                <div class="d-flex justify-content-between w-100">
                    <p class="mb-0">
                        We couldn't present an offer for your 2014 Jeep Cherokee. You can still continue and create a private listing.
                    </p>
                    <p class="fw-bolder mb-0" id="closealert">
                        X
                    </p>
                </div>
            </div>

        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let active = document.querySelector('active')
        var accordions = document.getElementsByClassName("vincard");
        var accordionsopen = document.getElementsByClassName("openonclick");
        var panels = document.getElementsByClassName("vincard-panel");
        var currentAccordion = 0;
        accordions[currentAccordion].classList.add("active");
        panels[currentAccordion].style.display = "block";




        function formSubmit(){
            console.log('here')
            var sellCarLogId = document.getElementById('sellCarLogId').value;
            var zipCode = document.getElementById('zip_code').value;
            var milage =document.getElementById('milage').value;

            var carInterierColor = document.getElementsByName('field3');
            var carInterierColorValues = [];

            for (var i = 0; i < carInterierColor.length; i++) {
                if (carInterierColor[i].checked) {
                    console.log('ppp')
                    carInterierColorValues.push(carInterierColor[i].value);
                    console.log(carInterierColorValues)
                }
            }


            var alloy = document.getElementById('alloy').value;
            var steel = document.getElementById('steel').value;
            var premium= document.getElementById('premium').value;
            var sport= document.getElementById('sport').value;
            var powerMirror= document.getElementById('power_mirror').value;
            var power= document.getElementById('power').value;
            var preferred= document.getElementById('preferred').value;
            var tow= document.getElementById('tow').value;
            var quickOrder= document.getElementById('quick_order').value;
            var value= document.getElementById('value').value;
            var se= document.getElementById('se').value;
            var offRoad= document.getElementById('off_road').value;


            var accident = document.getElementsByName('field4');
            var accidentValue = [];

            for (var i = 0; i < accident.length; i++) {
                if (accident[i].checked) {
                    accidentValue.push(accident[i].value);
                }
            }

            var state = document.getElementById('state');
            var stateValue = [];

            for (var i = 0; i < state.length; i++) {
                if (state[i].selected) {
                    stateValue.push(state[i].value);
                }
            }

            var vehicleCondition = document.getElementById('vehiclecondition');
            var vehicleConditionValue = [];
            for (var i = 0; i < vehicleCondition.length; i++) {
                if (vehicleCondition[i].selected) {
                    console.log('pom')
                    vehicleConditionValue.push(vehicleCondition[i].value);
                }
            }
            var tireCondition = document.getElementById('tirecondition');
            var tireConditionValue = [];
            for (var i = 0; i < tireCondition.length; i++) {
                if (tireCondition[i].selected) {
                    console.log('pomerr')
                    tireConditionValue.push(tireCondition[i].value);
                }
            }


            var wheelDamage = document.getElementsByName('field7');
            var wheelDamageValue = [];

            for (var i = 0; i < wheelDamage.length; i++) {
                if (wheelDamage[i].checked) {
                    wheelDamageValue.push(wheelDamage[i].value);
                }
            }
            var mechinicalDefects = document.getElementsByName('field8');
            var mechinicalDefectsValue = [];

            for (var i = 0; i < mechinicalDefects.length; i++) {
                if (mechinicalDefects[i].checked) {
                    mechinicalDefectsValue.push(mechinicalDefects[i].value);
                    var defectengine = '';
                    var defectengine1 = '';
                    var defectengine2 = '';
                    var defectengine3 = '';
                    var defectengine4 = '';
                    var defectengine5 = '';
                    if(mechinicalDefectsValue.includes('yes')){
                        defectengine = document.getElementById('defectengine').checked;
                        defectengine1 = document.getElementById('defectengine1').checked;
                        defectengine2 = document.getElementById('defectengine2').checked;
                        defectengine3 = document.getElementById('defectengine3').checked;
                        defectengine4 = document.getElementById('defectengine4').checked;
                        defectengine5 = document.getElementById('defectengine5').checked;
                    }


                }

            }

            var vehicleIssueStopDriving = document.getElementsByName('field14');
            var vehicleIssueStopDrivingValue = [];
            for (var i = 0; i < vehicleIssueStopDriving.length; i++) {
                if (vehicleIssueStopDriving[i].checked) {
                    vehicleIssueStopDrivingValue.push(vehicleIssueStopDriving[i].value);
                }
            }



            var exteriorDamage = document.getElementsByName('field15');
            var exteriorDamageValue = [];

            for (var i = 0; i < exteriorDamage.length; i++) {
                if (exteriorDamage[i].checked) {
                    exteriorDamageValue.push(exteriorDamage[i].value);
                    var scuff = '';
                    var scratches = '';
                    var chips = '';
                    var fading = '';
                    var dent = '';
                    var ding = '';
                    var rust = '';
                    var hail = '';
                    var other = '';
                    if(mechinicalDefectsValue.includes('yes')){
                        scuff = document.getElementById('scuff').checked;
                        scratches = document.getElementById('scratches').checked;
                        chips = document.getElementById('chips').checked;
                        fading = document.getElementById('fading_paint').checked;
                        dent = document.getElementById('dents').checked;
                        ding = document.getElementById('dings').checked;
                        rust = document.getElementById('rust').checked;
                        hail = document.getElementById('hail').checked;
                        other = document.getElementById('other').checked;

                    }
                }

            }




            var windShieldReplace = document.getElementsByName('field9');
            var windShieldReplaceValue = [];

            for (var i = 0; i < windShieldReplace.length; i++) {
                if (windShieldReplace[i].checked) {
                    windShieldReplaceValue.push(windShieldReplace[i].value);
                }
            }

            var afterMarketParts = document.getElementsByName('field10');
            var afterMarketPartsValue = [];

            for (var i = 0; i < afterMarketParts.length; i++) {
                if (afterMarketParts[i].checked) {
                    afterMarketPartsValue.push(afterMarketParts[i].value);
                    var after_market_part_detail = '';
                    if(afterMarketPartsValue.includes('yes')){
                        after_market_part_detail =  document.getElementById('after_market_part_detail').value;
                    }
                }
            }


            var smokedValue = document.getElementsByName('field11');
            var smokedValueValue = [];

            for (var i = 0; i < smokedValue.length; i++) {
                if (smokedValue[i].checked) {
                    smokedValueValue.push(smokedValue[i].value);
                }
            }

            var keyDetail = document.getElementsByName('field12');
            var keyDetailValue = [];

            for (var i = 0; i < keyDetail.length; i++) {
                if (keyDetail[i].checked) {
                    keyDetailValue.push(keyDetail[i].value);
                }
            }

            var vehicleAccidentDetail = document.getElementsByName('field13');
            var vehicleAccidentDetailValue = [];

            for (var i = 0; i < vehicleAccidentDetail.length; i++) {
                if (vehicleAccidentDetail[i].checked) {
                    vehicleAccidentDetailValue.push(vehicleAccidentDetail[i].value);
                }
            }

            var recieverEmail = document.getElementById('receiverEmail').value;


            let payload = {
                'state':stateValue,
                'zipCode' :zipCode,
                'milage' :milage,
                'carInterierColorValues' :carInterierColorValues[0],
                'alloy' :alloy,
                'steel' :steel,
                'premium' :premium,
                'sport' :sport,
                'powerMirror' :powerMirror,
                'preferred':preferred,
                'tow':tow,
                'power' :power,
                'quickOrder' :quickOrder,
                'value':value,
                'se':se,
                'offRoad' :offRoad,
                'accidentValue' :accidentValue[0],
                'vehicleCondition' :vehicleConditionValue[0],
                'tireCondition' :tireConditionValue[0],
                'wheelDamageValue' :wheelDamageValue[0],
                'mechinicalDefectsValue' :{
                    'value':mechinicalDefectsValue[0],
                    'defectengine':defectengine,
                    'defectengine1':defectengine1,
                    'defectengine2':defectengine2,
                    'defectengine3':defectengine3,
                    'defectengine4':defectengine4,
                    'defectengine5':defectengine5,
                },
                'windShieldReplaceValue' :windShieldReplaceValue[0],
                'aftermarket' :{
                    'value' :afterMarketPartsValue[0],
                    'after_market_part_detail':after_market_part_detail
                },
                'vehicleIssueStopDriving':vehicleIssueStopDrivingValue[0],
                'exteriorDamageValue':{
                    'value':exteriorDamageValue[0],
                    'scuff':scuff,
                    'scratches':scratches,
                    'chips':chips,
                    'fading':fading,
                    'dent':dent,
                    'ding':ding,
                    'rust':rust,
                    'hail':hail,
                    'other':other

                },
                'smokedValueValue' :smokedValueValue[0],
                'keyDetailValue' :keyDetailValue[0],
                'vehicleAccidentDetailValue' :vehicleAccidentDetailValue[0],
                'recieverEmail':recieverEmail
            };

            // Get the CSRF token value from a meta tag in the HTML
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

// Set the CSRF token as a default header for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });
            $.ajax({
                url: 'sell-car/details', // Replace with your endpoint URL
                method: 'Post', // Use the appropriate HTTP method (GET, POST, PUT, DELETE, etc.)
                data: {
                    'sellCarLogId':sellCarLogId,
                    'payload':payload,
                    'email':recieverEmail
                },

                success: function(response) {
                    // Handle the success response
                    console.log('Data sent successfully');
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.log('Error occurred: ' + error);
                }
            });






        }

        function nextAccordion(formIndex) {
            var currentForm = document.getElementById("form" + formIndex);
            // if (currentForm.checkValidity()) {
            if (currentForm) {
                accordions[currentAccordion].classList.remove("active");
                accordions[currentAccordion].classList.add("openonclick");
                panels[currentAccordion].style.display = "none";
                currentAccordion++;
                console.log('currentAccordion', currentAccordion)
                accordions[currentAccordion].classList.add("active");
                panels[currentAccordion].style.display = "block";
                var removedisable = panels[currentAccordion]
                $(removedisable).find('.disabled').removeClass('disabled')
                $(removedisable).find('.addclass').addClass('open-next-2-vin')

            } else {
                currentForm.reportValidity();
            }
            // $('.5vin-card.active').siblings('.card-panel').find('.disabled').removeClass('disable')
        }
        const acc = document.querySelectorAll('.vincard')
        const btn = document.querySelector('.accordian');

        function click() {
            $('body').on('click', '.openonclick', function() {
                var abc = $(this).siblings('.vincard-panel').find('form').attr('id').split('');
                var indx = abc[abc.length - 1];
                let elem = $(this).siblings('.vincard-panel').find('form')
                console.log(elem)
                $(this).addClass("active");
                accordions[currentAccordion].classList.remove("active");
                panels[currentAccordion].style.display = "none";
                currentAccordion = indx
                $(this).siblings(".vincard-panel").css('display', 'block');
                for (let i = currentAccordion; i <= acc.length; i++) {
                    acc[i].classList.remove("openonclick"); // Replace "your-class-name" with the actual class name you want to remove
                    console.log('acc[i]', acc[i])
                }
                console.log('currentAccordion', currentAccordion)
            })
        }
        acc.forEach(btn => {
            click()
        })
        var forms = document.getElementsByTagName("form");
        for (var i = 0; i < forms.length; i++) {
            forms[i].addEventListener("submit", function(e) {
                e.preventDefault();
            });
        }
        var vehiclecondition = document.getElementById('vehiclecondition')
        var vehicleconditiontext = document.getElementById('vehicleconditiontext')

        function vehicleconditionfunc() {
            if (vehiclecondition.value === "amazing") {
                vehicleconditiontext.innerHTML = "Runs perfectly, looks and still smells new. Well-maintained and ready for many more years on the road."
            } else if (vehiclecondition.value === "Good") {
                vehicleconditiontext.innerHTML = "A few scratches here and there, consistent with normal wear and tear. Runs well and doesn't need any major repairs."
            } else if (vehiclecondition.value === "Roungh") {
                vehicleconditiontext.innerHTML = "Not quite ready for the junkyard but it's getting close. Needs paint, love, and a good mechanic."
            } else {
                vehicleconditiontext.innerHTML = ""
            }
        }
        var tirecondition = document.getElementById('tirecondition')
        var tireconditiontext = document.getElementById('tireconditiontext')

        function tireconditionfunc() {
            if (tirecondition.value === "GoodtoGo") {
                tireconditiontext.innerHTML = "Tires are in great condition."
            } else if (tirecondition.value === "Goodtire") {
                tireconditiontext.innerHTML = "Some tires are in great condition and some will need to be replaced."
            } else if (tirecondition.value === "NeedReplacement") {
                tireconditiontext.innerHTML = "Tires are in poor condition."
            } else {
                tireconditiontext.innerHTML = ""
            }
        }
        const radioGroup = document.getElementsByName("field8");
        radioGroup.forEach(ynbtn => {
            ynbtn.addEventListener("change", event => {
                if (event.target.value === "yes") {
                    $('#defectsdetail').css('display', 'block')
                } else
                    $('#defectsdetail').css('display', 'none')
            });
        });
        const radioGroupExterior = document.getElementsByName("field15");
        radioGroupExterior.forEach(ynbtn => {
            ynbtn.addEventListener("change", event => {
                if (event.target.value === "yes") {
                    $('#exterior_damage_options').css('display', 'block')
                } else
                    $('#exterior_damage_options').css('display', 'none')
            });
        });

        const radioGroupparts = document.getElementsByName("field10");
        radioGroupparts.forEach(ynbtn => {
            ynbtn.addEventListener("click", event => {
                if (event.target.value === "yes") {
                    $('#partsyesdetail').show()
                } else
                    $('#partsyesdetail').hide()
            });
        });
        const radioGroupvehicleLeased = document.getElementsByName("field13");
        radioGroupvehicleLeased.forEach(ynbtn => {
            ynbtn.addEventListener("change", event => {
                if (event.target.value === "leased") {
                    $('#leased').css('display', 'block')
                } else
                    $('#leased').css('display', 'none')
            });
        });
        // $('#movetosubmit').on('click', function() {
        //     console.log("disable");
        //     $('#getoffer').find('.disabled').removeClass('disabled')
        // })

        // $('body').on('hover', '.5vin-card.active', function() {
        //     console.log("disable");
        //     $('#getoffer').find('.disabled').removeClass('disabled')
        // })
        // $('.5vin-card.active').siblings('.card-panel').find('.disabled').removeClass('disable')
        $('body').on('click', '.open-next-2-vin', function() {
            console.log("jk");
            $('.alertcss').css('display', 'flex')
            $('.emailclose').css('display', 'none')
            $('.next-2-vin').css('display', 'block')
        })
        $('#closealert').on('click', function() {
            $('.alertcss').css('display', 'none')
        })
    </script>
@endsection
