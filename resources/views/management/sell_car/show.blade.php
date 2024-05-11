@extends('management.layouts.master')
@section('title')
    Sell Car Detail - {{config('app.dashboard')}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Sell Car Detail</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        @foreach($sellCarLogs as $value)
                            @php
                                $response = json_decode($value->response , true);

                            @endphp

                            <div class="card hover-none bg-light my-3 border-0  px-3  vincard-css vin-active-css">
                                <h5 class="card-title fw-bold fs-6 mb-0 d-flex justify-content-between py-4 vincard vin-active">License plate or VIN
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                                    </svg>
                                </h5>
                                <label class="mt-3" for="">State
                                </label>
                                @if($value->type == 'license')
                                    <input type="text" name="field0" value="{{$value->state}}" placeholder="Enter License plate or VIN" class="form-control mt-3" readonly>
                                    <br>
                                @else
                                    <input type="text" name="field0" value="{{$value->moreDetails->detail['state'][0]?? '-'}}" placeholder="Enter License plate or VIN" class="form-control mt-3" readonly>
                                    <br>
                                @endif

                                <label class="mt-3" for="">License plate or VIN
                                </label>
                                <input type="text" name="field0" value="{{$value->vin_number}}" placeholder="Enter License plate or VIN" class="form-control mt-3" readonly>
                                <br>
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
                                        <input type="text" name="field1" id="zip_code" placeholder="e.g 02115" class="form-control w-50 mt-3" readonly value="{{$value->moreDetails->detail['zipCode']??'-'}}">
                                        <br>
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
                                    <!-- Form 3 fields -->
                                    We were able to find your car details from your VIN. If the make/model/year are incorrect then go back and enter another VIN.
                                    <label for="">Make</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Make" name="make" value="{{$response['Make']??'-'}}" readonly>
                                    <label class="mt-3" for="">Model</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model" name="model" value="{{$response['Model']??'-'}}" readonly>
                                    <label class="mt-3" for="">Year</label>
                                    @if($value->type == 'license')
                                        <input type="text" class="form-control" readonly id="exampleFormControlInput1" placeholder="Year" name="year" value="{{$response['Model_Year']??'-'}}">
                                    @else
                                        <input type="text" class="form-control" readonly id="exampleFormControlInput1" placeholder="Year" name="year" value="{{$response['Model_year']??'-'}}">
                                    @endif

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
                                        @if($value->type == 'license')
                                            <option selected>{{$response['Transmission_Speeds']}}-Speed {{$response['Transmission_Style']??'-'}}</option>
                                        @else
                                            <option selected>{{$response['Transmission']??'-'}}</option>
                                        @endif


                                    </select>
                                    <label class="mt-3" for="">Engine (optional)</label>
                                    <select type="text" class="form-control mt-3 form-select">
                                        <option value="" disabled="">Select Engine</option>
                                        @if($value->type == 'license')
                                            <option selected>{{$response['Displacement__CC_']??'-'}}L {{$response['Engine_Brake__hp__From']??'-'}}HP V{{$response['Engine_Number_of_Cylinders']??'-'}}</option>
                                        @else
                                            <option selected>{{$response['Displacement_Nominal']??'-'}}L {{$response['Engine_HorsePower']??'-'}}HP V{{$response['Engine_type']??'-'}}</option>
                                        @endif
                                    </select>
                                    <label class="mt-3" for="">Mileage
                                    </label>
                                    <input type="text" id="milage" name="field2" placeholder="Current Mileage" class="form-control mt-3" readonly value="{{$value->moreDetails->detail['milage']??'-'}}">
                                    <br>
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
                                    <!-- Form 4 fields -->
                                    <div class="row form-clr mb-4">
                                        <div class="col-3">
                                            <input type="text" name="field3" id="black" class="mt-3 d-none" required value="{{$value->moreDetails->detail['carInterierColorValues']??'-'}}">
                                        </div>
                                    </div>
                                    <p>Vehicle Options</p>
                                    <div>
                                        <div class="vehiclecheck">
                                            <label for="">Wheel</label>
                                            @if(isset($value->moreDetails->detail['alloy']))
                                                <div class="d-flex">
                                                    <input type="checkbox" id="alloy" value="alloy">
                                                    <label for="leather">Alloy Wheels</label>
                                                </div>
                                            @endif

                                            @if(isset($value->moreDetails->detail['steel']))
                                                <div class="d-flex">
                                                    <input type="checkbox" id="steel" value="steel">
                                                    <label for="navigation">Steel Wheels</label>
                                                </div>
                                            @endif

                                            @if(isset($value->moreDetails->detail['premium']))
                                                <div class="d-flex">
                                                    <input type="checkbox" id="premium" value="premium">
                                                    <label for="sunroofmoonroof">Premium Wheels</label>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div>

                                        <label for="">Package</label>
                                        @if(isset($value->moreDetails->detail['sport']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="sport" value="sport">
                                                <label for="leather">Sport Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['power_mirror']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="power_mirror" value="power_mirror">
                                                <label for="navigation">Power Mirror Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['power']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="power" value="power">
                                                <label for="sunroofmoonroof">Power Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['preferred']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="preferred" value="preferred">
                                                <label >Preferred Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['tow']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="tow" value="tow">
                                                <label >Tow Package</label>
                                            </div>
                                        @endif

                                        @if(isset($value->moreDetails->detail['quick_order']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="quick_order" value="quick_order">
                                                <label for="sunroofmoonroof">Quick Order Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['value']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="value" value="value">
                                                <label >Value Package</label>
                                            </div>

                                        @endif

                                        @if(isset($value->moreDetails->detail['se']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="se" value="se">
                                                <label >SE Package</label>
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['off_road']))
                                            <div class="d-flex">
                                                <input type="checkbox" id="off_road" value="off_road">
                                                <label for="sunroofmoonroof">Off Road Package</label>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="card hover-none bg-light my-3 border-0  px-3 vincard-css">
                                <h5 class="card-title fw-bold fs-6 mb-0 d-flex justify-content-between py-4 vincard">Condition and history
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" width="20px" height="20px" class="svg-inline--fa fa-check-circle fa-w-16 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" color="var(--cg-base-positive-background-color)">
                                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                                    </svg>
                                </h5>
                                <div class="card-body  vincard-panel">
                                    <!-- Form 5 fields -->
                                    <div class="accident row">
                                        <p>Has the vehicle ever been in an accident?</p>
                                        <div class="col-4">
                                            <input type="text" name="field4" id="acc2" required value="{{$value->moreDetails->detail['accidentValue']??'-'}}">
                                        </div>
                                    </div>
                                    <div class=" mt-3">
                                        <p>What is the condition of the vehicle?</p>
                                        <div class="col-4">
                                            <input type="text" name="field4" id="acc2" required value="{{$value->moreDetails->detail['vehicleCondition']??'-'}}">
                                        </div>
                                    </div>
                                    <div class=" mt-3">
                                        <p>How are the tires?</p>
                                        <div class="col-4">
                                            <input type="text" name="field4" id="acc2" required value="{{$value->moreDetails->detail['tireCondition']??'-'}}">
                                        </div>
                                    </div>
                                    <div class="accident row mt-3">
                                        <p>Any Wheel Damage?</p>
                                        <div class="col-6">
                                            <input type="text" name="field7" id="Damageyes" required value="{{$value->moreDetails->detail['wheelDamageValue']??'-'}}">
                                        </div>

                                    </div>
                                    <div class="accident row mt-3">
                                        <p>Does your vehicle have mechanical defects or dashboard warnings?</p>
                                        <div class="col-6">
                                            <input type="text" name="field7" id="Damageyes" required value="{{$value->moreDetails->detail['mechinicalDefectsValue']['value']??'-'}}">
                                        </div>

                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine'] == "true") ?'Engine (e.g. Check Engine light on dashboard)':'-'}}">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine1']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine1']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine1'] == "true")?'Transmission':'-'}}">
                                            </div>
                                        @endif

                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine2']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine2']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine2'] == "true")?'Air-Conditioning':'-'}}">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine3']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine3']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine3'] == "true")?'Electrical (e.g. SRS/Airbag light on dashboard)':'-'}}">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine4']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine4']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine4'] == "true")?"Tire Pressure (e.g. TPMS light on dashboard)":'-'}}">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine5']))
                                            <div class="col-6">
                                                <input type="text" name="field7" id="Damageyes" required value="{{(isset($value->moreDetails->detail['mechinicalDefectsValue']['defectengine5']) && $value->moreDetails->detail['mechinicalDefectsValue']['defectengine5'] == "true")?"Other (explain):":'-'}}">
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                @if(isset($value->moreDetails->detail['vehicleIssueStopDriving']))
                                    <div class=" row mt-3">
                                        <h5>Does your vehicle have any issues that would stop us from driving it?</h5>
                                        <div>
                                            <p>
                                                In order for us to pick up your vehicle, we should be able to drive it. This means no dead battery, no flat tire, and no problems that prevent the car from starting or running
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <input type="radio" name="field14"  required value="{{isset($value->moreDetails->detail['vehicleIssueStopDriving']) && $value->moreDetails->detail['vehicleIssueStopDriving'] == 'yes'?'Yes':'No'}}">
                                            <label >Yes</label>
                                        </div>
                                    </div>
                                @endif


                                @if(isset($value->moreDetails->detail['exteriorDamageValue']) && $value->moreDetails->detail['exteriorDamageValue']['value'] == 'yes')
                                    <div class="exterior_damage row mt-3">
                                        <h5>Does your vehicle have any exterior damage, including hail damage?</h5>
                                        <div class="col-6">
                                            <input type="radio" name="field15" id="exterior_damage" required value={{$value->moreDetails->detail['exteriorDamageValue']== 'yes'?'Yes':'NO'}}>
                                            <label for="exteriorYes">Yes</label>
                                        </div>
                                    </div>

                                    <div id="exterior_damage_options">
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['scuff']) && $value->moreDetails->detail['exteriorDamageValue']['scuff'] == "true")
                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Scuffs">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['scratches']) && $value->moreDetails->detail['exteriorDamageValue']['scratches'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Scratches">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['chips']) && $value->moreDetails->detail['exteriorDamageValue']['chips'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Chips">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['fading']) && $value->moreDetails->detail['exteriorDamageValue']['fading'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Fading Paint">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['dent']) && $value->moreDetails->detail['exteriorDamageValue']['scuff'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Dents">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['ding']) && $value->moreDetails->detail['exteriorDamageValue']['ding'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Dings">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['rust']) && $value->moreDetails->detail['exteriorDamageValue']['rust'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Rust">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['hail']) && $value->moreDetails->detail['exteriorDamageValue']['hail'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Hail Damage">
                                            </div>
                                        @endif
                                        @if(isset($value->moreDetails->detail['exteriorDamageValue']['other'])&& $value->moreDetails->detail['exteriorDamageValue']['other'] == "true")

                                            <div class="d-flex">
                                                <input type="text" id="scuff" value="Other (explain)">
                                            </div>
                                        @endif

                                    </div>
                                @endif
                                <div class="accident row mt-3">
                                    <p>Does the windshield need replacing, have cracks, or have chips larger than a dime?</p>
                                    <div class="col-6">
                                        <input type="text" name="field9" id="cracksyes" readonly value="{{$value->moreDetails->detail['windShieldReplaceValue']??'-'}}">
                                    </div>
                                </div>
                                @if(isset($value->moreDetails->detail['aftermarket']))
                                    <div class="accident row mt-3">
                                        <p>Are there any aftermarket parts on the vehicle?</p>
                                        <div class="col-6">
                                            <input type="text" name="field10" id="partsyes" readonly value="{{$value->moreDetails->detail['aftermarket']['value']}}">
                                        </div>
                                    </div>
                                    <div id="partsyesdetail" class="mt-3">
                                    <label for="">What are the aftermarket parts?
                                    </label>
                                    <input type="text" class="form-control" name="after_market_part_detail" value="{{$value->moreDetails->detail['aftermarket']['after_market_part_detail']??'-'}}">
                                </div>
                                @endif
                                <div class="accident row mt-3">
                                    <p>Has your vehicle ever been smoked in?</p>
                                    <div class="col-6">
                                        <input type="text" name="field11" id="smokedyes" required value="{{$value->moreDetails->detail['smokedValueValue']??'-'}}">
                                    </div>
                                </div>
                                <div class="accident row mt-3">
                                    <p>How many keys are there for this vehicle?</p>
                                    <div class="col-6">
                                        <input type="text" name="field11" id="smokedyes" required value="{{$value->moreDetails->detail['keyDetailValue']??'-'}}">
                                    </div>
                                </div>
                                <div class="accident row">
                                    <p>Has the vehicle ever been in an accident?</p>
                                    <div class="col-4">
                                        <input type="text" name="field11" id="smokedyes" required value="{{$value->moreDetails->detail['vehicleAccidentDetailValue']??'-'}}">
                                    </div>
                                </div>

                            </div>
                    </div>

                    @endforeach


                </div>
            </div>
@endsection

