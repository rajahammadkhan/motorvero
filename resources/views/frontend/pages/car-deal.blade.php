@extends('frontend.layouts.master')
@section('title')
    car deal
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

<section class="pb-3 pt-3">
  <div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="row mx-auto pt-5 bg-gradient">
    <div class="col-lg-4 mt-5 col-md-6">
      <div class="card w-100 h-100 p-2">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image.jpeg"  alt="Card image cap"> -->
        <div class="card-body">
          <img src="{{asset('dealercardimg/icon_streamline-sales.png')}}" class="card-img w-25" alt="">
          <p class="card-text fs-6 mt-2">Reach the right shoppers who are interested in your vehicles.</p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
      </div>
    </div>

    <div class="col-md-6 mt-5 col-lg-4">
      <div class="card w-100 h-100 p-2">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image3.jpeg"  alt="Card image cap"> -->
        <div class="card-body">
         <img src="{{asset('dealercardimg/icon_search-sale.png')}}" class="card-img w-25" alt="">
          <p class="card-text fs-6 mt-2">Boost your exposure without compromising your gross profits </p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
      </div>
    </div>

    <div class="col-md-6  mt-5 col-lg-4">
      <div class="card p-2 w-100 h-100">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/sell_car.jpeg"  alt="Card image cap"> -->
        <div class="card-body">
          <img src="{{asset('dealercardimg/icon_hand-shake.png')}}" class="card-img w-25" alt="">
          <p class="card-text fs-6 mt-2">Drive more sales by leveraging CarGurus' data and merchandising tools</p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow justify-content-center px-4 py-5">

    <div class="col-md-6 px-5">
        <div class="mb-4">   
    <h3 class="fw-bolder mb-5">How it Works</h3>
    <h4 class="fw-bolder mb-3">Discoverability</h4>
    <p class="lead">Used listings receive exclusive ‘Start Your Purchase’ badging on SRPs, driving shoppers to build a personalized, vehicle and dealership-specific deal on your VDP, including trade-in, credit check and application, your F&I products, and appointment or delivery scheduling. </p>
        </div>
        <div class="mb-4">  
    <h4 class="fw-bolder mb-3">Control</h4>
    <p class="lead">The dealership controls the deal by customizing the customer's deal experience with their financing rates, lenders, and service and protection plans - along with the option to accept deposits. </p>
        </div>
        <div class="mb-4">  
    <h4 class="fw-bolder mb-3">Efficiency</h4>
    <p class="lead">Automatically receive leads and full deal summaries in your CRM, and credit applications in RouteOne or DealerTrack to tailor follow-up and finalize more deals. </p>
        </div>
      </div>

      <div class="col-md-6">
    <!-- Insert Image -->
    <img src="{{asset('dealercardimg/1.png')}}" class="card-img" alt="">
     
      </div>

    
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow justify-content-center px-4 py-5">
      <div class="col-md-6">
    <!-- Insert Image -->
    <img src="{{asset('dealercardimg/illustration-vehicle-delivery.png')}}" class="card-img" alt="">
     
      </div>
      <div class="col-md-6 px-5">
      <h2 class="fw-bolder mb-5">Digital Deal Geo Expansion Options</h2>
      <p class="lead">Grow your digital retail and delivery strategy outside your local market and reach more shoppers ready to complete the sales process remotely <br> Choose a radius that works for your dealership, starting at 200 miles all the way up to nationwide, and increase your exposure and leads. </p>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow justify-content-center px-4 py-5">
      <div class="col-md-6">
    
    <h2 class="fw-bolder mb-5">Bridge the gap from online shopping to sales</h2>
      <p class="lead">Watch this video to hear how The Taverna Collection uses Digital Deal to improve the sales process and increase conversions to 50-75% on average. </p>
      </div>
      <div class="col-md-6 px-5">
      <!-- Insert Image -->
      <img src="{{asset('dealercardimg/Image.png')}}" class="card-img" alt="">

      </div>
    </div>
  </div>
</section>



<section class="sec-gsp-form bg-white py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center mb-3">
                <h1>Want to sell cars faster?</h1>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 mx-auto text-center">
                    <h6 class="pb-4" data-aos="fade-up">
                    Fill out this form and we'll reach out ASAP – or call 1-800-CARGURUS.
                    </h6>

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
    .card {
      background-color: #0277bd;
      color: #fff;
    }
    .card-new {
      background-color: #fff;
    }

  
    .card-new {
      background-color: #fff !important;
    }
    .card-body-cus {
      margin: 5em 1em;
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
@endsection


