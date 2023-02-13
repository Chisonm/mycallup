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
                        <span>Port Traffic Management </span>
                    </h2>
                    <p class="wow fadeInLeft service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We have built a state-of-the-art electronic call-up system primarily for managing traffic in and around all ports within Nigeria. This will help reduce travel time for all road users and enhance productivity and efficiency within the Maritime logistics sector.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/ptm.png') }}" alt="Port Traffic Management" class="img-fluid wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">Real-time Traffic Data & Predictive Analytics</h2>
                    <p class="wow fadeInLeft service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        We have the capacity and capability to assist port authorities and terminal operators monitor truck movements and congestion. Equipped with real-time truck traffic data and predictive insights, terminal operators will be able to significantly reduce truck queues in and around their cargo terminals. 
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/real-time-traffic.png') }}" alt=""
                        class="img-fluid wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/asc.png') }}" alt="" class="img-fluid wow fadeInLeft"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Access
                        Control</h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        Our electronic call-up system, enables the sequential flow of trucks from holding bays to terminals within the Ports. The integrated hardware and software capture all digital footprints and eliminate human interference thus promoting transparency and security.
                    </p>
                </div>
            </div>
    </section>
    {{-- <section class="bg-white wide-tb-100">
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
    </section> --}}

    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/smp.png') }}" alt=""
                        class="img-fluid wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Smart Packing
                    </h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        Through our smart parking app, transporters have visibility of available bays within parks saving valuable time, money, fuel emissions and frustration. We can provide digital smart parking solutions tailored to your organizational needs and expectations.
                    </p>
                </div>
            </div>
    </section>
    <section class="bg-white wide-tb-100">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/tdpm.png') }}" alt="" class="img-fluid wow fadeInLeft"
                        data-wow-duration="0" data-wow-delay="0s">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 fw-7 txt-blue wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">Truck Parking Design & Management</h2>
                    <p class="wow fadeInRight service-text" data-wow-duration="0" data-wow-delay="0.2s">
                        Parking is not just about optimizing space utilization in a yard. Equally important is the traffic flow in & out of a truck park which could create bottlenecks. We can advise and design a site-specific and project intent-driven realistic, operationally workable solution for any private or government approved park.
                    </p>
                </div>
            </div>
    </section>
@endsection
