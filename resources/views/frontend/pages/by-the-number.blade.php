@extends('frontend.layouts.master')
@section('title')
Contact
@endsection
@section('content')

<section class="used-car-top-banner">
  <div class="container h-100">
    <div class="row align-items-center h-100">
      <div>
        <p class="heading">
          Manage the entire
          pre-owned <span> vehicle lifecycle with one proven platform:</span>
        </p>
      </div>
    </div>
  </div>
</section>

<section class='market-industry bg-white py-5'>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-10 p-5 text-center">
        <img src="{{asset('dealerimages/americapeople-animate-v4.gif')}}" alt="" class="img-fluid w-75 mb-3">
        <h2 class="mb-5 heading-m">Market to the industry’s most engaged audience on the most visited marketplace</h2>
        <p>Join dealers who are already putting their vehicles in front of more shoppers, on more channels, and connecting with buyers who are ready to purchase.</p>
      </div>
    </div>
    <div class="row my-5 justify-content-center">
      <div class="col-md-5 p-5 text-center">
        <p class="fw-bold">More shoppers than
          any other site…</p>
        <h1 class="text-success">34%</h1>
        <p class="smaller">more visitors than our next competitor1</p>
      </div>
      <div class="col-md-5 p-5 text-center">
        <p class="fw-bold">Who only visit CarGurus…</p>
        <h1 class="text-success">45%</h1>
        <p class="smaller">of CarGurus unique visitors did not visit any of our leading competitors in Q1 2023 1</p>
      </div>
      <div class="col-md-5 p-5 text-center">
        <p class="fw-bold">And spend more time researching…</p>
        <h1 class="text-success">26%</h1>
        <p class="smaller">Visitors spend more time per month on CarGurus vs. our top competitor in Q1 2023</p>
      </div>
      <div class="col-md-5 p-5 text-center">
        <p class="fw-bold">And are more likely to purchase.</p>
        <h1 class="text-success">2.5x</h1>
        <p class="smaller">more likely to be the last site consumers visit before they purchase</p>
      </div>
    </div>

  </div>
</section>

<section class='testimonial-motor py-5 w-100'>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 d-md-flex">
        <div class="col-md-3">
          <img class="img-fluid h-100 w-100" src="{{asset('dealerimages/joe-cooper-stills05.avif')}}" alt="">
        </div>
        <div class="col-md-9 ps-3 my-auto text-white">
          <p>"You can't focus on your closing percentage unless your engagement goes up. The first positive result we had [after upgrading with CarGurus] was a much higher rate of engagement...and that led to an increase in close rates. We receive an enormous amount of quality referral traffic from the CarGurus website."</p>
          <h6>Steve Koch</h6>
          <p>Digital Marketing Manager, Joe Cooper Auto </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class='sell-faster py-5'>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-10 text-center">
        <img src="{{asset('dealerimages/cg-scenes-final-dealer-scene-2.gif')}}" alt="" class="img-fluid w-75 mb-3">
        <h1 class="heading-m">Sell faster and boost profits </h1>
        <p class='mt-5'>With today’s complex path to purchase, success depends on meeting consumers on their terms – and doing more online. CarGurus can help you provide a digital experience that will move more metal.</p>
      </div>
      <div class="row my-5 align-items-center justify-content-center">
        <div class="col-md-4 border-right p-5 text-center">
          <p class='fs-6 fw-bold'>Give shoppers options they want</p>
          <h1 class="text-success">60%</h1>
          <p class="small">of consumers would like to conduct more steps online before getting to the dealership.</p>
        </div>

        <div class="col-md-7 p-5  text-center border-left">
        <p class='fs-6 fw-bold'>Get more sales-ready leads</p>
        <p class="small">Digital Deal leads are</p>

          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="text-success">...3X more likley to close</h2>
              <p class="small">if pre-qualified or submitted hard pull credit app</p>
            </div>
            <div class="col-md-6">
              <h2 class="text-success">...2X more likley to close</h2>
              <p class="small">than traditional CarGurus leads</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class='testimonial-motor py-5 w-100'>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 d-md-flex">
        <div class="col-md-3">
          <img class="h-100 w-100 img-fluid" src="{{asset('dealerimages/charles-smith-mac-haik.avif')}}" alt="">
        </div>
        <div class="col-md-9 col-lg-9 ps-3 my-auto text-white">
          <p class="fs-6">
            “CarGurus Pre-Qualified Leads move through the sales process quicker than consumers who aren’t pre-qualified. They’ve mentally taken ownership already… They come in more committed to close and finalize their transaction.” </p>
          <h6>Charles Smith</h6>
          <p>General Sales Manager , Mac Haik Auto Group</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class='sell-faster py-5'>
  <div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-10 col-lg-10 text-center">
        <img src="{{asset('dealerimages/carscene.gif')}}" class="img-fluid w-75 mb-3" alt="">
        <h1 class="heading-m">Get the right vehicles on your lot </h1>
        <p class='mt-5'>Find vehicles that meet your specifications easily. With the option to acquire vehicles directly from other dealers or consumers, our integrated platform gives you more ways to source the right inventory quickly.  </p>
      </div>

      <div class="row my-5 align-items-center justify-content-center">
        <div class="col-md-4 p-5 text-center">
          <p class='fs-6 fw-bold'>Find a wide selection…</p>
          <h1>$2.0 billion</h1>
          <p class="smaller">Amount of inventory traded</p>
        </div>
        <div class="col-md-4 p-5 text-center">
          <p class='fs-6 fw-bold' >Of quality inventory options…</p>
          <h1>$20,000+</h1>
          <p class="smaller">Average transaction.</p>
        </div>
        <div class="col-md-4 p-5 text-center">
          <p class='fs-6 fw-bold'>Give shoppers options..</p>
          <h1>10,000+</h1>
          <p class="smaller">Dealers enrolled</p>
        </div>
     
      </div>
    </div>
  </div>
</section>

<section class='testimonial-motor py-5 w-100'>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 d-md-flex">
        <div class="col-md-3">
          <img class="h-100 w-100 img-fluid" src="{{asset('dealerimages/charles-smith-mac-haik (1).avif')}}" alt="">
        </div>
        <div class="col-md-9 col-lg-9 ps-3 my-auto text-white">
          <p class="fs-6">
          "[CarOffer] is not the typical dealer-to-dealer platform. This is your ability to specify which vehicle you want down to the make, model, trim, odometer, and how you want to acquire it - we base it on CarGurus' Instant Market Value. It's a brilliant platform."  </p>
          <h6>Danny Archibald</h6>
          <p>Owner,  Archibald’s Inc.  </p>
        </div>
      </div>
    </div>
  </div>
</section>

        <!-- Form  -->
        <section class="sec-gsp-form bg-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Want to see how Motorvero can help you?</h1>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 mx-auto text-center">
                    <h1 class="heading pb-4" data-aos="fade-up">
                        Dealer Application Form
                    </h1>

                </div>
                <div class="col-md-12 mx-auto">
<style>
    .alert-modal {
        display: flex;
        align-items: center;
        justify-content: center;
        /* position: fixed; */
        position: fixed;
        width: 100%;
    }
    .border-right {
      border-right: 1px solid gray;
    }
    img {
      object-fit: cover;
    }
</style>
                    <form class="row" method="post" action="https://eliteblue.net/motorvero/public/post-dealer" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="TrZbCFKbvHJgwkcxcp5g9OrrHowVRoNlh2DEgiCB">                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="dealership_name" class="form-control rounded-0 shadow-none-0" placeholder="DealerShip Name*" required="">
                        </div>
                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="first_name" class="form-control rounded-0 shadow-none-0" placeholder="First name*" required="">
                        </div>
                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="last_name" class="form-control rounded-0 shadow-none-0" placeholder="Last name*" required="">
                        </div>
                        <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="email" name="work_email" class="form-control rounded-0 shadow-none-0" placeholder="Your Work email address*" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="phone_no" class="form-control rounded-0 shadow-none-0" placeholder="Phone no*" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <select name="state" class="form-control rounded-0 shadow-none-0" required="">
                                <option value="">Select State*</option>
                                <option value="Small">AA</option>
                                <option value="Medium">AB</option>
                                <option value="Large">AC</option>
                                <option value="Large">AD</option>
                                <option value="Large">AE</option>
                                <option value="Large">DF</option>
                                <option value="Large">TG</option>
                                <option value="Large">NJ</option>
                            </select>
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <select name="used_inventory" class="form-control rounded-0 shadow-none-0" required="">
                                <option value="">Select Used Inventory Size*</option>
                                <option value="Small">0-20</option>
                                <option value="Medium">20-50</option>
                                <option value="Large">50-100</option>
                                <option value="Large">100-200</option>
                                <option value="Large">200+</option>
                            </select>
                        </div>

                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="zip_code" class="form-control rounded-0 shadow-none-0" placeholder="Zip Code*" required="">
                        </div>

                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <input type="text" name="website" class="form-control rounded-0 shadow-none-0" placeholder="website*" required="">
                        </div>
                        <div class="col-12 my-1 aos-init" data-aos="fade-up">
                            <button type="submit" class="main-button mx-auto p-2 form-control w-100 px-4 rounded-0 shadow-none fs-6">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   


</section>


<style>
  .testimonial-motor {
    background-color: rgb(0, 160, 221);
  }
</style>
@endsection