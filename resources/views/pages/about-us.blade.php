@extends('layouts.base-layout')
@section('title', 'About Us')
@section('content')
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <h1>About Us</h1>
            <div class="breadcrumbs-description">
                Meet the amazing team behind this project and find out more about how we work.
            </div>
        </div>
    </div>
    <section class="wide-tb-80">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <h2 class="mb-4 fw-7 txt-blue">
                        About <span class="fw-6 txt-orange">Mycallup</span>
                    </h2>
                    <p>We aim at building cutting edge solutions to mobility and truck gridlock issues. We provide a smart
                        city system by integrating into truck mobility to render services like no other across the nation.
                        Technology is evolving and we are giving first hand experience to take this journey in tech with us.
                    </p>
                    <p> We have developed a truck callup system to interface with the physical infrastructure already in
                        place, thereby increasing the flow of structures and visibility for operators and regulators in the
                        transportation and warehousing sector.</p>
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

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-truck"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Terminal Operators </h4>
                                <p>On our platform, all terminal operators must register by setting up a profile.</p>
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
                                <p>All clearing agents are expected to register their profiles on the platform in order to be able to
                                    book trucks since clearing agents are in charge of clearing port consignment/cargo.</p>
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
                                <p>All truck owners should register their vehicles on the platform if they plan to utilise them for
                                    maritime commerce. On the platform, each truck owner will make a profile before registering their
                                    vehicles.</p>
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
                                <p>The registered unions must make sure that their members register on the platform and specify the
                                    union to which they belong when doing so. The unions must compel their members to follow the
                                    integrated traffic management approach.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.8s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-architecture-alt"></i>
                            </div>
                            <div class="service-inner-content media-body">
                                <h4 class="h4-md mb-3">Operators of Truck Parks</h4>
                                <p>Private park owners can register their parks on the platform and specify how much space each park has
                                    available for holding bays. To make it possible for users to make reservations, all parks that are
                                    available will be electronically linked.</p>
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
                                <p>When a truck is nominated for a trip, the owner will pair the truck with a driver who has registered
                                    on the platform. A driver is legitimately registered, and our business has the necessary paperwork
                                    on hand.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <div class="icon-box-3 mb-5 bg-light-theme">
                        <div class="media">
                            <div class="service-icon mr-5 bg-navy-blue">
                                <i class="icofont-vehicle-delivery-van"></i>
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
                                <h4 class="h4-md mb-3">Companies that deal in commodities  and fast-moving consumer products</h4>
                                <p> To acquire access to the ports, these businesses must register their businesses and trucks on the
                                    platform and send a request to our business.</p>
                                <a href="#" class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="#" role="button">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
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
    </section>

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
                            <h4 class="h4-md">Service</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Professionalism</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Integrity</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="icon-box-2 text-center">
                        <div class="">
                            <i class="icofont-id text-md" style="font-size: 50px"></i>
                            <h4 class="h4-md">Nimbleness</h4>
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
                                <p>To use technology to solve mobility problems across the African continent, adopting
                                    speed, efficiency and professionalism</p>
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
                                <p>To use technology as a driving factor for solving day-to-day problems (transportation
                                    enablement currently the focus)</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
