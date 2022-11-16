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
                    <h4 class="h4-md mb-3"> Terminal Operators </h4>
                    <p>On our platform, all terminal operators must register by setting up a profile.</p>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                    <h4 class="h4-md mb-3">Agents for clearing</h4>
                    <p>All clearing agents are expected to register their profiles on the platform in order to be able to
                        book trucks since clearing agents are in charge of clearing port consignment/cargo.</p>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                    <h4 class="h4-md mb-3">Truck Owners</h4>
                    <p> All truck owners should register their vehicles on the platform if they plan to utilise them for
                        maritime commerce. On the platform, each truck owner will make a profile before registering their
                        vehicles. </p>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
                    <h4 class="h4-md mb-3">Transport Unions</h4>
                    <p>The registered unions must make sure that their members register on the platform and specify the
                        union to which they belong when doing so. The unions must compel their members to follow the
                        integrated traffic management approach. </p>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.8s">
                    <h4 class="h4-md mb-3">Operators of Truck Parks</h4>
                    <p>Private park owners can register their parks on the platform and specify how much space each park has
                        available for holding bays. To make it possible for users to make reservations, all parks that are
                        available will be electronically linked.</p>
                </div>


                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <h4 class="h4-md mb-3">Drivers</h4>
                    <p>When a truck is nominated for a trip, the owner will pair the truck with a driver who has registered
                        on the platform. A driver is legitimately registered, and our business has the necessary paperwork
                        on hand.</p>
                </div>

                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.9s">
                    <h4 class="h4-md mb-3">The haulage firms</h4>
                    <p>In order for their trucks to have access to the ports, haulage companies are required to register
                        them on the platform.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="wide-tb-100 faqs">
        <div class="container">
            <div class="row">

                    <div class="col-sm-12">
                        <h3 class="">
                            Companies that deal in commodities <br/> and fast-moving consumer products:
                        </h3>
                    </div>

                    <ul>
                        <li>
                            To acquire access to the ports, these businesses must register their businesses and trucks on the platform and send a request to our business.
                        </li>
                    </ul>
            </div>
        </div>
    </section>
@endsection
