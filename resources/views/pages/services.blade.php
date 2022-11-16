@extends('layouts.base-layout')
@section('title', 'Our Services')
@section('content')
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
            </nav>
            <h1>OUR SERVICES</h1>
            <div class="breadcrumbs-description">
               Amazing services we render
            </div>
        </div>
    </div>

    <section class="wide-tb-80 bg-fixed what-we-offer">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                        Our <span class="fw-6 txt-orange">Services</span>
                    </h2>
                    <h2 class="mb-3 fw-2 txt-blue wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                        <span>Traffic Management</span>
                    </h2>
                    <p class="wow fadeInLeft service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We provide a complete automation control for truck management and traffic flow in the busiest port
                        zones in Nigeria. Our system allows for seamless movement from one terminal to another.
                        Our system makes sure that truck traffic doesn't obstruct other drivers, locals, or commercial
                        establishments in the port access lanes.
                    </p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/pac.jpg') }}" alt="" class="img-fluid wow fadeInLeft"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Port Access
                        Control</h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        Through our truck call-up application, we offer planned access to the ports and associated
                        terminals.
                        The application manages traffic on port access routes, gives the Nigerian Ports Authority visibility
                        into the ports, and gives port customers a straightforward booking platform to organize their access
                        into the ports.
                    </p>
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">Mobility Design
                    </h2>
                    <p class="wow fadeInLeft service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We provide consultancy in truck mobility design and planning to manufacturing companies,
                        governmental agencies,
                        and trade associations thanks to our years of experience collecting traffic data and conducting
                        research both locally and globally.
                        We have in-depth understanding of truck transportation in both port and non-port areas of Africa,
                        the Middle East, and Europe.
                        We also provide guidance on non-truck traffic and provide information on municipal traffic.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/mobd.jpg') }}" alt="" class="img-fluid wow fadeInRight"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/why-choose-us.jpg') }}" alt="" class="img-fluid wow fadeInLeft"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Smart Packing
                    </h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We handle a point-to-point truck movement schedule and an end-to-end truck movement procedure from
                        origin to destination using our network of connected truck parks.
                        Additionally, in order to provide visibility and effective traffic control, we create smart parks
                        that deploy essential physical and electronic infrastructure.
                    </p>
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">Terminal Traffic
                        Management</h2>
                    <p class="wow fadeInLeft service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We offer port terminal operators, manufacturers, and warehouses operational support and visibility
                        into in-terminal truck movement through technology.
                        However, because of how well-built our terminal dashboard is, it can also cover berth side
                        operations, offering operational support for loading and unloading of cargo. Manufacturing
                        businesses currently use our terminal dashboard in port scenarios.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/why-choose-us.jpg') }}" alt="" class="img-fluid wow fadeInRight"
                    data-wow-duration="0" data-wow-delay="0s">
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/truck4.png') }}" alt="" class="img-fluid wow fadeInLeft"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Park Design And
                        Management</h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        In order to improve parks to a standard, we develop truck parks and interact with park owners. We
                        provide structural engineering services,
                        access control infrastructure, and technology deployment.
                        The provision of ancillary services including rest spaces, meals, repairs, and refuelling amenities
                        is a feature of our park designs.
                    </p>
                </div>
            </div>
    </section>
@endsection
