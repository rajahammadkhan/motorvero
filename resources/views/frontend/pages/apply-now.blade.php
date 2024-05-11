@extends('frontend.layouts.master')
@section('title')
    Apply Now
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        .form-label > [data-required="true"]::after {
            color: hsl(var(--form-error-color));
            content: "*";
            padding-left: 0.25em;
            position: absolute;
        }

        span [data-required] {
            display: block;
            height: 100px;
            width: 100px;
        }

        /* .modal {
                display: block !important;
            } */

        .fade:not(.show) {
            opacity: 0;
        }

        label > [data-required="true"]::after,
        legend > [data-required="true"]::after {
            /* color: hsl(var(--form-error-color)); */
            content: "*";
            padding-left: 0.25em;
            position: absolute;

        }

        .tab {
            display: none;
            color: var(--dark);
        }

        .step {
            /* content: "aaa"; */

            margin: 0 2px;
            /* background-color: #bbbbbb; */
            border: none;
            border-radius: 50%;
            display: none;
            opacity: 0.5;
        }

        .step.active {
            /* content: "step-count"; */
            opacity: 1;
            display: block;
        }

        .tab.invalid > div {
            /* position: absolute; */
            /* content: "Please Fill";
                height: 100px;
                width: 100px;
                background-color: blue; */
            display: none;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            /* background-color: yellow; */
            /* display: none; */

        }

        .required-none {
            display: none;
        }

        .required {
            display: flex;
            color: red;
            font-size: small;
        }

        .required svg {
            margin-top: auto;
            margin-bottom: auto;
        }

        .required p {
            padding-left: 10px;
            margin-bottom: 0;
        }

        #prevBtn {
            cursor: pointer;
        }

        .text-red {
            color: red;
        }

        nav > div > div button.active:after {
            border: 0.5rem solid transparent;
            border-top-color: #fff;
            content: "";
            height: 0;
            left: 50%;
            bottom: -1px;
            position: absolute;
            transform: translateX(-50%) rotate(180deg);
            width: 100;
        }

        .dropdown_items {
            display: none;
        }

        /*.form-title{*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*}*/

        .top-banner {
            /*background-image: url("https://cdn-static.findly.com/wp-content/uploads/sites/1420/2022/07/27203721/PDN-DiversityInc-Banner.jpg");*/
            width: 856px;
            height: 214px;
            zoom: 200%;

        }

        .heading-section {
            margin-right: 15%;
        }

        .heading-section p {
            margin-top: 50px;
            font-size: 20px;
            color: #030000;
            font-weight: bold;
            font-family: sans-serif;
        }

        .heading-section button {
            margin-bottom: 50px;
            font-size: 10px;
        }

        .documentation {
            background-color: #ffffff;
        }

        .btn-white {
            background-color: #ffffff;
        }

        .btn-white:hover {
            background-color: #ffffff;
        }

        .promo-section {
            background-image: url("https://cdn-static.findly.com/wp-content/uploads/sites/1420/2020/12/5f31acdacadd4b8385d322ae_e0d55e8d-0cea-42d9-bf1e-92449749aae3-min.png");
            width: 1300px;
            height: 600px;


        }

        .promo-section h3 {
            font-size: 60px;
            color: #fdfeff;
            font-weight: bold;
            margin-top: 15%;
        }

        .button-promo {
            padding: 20px 5px;
            background-color: #527d89;
            border-radius: 0px;
            color: #ffffff;
            font-size: 16px;
        }

        .button-promo:hover {
            background-color: #0693e3;
            color: #ffffff;
        }
    </style>
    <section class="sec-gsp-form ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-4 mx-auto text-center">
                </div>
                <div class="col-md-12 mx-auto">
                    <div class="main-section col-md-12 m-5">
                        <h2 class="mb-4 text-bold text-dark"><b> {{$job->title}}</b></h2>
                        <div>
                            <p>at Motorvero <a href="{{url('job-search')}}">(View all jobs)</a></p>
                            <h6 class="mt-5 text-muted"><b>All Offices</b></h6>
                            <div>
                                {!!$job->description!!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="bg-light p-4">
                    <div class="d-flex justify-content-between">
                        <h5>Apply for this Job
                        </h5>
                        <p>* Required</p>
                    </div>
                    <div class=" apply-with-btn py-3">
                        <a class="d-flex btn btn-primary rounded-5">

                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </li>
                            <span>Apply With LinkedIn</span>
                        </a>
                    </div>
                    <form action="{{url('apply-job')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" value="{{$job->id}}">
                        <div class="applytalent">
                            <div class="mb-3 row">
                                <label class="col-sm-2">First Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="first_name" class="form-control" require>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Last Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="last_name" class="form-control" require>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2">Email*</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" require>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2">Phone*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" require>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row position-relative">
                            <label class="col-sm-2 col-form-label">Resume/CV</label>
                            <div class="col-sm-10 resumesec">
                                <label for="resumeattach">Attach,</label>
                                <input name="resume" type="file" id="resumeattach" accept=
                                "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf">
                                <span class="filename ps-2 my-auto" data-for="resume" style="display: none;"></span>
                                <!-- <label for="resumedropbox">Dropbox,</label>
                                        <input name="resume" type="file" id="resumedropbox">

                                        <label for="resumegd">Google Drive</label>
                                        <input name="resume" type="file" id="resumegd"> -->
                                <label class="resumeem" for="resumeem">or Event Manually</label>
                                <textarea name="event_manually_resume" id="" cols="100" rows="5" id="resumeem"
                                          style="display: none;"></textarea>
                                <p class="removeresume my-auto fw-bold">X</p>
                            </div>
                            <p class="typefile smaller">
                                (File types: pdf, doc, docx, txt, rtf)</p>
                        </div>
                        <div class="mb-3 row position-relative">
                            <label class="col-sm-2 col-form-label">Cover Letter</label>
                            <div class="col-sm-10 resumesec">
                                <label for="clattach">Attach,</label>
                                <input name="cover_letter" type="file" id="clattach" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf">
                                <span class="filename ps-2 my-auto" data-for="resume" style="display: none;"></span>
                                <!-- <label for="cldropbox">Dropbox,</label>
                                        <input name="cover_letter" type="file" id="cldropbox">

                                        <label for="clgd">Google Drive</label>
                                        <input name="cover_letter" type="file" id="clgd"> -->
                                <label class="resumeem" for="clem">or Event Manually</label>
                                <textarea name="event_manually_letter" cols="100" rows="5" id="clem"
                                          style="display: none;"></textarea>

                                <p class="removeresume my-auto fw-bold">X</p>
                            </div>
                            <p class="typefile smaller">
                                (File types: pdf, doc, docx, txt, rtf)</p>
                        </div>


                        <div class="applytalent ">
                            <div class="educationsec d-none">
                                <div class="mb-3 row">
                                    <label class="col-sm-2">School*</label>
                                    <div class="col-sm-10">
                                        <select class="select2" name="">
                                            <option value="">Select a School</option>
                                            <option value=""> Abraham Baldwin Agricultural College</option>
                                            <option value=""> Academy of Art University</option>
                                            <option value=""> Acadia University</option>
                                            <option value=""> Adams State University</option>
                                            <option value=""> Adelphi University</option>
                                            <option value=""> Adrian College</option>
                                            <option value=""> Adventist University of Health Sciences</option>
                                            <option value=""> Agnes Scott College</option>
                                            <option value=""> AIB College of Business</option>
                                            <option value=""> Alaska Pacific University</option>
                                            <option value=""> Albany College of Pharmacy and Health Sciences</option>
                                            <option value=""> Albany State University</option>
                                            <option value=""> Albertus Magnus College</option>
                                            <option value=""> Albion College</option>
                                            <option value=""> Albright College</option>
                                            <option value=""> Alderson Broaddus University</option>
                                            <option value=""> Alfred University</option>
                                            <option value=""> Alice Lloyd College</option>
                                            <option value=""> Allegheny College</option>
                                            <option value=""> Allen College</option>
                                            <option value=""> Allen University</option>
                                            <option value=""> Alliant International University</option>
                                            <option value=""> Alma College</option>
                                            <option value=""> Alvernia University</option>
                                            <option value=""> Alverno College</option>
                                            <option value=""> Amberton University</option>
                                            <option value=""> American Academy of Art</option>
                                            <option value=""> American Indian College of the Assemblies of God</option>
                                            <option value=""> American InterContinental University</option>
                                            <option value=""> American International College</option>
                                            <option value=""> American Jewish University</option>
                                            <option value=""> American Public University System</option>
                                            <option value=""> American University</option>
                                            <option value=""> American University in Bulgaria</option>
                                            <option value=""> American University in Cairo</option>
                                            <option value=""> American University of Beirut</option>
                                            <option value=""> American University of Paris</option>
                                            <option value=""> American University of Puerto Rico</option>
                                            <option value=""> Amherst College</option>
                                            <option value=""> Amridge University</option>
                                            <option value=""> Anderson University</option>
                                            <option value=""> Andrews University</option>
                                            <option value=""> Angelo State University</option>
                                            <option value=""> Anna Maria College</option>
                                            <option value=""> Antioch University</option>
                                            <option value=""> Appalachian Bible College</option>
                                            <option value=""> Aquinas College</option>
                                            <option value=""> Arcadia University</option>
                                            <option value=""> Argosy University</option>
                                            <option value=""> Arizona Christian University</option>
                                            <option value=""> Arizona State University - West</option>
                                            <option value=""> Arkansas Baptist College</option>
                                            <option value=""> Arkansas Tech University</option>
                                            <option value=""> Armstrong Atlantic State University</option>
                                            <option value=""> Art Academy of Cincinnati</option>
                                            <option value=""> Art Center College of Design</option>
                                            <option value=""> Art Institute of Atlanta</option>
                                            <option value=""> Art Institute of Colorado</option>
                                            <option value=""> Art Institute of Houston</option>
                                            <option value=""> Art Institute of Pittsburgh</option>
                                            <option value=""> Art Institute of Portland</option>
                                            <option value=""> Art Institute of Seattle</option>
                                            <option value=""> Asbury University</option>
                                            <option value=""> Ashford University</option>
                                            <option value=""> Ashland University</option>
                                            <option value=""> Assumption College</option>
                                            <option value=""> Athens State University</option>
                                            <option value=""> Auburn University - Montgomery</option>
                                            <option value=""> Augsburg College</option>
                                            <option value=""> Augustana College</option>
                                            <option value=""> Aurora University</option>
                                            <option value=""> Austin College</option>
                                            <option value=""> Alcorn State University</option>
                                            <option value=""> Ave Maria University</option>
                                            <option value=""> Averett University</option>
                                            <option value=""> Avila University</option>
                                            <option value=""> Azusa Pacific University</option>
                                            <option value=""> Babson College</option>
                                            <option value=""> Bacone College</option>
                                            <option value=""> Baker College of Flint</option>
                                            <option value=""> Baker University</option>
                                            <option value=""> Baldwin Wallace University</option>
                                            <option value=""> Christian Brothers University</option>
                                            <option value=""> Abilene Christian University</option>
                                            <option value=""> Arizona State University</option>
                                            <option value=""> Auburn University</option>
                                            <option value=""> Alabama A&amp;M University</option>
                                            <option value=""> Alabama State University</option>
                                            <option value=""> Arkansas State University</option>
                                            <option value=""> Baptist Bible College</option>
                                            <option value=""> Baptist Bible College and Seminary</option>
                                            <option value=""> Baptist College of Florida</option>
                                            <option value=""> Baptist Memorial College of Health Sciences</option>
                                            <option value=""> Baptist Missionary Association Theological Seminary
                                            </option>
                                            <option value=""> Bard College</option>
                                            <option value=""> Bard College at Simon's Rock</option>
                                            <option value=""> Barnard College</option>
                                            <option value=""> Barry University</option>
                                            <option value=""> Barton College</option>
                                            <option value=""> Bastyr University</option>
                                            <option value=""> Bates College</option>
                                            <option value=""> Bauder College</option>
                                            <option value=""> Bay Path College</option>
                                            <option value=""> Bay State College</option>
                                            <option value=""> Bayamon Central University</option>
                                            <option value=""> Beacon College</option>
                                            <option value=""> Becker College</option>
                                            <option value=""> Belhaven University</option>
                                            <option value=""> Bellarmine University</option>
                                            <option value=""> Bellevue College</option>
                                            <option value=""> Bellevue University</option>
                                            <option value=""> Bellin College</option>
                                            <option value=""> Belmont Abbey College</option>
                                            <option value=""> Belmont University</option>
                                            <option value=""> Beloit College</option>
                                            <option value=""> Bemidji State University</option>
                                            <option value=""> Benedict College</option>
                                            <option value=""> Benedictine College</option>
                                            <option value=""> Benedictine University</option>
                                            <option value=""> Benjamin Franklin Institute of Technology</option>
                                            <option value=""> Bennett College</option>
                                            <option value=""> Bennington College</option>
                                            <option value=""> Bentley University</option>
                                            <option value=""> Berea College</option>
                                            <option value=""> Berkeley College</option>
                                            <option value=""> Berklee College of Music</option>
                                            <option value=""> Berry College</option>
                                            <option value=""> Bethany College</option>
                                            <option value=""> Bethany Lutheran College</option>
                                            <option value=""> Bethel College</option>
                                            <option value=""> Bethel University</option>
                                            <option value=""> BI Norwegian Business School</option>
                                            <option value=""> Binghamton University - SUNY</option>
                                            <option value=""> Biola University</option>
                                            <option value=""> Birmingham-Southern College</option>
                                            <option value=""> Bismarck State College</option>
                                            <option value=""> Black Hills State University</option>
                                            <option value=""> Blackburn College</option>
                                            <option value=""> Blessing-Rieman College of Nursing</option>
                                            <option value=""> Bloomfield College</option>
                                            <option value=""> Bloomsburg University of Pennsylvania</option>
                                            <option value=""> Blue Mountain College</option>
                                            <option value=""> Bluefield College</option>
                                            <option value=""> Bluefield State College</option>
                                            <option value=""> Bluffton University</option>
                                            <option value=""> Boricua College</option>
                                            <option value=""> Boston Architectural College</option>
                                            <option value=""> Boston Conservatory</option>
                                            <option value=""> Boston University</option>
                                            <option value=""> Bowdoin College</option>
                                            <option value=""> Bowie State University</option>
                                            <option value=""> Bradley University</option>
                                            <option value=""> Brandeis University</option>
                                            <option value=""> Brandman University</option>
                                            <option value=""> Brazosport College</option>
                                            <option value=""> Brenau University</option>
                                            <option value=""> Brescia University</option>
                                            <option value=""> Brevard College</option>
                                            <option value=""> Brewton-Parker College</option>
                                            <option value=""> Briar Cliff University</option>
                                            <option value=""> Briarcliffe College</option>
                                            <option value=""> Bridgewater College</option>
                                            <option value=""> Bridgewater State University</option>
                                            <option value=""> Brigham Young University - Hawaii</option>
                                            <option value=""> Brigham Young University - Idaho</option>
                                            <option value=""> Brock University</option>
                                            <option value=""> Bryan College</option>
                                            <option value=""> Bryn Athyn College of the New Church</option>
                                            <option value=""> Bryn Mawr College</option>
                                            <option value=""> Boston College</option>
                                            <option value=""> Buena Vista University</option>
                                            <option value=""> Burlington College</option>
                                            <option value=""> Bowling Green State University</option>
                                            <option value=""> Brown University</option>
                                            <option value=""> Appalachian State University</option>
                                            <option value=""> Brigham Young University - Provo</option>
                                            <option value=""> Boise State University</option>
                                            <option value=""> Bethune-Cookman University</option>
                                            <option value=""> Bryant University</option>
                                            <option value=""> Cabarrus College of Health Sciences</option>
                                            <option value=""> Cabrini College</option>
                                            <option value=""> Cairn University</option>
                                            <option value=""> Caldwell College</option>
                                            <option value=""> California Baptist University</option>
                                            <option value=""> California College of the Arts</option>
                                            <option value=""> California Institute of Integral Studies</option>
                                            <option value=""> California Institute of Technology</option>
                                            <option value=""> California Institute of the Arts</option>
                                            <option value=""> California Lutheran University</option>
                                            <option value=""> California Maritime Academy</option>
                                            <option value=""> California State Polytechnic University - Pomona</option>
                                            <option value=""> California State University - Bakersfield</option>
                                            <option value=""> California State University - Channel Islands</option>
                                            <option value=""> California State University - Chico</option>
                                            <option value=""> California State University - Dominguez Hills</option>
                                            <option value=""> California State University - East Bay</option>
                                            <option value=""> California State University - Fullerton</option>
                                            <option value=""> California State University - Los Angeles</option>
                                            <option value=""> California State University - Monterey Bay</option>
                                            <option value=""> California State University - Northridge</option>
                                            <option value=""> California State University - San Bernardino</option>
                                            <option value=""> California State University - San Marcos</option>
                                            <option value=""> California State University - Stanislaus</option>
                                            <option value=""> California University of Pennsylvania</option>
                                            <option value=""> Calumet College of St. Joseph</option>
                                            <option value=""> Calvary Bible College and Theological Seminary</option>
                                            <option value=""> Cambridge College</option>
                                            <option value=""> Cameron University</option>
                                            <option value=""> Campbellsville University</option>
                                            <option value=""> Canisius College</option>
                                            <option value=""> Capella University</option>
                                            <option value=""> Capital University</option>
                                            <option value=""> Capitol College</option>
                                            <option value=""> Cardinal Stritch University</option>
                                            <option value=""> Caribbean University</option>
                                            <option value=""> Carleton College</option>
                                            <option value=""> Carleton University</option>
                                            <option value=""> Carlos Albizu University</option>
                                            <option value=""> Carlow University</option>
                                            <option value=""> Carnegie Mellon University</option>
                                            <option value=""> Carroll College</option>
                                            <option value=""> Carroll University</option>
                                            <option value=""> Carson-Newman University</option>
                                            <option value=""> Carthage College</option>
                                            <option value=""> Case Western Reserve University</option>
                                            <option value=""> Castleton State College</option>
                                            <option value=""> Catawba College</option>
                                            <option value=""> Cazenovia College</option>
                                            <option value=""> Cedar Crest College</option>
                                            <option value=""> Cedarville University</option>
                                            <option value=""> Centenary College</option>
                                            <option value=""> Centenary College of Louisiana</option>
                                            <option value=""> Central Baptist College</option>
                                            <option value=""> Central Bible College</option>
                                            <option value=""> Central Christian College</option>
                                            <option value=""> Central College</option>
                                            <option value=""> Central Methodist University</option>
                                            <option value=""> Central Penn College</option>
                                            <option value=""> Central State University</option>
                                            <option value=""> Central Washington University</option>
                                            <option value=""> Centre College</option>
                                            <option value=""> Chadron State College</option>
                                            <option value=""> Chamberlain College of Nursing</option>
                                            <option value=""> Chaminade University of Honolulu</option>
                                            <option value=""> Champlain College</option>
                                            <option value=""> Chancellor University</option>
                                            <option value=""> Chapman University</option>
                                            <option value=""> Charles R. Drew University of Medicine and Science
                                            <option>
                                            <option value=""> Charter Oak State College</option>
                                            <option value=""> Chatham University</option>
                                            <option value=""> Chestnut Hill College</option>
                                            <option value=""> Cheyney University of Pennsylvania</option>
                                            <option value=""> Chicago State University</option>
                                            <option value=""> Chipola College</option>
                                            <option value=""> Chowan University</option>
                                            <option value=""> Christendom College</option>
                                            <option value=""> Baylor University</option>
                                            <option value=""> Central Connecticut State University</option>
                                            <option value=""> Central Michigan University</option>
                                            <option value=""> Charleston Southern University</option>
                                            <option value=""> California State University - Sacramento</option>
                                            <option value=""> California State University - Fresno</option>
                                            <option value=""> Campbell University</option>
                                            <option value=""> Christopher Newport University</option>
                                            <option value=""> Cincinnati Christian University</option>
                                            <option value=""> Cincinnati College of Mortuary Science</option>
                                            <option value=""> City University of Seattle</option>
                                            <option value=""> Claflin University</option>
                                            <option value=""> Claremont McKenna College</option>
                                            <option value=""> Clarion University of Pennsylvania</option>
                                            <option value=""> Clark Atlanta University</option>
                                            <option value=""> Clark University</option>
                                            <option value=""> Clarke University</option>
                                            <option value=""> Clarkson College</option>
                                            <option value=""> Clarkson University</option>
                                            <option value=""> Clayton State University</option>
                                            <option value=""> Clear Creek Baptist Bible College</option>
                                            <option value=""> Clearwater Christian College</option>
                                            <option value=""> Cleary University</option>
                                            <option value=""> College of William and Mary</option>
                                            <option value=""> Cleveland Chiropractic College</option>
                                            <option value=""> Cleveland Institute of Art</option>
                                            <option value=""> Cleveland Institute of Music</option>
                                            <option value=""> Cleveland State University</option>
                                            <option value=""> Coe College</option>
                                            <option value=""> Cogswell Polytechnical College</option>
                                            <option value=""> Coker College</option>
                                            <option value=""> Colby College</option>
                                            <option value=""> Colby-Sawyer College</option>
                                            <option value=""> College at Brockport - SUNY</option>
                                            <option value=""> College for Creative Studies</option>
                                            <option value=""> College of Charleston</option>
                                            <option value=""> College of Idaho</option>
                                            <option value=""> College of Mount St. Joseph</option>
                                            <option value=""> College of Mount St. Vincent</option>
                                            <option value=""> College of New Jersey</option>
                                            <option value=""> College of New Rochelle</option>
                                            <option value=""> College of Our Lady of the Elms</option>
                                            <option value=""> College of Saints John Fisher &amp; Thomas More</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2">Degree*</label>
                                    <div class="col-sm-10">
                                        <select class="select2">
                                            <option value="">Select a Degree</option>
                                            <option value="1">High School</option>
                                            <option value="2">Associate's Degree</option>
                                            <option value="3">Bachelor's Degree</option>
                                            <option value="1">Master's Degree</option>
                                            <option value="2">Master of Busniess Administration (M.B.A.)</option>
                                            <option value="3">Juris Doctor (J.D.)</option>
                                            <option value="1">Doctor of Medicine (M.D.)</option>
                                            <option value="2">Doctor of Philosophy (Ph.D.)</option>
                                            <option value="3">Engineer's Degree</option>
                                            <option value="1">Other</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2">School*</label>
                                    <div class="col-sm-10">
                                        <select class="select2">
                                            <option value="">Select a Discipline</option>
                                            <option value="">African Studies</option>
                                            <option value="">Agriculture</option>
                                            <option value="">Anthropology</option>
                                            <option value="">Applied Health Services</option>
                                            <option value="">Architecture</option>
                                            <option value="">Art</option>
                                            <option value="">Asian Studies</option>
                                            <option value="">Biology</option>
                                            <option value="">Business</option>
                                            <option value="">Business Administration</option>
                                            <option value="">Chemistry</option>
                                            <option value="">Classical Languages</option>
                                            <option value="">Communications &amp; Film</option>
                                            <option value="">Computer Science</option>
                                            <option value="">Dentistry</option>
                                            <option value="">Developing Nations</option>
                                            <option value="">Discipline Unknown</option>
                                            <option value="">Earth Sciences</option>
                                            <option value="">Economics</option>
                                            <option value="">Education</option>
                                            <option value="">Electronics</option>
                                            <option value="">Engineering</option>
                                            <option value="">English Studies</option>
                                            <option value="">Environmental Studies</option>
                                            <option value="">European Studies</option>
                                            <option value="">Fashion</option>
                                            <option value="">Finance</option>
                                            <option value="">Fine Arts</option>
                                            <option value="">General Studies</option>
                                            <option value="">Health Services</option>
                                            <option value="">History</option>
                                            <option value="">Human Resources Management</option>
                                            <option value="">Humanities</option>
                                            <option value="">Industrial Arts &amp; Carpentry</option>
                                            <option value="">Information Systems</option>
                                            <option value="">International Relations</option>
                                            <option value="">Journalism</option>
                                            <option value="">Languages</option>
                                            <option value="">Latin American Studies</option>
                                            <option value="">Law</option>
                                            <option value="">Linguistics</option>
                                            <option value="">Manufacturing &amp; Mechanics</option>
                                            <option value="">Mathematics</option>
                                            <option value="">Medicine</option>
                                            <option value="">Middle Eastern Studies</option>
                                            <option value="">Naval Science</option>
                                            <option value="">North American Studies</option>
                                            <option value="">Nuclear Technics</option>
                                            <option value="">Operations Research &amp; Strategy</option>
                                            <option value="">Organizational Theory</option>
                                            <option value="">Philosophy</option>
                                            <option value="">Physical Education</option>
                                            <option value="">Physical Sciences</option>
                                            <option value="">Physics</option>
                                            <option value="">Political Science</option>
                                            <option value="">Psychology</option>
                                            <option value="">Public Policy</option>
                                            <option value="">Public Service</option>
                                            <option value="">Religious Studies</option>
                                            <option value="">Russian &amp; Soviet Studies</option>
                                            <option value="">Scandinavian Studies</option>
                                            <option value="">Science</option>
                                            <option value="">Slavic Studies</option>
                                            <option value="">Social Science</option>
                                            <option value="">Social Sciences</option>
                                            <option value="">Sociology</option>
                                            <option value="">Speech</option>
                                            <option value="">Statistics &amp; Decision Theory</option>
                                            <option value="">Urban Studies</option>
                                            <option value="">Veterinary Medicine</option>
                                            <option value="">Other</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Enter Date (year*)</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="YYYY">
                                    </div>
                                </div>
                            </div>
                            <a class="addanotheredu d-none">
                                + Add another education
                            </a>
                            <hr class="pt-1">
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">LinkedIn Profile</label>
                                <div class="col-sm-12">
                                    <input type="text" name="linkedin_profile" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-4 col-form-label">Website</label>
                                <div class="col-sm-12">
                                    <input type="text" name='website' class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-12 col-form-label">Do you currently have legal US work
                                    authorization?*</label>
                                <div class="col-sm-10">
                                    <select name="work_authorization" class="select-us-work">
                                        <option value="" disabled selected>--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-12 col-form-label">Will you, now or in the future, require the
                                    support
                                    of Motorvero to maintain that authorization?*</label>
                                <div class="col-sm-10">
                                    <select name="maintain_authorization" class="select-us-work">
                                        <option value="" disabled selected>--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="pt-1">
                        <h6>U.S. Voluntary Demographic Questions</h6>
                        <p>
                            Here at Motorvero, we are serious about our dedication to building a diverse workplace, where
                            our employees can bring their best selves to work in order to learn, thrive, and do great
                            things together. In recent years, we’ve doubled down on our commitments to ensuring we are a
                            values-driven culture supported by strong individuals and leaders. This commitment extends
                            to hiring, where we have set high standards for ourselves to run a positive and inclusive
                            process.</p>
                        <p>
                            To help us recruit and hire in a way that is respectful of all candidates, we invite you to
                            anonymously self-identify about gender, sexual orientation, race/ethnicity, veteran status,
                            and disabilities.
                            <u> Any information provided is completely voluntary, anonymous, and analyzed in aggregate
                                by a small group on our People & Talent team.</u>
                        </p>
                        <p>
                            If you prefer not to answer, that’s fine. However, we hope that you will choose to answer so
                            we can gather as much data as possible, and use it to continue making Motorvero a vibrant,
                            diverse, and special place to work.
                        </p>
                        <p>
                            The legal stuff: We’re committed to providing equal opportunity in employment on the basis
                            of individual merit and personal qualifications to all employees and applicants for
                            employment, regardless of race, color, religion, religious creed, ethnicity, national
                            origin, ancestry, citizenship, sex (including pregnancy, childbirth, breastfeeding, or
                            related medical conditions), sexual orientation, gender, gender identity, gender expression,
                            age, physical or mental disability (handicap), medical condition, protected medical leaves,
                            genetic information, military or covered-veteran status, marital status, height, weight,
                            certain criminal records, or any other classification protected by applicable federal, state
                            or local law.
                        </p>
                        <div class="mb-3 row">
                            <h6>Gender Identity *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='gender[]' value="Man" id="man">
                                    <label class="col-sm-10 col-form-label" for="man">Man</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='gender[]' value="Women" id="woman">
                                    <label class="col-sm-10 col-form-label" for="woman">Woman</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='gender[]' value="Third Gender" id="third-gender">
                                    <label class="col-sm-10 col-form-label" for="third-gender">Non-binary/Third Gender
                                        (including Agender, Bigender, Genderqueer, Genderfluid, and Two Spirit)</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='gender[]' value="I don't wish to
                                        answer" id="no-answer">
                                    <label class="col-sm-10 col-form-label" for="no-answer">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <h6>Transgender Identity *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='transgender_identify[]' value="I identify as
                                        transgender" id="transgender">
                                    <label class="col-sm-10 col-form-label" for="transgender">I identify as
                                        transgender</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='transgender_identify[]' value="I do not identify as
                                        transgender" id="not-transgender">
                                    <label class="col-sm-10 col-form-label" for="not-transgender">I do not identify as
                                        transgender</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='transgender_identify[]' value="I don't wish to answer"
                                           id="not-answer-transgender">
                                    <label class="col-sm-10 col-form-label" for="not-answer-transgender">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <h6>LGBTQIA+ Identity *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='lgbtqia_identify[]' value="I identify as LGBTQIA+"
                                           id="lgbtqia">
                                    <label class="col-sm-10 col-form-label" for="lgbtqia">I identify as LGBTQIA+</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='lgbtqia_identify[]' value="I do not identify as
                                        LGBTQIA+" id="not-lgbtqia">
                                    <label class="col-sm-10 col-form-label" for="not-lgbtqia">I do not identify as
                                        LGBTQIA+</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='lgbtqia_identify[]' value="I don't wish to
                                        answer" id="not-answer-lgbtqia">
                                    <label class="col-sm-10 col-form-label" for="not-answer-lgbtqia">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <h6>Race/Ethnicity (please mark all that apply) *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="African American/Black"
                                           id="african">
                                    <label class="col-sm-10 col-form-label" for="african">African American/Black</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Caribbean" id="caribbean">
                                    <label class="col-sm-10 col-form-label" for="caribbean">Caribbean</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="East Asian" id="east-asian">
                                    <label class="col-sm-10 col-form-label" for="east-asian">East Asian (including
                                        Chinese,
                                        Japanese, Korean, Mongolian, Tibetan, and Taiwanese)</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Latinx" id="latinx">
                                    <label class="col-sm-10 col-form-label" for="latinx">Latinx</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Middle Eastern"
                                           id="middle-eastern">
                                    <label class="col-sm-10 col-form-label" for="middle-eastern">Middle Eastern</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Native American"
                                           id="native-american">
                                    <label class="col-sm-10 col-form-label" for="native-american">Native
                                        American/Alaskan
                                        Native</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Pacific Islander"
                                           id="pacific">
                                    <label class="col-sm-10 col-form-label" for="pacific">Pacific Islander</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="South Asian" id="south-asian">
                                    <label class="col-sm-10 col-form-label" for="south-asian">South Asian (including
                                        Bangladeshi, Bhutanese, Indian, Nepali, Pakistani, and Sri Lankan)</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="Southeast Asian"
                                           id="southeast-asian">
                                    <label class="col-sm-10 col-form-label" for="southeast-asian">Southeast Asian
                                        (including
                                        Burmese, Cambodian, Filipino, Hmong, Indonesian, Laotian, Malaysian, Mien,
                                        Singaporean, Thai, and Vietnamese)</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="White" id="white">
                                    <label class="col-sm-10 col-form-label" for="white">White
                                    </label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='race_ethnicity[]' value="I don't wish to
                                        answer" id="race-dont-wish">
                                    <label class="col-sm-10 col-form-label" for="race-dont-wish">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <h6>Veteran Status *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='veteran_status[]' value="I am a veteran or active
                                        military" id="veteran">
                                    <label class="col-sm-10 col-form-label" for="veteran">I am a veteran or active
                                        military</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='veteran_status[]'
                                           value="I am not a veteran or active military" id="not-veteran">
                                    <label class="col-sm-10 col-form-label" for="not-veteran">I am not a veteran or
                                        active
                                        military</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='veteran_status[]' value="I don't wish to
                                        answer" id="not-answer-veteran">
                                    <label class="col-sm-10 col-form-label" for="not-answer-veteran">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <h6>I have a disability (physical or non-physical) *</h6>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name='disability[]' value="Yes" id="yes">
                                    <label class="col-sm-10 col-form-label" for="yes">Yes</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='disability[]' value="No" id="no">
                                    <label class="col-sm-10 col-form-label" for="no">No</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name='disability[]' value="I don't wish to
                                        answer" id="disability">
                                    <label class="col-sm-10 col-form-label" for="disability">I don't wish to
                                        answer</label>
                                </div>
                            </div>
                        </div>
                        <hr class="pt-1">
                        <div class="submit-application">
                            <button class="btn btn-primary">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });

        $(document).ready(function () {

            $('.addanotheredu').on('click', function () {
                console.log("jjj");
                $('.educationsec').append(`
        <hr>
        <div class="mb-3 row">
                                <label class="col-sm-2">School*</label>
                                <div class="col-sm-10">
                                    <select class="select2">
                                        <option value="">Select a School</option>
                                        <option value=""> Abraham Baldwin Agricultural College</option>
                                        <option value=""> Academy of Art University</option>
                                        <option value=""> Acadia University</option>
                                        <option value=""> Adams State University</option>
                                        <option value=""> Adelphi University</option>
                                        <option value=""> Adrian College</option>
                                        <option value=""> Adventist University of Health Sciences</option>
                                        <option value=""> Agnes Scott College</option>
                                        <option value=""> AIB College of Business</option>
                                        <option value=""> Alaska Pacific University</option>
                                        <option value=""> Albany College of Pharmacy and Health Sciences</option>
                                        <option value=""> Albany State University</option>
                                        <option value=""> Albertus Magnus College</option>
                                        <option value=""> Albion College</option>
                                        <option value=""> Albright College</option>
                                        <option value=""> Alderson Broaddus University</option>
                                        <option value=""> Alfred University</option>
                                        <option value=""> Alice Lloyd College</option>
                                        <option value=""> Allegheny College</option>
                                        <option value=""> Allen College</option>
                                        <option value=""> Allen University</option>
                                        <option value=""> Alliant International University</option>
                                        <option value=""> Alma College</option>
                                        <option value=""> Alvernia University</option>
                                        <option value=""> Alverno College</option>
                                        <option value=""> Amberton University</option>
                                        <option value=""> American Academy of Art</option>
                                        <option value=""> American Indian College of the Assemblies of God</option>
                                        <option value=""> American InterContinental University</option>
                                        <option value=""> American International College</option>
                                        <option value=""> American Jewish University</option>
                                        <option value=""> American Public University System</option>
                                        <option value=""> American University</option>
                                        <option value=""> American University in Bulgaria</option>
                                        <option value=""> American University in Cairo</option>
                                        <option value=""> American University of Beirut</option>
                                        <option value=""> American University of Paris</option>
                                        <option value=""> American University of Puerto Rico</option>
                                        <option value=""> Amherst College</option>
                                        <option value=""> Amridge University</option>
                                        <option value=""> Anderson University</option>
                                        <option value=""> Andrews University</option>
                                        <option value=""> Angelo State University</option>
                                        <option value=""> Anna Maria College</option>
                                        <option value=""> Antioch University</option>
                                        <option value=""> Appalachian Bible College</option>
                                        <option value=""> Aquinas College</option>
                                        <option value=""> Arcadia University</option>
                                        <option value=""> Argosy University</option>
                                        <option value=""> Arizona Christian University</option>
                                        <option value=""> Arizona State University - West</option>
                                        <option value=""> Arkansas Baptist College</option>
                                        <option value=""> Arkansas Tech University</option>
                                        <option value=""> Armstrong Atlantic State University</option>
                                        <option value=""> Art Academy of Cincinnati</option>
                                        <option value=""> Art Center College of Design</option>
                                        <option value=""> Art Institute of Atlanta</option>
                                        <option value=""> Art Institute of Colorado</option>
                                        <option value=""> Art Institute of Houston</option>
                                        <option value=""> Art Institute of Pittsburgh</option>
                                        <option value=""> Art Institute of Portland</option>
                                        <option value=""> Art Institute of Seattle</option>
                                        <option value=""> Asbury University</option>
                                        <option value=""> Ashford University</option>
                                        <option value=""> Ashland University</option>
                                        <option value=""> Assumption College</option>
                                        <option value=""> Athens State University</option>
                                        <option value=""> Auburn University - Montgomery</option>
                                        <option value=""> Augsburg College</option>
                                        <option value=""> Augustana College</option>
                                        <option value=""> Aurora University</option>
                                        <option value=""> Austin College</option>
                                        <option value=""> Alcorn State University</option>
                                        <option value=""> Ave Maria University</option>
                                        <option value=""> Averett University</option>
                                        <option value=""> Avila University</option>
                                        <option value=""> Azusa Pacific University</option>
                                        <option value=""> Babson College</option>
                                        <option value=""> Bacone College</option>
                                        <option value=""> Baker College of Flint</option>
                                        <option value=""> Baker University</option>
                                        <option value=""> Baldwin Wallace University</option>
                                        <option value=""> Christian Brothers University</option>
                                        <option value=""> Abilene Christian University</option>
                                        <option value=""> Arizona State University</option>
                                        <option value=""> Auburn University</option>
                                        <option value=""> Alabama A&amp;M University</option>
                                        <option value=""> Alabama State University</option>
                                        <option value=""> Arkansas State University</option>
                                        <option value=""> Baptist Bible College</option>
                                        <option value=""> Baptist Bible College and Seminary</option>
                                        <option value=""> Baptist College of Florida</option>
                                        <option value=""> Baptist Memorial College of Health Sciences</option>
                                        <option value=""> Baptist Missionary Association Theological Seminary</option>
                                        <option value=""> Bard College</option>
                                        <option value=""> Bard College at Simon's Rock</option>
                                        <option value=""> Barnard College</option>
                                        <option value=""> Barry University</option>
                                        <option value=""> Barton College</option>
                                        <option value=""> Bastyr University</option>
                                        <option value=""> Bates College</option>
                                        <option value=""> Bauder College</option>
                                        <option value=""> Bay Path College</option>
                                        <option value=""> Bay State College</option>
                                        <option value=""> Bayamon Central University</option>
                                        <option value=""> Beacon College</option>
                                        <option value=""> Becker College</option>
                                        <option value=""> Belhaven University</option>
                                        <option value=""> Bellarmine University</option>
                                        <option value=""> Bellevue College</option>
                                        <option value=""> Bellevue University</option>
                                        <option value=""> Bellin College</option>
                                        <option value=""> Belmont Abbey College</option>
                                        <option value=""> Belmont University</option>
                                        <option value=""> Beloit College</option>
                                        <option value=""> Bemidji State University</option>
                                        <option value=""> Benedict College</option>
                                        <option value=""> Benedictine College</option>
                                        <option value=""> Benedictine University</option>
                                        <option value=""> Benjamin Franklin Institute of Technology</option>
                                        <option value=""> Bennett College</option>
                                        <option value=""> Bennington College</option>
                                        <option value=""> Bentley University</option>
                                        <option value=""> Berea College</option>
                                        <option value=""> Berkeley College</option>
                                        <option value=""> Berklee College of Music</option>
                                        <option value=""> Berry College</option>
                                        <option value=""> Bethany College</option>
                                        <option value=""> Bethany Lutheran College</option>
                                        <option value=""> Bethel College</option>
                                        <option value=""> Bethel University</option>
                                        <option value=""> BI Norwegian Business School</option>
                                        <option value=""> Binghamton University - SUNY</option>
                                        <option value=""> Biola University</option>
                                        <option value=""> Birmingham-Southern College</option>
                                        <option value=""> Bismarck State College</option>
                                        <option value=""> Black Hills State University</option>
                                        <option value=""> Blackburn College</option>
                                        <option value=""> Blessing-Rieman College of Nursing</option>
                                        <option value=""> Bloomfield College</option>
                                        <option value=""> Bloomsburg University of Pennsylvania</option>
                                        <option value=""> Blue Mountain College</option>
                                        <option value=""> Bluefield College</option>
                                        <option value=""> Bluefield State College</option>
                                        <option value=""> Bluffton University</option>
                                        <option value=""> Boricua College</option>
                                        <option value=""> Boston Architectural College</option>
                                        <option value=""> Boston Conservatory</option>
                                        <option value=""> Boston University</option>
                                        <option value=""> Bowdoin College</option>
                                        <option value=""> Bowie State University</option>
                                        <option value=""> Bradley University</option>
                                        <option value=""> Brandeis University</option>
                                        <option value=""> Brandman University</option>
                                        <option value=""> Brazosport College</option>
                                        <option value=""> Brenau University</option>
                                        <option value=""> Brescia University</option>
                                        <option value=""> Brevard College</option>
                                        <option value=""> Brewton-Parker College</option>
                                        <option value=""> Briar Cliff University</option>
                                        <option value=""> Briarcliffe College</option>
                                        <option value=""> Bridgewater College</option>
                                        <option value=""> Bridgewater State University</option>
                                        <option value=""> Brigham Young University - Hawaii</option>
                                        <option value=""> Brigham Young University - Idaho</option>
                                        <option value=""> Brock University</option>
                                        <option value=""> Bryan College</option>
                                        <option value=""> Bryn Athyn College of the New Church</option>
                                        <option value=""> Bryn Mawr College</option>
                                        <option value=""> Boston College</option>
                                        <option value=""> Buena Vista University</option>
                                        <option value=""> Burlington College</option>
                                        <option value=""> Bowling Green State University</option>
                                        <option value=""> Brown University</option>
                                        <option value=""> Appalachian State University</option>
                                        <option value=""> Brigham Young University - Provo</option>
                                        <option value=""> Boise State University</option>
                                        <option value=""> Bethune-Cookman University</option>
                                        <option value=""> Bryant University</option>
                                        <option value=""> Cabarrus College of Health Sciences</option>
                                        <option value=""> Cabrini College</option>
                                        <option value=""> Cairn University</option>
                                        <option value=""> Caldwell College</option>
                                        <option value=""> California Baptist University</option>
                                        <option value=""> California College of the Arts</option>
                                        <option value=""> California Institute of Integral Studies</option>
                                        <option value=""> California Institute of Technology</option>
                                        <option value=""> California Institute of the Arts</option>
                                        <option value=""> California Lutheran University</option>
                                        <option value=""> California Maritime Academy</option>
                                        <option value=""> California State Polytechnic University - Pomona</option>
                                        <option value=""> California State University - Bakersfield</option>
                                        <option value=""> California State University - Channel Islands</option>
                                        <option value=""> California State University - Chico</option>
                                        <option value=""> California State University - Dominguez Hills</option>
                                        <option value=""> California State University - East Bay</option>
                                        <option value=""> California State University - Fullerton</option>
                                        <option value=""> California State University - Los Angeles</option>
                                        <option value=""> California State University - Monterey Bay</option>
                                        <option value=""> California State University - Northridge</option>
                                        <option value=""> California State University - San Bernardino</option>
                                        <option value=""> California State University - San Marcos</option>
                                        <option value=""> California State University - Stanislaus</option>
                                        <option value=""> California University of Pennsylvania</option>
                                        <option value=""> Calumet College of St. Joseph</option>
                                        <option value=""> Calvary Bible College and Theological Seminary</option>
                                        <option value=""> Cambridge College</option>
                                        <option value=""> Cameron University</option>
                                        <option value=""> Campbellsville University</option>
                                        <option value=""> Canisius College</option>
                                        <option value=""> Capella University</option>
                                        <option value=""> Capital University</option>
                                        <option value=""> Capitol College</option>
                                        <option value=""> Cardinal Stritch University</option>
                                        <option value=""> Caribbean University</option>
                                        <option value=""> Carleton College</option>
                                        <option value=""> Carleton University</option>
                                        <option value=""> Carlos Albizu University</option>
                                        <option value=""> Carlow University</option>
                                        <option value=""> Carnegie Mellon University</option>
                                        <option value=""> Carroll College</option>
                                        <option value=""> Carroll University</option>
                                        <option value=""> Carson-Newman University</option>
                                        <option value=""> Carthage College</option>
                                        <option value=""> Case Western Reserve University</option>
                                        <option value=""> Castleton State College</option>
                                        <option value=""> Catawba College</option>
                                        <option value=""> Cazenovia College</option>
                                        <option value=""> Cedar Crest College</option>
                                        <option value=""> Cedarville University</option>
                                        <option value=""> Centenary College</option>
                                        <option value=""> Centenary College of Louisiana</option>
                                        <option value=""> Central Baptist College</option>
                                        <option value=""> Central Bible College</option>
                                        <option value=""> Central Christian College</option>
                                        <option value=""> Central College</option>
                                        <option value=""> Central Methodist University</option>
                                        <option value=""> Central Penn College</option>
                                        <option value=""> Central State University</option>
                                        <option value=""> Central Washington University</option>
                                        <option value=""> Centre College</option>
                                        <option value=""> Chadron State College</option>
                                        <option value=""> Chamberlain College of Nursing</option>
                                        <option value=""> Chaminade University of Honolulu</option>
                                        <option value=""> Champlain College</option>
                                        <option value=""> Chancellor University</option>
                                        <option value=""> Chapman University</option>
                                        <option value=""> Charles R. Drew University of Medicine and Science
                                        <option>
                                        <option value=""> Charter Oak State College</option>
                                        <option value=""> Chatham University</option>
                                        <option value=""> Chestnut Hill College</option>
                                        <option value=""> Cheyney University of Pennsylvania</option>
                                        <option value=""> Chicago State University</option>
                                        <option value=""> Chipola College</option>
                                        <option value=""> Chowan University</option>
                                        <option value=""> Christendom College</option>
                                        <option value=""> Baylor University</option>
                                        <option value=""> Central Connecticut State University</option>
                                        <option value=""> Central Michigan University</option>
                                        <option value=""> Charleston Southern University</option>
                                        <option value=""> California State University - Sacramento</option>
                                        <option value=""> California State University - Fresno</option>
                                        <option value=""> Campbell University</option>
                                        <option value=""> Christopher Newport University</option>
                                        <option value=""> Cincinnati Christian University</option>
                                        <option value=""> Cincinnati College of Mortuary Science</option>
                                        <option value=""> City University of Seattle</option>
                                        <option value=""> Claflin University</option>
                                        <option value=""> Claremont McKenna College</option>
                                        <option value=""> Clarion University of Pennsylvania</option>
                                        <option value=""> Clark Atlanta University</option>
                                        <option value=""> Clark University</option>
                                        <option value=""> Clarke University</option>
                                        <option value=""> Clarkson College</option>
                                        <option value=""> Clarkson University</option>
                                        <option value=""> Clayton State University</option>
                                        <option value=""> Clear Creek Baptist Bible College</option>
                                        <option value=""> Clearwater Christian College</option>
                                        <option value=""> Cleary University</option>
                                        <option value=""> College of William and Mary</option>
                                        <option value=""> Cleveland Chiropractic College</option>
                                        <option value=""> Cleveland Institute of Art</option>
                                        <option value=""> Cleveland Institute of Music</option>
                                        <option value=""> Cleveland State University</option>
                                        <option value=""> Coe College</option>
                                        <option value=""> Cogswell Polytechnical College</option>
                                        <option value=""> Coker College</option>
                                        <option value=""> Colby College</option>
                                        <option value=""> Colby-Sawyer College</option>
                                        <option value=""> College at Brockport - SUNY</option>
                                        <option value=""> College for Creative Studies</option>
                                        <option value=""> College of Charleston</option>
                                        <option value=""> College of Idaho</option>
                                        <option value=""> College of Mount St. Joseph</option>
                                        <option value=""> College of Mount St. Vincent</option>
                                        <option value=""> College of New Jersey</option>
                                        <option value=""> College of New Rochelle</option>
                                        <option value=""> College of Our Lady of the Elms</option>
                                        <option value=""> College of Saints John Fisher &amp; Thomas More</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2">Degree*</label>
                                <div class="col-sm-10">
                                    <select class="select2">
                                        <option value="">Select a Degree</option>
                                        <option value="1">High School</option>
                                        <option value="2">Associate's Degree</option>
                                        <option value="3">Bachelor's Degree</option>
                                        <option value="1">Master's Degree</option>
                                        <option value="2">Master of Busniess Administration (M.B.A.)</option>
                                        <option value="3">Juris Doctor (J.D.)</option>
                                        <option value="1">Doctor of Medicine (M.D.)</option>
                                        <option value="2">Doctor of Philosophy (Ph.D.)</option>
                                        <option value="3">Engineer's Degree</option>
                                        <option value="1">Other</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2">School*</label>
                                <div class="col-sm-10">
                                    <select class="select2">
                                        <option value="">Select a Discipline</option>
                                        <option value="">African Studies</option>
                                        <option value="">Agriculture</option>
                                        <option value="">Anthropology</option>
                                        <option value="">Applied Health Services</option>
                                        <option value="">Architecture</option>
                                        <option value="">Art</option>
                                        <option value="">Asian Studies</option>
                                        <option value="">Biology</option>
                                        <option value="">Business</option>
                                        <option value="">Business Administration</option>
                                        <option value="">Chemistry</option>
                                        <option value="">Classical Languages</option>
                                        <option value="">Communications &amp; Film</option>
                                        <option value="">Computer Science</option>
                                        <option value="">Dentistry</option>
                                        <option value="">Developing Nations</option>
                                        <option value="">Discipline Unknown</option>
                                        <option value="">Earth Sciences</option>
                                        <option value="">Economics</option>
                                        <option value="">Education</option>
                                        <option value="">Electronics</option>
                                        <option value="">Engineering</option>
                                        <option value="">English Studies</option>
                                        <option value="">Environmental Studies</option>
                                        <option value="">European Studies</option>
                                        <option value="">Fashion</option>
                                        <option value="">Finance</option>
                                        <option value="">Fine Arts</option>
                                        <option value="">General Studies</option>
                                        <option value="">Health Services</option>
                                        <option value="">History</option>
                                        <option value="">Human Resources Management</option>
                                        <option value="">Humanities</option>
                                        <option value="">Industrial Arts &amp; Carpentry</option>
                                        <option value="">Information Systems</option>
                                        <option value="">International Relations</option>
                                        <option value="">Journalism</option>
                                        <option value="">Languages</option>
                                        <option value="">Latin American Studies</option>
                                        <option value="">Law</option>
                                        <option value="">Linguistics</option>
                                        <option value="">Manufacturing &amp; Mechanics</option>
                                        <option value="">Mathematics</option>
                                        <option value="">Medicine</option>
                                        <option value="">Middle Eastern Studies</option>
                                        <option value="">Naval Science</option>
                                        <option value="">North American Studies</option>
                                        <option value="">Nuclear Technics</option>
                                        <option value="">Operations Research &amp; Strategy</option>
                                        <option value="">Organizational Theory</option>
                                        <option value="">Philosophy</option>
                                        <option value="">Physical Education</option>
                                        <option value="">Physical Sciences</option>
                                        <option value="">Physics</option>
                                        <option value="">Political Science</option>
                                        <option value="">Psychology</option>
                                        <option value="">Public Policy</option>
                                        <option value="">Public Service</option>
                                        <option value="">Religious Studies</option>
                                        <option value="">Russian &amp; Soviet Studies</option>
                                        <option value="">Scandinavian Studies</option>
                                        <option value="">Science</option>
                                        <option value="">Slavic Studies</option>
                                        <option value="">Social Science</option>
                                        <option value="">Social Sciences</option>
                                        <option value="">Sociology</option>
                                        <option value="">Speech</option>
                                        <option value="">Statistics &amp; Decision Theory</option>
                                        <option value="">Urban Studies</option>
                                        <option value="">Veterinary Medicine</option>
                                        <option value="">Other</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Enter Date (year*)</label>
                                <div class="col-sm-3">
                                    <input type="text" name="phone" class="form-control" placeholder="YYYY">
                                </div>
                            </div>
        `);
                $('.select2').select2();
            });
        });
        $('.resumeem').on('click', function () {
            $(this).siblings('textarea').css('display', 'block')
        })
        // $('.resumeem').on('click', function(){
        //     $('#resumeem').css('display', 'block')
        // })
        function showFileName(input) {
            var file = input.files[0];
            var span = $(input).siblings('.filename');

            if (file) {
                span.css('display', 'block');
                span.text(file.name);
                $('.typefile').css('display', 'none')
                $('.resumeem').siblings('textarea').css('display', 'none')
                $(input).siblings('label').css('display', 'none');
            } else {
                span.text('');
            }
        }

        $('.resumesec input').on('change', function () {
            showFileName(this);
            $(this).siblings('.removeresume').css('display', 'block');
            $('.typefile').css('display', 'none')
        });

        $('.resumesec .removeresume').on('click', function () {
            var input = $(this).siblings('input');
            var span = $(this).siblings('.filename');

            input.val(''); // Clear the input field
            span.text('');
            span.css('display', 'none');
            $(this).css('display', 'none');
            $(this).siblings('label').css('display', 'flex');
        });
    </script>
@endsection
