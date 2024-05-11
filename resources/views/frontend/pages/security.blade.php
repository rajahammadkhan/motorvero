@extends('frontend.layouts.master')
@section('title')
Security
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
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div>
                <p class="heading"><span>Security:</span></p>
            </div>
        </div>

    </div>
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

                <div class="descriptionbar col-md-6">
                    <h3><strong>
                            motorvero takes security seriously
                        </strong></h3>
                    <br>
                    <br>
                    <h3><strong>Here are our practices.</strong></h3>
                    <br>
                    <p>
                        We employ rigorous security measures at organizational, architectural, and operational
                        levels to protect our applications, our infrastructure, and the data of our customers and
                        website visitors. At motorvero, we actively promote security awareness, provide training on
                        data protection, and implement best practices, so that security principles and data privacy
                        are top of mind for our employees. motorvero considers information security principles when
                        designing our platform, managing our networks, and conducting our daily business operations.
                    </p>

                    <br>


                    {{-- content start--}}



                </div>
                
                <div class="col-12 mt-5">
                    <h5><strong>Governance</strong></h5>
                    <p>
                        motorvero has implemented formal data privacy, information security, and acceptable use
                        policies that govern employee activities. We train our employees on these policies during
                        onboarding and regularly thereafter. In addition, we rely on our Information Security and IT
                        teams to enforce policies through the implementation of technical controls.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Risk Management</strong></h5>

                    <p>
                        motorvero performs regular information security risk assessments covering our facilities,
                        systems, and information assets. We share risk assessment results and risk mitigation
                        suggestions with senior management, as appropriate. Our risk assessment results specify
                        proposed changes to systems, processes, policies, and tools to reduce security
                        vulnerabilities and threats to motorvero, its customers, and its website visitors. We
                        mitigate risks through the implementation of policies, procedures, and controls.
                    </p>
                    <br>
                    {{-- content end--}}


                    {{-- content start--}}


                    <h5><strong>Vendor Security Management</strong></h5>
                    <p>
                        motorvero conducts and records vendor security assessments for its service providers.
                        Vendors are approved or rejected based on their relative security posture and the risk they
                        would introduce for motorvero.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Security Operations</strong></h5>
                    <p>
                        motorvero employs state-of-the-art endpoint security protections, intrusion detection
                        systems, and advanced email protections to monitor our systems and prevent potential
                        security incidents. motorvero uses a next-generation anti-malware solution to address
                        malicious software and other threats. Anti-malware agents are centrally managed and are
                        configured to install updates on a regular basis. These agents alert operations analysts
                        when malware is detected so they can take action.

                        motorvero uses a vulnerability management program to identify and remediate vulnerabilities
                        across our networks, reducing exposure, and minimize our attack surface. We also conduct
                        24/7 monitoring of our critical systems
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Access Control</strong></h5>
                    <p>
                        motorvero uses identity and access management controls to provide access to our systems
                        through user accounts with appropriate privileges. motorvero provisions all critical network
                        and application access using the principle of least privilege. We limit key administrative
                        access to authorized personnel. Provisioning and deprovisioning procedures exist to document
                        the relevant access levels and approvals granted to critical systems and data. We conduct
                        periodic access reviews for critical systems and applications, using a risk-based approach.

                        motorvero uses an identity management single sign-on platform provider for our critical
                        business applications. We assign users unique IDs and enforce password requirements that
                        align, at a minimum, to NIST standards. Our identity management platform enforces motorvero’
                        password policy and requires multifactor authentication.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Physical Security</strong></h5>
                    <p>
                        The motorvero platform is hosted in the cloud and in state-of-the-art data centers. The
                        co-located data centers provide physical and environmental security controls (including
                        biometric identification, supervised entry, 24/7/365 on-premise security teams, and CCTV
                        systems). Access to data centers is restricted to authorized individuals. Our data center
                        facilities maintain SOC 2 reports, which describe and test the internal controls of the
                        service organization.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Data Privacy and Protection</strong></h5>
                    <p>
                        motorvero takes the protection of personal data seriously. Databases are gated by role-based
                        access controls, and multi-factor authentication is enforced on login. motorvero employs
                        recognized encryption protocols for data in transit and at rest.

                        motorvero recognizes and adheres to data privacy laws and regulations, including the EU’s
                        General Data Protection Regulation (GDPR), California’s Consumer Privacy Act (CCPA), and the
                        PCI Data Security Standard. The GDPR and CCPA impose obligations regarding the collecting,
                        processing, and transmission of personal data. motorvero has implemented controls across our
                        organization so that we can better achieve and maintain compliance with these frameworks.
                        For more information about our data privacy practices, please visit motorvero’ Privacy
                        Policy
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Security Awareness</strong></h5>
                    <p>
                        motorvero delivers security awareness and data privacy training to employees during the
                        onboarding process and regularly thereafter. Additionally, our Information Security team
                        frequently publicizes alerts and security tips through internal communications channels.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Availability</strong></h5>
                    <p>
                        motorvero maintains documented backup procedures. motorvero regularly performs full backups
                        of all production databases. Data backups are replicated to an offsite location on a regular
                        schedule.
                    </p>
                    <br>
                    {{-- content end--}}

                    {{-- content start--}}


                    <h5><strong>Application Security</strong></h5>
                    <p>
                        motorvero employs both internal and external testing of our platform. We’ve also partnered
                        with a third-party platform to host our bug bounty program, enabling security researchers to
                        securely report vulnerabilities and bugs in motorvero platforms and systems. In addition,
                        we’ve engaged a security expert to conduct external network and web application penetration
                        testing on a periodic basis. motorvero applies a systematic approach to managing change so
                        that changes to services impacting motorvero and our customers are first reviewed, tested,
                        and approved. The goal of motorvero’ change management process is to prevent unintended
                        changes from reaching our production environment. All critical changes deployed to
                        production undergo a review, testing, and approval process before release.


                    </p>
                    <br>
                    {{-- content end--}}


                </div>
            </div>
        </div>
    </div>
</section>
@endsection