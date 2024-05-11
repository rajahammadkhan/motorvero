@extends('frontend.layouts.master')
@section('title')
Privacy
@endsection
@section('content')
<style>
    .content-items {
        font-size: 20px;

    }
</style>
<section class="used-car-top-banner">
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">

            </div>
            <div class="content row">

                <div class="menubar col-md-4 d-flex flex-column">
                    @include('frontend.pages.user-sidebar')
                </div>

                <div class="descriptionbar col mb-5">
                    <h5><strong>Contents:</strong></h5>
                    <ol>
                        <li><a href="#1">Types of Information We Collect</a></li>
                        <li><a href="#2">How we collect.</a>
                            <ol>
                                <li><a href="#2-1">Personal Information You Share With Us</a></li>
                                <li><a href="#2-2">Additional Information Collected When Using Our Site to Buy or Sell A Vehicle</a></li>
                                <li><a href="#2-3">Information Collected When Registering With Motorvero; Subscribing</a></li>
                                <li><a href="#2-4">Automatic Collection of Information</a></li>
                                <li><a href="#2-5">Cookies and other Tracking Technologies</a></li>
                                <li><a href="#2-6">Application And Widgets For Social Media</a></li>
                                <li><a href="#2-7">Information collected from other sources</a></li>
                            </ol>
                        </li>
                        <li><a href="#3">Interest Based Advertising.</a></li>
                        <li><a href="#4">How we Use your Personal Information</a></li>
                        <li><a href="#5">How and With Whom We Share your Personal Information</a></li>
                        <li><a href="#6">Publicly Posted Information</a></li>
                        <li><a href="#7">Your Choices</a></li>
                        <li><a href="#8">Storing And Retaining Your Personal Information</a></li>
                        <li><a href="#9">How We Keep Your Personal Information Secure</a></li>
                        <li><a href="#10">For Calrifornia Residents</a></li>
                        <li><a href="#11">Additional Disclosures For Nevada Residents</a></li>
                        <li><a href="#12">International Transfer</a></li>
                        <li><a href="#13">Children</a></li>
                        <li><a href="#14">Changes to our Privacy Policy</a></li>
                    </ol>




                </div>
                <div class="col-12">
                    <h3><strong>
                            Motorvero.com Privacy Policy
                        </strong></h3>

                    <br>
                    <br>
                    <p>
                        <strong>Motorvero, Inc.</strong> (“we, us, our”) is providing this “Privacy Policy”
                        because we believe in being transparent with respect to the
                        information that we collect and use. This Privacy Policy governs
                        our collection, use, sale and disclosure of information that is
                        reasonably capable of being linked to an individual user (“you”),
                        such as name, address, telephone number, and/or email address
                        (“personal information”) collected through the Motorvero.com website,
                        mobile and other applications owned and operated by us (“site”).
                        Please read this Privacy Policy carefully before providing us
                        with any personal information. By using the site, you consent
                        to the collection, use, sale and disclosure of your personal
                        information in the manner described below. This Privacy Policy
                        is in accordance with applicable law in place for United States
                        of America. Please consult our site for privacy policies that
                        may apply to your region.
                    </p>
                    <br>
                    <br>
                    <!-- <h5><strong>This site is not intended for use by individuals under the age of 18</strong></h5>
                    <br>
                    <h5><strong>Last Updated: Effective as of April 27, 2020</strong></h5> -->
                    <br>

                   
                    <div id="1">
                        <h5><strong>Types Of Information We Collect</strong></h5>
                        <br><br>
                        <p>
                            We collect the following kinds of personal information:
                            <br>
                        <ul>
                            <li>Registration information you provide when you create an account, or subscribe, such as,
                                your first name and last name, country of residence, email address, username, and
                                password;
                            </li>
                            <li>Transaction information you provide when using our services or site, such as your postal
                                address, telephone number, and payment information;
                            </li>
                            <li>Information you provide in public forums on our sites and applications, such as your
                                forum posts, blog comments;
                            </li>
                            <li>Information sent either one-to-one or within a limited group using our message, chat,
                                post, or similar functionality, where we are permitted by applicable law to collect this
                                information;
                            </li>
                            <li>Information we obtain from a third party, such as a site or platform provider, about use
                                of our applications on third-party platforms or devices;
                            </li>
                            <li>Location information, including location information provided by a mobile or other
                                device interacting with our site or applications (including through beacon
                                technologies), or associated with your IP address, where we are permitted by law to
                                process this information;
                            </li>
                            <li>Activity information about your use, and the use by any person(s) you authorize through
                                your account, of our site and applications, such as the content you view or post, how
                                often you use our services, and your preferences; and
                            </li>
                            <li>Usage, viewing, technical, and device data when you visit our sites, use our
                                applications on third-party sites or platforms, or open emails we send, including your
                                browser or device type, unique device identifier, and IP address</li>
                        </ul>

                        </p>
                    </div>
                    {{-- content  part                --}}
                    <br>
                    <br>
                    <div id="2">
                        <h4><strong>How We Collect Information
                            </strong></h4>
                        <br><br>
                        <div id="2-1">
                            <h5><strong>Personal Information You Share With Us</strong></h5>
                            <br>
                            <p>
                                If you request to be contacted by a particular car seller, both we and that seller, as the
                                case may be, may collect personal information provided by you through the text and chat
                                functionalities that we provide and on the contact forms on our site, which may include your
                                name, email address, postal code, and telephone number, so that the seller can contact you
                                to consider a car purchase or request that you submit a dealer review.
                            </p>
                        </div>

                        {{-- end of working            --}}

                        <br>
                        <br>
                        <div id="2-2">
                            <h5><strong>Additional Information Collected When Using Our Site to Buy or Sell A Vehicle</strong></h5>
                            <br>
                            <p>
                                If you are an individual user (and not acting on behalf of a car dealer) and you want to use
                                our services to buy or sell a vehicle, we and/or business partners may collect information
                                provided by you in connection with that transaction, for example to create your vehicle
                                listing, to verify vehicle ownership, to confirm funds availability, to process payment, to
                                populate purchase and sale documents, and to provide user support. We may collect this
                                information in forms on our site, forms on third party sites made available from our site,
                                or from a picture of your ID that you upload. This information may include your name,
                                address, email address, telephone number, driver’s license number, photo, gender, date of
                                birth, the last four digits of your social security number, bank name, and bank account and
                                routing numbers.
                            </p>
                        </div>

                        {{-- end of working            --}}

                        <br>
                        <br>
                        <div id="2-3">
                            <h5><strong>Information Collected When Registering With Motorvero; Subscribing</strong></h5>
                            <br>
                            <p>
                                We may acquire or obtain information from other sources as follows:

                                From third-party sources to update or supplement the information that you provide or that we collect automatically. This includes, for example, vehicle registration information and other information. We collect this information from public databases, private database, data aggregators, analytics vendors, advertising networks, and search information providers).

                                We use this information to help us maintain the accuracy of the information we collect, personalize your experience with the site, target our communications and advertisements so that we can inform you of products and services or other offers that may be of interest to you, provide private purchase and sale transaction services, prevent fraud, and for internal business analysis or other business purposes.
                            </p>
                        </div>

                        {{-- end of working            --}}

                        <br>
                        <br>
                        <div id="2-4">
                            <h5><strong>Automatic Collection of Information</strong></h5>
                            <br>
                            <p>
                                We gather information from your computer or handheld or mobile device when you visit our
                                site. While you can take advantage of some of our site features without registration, we
                                encourage you to register with us to take full advantage of our many personalization options
                                in terms of your privacy and browsing preferences. If you don’t register, we automatically
                                collect your IP address and information regarding your internet service provider or mobile
                                carrier and the type of handheld or mobile device you use.
                            </p>
                        </div>

                        {{-- end of working            --}}

                        <br>
                        <br>
                        <div id="2-5">
                            <h5><strong>Cookies and other Tracking Technologies</strong></h5>
                            <br>
                            <p>
                                We, and other companies with whom we partner, use cookies, web beacons, tags, scripts, local
                                shared objects such as Flash (sometimes called “flash cookies”), and similar technology
                                (“Tracking Technologies”) in connection with the use of our site, third party websites, and
                                mobile applications. Tracking Technologies may have unique identifiers, and reside, among
                                other places, on your computer or mobile device, in emails we send to you, and on our web
                                pages. Tracking Technologies may transmit information about you and your use of the site,
                                such as your browser type, search preferences, IP address, data relating to advertisements
                                that have been displayed to you or that you have clicked on, advertising identifiers
                                (including mobile identifiers), page views and/or clicks, and the date and time of your use.
                                Cookies may be persistent or stored only during an individual session.
                            </p>
                        </div>

                        {{-- end of working            --}}
                        <br>
                        <br>
                        <div id="2-6">
                            <h5><strong>Applications and Widgets for Social Media</strong></h5>
                            <br>
                            <p>
                                On our site, we may display applications or widgets from social media providers that allow interaction or content sharing by their users. These widgets, such as the Facebook® "Share" or "Like" button, are visible to you on the site page that you visit. This may allow the social media networks in which you participate to collect information about you, even when you do not explicitly activate the network's application or widget while on our site. Please visit the applicable social media network's privacy policy to better understand their data collection practices and the choices they make available to you.

                                In addition to social media networks, our site also contains references and links to third party web sites that may offer information of interest. This Privacy Policy does not apply to those web sites, and we recommend reviewing those web sites’ privacy policies individually.
                            </p>
                        </div>

                        {{-- end of working            --}}
                        <br>
                        <br>
                        <div id="2-7">
                            <h5><strong>Information Collected From Other Sources</strong></h5>
                            <br>
                            <p>
                                We may acquire or obtain information from other sources as follows:

                                From third-party sources to update or supplement the information that you provide or that we collect automatically. This includes, for example, vehicle registration information and other information. We collect this information from public databases, private database, data aggregators, analytics vendors, advertising networks, and search information providers).

                                We use this information to help us maintain the accuracy of the information we collect, personalize your experience with the site, target our communications and advertisements so that we can inform you of products and services or other offers that may be of interest to you, provide private purchase and sale transaction services, prevent fraud, and for internal business analysis or other business purposes.
                            </p>
                        </div>

                        {{-- end of working            --}}

                        <br>
                        <br>
                        <div id="3">
                            <h5><strong>Interest Based Advertising</strong></h5>
                            <br>
                            <p>
                                Interest-based advertising, also called "online behavioral" advertising. is customized based on predictions generated over time from your visits across different websites, including our site, devices and mobile applications.

                                These tools allow us to personalize our ads based on your browsing behavior on our site. Unless and until required by applicable law, our site does not recognize browser “do not track” signals. However, several of our partners who utilize these cookies, beacons and tools on our site enable you to opt out of this interest-based advertising.

                                Most of these companies are participants of the Digital Advertising Alliance (“DAA”) and/or the Network Advertising Initiative (“NAI”). To learn more about the targeted ads provided by these companies, and how to opt out of receiving certain targeted ads from them, please visit: (i) for website targeted ads from DAA participants, https://www.aboutads.info/choices; (ii) for app targeted ads from DAA participants, https://www.aboutads.info/appchoices; and (iii) for targeted ads from NAI participants, https://www.networkadvertising.org/choices/. Opting out only means that the selected participants should no longer deliver certain targeted ads to you but does not mean you will no longer receive any targeted content and/or ads (e.g., in connection with the participants’ other customers or from other technology services).

                                You may also limit our use of information collected from or about your mobile device for purposes of serving targeted ads to you by going to your device settings and selecting “Limit Ad Tracking” (for iOS devices) or “Opt out of Interest-Based Ads” (for Android devices).

                                Please note that if you opt out using any of these methods, the opt out will only apply to the specific browser or device from which you opt out. We are not responsible for the effectiveness of, or compliance with, any opt out options or programs, or the accuracy of any other entities’ statements regarding their opt out options or programs.

                                We also partner with Amazon to deliver advertisements. You can opt out of delivery of targeted advertising to you by Amazon here. Please note that even if you opt out, you will continue to receive advertisements, but they will not be tailored to your specific interests.

                                We may also display interest-based ads to you when you are using Facebook and other social media platforms or websites. Please consult our detailed policy on Interest Based Advertising here.
                            </p>
                        </div>

                        {{-- end of working            --}}
                        <br>
                        <br>
                        <div id="4">
                            <h5><strong>How We Use Your Personal Information</strong></h5>
                            <br>
                            <p>
                                We use and process your personal information for a number of business and commercial purposes. These include:

                                sending information to car sellers with your consent to complete transactions;
                                completing your transactions with us;
                                processing and collecting your payments;
                                sending you promotional marketing material about us and our services;
                                customizing, analyzing, adjusting and improving the site;
                                providing you with important administrative information regarding the site, such as changes to this Privacy Policy and our Terms of Use and other policies;
                                preventing fraud and other prohibited or illegal activities;
                                complying with requests of law enforcement or data protection agencies
                                providing you with technical and customer support
                                seeking your opinion or feedback on our services or industry questions
                                facilitating seamless access to all of our applications to which you have subscribed
                                enforcing our legal rights or comply with legal requirements
                                providing improved website and product experience and communications
                                complying with a legal or regulatory obligation.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="5">
                            <h5><strong>How And With Whom We Share Your Personal Information</strong></h5>
                            <br>
                            <p>
                                Affiliates. We may share information about you, including personal information, with our corporate affiliates for specific business purposes.
                                Car Sellers and Manufacturers/Requests. With your express consent, we may share your personal information with car sellers and manufacturers who use that information for purposes of marketing their own products or services to you directly.
                                When you submit your e-mail address and/or phone number to a particular seller through the site, you agree and expressly consent to being contacted by the seller by various means, including by phone at the number provided, text message, email, automatic telephone dialing system and/or an artificial or prerecorded voice.
                                Service Providers. We may provide third-party service providers (such as market research firms, marketing services providers, advertising agencies, and payment processing partners) access to your personal information to perform services on our behalf. We contractually require our service providers to provide protection for personal information and to limit the use of such information solely for the purpose of providing the specified services on our behalf.
                                Other Providers of Products and Services. We may provide other third-party providers of products and services (for example financing providers) access personal information that you voluntarily provide on our site so that such providers can provide products and services to you. We contractually require such providers to provide protection for personal information and to limit the use of such information for the purpose agreed to by you when submitting such personal information on our site. By submitting personal information on our site in connection with receiving products and/or services from these providers, you (i) consent to our transmission of your personal information to such providers, (ii) agree that your personal information will be subject to their privacy policies, and (iii) agree that you should contact them directly for more information about their specific privacy and opt-out policies.
                                Legal Authorities We cooperate with legal authorities and may in some circumstances be required to disclose personal information in response to requests from law enforcement authorities, or in response to a subpoena or other legal process. We also share information about you if we believe we should in order to (i) prevent a violation of the law; (ii) protect or defend our interests and our legal rights or property; (iii) protect the rights, interests, safety and security of users of the site or members of the public; (iv) protect against fraud or for risk management purposes; or (v) comply with prudent legal practice as we may determine, and applicable law or legal process. We also may share your information in connection with a corporate transaction, such as a divestiture, merger, consolidation, or asset sale, and in the unlikely event of bankruptcy.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="6">
                            <h5><strong>Publicly Posted Information.</strong></h5>
                            <br>
                            <p>
                                Your profile on the site will be publicly viewable and identifiable via your screen name. Motorvero will not share your email address with any other members or display it any public manner. Please think carefully before making information public as you are solely responsible for any information you make public. Once you have posted information, you may not be able to edit or delete such information.

                                If you choose to participate in our member-to-member communications programs, you may be contacted by other members, using us as an intermediary. All members will have the option to turn off the member-to-member communication features at any time.

                                Information that you make available to us and others via social media networks, forums, blogs, list serves, chat rooms or similar functionality is public information that we or others may share or use in accordance with the law.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="7">
                            <h5><strong>Your Choices</strong></h5>
                            <br>
                            <p>
                                You may opt-out of any or all future marketing emails from us here or clicking on the unsubscribe link we place at the footer of every email we send that is not in response to an action taken by the user. Please note that you cannot opt-out of non-promotional emails, such as those about your account, transactions, servicing, or Motorvero’ ongoing business relations.

                                You can cancel your registration with us by e-mailing cancel@Motorvero.com. If you cancel your registration, we will remove your information from our active database, but some information may remain in our database and/or archives for our own corporate recordkeeping and as required to comply with law.

                                You can review and update the personal information you have provided through the registration process here.

                                Or contact us with questions or requests regarding this Privacy Policy at:

                                Address:
                                Motorvero, Inc.
                                Two Canal Park
                                Cambridge, MA 02141
                                Attention : Privacy
                                privacy@Motorvero.com

                                With respect to location technologies that we use, you can reset your device Ad Id at any time through your device settings, which is designed to allow you to limit the use of information collected about you. You can also stop all collection of precise location data through by withdrawing your consent through your device settings.

                                For your choices with respect to Interest-Based Advertising, please see that section above.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="8">
                            <h5><strong>Storing and Retaining Your Personal Information</strong></h5>
                            <br>
                            <p>
                                Your personal information is stored on servers in the U.S. Also, some of our service providers may store information in servers hosted in countries different from where you reside. As such, your personal information may be subject to the laws of other countries, where the data protection and other laws may not be as comprehensive as your country of residence.

                                Any personal information that we collect is kept as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required by law or our recordkeeping policies and practices. When we no longer have reason to retain your personal information and as required by our retention policies, it will be destroyed or deidentified in a manner designed to preserve its private and confidential nature, however we may retain inactive archival copies.
                            </p>
                        </div>
                        <br>
                        <br>

                        <div id="9">
                            <h5><strong>Security - Steps we take to protect your personal information</strong></h5>
                            <br>
                            <p>
                                We have implemented administrative, technical, personnel, and physical security measures designed to help protect the personal information stored in our systems against loss, theft and unauthorized use, disclosure or modification. We also employ processes (such as password hashing, login auditing, and idle session termination, as appropriate) to help protect against unauthorized access to your personal information. Technical measures that we have implemented also include use of firewall protection and, in appropriate instances, encryption technology. Although we take reasonable precautions to assess the reliability of such technology, we rely on the statements of the vendors of those products and services as part of its security evaluation. While we have endeavored to create a secure and reliable site for users, the confidentiality of any communication or material transmitted to/from the site, and the security of your personal information, cannot be guaranteed. We urge you to take every precaution to protect your personal information when you are on the Internet.
                            </p>
                        </div>
                        <br><br>
                        <div id="10">
                            <h5><strong>California Consumer Notices</strong></h5>
                            <br>
                            <p>
                                California Civil Code Section 1798.83 entitles California residents to request information concerning whether a business has disclosed certain personal information about you to any third parties for the third parties' direct marketing purposes. We comply with this law by offering you the ability to tell us not to share your personal information with third parties.

                                To make such a request, you must include this section heading as the subject line, and your full name, e-mail address, and postal address in your message and send to:

                                Address:
                                Motorvero, Inc.
                                Two Canal Park
                                Cambridge, MA 02141
                                Attention : Privacy
                                privacy@Motorvero.com
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="11">
                            <h5><strong>Additional Disclosures for Nevada Residents</strong></h5>
                            <br>
                            <p>
                                Nevada law (NRS 603A.340) requires each business to establish a designated request address where Nevada consumers may submit requests directing the business not to sell certain kinds of personal information that the business has collected or will collect about the consumer. A sale under Nevada law is the exchange of personal information for monetary consideration by the business to a third party for the third party to license or sell the personal information to other third parties. If you are a Nevada consumer and wish to submit a request relating to our compliance with Nevada law, please contact us as at privacy @Motorvero.com.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="12">
                            <h5><strong>International Transfer</strong></h5>
                            <br>
                            <p>
                                We are based in the U.S. and the information we collect is governed by U.S. law. If you are accessing the site from outside of the U.S., please be aware that information collected through the site may be transferred to, processed, stored, and used in the U.S. and other jurisdictions. Data protection laws in the U.S. and other jurisdictions may be different from those of your country of residence. Your use of the site or provision of any information therefore constitutes your consent to the transfer to and from, processing, usage, sharing, and storage of information about you in the U.S. and other jurisdictions as set out in this Privacy Policy.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="13">
                            <h5><strong>Children</strong></h5>
                            <br>
                            <p>
                                The site is intended for a general audience and is not directed at children under (13) years of age.

                                We do not knowingly gather personal information (as defined by the U.S. Children’s Privacy Protection Act, or “COPPA”) in a manner not permitted by COPPA. If you are a parent or guardian and you believe we have collected information from your child in a manner not permitted by law, contact us at privacy @Motorvero.com. We will remove the data to the extent required by applicable laws.

                                We do not knowingly “sell” the personal information of minors under 16 years old who are California residents without their affirmative authorization.

                                If you are a California resident under 18 years old and registered to use the site, you can ask us to remove any content or information you have posted on the site. To make a request, email us at the email address set out in “Contact Us” section with “California Under 18 Content Removal Request” in the subject line, and tell us what you want removed. We will make reasonable good faith efforts to remove the post from prospective public view, although we cannot ensure the complete or comprehensive removal of the content and may retain the content as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.
                            </p>
                        </div>
                        <br>
                        <br>
                        <div id="14">
                            <h5><strong>Changes to this Privacy Policy</strong></h5>
                            <br>
                            <p>
                                We may occasionally update this Privacy Policy to reflect changes in our practices. When we post modifications to this Privacy Policy, we will revise the "Last Updated" date at the top of this web page. The modified Privacy Policy will be effective immediately upon posting on the site. Your continued use of the site after the posting of the modified Privacy Policy constitutes your agreement to abide and be bound by it. We encourage you to periodically review this page for the latest information on our privacy practices. If you object to any modification, your sole recourse is to stop using the site.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection