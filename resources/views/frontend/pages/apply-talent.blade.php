@extends('frontend.layouts.master')
@section('title')
    Apply Now
@endsection
@section('content')
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
                    <div class="main-section col-md-12 ">
                        <h2 class="mb-4 text-bold text-dark"><b>Not ready to be Guru just yet? Apply to our Talent
                                Network for updates on new roles and company news.</b></h2>
                        <div>
                            <p>at Motorvero <a href="{{url('job-search')}}">(View all jobs)</a></p>
                            <h6 class="mt-5 text-muted"><b>All Offices</b></h6>
                            <div>
                                <div class="content-intro">
                                    <p><strong>Who we are<br/></strong><span class="normaltextrun">At Motorvero (NASDAQ:
                                        CARG), our mission is to give people the power to reach their destination. We
                                        started as a small team of developers determined to bring trust and transparency
                                        to car shopping. Since then, our history of innovation and go-to-market
                                        acceleration has driven industry-leading growth. In fact, we&rsquo;re the
                                        largest and fastest-growing automotive marketplace, and we&rsquo;ve been
                                        profitable for over 15 years.</span>
                                    </p>
                                    <p><strong>What we do</strong><br/>The market is evolving, and we are too, moving
                                        the entire automotive journey online and guiding our customers through every
                                        step. That includes everything from the sale of an old car to the financing,
                                        purchase, and delivery of a new one. Today, tens of millions of consumers visit
                                        Motorvero.com each month, and ~30,000 dealerships use our products. But they're
                                        not the only ones who love Motorvero&mdash;our employees do, too. We have a
                                        people-first culture that fosters&nbsp;kindness, collaboration, and innovation,
                                        and empowers our Gurus with tools to fuel their career growth. Disrupting a
                                        trillion-dollar industry requires fresh and diverse perspectives. Come join us
                                        for the ride!</p>
                                </div>
                                <p>We are always looking to connect with the best talent, so while our timing may not be
                                    right now we look forward to connecting in the future.&nbsp;</p>
                                <div class="content-conclusion">
                                    <p><strong>Working at Motorvero</strong><br/>We reward our Gurus&rsquo; curiosity and
                                        passion with best-in-class benefits and compensation, including equity for all
                                        employees, both when they start and as they continue to grow with us. Our career
                                        development and corporate giving programs, as well as our employee resource
                                        groups (ERGs) and communities, help people build connections while making an
                                        impact in personally meaningful ways. A flexible hybrid model and robust time
                                        off policies encourage work-life balance and individual well-being. Thoughtful
                                        perks like daily free lunch, a new car discount, meditation and fitness apps,
                                        commuting cost coverage, and more help our people create space for what matters
                                        most in their personal and professional lives.</p>
                                    <p><strong>We welcome all</strong><br/>Motorvero strives to be a place to which
                                        people can bring the ultimate expression of themselves and their
                                        potential&mdash;starting
                                        with our hiring process. We do not discriminate based on race, color, religion,
                                        national origin, age, sex, marital status, ancestry, physical or mental
                                        disability, veteran status, gender identity, or sexual orientation. We foster an
                                        inclusive environment that values people for their skills, experiences, and
                                        unique perspectives. That&rsquo;s why we hope you&rsquo;ll apply even if you
                                        don&rsquo;t
                                        check every box listed in the job description. We want to know what
                                        only&nbsp;<em>you&nbsp;</em>can bring to Motorvero.</p>
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
                        <div class="apply-with-btn py-3">
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
                        <form action="{{url('our-talent')}}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                    <label class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row position-relative">
                                    <label class="col-sm-2 col-form-label">Resume/CV</label>
                                    <div class="col-sm-10 resumesec">
                                        <label for="resumeattach">Attach,</label>
                                        <input name="resume" type="file" id="resumeattach" accept=
                                        "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf">
                                        <span class="filename ps-2 my-auto" data-for="resume"
                                              style="display: none;"></span>
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
                                        <input name="cover_letter" type="file" id="clattach" accept=
                                        "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf">
                                        <span class="filename ps-2 my-auto" data-for="resume"
                                              style="display: none;"></span>
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

                            </div>

                            <hr class="pt-1">
                            <P>Which department are you interested in? *</p>
                            <p>Please let us know which types of roles would be most in line with your career
                                aspirations so
                                that we may let you know of the appropriate opportunities.</p>
                            <div class="applytalent-checkbox">
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="sales" id="sales">
                                    <label class="col-sm-10 col-form-label" for="sales">Sales</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="marketing" id="marketing">
                                    <label class="col-sm-10 col-form-label" for="marketing">Marketing</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="engineering"  id="engineering">
                                    <label class="col-sm-10 col-form-label" for="engineering">Engineering</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="product" id="product">
                                    <label class="col-sm-10 col-form-label" for="product">Product</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="it" id="it">
                                    <label class="col-sm-10 col-form-label" for="it">IT</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="people-and-talent" id="people-and-talent">
                                    <label class="col-sm-10 col-form-label" for="people-and-talent">People and
                                        Talent</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="sales-operation" id="sales-operation">
                                    <label class="col-sm-10 col-form-label" for="sales-operation">Sales
                                        Operation</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" name="department[]" value="analytics"  id="analytics">
                                    <label class="col-sm-10 col-form-label" for="analytics">Analytics</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox"  name="department[]" value="data-engineering"  id="data-engineering">
                                    <label class="col-sm-10 col-form-label" for="data-engineering">Data
                                        Engineering</label>
                                </div>
                            </div>
                            <hr class="pt-1">
                            <div class="submit-application">
                                <button type="submit" class="btn btn-primary">Submit Application</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
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
