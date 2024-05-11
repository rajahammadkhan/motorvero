@extends('frontend.layouts.master')
@section('title')
Interest-Based Ads
@endsection
@section('content')
<style>
    .content-items {
        font-size: 20px;

    }

    a {
        text-decoration: none;
        color: #4179ee;
    }

    a:hover {
        text-decoration: none;
        margin-left: 10px;
        margin-right: -10px;
        transition: margin-left 0.4s, margin-right 0.4s;
    }
</style>
<section class="used-car-top-banner">
</section>
<section class="sec-gsp-form bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">

            </div>
            <div class="row">

                <div class="menubar col-md-4 d-flex flex-column">
                    @include('frontend.pages.user-sidebar')
                </div>

                <div class="descriptionbar col-md-8">
                    <h3><strong>
                            Interest-Based Ads Policy
                        </strong></h3>

                    <br>
                    <br>
                    <p>
                        Interest-Based Ads: motorvero may partner with advertising networks, which may use information collected through a variety of Data Technologies (described in our <a href="{{'privacy'}}">Privacy Policy</a>) to provide customization, auditing, research and reporting for us and other advertisers. We may also act as an advertising network and use information collected through a variety of Data Technologies while you are on our site and elsewhere where we may be acting as a third party. This data collection takes place both on the site and on third-party's websites and mobile applications. This process allows motorvero and third parties to deliver targeted advertising, enhance marketing programs and help track the effectiveness of such efforts. Advertising networks also may use this information for determining or predicting the characteristics and preferences of their respective advertising audiences and measuring the effectiveness of their advertising in accordance with their privacy policies.
                        <br>

                        For more information on how motorvero collects and uses information, please review our <a href="{{'privacy'}}">Privacy Policy</a> or contact us at:
                    </p>

                    <br>
                    <div class="row">

                        <div class="col-md-4">
                            <h5><strong>Address:</strong></h5>
                            <p>
                                2 Canal Park, 4th Floor<br>
                                Cambridge, MA 02141
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5><strong>Tel:</strong></h5>
                            <p>
                                617-354-0068
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5><strong>Email:</strong></h5>
                            <p>
                                <a href="#" type="email">privacy@motorvero.com</a>
                            </p>
                        </div>
                    </div>



                    {{-- <br>--}}
                    {{-- <h5><strong>Last Updated: Effective as of April 27, 2020</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Contents:</strong></h5>--}}
                    {{-- <al>--}}
                    {{-- <li><a href="#">Types of Information We Collect</a></li>--}}
                    {{-- <li><a href="#">How we collect.</a></li>--}}
                    {{-- <li><a href="#">Interest based advertising.</a></li>--}}
                    {{-- <li><a href="#">How we use your personal information</a></li>--}}
                    {{-- <li><a href="#">How and with whom we share your information</a></li>--}}
                    {{-- <li><a href="#">Your choices.</a></li>--}}
                    {{-- <li><a href="#">Storing and retaining your personal information</a></li>--}}
                    {{-- <li><a href="#">How we keep your personal information store</a></li>--}}
                    {{-- <li><a href="#">For california resident</a></li>--}}
                    {{-- <li><a href="#">Additional disclosure for navida resident.</a></li>--}}
                    {{-- <li><a href="#">International transfer</a></li>--}}
                    {{-- <li><a href="#">Children</a></li>--}}
                    {{-- <li><a href="#">changes to our privacy policy</a></li>--}}

                    {{-- </al>--}}
                    {{-- --}}{{-- content  part                --}}
                    {{-- <br>--}}
                    {{-- <br>--}}

                    {{-- <h5><strong>Types Of Information We Collect</strong></h5>--}}
                    {{-- <br><br>--}}
                    {{-- <p>--}}
                    {{-- We collect the following kinds of personal information:--}}
                    {{-- <br>--}}
                    {{-- <ul>--}}
                    {{-- <li>Registration information you provide when you create an account, or subscribe, such as, your first name and last name, country of residence, email address, username, and password;</li>--}}
                    {{-- <li>Transaction information you provide when using our services or site, such as your postal address, telephone number, and payment information;</li>--}}
                    {{-- <li>Information you provide in public forums on our sites and applications, such as your forum posts, blog comments;</li>--}}
                    {{-- <li>Information sent either one-to-one or within a limited group using our message, chat, post, or similar functionality, where we are permitted by applicable law to collect this information;</li>--}}
                    {{-- <li>Information we obtain from a third party, such as a site or platform provider, about use of our applications on third-party platforms or devices;</li>--}}
                    {{-- <li>Location information, including location information provided by a mobile or other device interacting with our site or applications (including through beacon technologies), or associated with your IP address, where we are permitted by law to process this information;</li>--}}
                    {{-- <li>Activity information about your use, and the use by any person(s) you authorize through your account, of our site and applications, such as the content you view or post, how often you use our services, and your preferences; and</li>--}}
                    {{-- <li>Usage, viewing, technical, and device data when you visit our sites, use our applications on third-party sites or platforms, or open emails we send, including your browser or device type, unique device identifier, and IP address/li>--}}
                    {{-- </ul>--}}

                    {{-- </p>--}}

                    {{-- --}}{{-- content  part                --}}
                    {{-- <br>--}}
                    {{-- <br>--}}

                    {{-- <h4><strong>How We Collect Information--}}
                    {{-- </strong></h4>--}}
                    {{-- <br><br>--}}
                    {{-- <h5><strong>Personal Information You Share With Us</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- If you request to be contacted by a particular car seller, both we and that seller, as the case may be, may collect personal information provided by you through the text and chat functionalities that we provide and on the contact forms on our site, which may include your name, email address, postal code, and telephone number, so that the seller can contact you to consider a car purchase or request that you submit a dealer review.--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}

                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Additional Information Collected When Using Our Site to Buy or Sell A Vehicle</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- If you are an individual user (and not acting on behalf of a car dealer) and you want to use our services to buy or sell a vehicle, we and/or business partners may collect information provided by you in connection with that transaction, for example to create your vehicle listing, to verify vehicle ownership, to confirm funds availability, to process payment, to populate purchase and sale documents, and to provide user support. We may collect this information in forms on our site, forms on third party sites made available from our site, or from a picture of your ID that you upload. This information may include your name, address, email address, telephone number, driver’s license number, photo, gender, date of birth, the last four digits of your social security number, bank name, and bank account and routing numbers.--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}

                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Information Collected When Registering with motorvero; Subscribing</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- If you register with us or subscribe to receive specific information or services on our site, in addition to the automatic information collected as described above, we will also collect registration information, such as name, email address, mail address, telephone number, username and password.--}}
                    {{-- Registering with us will give you the ability to personalize your motorvero site experience. The benefits of registering will increase over time as we get to know you better and introduce new features. We encourage you to register so that you can experience everything that motorvero has to offer!--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}

                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Automatic Collection of Information</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- We gather information from your computer or handheld or mobile device when you visit our site. While you can take advantage of some of our site features without registration, we encourage you to register with us to take full advantage of our many personalization options in terms of your privacy and browsing preferences. If you don’t register, we automatically collect your IP address and information regarding your internet service provider or mobile carrier and the type of handheld or mobile device you use.--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}

                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Cookies and other Tracking Technologies</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- We, and other companies with whom we partner, use cookies, web beacons, tags, scripts, local shared objects such as Flash (sometimes called “flash cookies”), and similar technology (“Tracking Technologies”) in connection with the use of our site, third party websites, and mobile applications. Tracking Technologies may have unique identifiers, and reside, among other places, on your computer or mobile device, in emails we send to you, and on our web pages. Tracking Technologies may transmit information about you and your use of the site, such as your browser type, search preferences, IP address, data relating to advertisements that have been displayed to you or that you have clicked on, advertising identifiers (including mobile identifiers), page views and/or clicks, and the date and time of your use. Cookies may be persistent or stored only during an individual session.--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}
                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Applications and Widgets for Social Media</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- On our site, we may display applications or widgets from social media providers that allow interaction or content sharing by their users. These widgets, such as the Facebook® "Share" or "Like" button, are visible to you on the site page that you visit. This may allow the social media networks in which you participate to collect information about you, even when you do not explicitly activate the network's application or widget while on our site. Please visit the applicable social media network's privacy policy to better understand their data collection practices and the choices they make available to you.--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}
                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Information Collected From Other Sources</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- If you register with us or subscribe to receive specific information or services on our site, in addition to the automatic information collected as described above, we will also collect registration information, such as name, email address, mail address, telephone number, username and password.--}}

                    {{-- Registering with us will give you the ability to personalize your motorvero site experience. The benefits of registering will increase over time as we get to know you better and introduce new features. We encourage you to register so that you can experience everything that motorvero has to offer!--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}

                    {{-- <br>--}}
                    {{-- <br>--}}
                    {{-- <h5><strong>Automatic Collection of Information</strong></h5>--}}
                    {{-- <br>--}}
                    {{-- <p>--}}
                    {{-- We gather information from your computer or handheld or mobile device when you visit our site. While you can take advantage of some of our site features without registration, we encourage you to register with us to take full advantage of our many personalization options in terms of your privacy and browsing preferences. If you don’t register, we automatically collect your IP address and information regarding your internet service provider or mobile carrier and the type of handheld or mobile device you use--}}
                    {{-- </p>--}}



                    {{-- --}}{{-- end of working            --}}



                </div>

            </div>
        </div>
    </div>
</section>
@endsection