@extends('frontend.layouts.master')
@section('title')
card-offer
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

<section class="industry_insights ">
  <div class="row px-5 mx-auto py-5 bg-light bg-gradient">
    <div class="col-md-12 d-flex justify-content-between flex-wrap mb-5">
      <div class="mb-3 mb-sm-0">
        <h1>Industry Insights</h1>
      </div>
      <!-- <div>
                <a href="#">View more Industry Insights</a>
            </div> -->
    </div>
    <div class="col-lg-4 mt-5 col-md-6">
      <div class="card w-100 h-100 p-2">
        <!-- <img class="card-img-top" src="https://www.eliteblue.net/motorvero/public/frontend/images/sell_car/car_image.jpeg"  alt="Card image cap"> -->
        <div class="card-body">
          <img src="{{asset('dealercardimg/icon_shoppers.png')}}" class="card-img w-25" alt="">
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
          <p class="card-text fs-6 mt-2">Drive more sales by leveraging Motorvero' data and merchandising tools</p>
          <!-- <p class="card-text"><small class="text-muted">Report</small></p> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Table  Needs Work-->
<section class="table py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive px-3">
          <table class="table listing-table">
            <thead>
              <tr>
                <th class="col-4">
                  <img src="{{asset('frontend/images/logo/logo.png')}}" alt="">
                </th>
                <th scope="col">
                  <h2 class="fs-4">Enhanced</h2>
                  <br>
                  <a href="{{url('#demo')}}" class="btn btn-sm btn-transparent btn-outline-primary px-1">Request demo</a>
                </th>
                <th scope="col">
                  <h2 class="fs-4">Featured</h2>
                  <br>
                  <a href="{{url('#demo')}}" class="btn btn-sm btn-transparent btn-outline-primary px-1">Request demo</a>
                </th>
                <th scope="col">
                  <h2 class="fs-4">Featured Priority</h2>
                  <br>
                  <a href="{{url('#demo')}}" class="btn btn-sm btn-transparent btn-outline-primary px-1">Request demo</a>
                </th>
              </tr>
            </thead>
            <tbody class="opacity-0">
              <tr>
                <td></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td></td>
              </tr>
              <tr>
                <td></td>
              </tr>

            </tbody>

            <tbody class="my-4">
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Unlimited leads and connections</h2>
                    <p class="fw-light">Receive full shopper info</p>
                </th>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Dashboard tools and insights</h2>
                    <p class="fw-light">Access unique market-level data to make more informed pricing and inventory management decisions</p>
                </th>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">LeadAI</h2>
                    <p class="fw-light">Prioritize the most-engaged shoppers for follow-up and improve outreach efficiency</p>
                </th>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Branded VDP spots</h2>
                    <p class="fw-light">Own all branding on your VDP to drive shoppers to your website</p>
                </th>
                <td><i class="bi bi-dash"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Top row of 1st SRP</h2>
                    <p class="fw-light">Better compete in shopper' searches in your market</p>
                </th>
                <td><i class="bi bi-dash"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">1st SRP branded spot</h2>

                </th>
                <td><i class="bi bi-dash"></i></td>
                <td><i class="bi bi-dash"></i></td>
                <td><i class="bi bi-check-circle"></i></td>
              </tr>


            </tbody>
            <tbody>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>


            </tbody>

            <tbody>
              <!-- Add Optional -->

              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Motorvero Highlight:</h2>
                    <p class="fw-light">Sponsored spot on the 2nd SRP and beyond with specific types of inventory</p>

                </th>
                <td><i class="bi bi-dash"></i></td>
                <td>
                  Optional
                </td>
                <td>
                  Optional
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Motorvero RPM:</h2>
                    <p class="fw-light">Target both your listings and an expanded audience on Facebook, driving them to your website</p>

                </th>
                <td>
                  Optional
                </td>
                <td>
                  Optional
                </td>
                <td>
                  Optional
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <h4 class="fw-bold">Motorvero Digital Deal - with Geo Expansion Option</h2>
                    <p class="fw-light">Expand your dealership’s digital retailing reach and offerings to receive more, higher-quality leads</p>

                </th>
                <td>
                  Optional
                </td>
                <td>
                  Optional
                </td>
                <td>
                  Optional
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>


  </div>
</section>

<!-- Listing Packages  -->

<section class="packages py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 mx-auto">
        <h2 class="text-center">All Motorvero Listings packages include</h2>
        <hr>
      </div>
      <div class="row mt-4 justify-content-center">
        <div class="col-md-5">
          <ul>
            <li class="fs-6 mb-3">
              Access to <a class="text-decoration-none" href="{{url('/by-the-number')}}">Motorvero' industry-leading audience</a>
            </li>
            <li class="fs-6 mb-3">
              Deep linking on VDPs to convert Motorvero website clicks into leads on your website
            </li>
            <li class="fs-6 mb-3">
              Pre-qualified leads, CPO and New Car Leads (where relevant)
            </li>
            <li class="fs-6 mb-3">
              Managed Text / Chat to avoid missed opportunities to prospect and generate leads
            </li>
            <li class="fs-6 mb-3">
              A dedicated team of Motorvero experts that provides suggestions to achieve your goals
            </li>
          </ul>
        </div>
        <div class="col-md-5">
          <ul>
            <li class="fs-6 mb-3">
              Deal Rating Badges to provide trusted, third-party validation on your website
            </li>
            <li class="fs-6 mb-3">
              Dealer Branding Page with more details of your dealership to drive in-store and online visits
            </li>
            <li class="fs-6 mb-3">
              Access to Autolist shoppers to expand your audience of highly-engaged mobile shoppers
            </li>
            <li class="fs-6 mb-3">
              IMV Scan to ensure your vehicle’s listed price is in line with market value – even before you have listed on Motorvero
            </li>
            <li class="fs-6 mb-3">
              And more!
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Pre Qualified Leads -->

<section class="leads py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 px-3">
        <h1 class="mb-5">Pre-Qualified Leads</h1>
        <h5 class="mb-4 fw-bolder">Pre-qualified financing on Motorvero gets you even closer to closing a deal by accessing lower-funnel, more prepared leads.</h5>

        <ul class="ps-3">
          <li class="lead mb-3">Eligible VDPs allow shoppers to easily pre-qualify through existing dealer partnerships with Capital One, GLS or Westlake</li>
          <li class="lead mb-3">Loans still originate from dealers, protecting your profits</li>
          <li class="lead mb-3">Know more about shoppers’ buying power and close the sale with confidence and no surprises</li>
        </ul>
      </div>
      <!-- Add Image source here -->
      <div class="col-md-6 px-4 align-self-center">
        <img src="{{asset('dealercardimg/Image.png')}}" class="img-fluid ps-3" alt="">
      </div>
    </div>

  </div>
</section>

<!-- Motorvero exposure  -->

<section class="exposure bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <h1>Increase your Motorvero exposure with premium add-on products</h1>
      </div>
    </div>
  </div>
</section>

<!-- Unlock Higher -->

<section class="unlock py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 px-4">
        <!-- Insert image here -->
        <img src="{{asset('dealercardimg/illustration-vehicle-delivery.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-md-6 px-4">
        <h2 class="fw-bolder mb-5">Unlock higher quality leads with Digital Deal</h2>
        <h4 class="fw-bolder mb-3">How it works:</h4>
        <ul class="ps-3">
          <li class="lead mb-3">Used listings receive exclusive ‘Start Your Purchase’ badging on SRPs, driving shoppers to build a personalized, vehicle and dealership-specific deal on the VDP, including their trade-in, credit check and application, your F&I products, and appointment or delivery scheduling. </li>
          <li class="lead mb-3">Dealers receive higher quality leads that 2x-3x more likely to close* directly in their CRM and credit applications in RouteOne or DealerTrack.</li>
          <li class="lead mb-3">Add geo expansion to Digital Deal, starting at 200 miles up to nationwide, to expand your digital retail and shipping strategy.</li>
        </ul>
        <p class="fw-lighter mb-5">*S&P Global Mobility – Polk Signals, based on all Motorvero leads (total leads) between Q4 2021 through Q2 2022 </p>
      <button>  <a href="{{url('/car-deal')}}" class="text-white">Learn More</a> </button>
      </div>
    </div>
  </div>
</section>

<!-- Form  -->
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
          </style>
          <form id="demo" class="row" method="post" action="https://eliteblue.net/motorvero/public/post-dealer" enctype="multipart/form-data">
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
  .leads {
    background-color: #f2faff;
  }

  .exposure {
    padding: 8em 0;
  }

  button {
    padding: 1em 2em;
    background-color: #0277bd;
    color: #fff;
    border: none;
  }

  th,
  td,
  tr {
    border: 0 !important;
  }
</style>
@endsection