@extends('layouts.base-layout')
@section('title', 'Products')
@section('content')
<div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>
<section class="wide-tb-80">
    <div class="container pos-rel">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                <h2 class="mb-4 fw-7 txt-blue">
                    Callup
                </h2>
                <p>We aim at building cutting edge solutions to mobility and truck gridlock issues. We provide a smart
                    city system by integrating into truck mobility to render services like no other across the nation.
                    Technology is evolving and we are giving first hand experience to take this journey in tech with us.
                </p>
                <ul>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                </ul>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                <img src="{{ asset('assets/images/map-bg-orange.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="wide-tb-80">
    <div class="container pos-rel">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                <img src="{{ asset('assets/images/map-bg-orange.jpg') }}" alt="">
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                <h2 class="mb-4 fw-7 txt-blue">
                    Callup
                </h2>
                <p>We aim at building cutting edge solutions to mobility and truck gridlock issues. We provide a smart
                    city system by integrating into truck mobility to render services like no other across the nation.
                    Technology is evolving and we are giving first hand experience to take this journey in tech with us.
                </p>
                <ul>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                    <li>Control of truck movement to ensure free flow of traffic on access roads</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="wide-tb-70 bg-light-gray pb-5 footer-subscribe" id="subscrib">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex col-md-12 col-lg-6">
                <div class="d- align-items-center d-sm-inline-flex  w-100">
                    <div class="head">
                        <span class="d-block">SUBSCRIBE For</span> NEWSLETTER
                    </div>
                    <form class="flex-nowrap col ms-3">
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="submit" class="btn btn-theme bg-navy-blue">SUBSCRIBE</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
