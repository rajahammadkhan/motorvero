@extends('frontend.layouts.master')
@section('title')
Terms
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
</style>
<section class="used-car-top-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div>
                <p class="heading">Terms Of Use
                </p>
            </div>
        </div>

    </div>
</section>
<section class="sec-gsp-form bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">

            </div>
            <div class="content row">

                <div class="menubar col-md-4 d-flex flex-column">
                    @include('frontend.pages.user-sidebar')
                </div>

                <div class="descriptionbar col-md-8 ">
                    <h3 class="terms-heading">
                        <strong>motorvero.com Terms and Conditions of Use</strong>
                    </h3>

                    <br>
                    <h5><strong>Last Updated: October 2022</strong></h5>
                    <br>
                    <h4><strong>PLEASE READ THESE TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS
                            SITE.</strong></h4>
                    <p>
                        The motorvero.com website (the “Site”) is owned and operated by motorvero, Inc. (or
                        "motorvero"). By using this Site, you explicitly agree to comply with and be bound by the
                        following terms and conditions (“Terms and Conditions” or “Agreement”), and all policies,
                        rules, and instructions, and additional terms posted on or through the Site, all of which
                        are incorporated into this Agreement. By registering for, logging into, visiting and/or
                        otherwise using the Site in any way, you indicate that you understand, intend to be legally
                        bound by, and accept these Terms and Conditions. motorvero may change these Terms and
                        Conditions at any time. Your continued use of the Site following appropriate notice of such
                        modifications will be conclusively deemed acceptance of any changes to these Terms and
                        Conditions. At all times, you are bound by the then-current version of these Terms and
                        Conditions and all applicable laws. Please review these Terms and Conditions periodically
                        for changes.
                    </p>
                    {{-- heading sections                      --}}
                    <br>

                </div>
                <div class="col">
                    <h4><strong>Use of motorvero Offers Services</strong></h4>
                    <p>
                        You may receive an offer on the Site (together with any communication and any access to the
                        Site or other motorvero technology in connection therewith, the “motorvero Offer Services”)
                        from our affiliate CarOffer, LLC (“CarOffer”) to purchase your vehicle (an “Offer”). Offers,
                        any vehicle purchase and sale transaction in connection therewith, and any access to a
                        CarOffer platform, communication or other technology in connection therewith shall be
                        governed by CarOffer’s Offer Terms. By accepting an Offer, you (i) agree that any
                        vehicle-related information or information about you that you provide to motorvero in
                        connection with a vehicle listing or a potential vehicle sale transaction may be shared with
                        CarOffer, and (ii) agree to CarOffer’s Offer Terms as applicable to any Offer, resulting
                        vehicle sale transaction, or matter relating thereto. For avoidance of doubt, any Offer is
                        made by CarOffer and not motorvero, and any vehicle sale transaction in connection with the
                        motorvero Offer Services is between CarOffer and you (and motorvero is not party to any such
                        transaction). CarOffer shall be a third party beneficiary of these Terms and Conditions with
                        respect to the motorvero Offer Services
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Use of motorvero Site Listings Generally</strong></h4>
                    <p>
                        FOR ALL SITE-RELATED SERVICES, motorvero IS NOT AN AUTOMOBILE BROKER OR DEALER AND DOES NOT
                        SELL, EXCHANGE, BUY, OR OFFER FOR SALE, NEGOTIATE OR ATTEMPT TO NEGOTIATE, A SALE OR
                        EXCHANGE OF AN INTEREST IN ANY VEHICLE LISTED FOR SALE ON OUR SITE. motorvero does not hold
                        or possess title for any vehicle listed for sale on our Site and motorvero is not a party to
                        any vehicle sale contract between vehicle buyers and sellers that originates on or through
                        the Site.

                        All buyers and sellers must be at least 18 years old to use the Site and by using the Site,
                        you represent that you are at least 18 years old.

                        Information about a particular vehicle is supplied by the seller, not by motorvero, and the
                        buyer is solely responsible for reading the full vehicle listing before making a commitment
                        to buy. The price and other terms of any sale are arranged after negotiation between the
                        buyer and the seller. motorvero is not responsible for incorrect information given by buyers
                        or sellers, including (i) information regarding vehicles, including but not limited to
                        vehicle mileage, condition, history, or photos of vehicles, and (ii) information about the
                        identity, reliability or suitability of a buyer or seller. AutoCheck Vehicle History reports
                        are provided for informational purposes only from an unaffiliated third-party vehicle report
                        provider, and motorvero is not responsible for any incorrect information or mistakes. We
                        cannot verify the information/photos that sellers supply or guarantee the vehicles they
                        offer. When using this Site, please use common sense and good judgment. When dealing with
                        prospective purchasers/sellers, we urge you to take the same precautions you would take if
                        you were purchasing/selling a car through a classified ad in the newspaper or any other
                        private sales transaction.

                        motorvero MAKES NO GUARANTEES, WARRANTEES OR REPRESENTATIONS REGARDING ANY VEHICLES LISTED
                        FOR SALE OR SOLD ON OUR SITE. VEHICLE SALES ARE “AS IS”. VEHICLE SALES ARE BETWEEN THE BUYER
                        AND THE SELLER ONLY. motorvero DOES NOT OWN, INSPECT, BUY, OR SELL, ANY VEHICLES LISTED FOR
                        SALE ON OUR SITE. ANY DISPUTE ABOUT THE CONDITION OF A VEHICLE SOLD THROUGH THE SITE IS
                        BETWEEN THE BUYER AND SELLER ONLY. motorvero DOES NOT HOLD OR POSSESS TITLE FOR ANY VEHICLE
                        LISTED FOR SALE ON OUR SITE.

                        All applications for credit and/or lending arrangements are through one or more unaffiliated
                        third-party providers over whom motorvero has no control. Any application for credit or
                        lending arrangement, terms, conditions, warranties, or representations associated with any
                        application for credit or lending arrangement, is solely between you and any such
                        third-party provider. motorvero is not responsible or liable for any loss or damage incurred
                        as the result of such application for credit or lending arrangement.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Use of Private Sale Services</strong></h4>
                    <p>
                        motorvero includes a vehicle listing and information service on the private listing portion
                        of the site, sometimes referred to as the "Private Listing Platform", that brings together
                        private buyers and sellers. The information on vehicles provided through the Private Listing
                        Platform is supplied by the seller or other third parties; motorvero is not responsible for
                        the accuracy of such information. motorvero provides the Private Listing Platform services
                        and the Site and all information and materials without conditions, representations or
                        warranties of any kind, either expressed or implied. motorvero is not a party to any
                        transaction between Private Listing Platform vehicle buyers and sellers. Vehicle prices do
                        not include additional fees such as government fees and taxes, title and registration fees,
                        licensing and plate fees, finance charges, dealer document preparation fees, and emission
                        testing.

                        You may pay a fee for access to certain motorvero services related to the Private Listing
                        Platform. All such fees are payable in advance of the provision of any such service are
                        nonrefundable. We may change these fees at any time in our sole discretion. You shall be
                        solely responsible for the payment of any taxes applicable to its payment for and/or use of
                        such services, other than taxes on motorvero’ income. Your obligation to pay the fees is
                        unconditional and not dependent on level of promotion, number of ad impressions or
                        exposures, sales, leads, or inspection outcomes. With respect to the Featured listing
                        services offered on the Private Listing Platform, you acknowledge that your vehicle will
                        only be eligible for promotion as a featured listing if (i) it receives a FAIR, GOOD, or
                        GREAT motorvero Deal Rating or does not receive a motorvero Deal Rating, and (ii) your
                        listing contains a valid VIN. Following payment, you will receive such services for the
                        period of time specified at the time of purchase unless your listing is removed by you for
                        any reason or by motorvero due to an issue with your listing.

                        As a Private Listing Platform seller you represent and warrant: (i) that you are not a motor
                        vehicle dealer or broker, or acting in the capacity as an owner, employee or representative
                        of a dealer or broker, (ii) that all information submitted to motorvero about a particular
                        vehicle and your contact information are accurate and true. In addition, you agree to
                        approve listing descriptions as complete and accurate before publication, (iii) that all
                        relevant vehicle information is included in the listing submission, (iv) that you are
                        prepared to sell the listed vehicle at the price at which it is listed, (v) that you have
                        possession of the actual vehicle listed and the proper authority to transfer title.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Dealer Use of Restricted Services</strong></h4>
                    <p>
                        If you are a car dealer listing vehicles using motorvero’ Restricted listing services, you
                        and your dealership’s access to and use of the Restricted services is subject to the Dealer
                        Services Agreement.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Ownership And Intellectual Property</strong></h4>
                    <p>
                        Except as otherwise indicated, all copyright rights and other intellectual property rights
                        in this Site and its contents, including any and all messages, data, information, text,
                        music, sound, photos, images, graphics, code, marks, logos, audio and video, footage,
                        animations, podcasts, analyses, studies, reports, downloads, and other content contained
                        herein ("Site Content") is owned by or licensed to motorvero, Inc., and protected by law,
                        including copyright, database, trade secret, and trademark laws of the United States and all
                        applicable jurisdictions, as well as other applicable state, national, and international
                        laws and regulations. The Site Content is Copyright 2023, motorvero, Inc., all rights
                        reserved. motorvero also owns copyright rights in the Site Content as a collective work
                        and/or compilation, and in any and all databases accessible on or through the Site.
                        motorvero, the motorvero Logo, and all other marks displayed on this site (the "Trademarks")
                        are registered and/or common law trademarks of motorvero and/or various third parties.
                        Except as expressly stated herein, nothing contained on this Site may be construed as
                        granting, by implication, estoppel, or otherwise, any grant, license or right to use any
                        Site Content or Trademarks without the prior written permission of motorvero or such other
                        party that may own the Trademarks or any licensed copyrights. You agree not to directly or
                        indirectly: attempt to register, challenge or contest the validity or the motorvero’ (or its
                        licensor’s, as applicable) ownership of, such copyrights, Trademarks or any other motorvero’
                        intellectual property, or assist any third party in doing so.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Use of Chat Rooms, Bulletin Boards and Other Interactive Areas</strong></h4>
                    <p>
                        The Site may contain discussion forums, bulletin boards, review services or other forums in
                        which you or third parties may post reviews of automobiles and automotive related services
                        or other content, messages, materials or other items on the Site ("Interactive Areas"). If
                        motorvero provides such Interactive Areas, you are solely responsible for your use of such
                        Interactive Areas and use them at your own risk. No action should be taken based upon any of
                        the information contained in the Interactive Areas. You should seek independent professional
                        advice from a person who is licensed and/or knowledgeable in the applicable automotive area
                        before acting upon any opinion, advice, or information contained on the Site. All
                        statements, information and other content submitted by users are solely the opinions of
                        users, and not of motorvero.

                        By posting or distributing any message, data, information, text, music, sound, photos,
                        images, graphics, code, marks, logos or other content ("Content") to or through the Site,
                        unless we indicate otherwise, you (a) grant motorvero and its affiliates and sublicensees a
                        nonexclusive, royalty-free, perpetual, worldwide, transferable, irrevocable and fully
                        sublicensable right to use, post, store, reproduce, modify, adapt, edit, translate,
                        distribute, transmit, publish, create derivative works from and publicly display,
                        telecommunicate and perform such Content throughout the world in any media, now known or
                        hereafter devised; (b) grant motorvero and its affiliates and sublicensees the right to use
                        the name that you submit in connection with such Content, if they choose in their absolute
                        discretion; and (c) represent and warrant that (i) you own and/or control all of the rights
                        to the Content that you post or otherwise distribute, or you otherwise have the lawful right
                        to post and distribute such Content to or through the Site, and to grant the licenses
                        granted herein; (ii) such Content is accurate and not misleading; and (iii) use and posting
                        or other transmission of such Content does not violate these Terms and Conditions and will
                        not violate any rights of or cause injury to any person or entity. You further grant
                        motorvero the right to pursue at law any person or entity that violates your or motorvero'
                        rights in the Content or breaches of these Terms and Conditions.

                        motorvero takes no responsibility and assumes no liability for any Content posted, stored or
                        uploaded by you or any third party, or for any loss or damage thereto or in connection
                        therewith, nor is motorvero liable for any mistakes, inaccuracies, infringements,
                        defamation, slander, libel, omissions, falsehoods, obscenity, pornography or profanity you
                        may encounter. As a provider of interactive services, motorvero is not liable for any
                        statements, representations or Content provided by its users in any public forum, personal
                        home page or any Interactive Area. Although motorvero has no obligation to screen, edit or
                        monitor any of the Content posted to or distributed through any Interactive Area, motorvero
                        reserves the right, and has absolute discretion, to remove, screen or edit without notice
                        any Content posted or stored on the Site at any time and for any reason and without
                        liability to you or any third party, and you are solely responsible for creating backup
                        copies of and replacing any Content you post or store on the Site at your sole cost and
                        expense.

                        Any use of the Interactive Areas or other portions of the Site in violation of the foregoing
                        violates these Terms and Conditions and may result in, among other things, termination or
                        suspension of your rights to use the Interactive Areas and/or the Site. In order to
                        cooperate with legitimate governmental requests, subpoenas or court orders, to protect
                        motorvero’ systems and customers, or to ensure the integrity and operation of motorvero
                        business and systems, motorvero may access and disclose any information it considers
                        necessary or appropriate, including, without limitation, user profile information (i.e.
                        name, email address, etc.), IP addressing and traffic information, usage history, and posted
                        Content.

                        motorvero’ right to disclose any such information, as applicable, shall be pursuant to the
                        terms of motorvero’ Privacy Policy. Please see motorvero’ Privacy Policy for the terms of
                        motorvero’ personal data collection and use practices with respect to the Site. By using
                        this Site, you consent to motorvero’ collection and use of personal data as set forth in
                        motorvero’ Privacy Policy.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Prohibited Activities</strong></h4>
                    <p>
                        By using this Site, you expressly agree not to use, reproduce, modify, adapt, edit,
                        translate, publicly display, telecommunicate or perform, post, upload to, transmit,
                        distribute, store, create derivative works from or otherwise publish throughout the World,
                        in any media, now known or hereafter devised, on or through the Site any of the following:
                    </p>
                    <ol>
                        <li>Content that is unlawful, untrue, libelous, defamatory, slanderous, obscene,
                            pornographic, indecent, lewd, suggestive, harassing, threatening, invasive of privacy or
                            publicity rights, abusive, inflammatory, fraudulent or otherwise objectionable or
                            inappropriate;
                        </li>
                        <li>Content that would constitute, encourage or provide instructions for a criminal offense,
                            violate the rights of any party, or that would otherwise create liability or violate any
                            local, state, foreign, national or international law, including, without limitation, the
                            regulations of the U.S. Securities and Exchange Commission, the Canadian Securities
                            Commission or any rules of a securities exchange such as the New York Stock Exchange,
                            the American Stock Exchange, the NASDAQ Stock Market or the Toronto Stock Exchange;
                        </li>
                        <li>Content that may infringe any patent, trademark, trade secret, copyright or other
                            intellectual or proprietary right of any party (including rights of privacy and
                            publicity);
                        </li>
                        <li>Content that impersonates any person or entity or otherwise misrepresents your
                            affiliation with a person or entity
                        </li>
                        <li>Unsolicited promotions, political campaigning, advertising or solicitations;</li>
                        <li>Private or personally identifiable information of any third party, including, without
                            limitation, addresses, phone numbers, email addresses, Social Security numbers and
                            credit card numbers;
                        </li>
                        <li>Viruses, corrupted data or other harmful, disruptive or destructive files;</li>
                        <li>Content that is unrelated to the purpose of the area of the Site in which such Content
                            is posted;
                        </li>
                        <li>Content submitted using the Site’s vehicle listing lead forms or other lead submission
                            functionality for any purpose other than genuine consumer inquiries relating to the
                            vehicle listed, including (a) to promote products or services, (b) to inquire about or
                            conduct dealer-to-dealer or other wholesale vehicle transactions, or (c) for any other
                            business/commercial purpose;
                        </li>
                        <li>Content that, in the sole judgment of motorvero, contravenes the above, is otherwise
                            objectionable or inappropriate, or which restricts or inhibits any other person from
                            using or enjoying the Site, or which may expose motorvero or its affiliates or its users
                            to any harm or liability of any type.
                        </li>
                    </ol>
                    <p>You further agree that you will not attempt or do any of the following:</p>
                    <ol>
                        <li>Interfere with or disrupt the Site or our computer systems, servers, or networks;</li>
                        <li>Attempt to gain unauthorized access to any part of the Site, to accounts that belong to
                            other users, or to computer systems or networks connected to the Site; or</li>
                        <li>Engage in any systematic extraction of data or data fields, including, without limitation,
                            email addresses, by use of any automated mechanism, such as web robots, crawlers, or spiders
                            (except in strict conformance with the Robots Exclusion Protocol) or otherwise.</li>
                    </ol>


                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Rights to User Content</strong></h4>
                    <p>
                        Content submitted by users will be considered non-confidential and motorvero is under no
                        obligation to treat such Content as confidential or proprietary information. Without
                        limiting the foregoing, motorvero reserves the right to use the Content as it deems
                        appropriate, including, without limitation, posting, reproducing, adapting, translating,
                        publicly displaying, telecommunicating or performing, uploading to, transmitting,
                        distributing, storing, creating derivative works from, publishing, deleting, editing,
                        modifying, rejecting, or refusing to post it. motorvero is under no obligation to offer you
                        or make any payment for Content that you submit or its use as contemplated herein or for
                        your permission or license to edit, delete or otherwise modify Content once it has been
                        submitted to motorvero. motorvero shall have no duty to attribute authorship of Content to
                        you, and shall not be obligated to enforce any form of attribution by third parties.

                        If it is determined that you retain moral rights (including rights of attribution or
                        integrity) in the Content, you hereby declare that (a) you do not require that any
                        personally identifying information be used in connection with the Content, or any derivative
                        works of or upgrades or updates thereto; (b) you have no objection to the publication, use,
                        modification, deletion and exploitation of the Content by motorvero or its licensees or
                        sublicensees, successors and assigns; (c) you forever irrevocably waive in favor of
                        motorvero and its successors, assigns, officers, employees, affiliates, agents and
                        sublicensees, and agree not to claim or assert any entitlement to, any and all moral rights
                        you may have as an author throughout the World in any of the Content; and (d) you forever
                        release motorvero, and its licensees, successors and assigns, from any claims that you could
                        otherwise assert against motorvero by virtue of any such moral rights.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Grant of License; Use Of The Site</strong></h4>
                    <p>
                        Motorvero grants to you a personal, revocable, nonexclusive, non-transferable license to view,
                        download, and print limited portions of the Site Content available in the public areas of the
                        Site subject to the following conditions: (i) you may only do so on an occasional basis for your
                        own personal and non-commercial use; (ii) you may not modify the Site Content; (iii) any
                        displays or printouts of Site Content must be marked "© 2019, Motorvero, Inc., All rights
                        reserved."; (iv) you may not remove or modify any copyright, trademark, or other proprietary
                        notices that have been placed in/on the Site Content by Motorvero; and (v) you may not reproduce,
                        modify, adapt, translate, edit, upload to, transmit, store, further post, mirror, frame, “deep
                        link,” “scrape,” data mine, prepare derivative works from, sell or distribute or publicly
                        display, perform or telecommunicate Site Content, except as provided herein. Except as expressly
                        permitted above, copying, transmission, reproduction, public display, performance or
                        telecommunication, reproduction, republication, modification, adaptation, translation, editing,
                        storing, transmitting, creation of derivative works, posting, or redistribution of the Site
                        Content or any portion thereof is strictly prohibited without the prior written permission of
                        Motorvero. To request permission, you may contact Motorvero as follows:
                    </p>
                    <ul>
                        <li>By electronic mail to: <a href="#">copyright@Motorvero.com</a>
                        </li>
                        <li>Or by regular mail to:</li>
                        <br>
                        <br>
                        <p class="ps-4">
                            Editor
                            <br>
                            Motorvero, Inc.
                            <br>
                            2 Canal Park, 4th Floor
                            <br>
                            Cambridge, MA 02141
                            <br>
                            <br>
                        </p>
                    </ul>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>WARRANTY DISCLAIMER</strong></h4>
                    <p>
                        motorvero, INC. MAKES NO CONDITION, REPRESENTATION OR WARRANTY OF ANY KIND REGARDING THE
                        SUITABILITY OF THE SITE CONTENT, OR ANY PORTION THEREOF, FOR ANY PURPOSE. THE SITE, ALL SITE
                        CONTENT, AND ALL OTHER CONTENT AVAILABLE ON OR THROUGH THE SITE ARE PROVIDED ON AN "AS IS,"
                        “AS AVAILABLE” BASIS, AND motorvero, INC. EXPRESSLY DISCLAIMS ANY AND ALL CONDITIONS,
                        REPRESENTATIONS AND WARRANTIES OF MERCHANTABILITY OR FITNESS FOR PARTICULAR USE, INCLUDING
                        ALL IMPLIED WARRANTIES IN CONNECTION WITH THE FOREGOING. motorvero, INC. ALSO EXPRESSLY
                        DISCLAIMS ANY CONDITION, WARRANTY OR REPRESENTATION AS TO THE ACCURACY, RESULTS, TIMELINESS,
                        COMPLETENESS, NON-INFRINGEMENT, OR PROPRIETARY CHARACTER OF THE SITE, ALL SITE CONTENT, AND
                        ALL OTHER CONTENT AVAILABLE ON OR THROUGH THE SITE. motorvero DOES NOT GUARANTEE THAT THE
                        SITE WILL BE ERROR FREE, OR CONTINUOUSLY AVAILABLE, OR THAT THE SITE WILL BE FREE OF VIRUSES
                        OR OTHER HARMFUL COMPONENTS. YOU WAIVE AND COVENANT NOT TO ASSERT ANY CLAIMS OR ALLEGATIONS
                        OF ANY NATURE WHATSOEVER ARISING FROM OR RELATING TO YOUR USE OF THE SITE, INCLUDING,
                        WITHOUT LIMITATION, ALL CLAIMS AND ALLEGATIONS RELATING TO THE ALLEGED INFRINGEMENT OF
                        PROPRIETARY RIGHTS, THE ALLEGED INACCURACY OF SITE CONTENT, YOUR INABILITY TO ACCESS THE
                        SITE AT ANY GIVEN TIME, OR ALLEGATIONS THAT motorvero, INC. HAS OR SHOULD INDEMNIFY, DEFEND,
                        OR HOLD YOU HARMLESS FROM ANY CLAIM OR ALLEGATION ARISING FROM YOUR USE OR OTHER
                        EXPLOITATION OF THE SITE
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>LIMITATION OF LIABILITY</strong></h4>
                    <p>
                        YOU USE THE SITE AT YOUR OWN RISK AND NEITHER motorvero, INC., ITS AFFILIATES AND
                        SUBLICENSEE NOR THE PARTIES WHO PROVIDE INFORMATION AND MATERIAL FOR PUBLICATION WITHIN THE
                        SITE CONTENT SHALL BE LIABLE FOR ANY DAMAGES OF ANY SORT ARISING FROM YOUR USE OF OR
                        INABILITY TO USE THE SITE OR ANY PRODUCT OR SERVICE LINKED TO OR FROM OR ADVERTISED OR
                        PROMOTED ON THE SITE, INCLUDING, WITHOUT LIMITATION, CONSEQUENTIAL, SPECIAL, INCIDENTAL,
                        INDIRECT, PUNITIVE, EXEMPLARY, OR OTHER DAMAGES OF ANY KIND (INCLUDING LOST REVENUES OR
                        PROFITS, LOSS OF BUSINESS, AND LOSS OF DATA), EVEN IF WE ARE ADVISED BEFOREHAND OF THE
                        POSSIBILITY OF SUCH DAMAGES. BECAUSE SOME STATES/JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR
                        LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATIONS MAY
                        NOT APPLY TO YOU. TO THE EXTENT PERMITTED BY LAW, motorvero ALSO DISCLAIMS LIABILITY FOR ANY
                        DIRECT DAMAGES BASED ON YOUR ACCESS OR USE OF THE SITE AND THE SITE CONTENT. IF motorvero IS
                        FOUND TO BE LIABLE UNDER THIS AGREEMENT, INCLUDING FOR DIRECT OR ANY TYPE OF DAMAGES, OUR
                        AGGREGATE LIABILITY TO YOU OR TO ANY THIRD PARTY IS LIMITED TO THE GREATER OF (A) THE AMOUNT
                        OF FEES PAID BY YOU IN THE 12 MONTHS PRIOR TO THE ACTION GIVING RISE TO THE LIABILITY; OR
                        (B) $100.

                        YOU AGREE TO INDEMNIFY motorvero AND ITS OWNERS, SHAREHOLDERS, SUBSIDIARIES, AFFILIATES,
                        OFFICERS, EMPLOYEES, PARTNERS, AND LICENSORS, AND THEIR RESPECTIVE SUCCESSORS AND ASSIGNS,
                        AND HOLD ALL OF THE FOREGOING HARMLESS, FROM AND AGAINST ANY AND ALL CLAIMS, LIABILITY AND
                        EXPENSES, INCLUDING ATTORNEYS FEES, ARISING FROM OR RELATED IN ANY WAY TO YOUR USE OF THE
                        SITE OR ANY BREACH OF THESE TERMS AND CONDITIONS.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Links To Other Sites</strong></h4>
                    <p>
                        The Site contains links to third-party web sites. The linked sites are not under the control
                        of motorvero, and motorvero is not responsible for the contents of any linked site.
                        motorvero provides these links as a convenience, and a link does not imply endorsement of,
                        sponsorship of, or affiliation with the linked site by motorvero. Linked sites are owned and
                        operated by independent retailers or service providers, and therefore, motorvero cannot
                        ensure that you will be satisfied with their products, services, or business practices. You
                        should make whatever investigation you feel necessary or appropriate, including reviewing
                        their Terms of Use and Privacy Policies, before proceeding with any transaction with any of
                        these third parties.
                    </p>

                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Digital Millennium Copyright Act Compliance</strong></h4>
                    <p>
                        Motorvero complies with the provisions of the Digital Millennium Copyright Act applicable to internet service providers (17 U.S.C. SS 512). If you have any complaints or objections to material posted on this Site, or if you believe that material posted on this Site infringes a copyright that you hold, you may contact our Designated Agent at the address provided below. According to the U.S. Digital Millennium Copyright Act, 17 U.S.C. Sec. 512(c)(3), your notice must comply with the following requirements:
                    </p>
                    <ol>
                        <li>A physical or electronic signature of the copyright owner or person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</li>
                        <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site;</li>
                        <li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit Motorvero to locate the material;</li>
                        <li>Information reasonably sufficient to permit Motorvero to contact you, such as address, telephone number, and, if available, an electronic mail address at which you may be contacted;</li>
                        <li>A statement by you that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and</li>
                        <li>A statement that the information in the notification is accurate and under penalty of perjury, that you are the copyright owner or authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
                    </ol>
                    <p>The Designated Agent for notice of copyright infringement claims may be reached as follows:</p>
                    <p class="ms-4">
                        Editor
                        <br>
                        Motorvero, Inc.
                        <br>
                        2 Canal Park, 4th Floor
                        <br>
                        Cambridge, MA 02141
                        <br>
                        <a href="#">copyright@motorvero.com</a>
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>SMS Terms</strong></h4>
                    <p>
                        If you submit your phone number on motorvero, you agree to receive text messages in
                        connection with your vehicle shopping interests. You may receive text messages from
                        motorvero, from motorvero’ service provider(s), from a vehicle’s seller or from any of
                        seller’s agents. Text messages from a vehicle’s seller will be subject to the seller’s
                        policies, procedures, and compliance protocols, of which motorvero has no control.

                        You can cancel the SMS service from motorvero at any time. Just text "STOP" to the short
                        code. After you send the SMS message "STOP" to us, we will send you an SMS message to
                        confirm that you have been unsubscribed from SMS messages from motorvero. After this, you
                        will no longer receive SMS messages from us. If you want to join again, just sign up as you
                        did the first time and we will start sending SMS messages to you again.

                        If you are experiencing issues with the messaging program you can reply with the keyword
                        HELP for more assistance.

                        Carriers are not liable for delayed or undelivered messages.

                        As always, message and data rates may apply for any messages sent to you from us and to us
                        from you. If you have any questions about your text plan or data plan, it is best to contact
                        your wireless provider.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Applicable Law and Jurisdiction</strong></h4>
                    <p>
                        The Site (excluding links to third-party sites) is owned and controlled by Motorvero, and operated by Motorvero from its offices in and around Cambridge, MA. While Motorvero has made no effort to publish the Site elsewhere, because this Site is published on the World Wide Web it is accessible in all fifty states of the United States, Canada and in other countries. Each of these places has laws that may differ from those of Massachusetts and from each other. You and Motorvero both benefit from establishing a predictable legal environment in which to publish, access and use this Site. Therefore, by publishing, accessing, and/or using the Site, you and Motorvero explicitly agree that all disputes, claims, or other matters arising from or relating to your use of this Site will be governed by the laws of the Commonwealth of Massachusetts, without regard to its conflicts of law principles. You agree that all claims you may have against Motorvero arising from or relating to the operation or use of this Site will be heard and resolved according to the Section below captioned “Dispute Resolution – Mandatory Arbitration and Class Acton Waiver.” If you chose to access this Site from locations other than Boston, MA, you will be responsible for compliance with all local laws of such other jurisdiction.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER</strong></h4>
                    <h5 class="fw-bold">1. Binding Arbitration</h5>
                    <p>
                        Except as specifically stated herein, any dispute or claim between you and Motorvero arising out of, or relating in any way to, the Terms and Conditions, the Site, content, or your use of the Site or the Interactive Areas (“Disputes”) shall be resolved exclusively by final, binding arbitration; except that you may bring a qualifying claim over a Dispute in a small claims court in Middlesex County, Massachusetts. By virtue of this Arbitration Agreement (defined below), you and Motorvero is each giving up the right to go to court and have a Dispute heard by a judge or jury (except as otherwise set forth in this “DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER” Section). The provisions of this “DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER” Section shall constitute your and Motorvero’ written agreement to arbitrate Disputes under the Federal Arbitration Act (“Arbitration Agreement”). Any modification to this Arbitration Agreement, to be effective, must be in writing and signed by you and Motorvero. The arbitration will be administered by the American Arbitration Association (“AAA”) and conducted before a single arbitrator pursuant to its rules, including the AAA’s Supplementary Procedures for Consumer-Related Disputes, available at <a href="#" target="_blank">http://www.adr.org</a> or by calling 800-778-7879. The arbitrator will apply and be bound by this Agreement, apply applicable law and the facts, and issue a reasoned decision or award.
                    </p>
                    <p>
                        To begin an arbitration proceeding, you must comply with the limitations provision set forth in subsection 5 below of this DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER” Section and submit the Dispute by utilizing the forms available at http://www.adr.org, and simultaneously sending a copy of the completed form to the following address: Attn: Director of Legal, Motorvero, Inc., 2 Canal Park, Cambridge, MA 02141. Payment of all filing, administration and arbitrator fees will be governed by the AAA's rules. The arbitration will be conducted based upon written submissions unless you request and/or the arbitrator determines that a telephone or in-person hearing is necessary. If the arbitrator grants the request or determines an in-person hearing is necessary, the hearing will proceed in Cambridge, Massachusetts, unless the arbitrator determines or we agree that the matter should proceed in the county in which you reside (which county must be in the continental United States of America).
                    </p>
                    <h5 class="fw-bold">2. No Class Action Matters</h5>
                    <p>
                        We each agree that we shall bring any Dispute against the other in our respective individual capacities and not as a plaintiff or class member in any purported class, consolidated or representative proceeding or as an association. In addition, we each agree that Disputes shall be arbitrated only on an individual basis and not in a class, consolidated or representative action. The arbitrator shall not have the power to vary these provisions.
                    </p>
                    <h5 class="fw-bold">3. Choice of Law and Forum; No Jury Trial</h5>
                    <p>
                        If for any reason a Dispute proceeds in court: (a) you agree that any such Dispute may only be instituted in a state or federal court of competent subject matter jurisdiction located in Middlesex County, Massachusetts; (b) you and Motorvero irrevocably consent and submit to the exclusive personal jurisdiction and venue of such courts for resolution of such Disputes, stipulate to the fairness and convenience of such courts and covenant not to assert any objection to proceeding in such courts; (c) you and Motorvero agree that the Federal Arbitration Act, the AAA rules, applicable federal law and the laws of the Commonwealth of Massachusetts, without regard to principles of conflicts of law, will govern this Agreement and any Disputes; and (d) you and Motorvero agree to waive any right to a trial by jury.
                    </p>
                    <h5 class="fw-bold">4. Injunctive Relief</h5>
                    <p>
                        Notwithstanding anything to the contrary in this Agreement, either party may bring suit in court seeking an injunction or other equitable relief arising out of or relating to the infringement of a party’s intellectual property or any conduct that violates the ”Ownership And Intellectual Property” section of the Terms of Use(“Your Conduct”).
                    </p>
                    <h5 class="fw-bold">Time Limitations</h5>
                    <p>
                        If either of us wants to assert a Dispute against the other, the party with a Dispute must institute arbitration within one (1) year from the date the Dispute arose. Absent commencing the arbitration within one (1) year from the date the Dispute arose, the Dispute(s) will be forever barred.
                    </p>
                    <h5 class="fw-bold">6. Severability</h5>
                    <p>
                        If any part of this “DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER” Section is ruled to be unenforceable, then the balance of this “DISPUTE RESOLUTION – MANDATORY ARBITRATION AND CLASS ACTION WAIVER” Section shall remain in full effect and construed and enforced as if the portion ruled unenforceable were not contained herein.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Assumption of Risk</strong></h4>
                    <p>
                        You use the Internet solely at your own risk and subject to all applicable local, state, national, and international laws and regulations. Although Motorvero has endeavored to create a secure and reliable Site, the confidentiality of any communication or material transmitted to/from this Site over the Internet cannot be guaranteed. Accordingly, Motorvero is not responsible for the security of any information transmitted via the Internet, the accuracy of the information contained on the Site, or for the consequences of any reliance on such information. Motorvero shall have no liability for interruptions or omissions in Internet, network or hosting services. You assume the sole and complete risk of using this Site.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Modifications to the Site</strong></h4>
                    <p>
                        Motorvero may change, restrict access to, suspend, or discontinue any aspect of the Motorvero.com service or the Site at any time, including availability of any feature, database, or content. Motorvero may also impose limits on certain features and services or restrict your access to all or parts of the Motorvero.com web site without notice or liability. Motorvero may remove any review from the Site if Motorvero determines, in its sole discretion, that the review may be false or fraudulent. Motorvero may exclude or remove vehicle prices from the Site if Motorvero determines, in its sole discretion, that the prices violate Guidelines for Dealer Pricing and Marketing, which are accessible to vehicle dealers at https://www.Motorvero.com/Cars/DealerPricingPolicy.html. Motorvero may exclude or remove from the Site embedded contact information in (i) a dealer’s description of a vehicle and/or (ii) images, often known as "Watermarking," if Motorvero determines in its sole discretion that such information is embedded with the intent of circumventing the Motorvero lead routing process.
                    </p>
                    <p>
                        Motorvero reserves the right (but assumes no obligation) to delete, move, condense or edit any content on the Site that comes to Motorvero' attention and that Motorvero considers unacceptable or inappropriate, whether for legal or other reasons.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Termination</strong></h4>
                    <p>
                        You agree that we may, under some circumstances and without prior individual notice to you, terminate your use of and access to any of the parts of the Site to which we restrict access, for example, by requiring registration. Some of the reasons for such termination may include, but are not limited to, (a) a breach or violation or suspected breach or violation of these Terms and Conditions or other incorporated terms or guidelines, (b) a request by law enforcement or another government agency, (c) our decision to discontinue or change all or part of the Site, (d) technical or security issues, and (e) fraudulent or illegal activities. All terminations will be made in our sole discretion and you agree that we will not be liable for any termination of your use of or access to the Site or any part of the Site.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Miscellaneous</strong></h4>
                    <p>
                        This agreement may not be assigned by you without the prior written consent of Motorvero. Any attempted assignment that does not comply with these Terms and Conditions shall be null and void. Motorvero may assign these Terms and Conditions, in whole or in part, to any third-party in its sole discretion. These terms and Conditions shall inure to the benefit of and be binding upon the parties hereto, and their permitted successors, permitted assigns, heirs, and legal and personal representatives. If any provisions of this agreement are held to be invalid or unenforceable by an arbitrator or a court of competent jurisdiction, any such provision(s) shall be enforced to the maximum extent permissible so as to effect the intent of the parties and shall not affect the validity or enforceability of any other provisions herein, and the remainder of this Agreement shall continue in full force and effect. Any waiver of any provision herein, to be effective, must be in writing signed by an authorized officer of Motorvero, and shall not constitute a waiver of any other provision herein or a continuing waiver of any future breaches of the same provision.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Entire Agreement/Reservation of Rights</strong></h4>
                    <p>
                        These Terms and Conditions and Motorvero’ Privacy Policy represent the entire agreement between you and Motorvero with respect to your access to or use of any material available on or through the Site, and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral, or written between you and Motorvero with respect to same. Any rights not expressly granted under this Agreement are reserved.
                    </p>
                    {{-- heading sections                      --}}
                    <br>
                    <h4><strong>Additional Credits</strong></h4>
                    <ul>
                        <li>"Silk" icons courtesy of <a href="#">famfamfam.</a></li>
                        <li>"Fugue" icons courtesy of <a href="#">Yusuke Kamiyamane</a></li>
                        <li>Flags icons courtesy of <a href="#">Vector Templates</a></li>
                        <li><a href="#">Camera</a> from The Noun Project</li>
                        <li><a href="#">History</a> designed by <a href="#">Alexander Bickov</a> from the Noun Project</li>
                        <li><a href="#">Fire</a> designed by <a href="#">Arjun Adamson</a> from The Noun Project</li>
                        <li><a href="#">Back</a> designed by <a href="#">SuperAtic Labs</a> from The Noun Project</li>
                        <li><a href="#">Tools</a> designed by <a href="#">John Caserta</a> from The Noun Project</li>
                        <li><a href="#">Cars</a> designed by <a href="#">Dmitry Baranovskiy</a> from The Noun Project</li>
                        <li><a href="#">Question designed by <a href="#">Martin Delin</a> from The Noun Project</a></li>
                        <li><a href="#">Thumbs Up designed by <a href="#">Alv Jørgen Bovolden</a> from The Noun Project</a></li>
                        <li><a href="#">Research designed by <a href="#">Brennan Novak</a> from The Noun Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection