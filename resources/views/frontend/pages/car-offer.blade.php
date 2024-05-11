@extends('frontend.layouts.master')
@section('title')
car-offer
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


<section class="partners">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-white">
        <h4 class="mb-3">Motorvero has partnered with CarOffer to help dealers source and sell vehicles efficiently.</h4>
        <p class="lead fw-bolder">CarOffer is an innovative platform for car dealers to buy, sell, and trade with automation and ease. To learn more about how to acquire inventory from CarOffer, fill out the form and your Motorvero representative will contact you shortly.</p>
      </div>
    </div>
  </div>
</section>


<section class="pb-3">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-10 text-center pt-5">
        <h2 class="fw-bolder">CarOffer is the industry's first dealer-to-dealer trade network for used vehicles</h2>
      </div>
      <div class="row mx-auto pt-5 bg-gradient">
        <div class="col-lg-4 mt-5 col-md-6">
          <div class="card w-100 h-100 p-2">
            <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image.jpeg"  alt="Card image cap"> -->
            <div class="card-body">
              <img src="{{asset('dealercardimg/_IconMaster_car-building.png')}}" class="card-img w-25" alt="">
              <p class="card-text fs-6 mt-2">Reach the right shoppers who are interested in your vehicles.</p>
              <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-5 col-lg-4">
          <div class="card w-100 h-100 p-2">
            <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image3.jpeg"  alt="Card image cap"> -->
            <div class="card-body">
              <img src="{{asset('dealercardimg/_IconMaster_check-List.png')}}" class="card-img w-25" alt="">
              <p class="card-text fs-6 mt-2">Boost your exposure without compromising your gross profits </p>
              <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
            </div>
          </div>
        </div>

        <div class="col-md-6  mt-5 col-lg-4">
          <div class="card p-2 w-100 h-100">
            <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/sell_car.jpeg"  alt="Card image cap"> -->
            <div class="card-body">
              <img src="{{asset('dealercardimg/_IconMaster_money-check-alt.png')}}" class="card-img w-25" alt="">
              <p class="card-text fs-6 mt-2">Drive more sales by leveraging Motorvero' data and merchandising tools</p>
              <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="aquire bg-light">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-8">
        <h3 class="fw-bolder text-center">Acquire Inventory Directly from Shoppers</h3>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow justify-content-center p-5 align-items-center">
      <div class="col-md-6">
        <!-- Insert Image -->
        <img src="{{asset('dealercardimg/1.png')}}" class="card-img" alt="">

      </div>
      <div class="col-md-6 px-5">
        <h2 class="fw-bolder mb-5">Acquire Inventory from Motorvero Shoppers</h2>
        <p class="lead">Motorvero and CarOffer customers will have first access to local shopper inventory sold through the Motorvero Sell My Car page. This program is currently rolling out and we'll let you know when we expand to your area. </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow justify-content-center p-5 align-items-center">
      <div class="col-md-6">

        <h2 class="fw-bolder mb-5">Acquire Inventory from Motorvero Shoppers</h2>
        <p class="lead">Motorvero and CarOffer customers will have first access to local shopper inventory sold through the Motorvero Sell My Car page. This program is currently rolling out and we'll let you know when we expand to your area. </p>
      </div>
      <div class="col-md-6 px-5">
        <!-- Insert Image -->
        <img src="{{asset('dealercardimg/Image.png')}}" class="card-img" alt="">

      </div>
    </div>
  </div>
</section>


<!-- Cards -->
<section class="industry_insights card-new">
  <div class="row px-5 mx-auto py-5 bg-light bg-gradient">
    <div class="col-md-12 d-flex justify-content-between flex-wrap mb-2">
      <div class="mb-3 mb-sm-0">
        <h4 class="fw-bolder">PRODUCT UPDATES</h4>
      </div>
      <div>
        <a href="{{url('/press-room')}}">View more</a>
      </div>
    </div>
    <div class="col-lg-4 mt-2 col-md-6">
      <div class="card card-new text-dark w-100 h-100">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image.jpeg"  alt="Card image cap"> -->
        <img src="{{asset('dealercardimg/Image.png')}}" class="card-img img-cus" alt="">
        <div class="card-body card-body-cus p-0">

          <h4 class="fw-bolder mb-3"> What's new at Motorvero? Quarterly product updates</h4>
          <p class="card-text fs-6 mt-2">Since our dealer solutions have expanded, we wanted to refresh how we deliver our product updates to provide a better idea of where they can fit into your marketing, retail, & inventory strategies. Let’s dive into this quarter’s updates. </p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
        <div class="card-footer bg-transparent border-0">
          <a href="{{url('/single-news')}}" class="lead">Motorvero News</a>
        </div>
      </div>
    </div>

    <div class="col-md-6  mt-2 col-lg-4">
      <div class="card card-new text-dark w-100 h-100">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/sell_car.jpeg"  alt="Card image cap"> -->
        <img src="{{asset('dealercardimg/1.png')}}" class="card-img img-cus" alt="">
        <div class="card-body card-body-cus p-0">


          <h4 class="fw-bolder mb-3"> Sell My Car program now available in California</h4>
          <p class="card-text fs-6 mt-2">We’re excited to announce that we’ve expanded the Sell My Car program to our first west coast state! Sell My Car is now available to shoppers and dealers in California. </p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
        <div class="card-footer bg-transparent border-0">
          <a href="{{url('/single-news')}}" class="lead">Motorvero News</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 mt-2 col-lg-4">
      <div class="card card-new text-dark w-100 h-100">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image3.jpeg"  alt="Card image cap"> -->
        <img src="{{asset('dealercardimg/Image.png')}}" class="card-img img-cus" alt="">
        <div class="card-body card-body-cus p-0">

          <h4 class="fw-bolder mb-3"> How Motorvero and CarOffer are helping dealers fuel their pre-owned pipeline</h4>

          <p class="card-text fs-6 mt-2">We know inventory acquisition has always been a challenge for dealers that’s only become increasingly complicated due to shortages caused by the pandemic. To help with this problem, we’ve invested in ways to bring you access to more inventory. </p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
        <div class="card-footer bg-transparent border-0">
          <a href="{{url('/single-news')}}" class="lead">Motorvero News</a>
        </div>
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
            Fill out this form and we'll reach out ASAP – or call 1-800-Motorvero.
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
            <input type="hidden" name="_token" value="TrZbCFKbvHJgwkcxcp5g9OrrHowVRoNlh2DEgiCB">
            <div class="col-md-6 col-12 my-1 aos-init" data-aos="fade-up">
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
  .img-cus {
    height: 200px !important;
    object-fit: cover !important;
    width: 100% !important;
  }

  .aquire {
    padding: 8em 0;
  }

  .partners {
    background-color: #0267a7;
    padding: 4em 0;
  }

  .card {
    background-color: #0267a7;
    color: #fff;
  }
</style>
@endsection