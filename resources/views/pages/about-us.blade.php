@extends('layouts.base-layout')
@section('title', 'About Us')
@section('content')
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </div>
    <section class="wide-tb-80">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <h2 class="mb-4 fw-7 txt-blue">
                       <span class="fw-6 txt-orange">Callup</span>
                    </h2>
                    <p>As an innovative driver, we pride ourselves in building cutting edge technology and lifecycle solutions for the maritime logistics sector. We emphasize innovation in sustainable technology and services to help our clients continuously improve their environmental and economic performance.</p>
                    <p>Call Up solutions optimize both port and terminal logistics processes and security matters as well. Through automation, we make the process more secure and therefore efficient and cost-effective.</p>
                        <p>Whatever the scope of the project, we are always working at the frontier of new technology to optimize smart and sustainable mobility.</p>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                    <img src="{{ asset('assets/images/map-bg-orange.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 faqs">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>Our</span>
                        Stakeholders
                    </h1>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.8s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-architecture-alt"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Truck Parks Operators</h4>
                                <p>All government approved truck parks will be onboarded onto the Call Up platform and signify real-time availability of parking bays.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-user-alt-4"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Truck Owners</h4>
                                <p>Truck Owners are expected to sign up on the Call Up platform and register their trucks and drivers operating within the maritime logistics sector.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-under-construction"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Agents for clearing</h4>
                                <p>Clearing Agents are expected to register on the Call Up platform in order to have visibility of trucks within Parks to pick up their cleared consignment.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-user-alt-3"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Transport Unions</h4>
                                <p>All registered Unions within the maritime logistics sector will be onboarded onto the Call Up platform and will ensure that all registered members within each union adheres to all scheduling and maritime rules and regulations.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-architecture-alt"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Terminal Operators </h4>
                                <p>All terminal operators will be onboarded onto the Call Up application.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-truck"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">The haulage firms</h4>
                                <p>In order for their trucks to have access to the ports, haulage companies are required to register
                                    them on the platform.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-industries"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">FMCGs</h4>
                                <p>These companies will be onboarded onto the Call Up platform so that they can register their trucks and drivers to gain access into a port.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-truck-loaded"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Drivers</h4>
                                <p>Only registered drivers on the Call Up platform will be matched to an MSS verified truck during the course of making a booking.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
        <div class="container">

            <div class="col-sm-12">
                <h1 class="heading-main">
                    <span>Face Behind Callup</span>
                    Our Team
                </h1>
            </div>

            <div class="row pb-4">

                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-1.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">John Morise</h4>
                        <h5 class="h5-md txt-ligt-gray">CEO</h5>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-2.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">Kevin Mash</h4>
                        <h5 class="h5-md txt-ligt-gray">CFO</h5>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-3.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">Mike Douglos</h4>
                        <h5 class="h5-md txt-ligt-gray">CTO</h5>
                    </div>
                </div>
                <div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>

                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-1.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">John Morise</h4>
                        <h5 class="h5-md txt-ligt-gray">HEAD ADMIN</h5>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-2.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">Kevin Mash</h4>
                        <h5 class="h5-md txt-ligt-gray">HEAD BIZ</h5>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <div class="team-section-two">
                        <img src="assets/images/team/team-3.jpg" alt="" class="rounded">
                        <h4 class="h4-md txt-orange">Mike Douglos</h4>
                        <h5 class="h5-md txt-ligt-gray">COO</h5>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section class="wide-tb-100 pb-0 mb-spacer-md">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <h2 class="h2-xl fw-7 txt-blue mb-5">Our Values</h2>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-box text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Agility</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Innovation</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Collaboration</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Ownership</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 pb-0 mb-spacer-md">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-chart-growth"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md">Vision</h4>
                                <p>We envision safe and efficient traffic mobility where the road networks are not
                                    congested, accident-free, and equally shared between all road users in Nigeria</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5">
                                <i class="icofont-dart"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md">Mission</h4>
                                <p>To solve real life problems in transportation and mitigating gridlock by
                                    introducing adaptive control approach to improve mobility and relieve
                                    congestion in and around the ports</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
