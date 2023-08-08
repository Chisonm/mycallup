@extends('layouts.base-layout')
@section('title', 'Contact Us')
@section('content')
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="breadcrumbs-description">
                Please use the form below to reach us or e-mail support@mycallup.com
            </div>
        </div>
    </div>

    {{-- contact us area --}}
    <section class="wide-tb-100 pos-rel">
        <div class="container">
            <div class="contact-map-bg option">
                <img src="{{ asset('assets/images/map-bg.png') }}" alt="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="h2-md mb-4 fw-7 txt-blue">Our Address</h2>

                    <div class="contact-detail-shadow no-shadow mb-5 wow fadeInLeft" data-wow-duration="0"
                        data-wow-delay="0s">
                        <h4>Lagos</h4>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-google-map"></i> <span>3A Gbenga Ademulegun Lane, Parkview, Ikoyi,
                                Lagos.</span>
                        </div>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-phone"></i> <span>+234 0703 410 6000</span>
                        </div>
                        <div class="text-nowrap d-flex align-items-start items">
                            <i class="icofont-email"></i> <a href="mailto:info@mycallup.com"><span class="__cf_email__"
                                    data-cfemail="2e494b5c434f40576e424149544b4b004d4143">info@mycallup.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <h2 class="h2-md mb-4 fw-7 txt-blue">Say Hello! Its Free</h2>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="">
                        <div class="free-quote-form contact-page-option wow fadeInRight" data-wow-duration="0"
                            data-wow-delay="0s">
                            <form action="{{ route('submitContact') }}" method="POST" class="rounded-field">
                                @csrf
                                <div class="g-4 row mb-4">
                                    <div class="col-md mb-0">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                            required placeholder="Your Name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md mb-0">
                                        <input type="text" name="email"
                                            class="form-control @error('email') is-invalid @enderror" required
                                            placeholder="Email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="g-4 row mb-4">
                                    <div class="col-md mb-0">
                                        <select title="Please choose a package" required name="subject"
                                            class="form-control wide @error('subject') is-invalid @enderror">
                                            <option value="">Subject Type</option>
                                            <option value="Business Proposal">Business Proposal</option>
                                            <option value="Complaints">Complaints</option>
                                        </select>
                                        @error('subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="g-4 row mb-4">
                                    <div class="col-md mb-0">
                                        <textarea name="message" rows="7" placeholder="Message" class="form-control"></textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <button name="contactoption" type="submit"
                                        class="form-btn btn-theme bg-orange w-100 text-center">Submit Now <i
                                            class="icofont-rounded-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
