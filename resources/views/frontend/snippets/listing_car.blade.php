@if(count($car)>0)
@foreach($car as $listing)
<div class="col-lg-4 col-md-6  py-1 px-2 position-relative">

    <div class="card car-card  rounded-4 h-100  back-light p-3">
        <div class="card-body p-0">
            <div class="position-relative">
                @auth
                <div class="position-absolute end-0">
                    {{App\Helpers\Settings::WishList('car',$listing->id)}}
                </div>
                @endauth
                @if($listing->featuredImage() != null)
                <a href="{{ url('detail').'/'.$listing->id}}">
                    <img src="{{asset('images/media/').'/'.$listing->featuredImage()->image}}" class="card-img-top w-100 stock-car-img" alt="..."></a>
                @endif
            </div>
            <div class="card-body pt-3 p-0 mb-1 ">
                <a href="{{ url('detail').'/'.$listing->id}}">
                    <h4 class="font-secondary  m-0 fw-bold text-black">
                        {{$listing->title}}
                    </h4>
                </a>
                <p class="fs-4 my-2">${{$listing->dollar_price}}</p>
                <div class="small my-2 d-flex justify-content-between">
                    <p class="mb-0">{{$listing->deal_type}} Deal</p>
                    <p class="mb-0">
                        {{App\Helpers\DefaultLanguage::Reviews($listing->id,$listing->user_id)}}
                        (5)
                    </p>
                    <p class="mb-0">{{$listing->User->name}}</p>
                </div>
            </div>
            <div class="my-1">
                <a class="clr-primary fs-6" href="tel:{{$listing->contact_no}}">{{$listing->contact_no}}</a>
            </div>
        </div>
        <div class="card-footer bg-transparent border-0 p-0">
            <div class="col-12 mt-2">
                <button type="button" class="btn btn-primary text-white back-primary w-100 rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$listing->id}}">
                    Request Information
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal{{$listing->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-css">
        <div class="modal-content">
            <div class="modal-header border-0 d-block">
                <button type="button" class="trg btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="request_form" method="Post">
                    <div class="row px-3">
                        <div class="pt-3 col-12 request-info-modal">
                            <h3>Request Information.</h3>
                            <input type="hidden" name="car_id" id="car_id" value="{{$listing->id}}">
                            <div class="py-1">
                                <p>Hello, my name is
                                    <input type="text" class="" placeholder="First Name" name="first_name" id="">
                                    <input type="text" class="" placeholder="Last Name" name="last_name" id="">
                                    and I'm interested in this <span class="carname">Miky I'm in
                                        the</span>
                                    <input type="text" class="" placeholder="12345" name="area" id=""> area. You can
                                    reach me by email at
                                    <input type="email" class="" placeholder="abc@gmail.com" name="email" id=""> or
                                    by phone at
                                    <input type="number" class="" placeholder="123456789" name="phone" id=""><br>
                                    Thanks You!
                                </p>
                                <button class="border-0 btn btn-success w-100 rounded-3 btnsave" type="button">Send
                                </button>
                                <p class="small mt-4">By submitting my
                                    contact information on Motorvero, I
                                    agree
                                    to receive communications from
                                    Motorvero, from the vehicle’s seller,
                                    and from
                                    the seller’s agent(s). If I include
                                    my phone number, I agree to receive
                                    calls and text messages (including
                                    via automation). I can opt out at
                                    any
                                    time. I also agree to the Terms of
                                    Use and Privacy Policy, which
                                    explain how
                                    my data is used to better understand
                                    my vehicle shopping interests. This
                                    consent is not a condition of any
                                    purchase. Standard message and data
                                    rates
                                    may apply.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach
@else
<div class="col-lg-12 py-5 px-2">
    <h4 class="font-secondary  m-0 fw-bold text-center">
        No Result Found </h4>
</div>
@endif