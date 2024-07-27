@extends('site.layout.main')

@section('website-page-title', 'proservices')

@section('website-main-section')

    <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{ asset('website/assets/images/Animated Shape.svg') }}')">
        <div class="container">

            <div class="hero-content">

                <h1 class="h1 hero-title">PRO Services</h1>

                <p class="hero-text">
                    Best PRO Services in Qatar" encompasses all activities related to governmental documents and
                    applications. Examples include company license renewals, labour and immigration processes, customs, visa
                    services, attestation services, and legal translations.
                </p>
                <p class="hero-text">
                    If you plan to start a business in Qatar or need to interact with government authorities for various
                    purposes, hiring a professional PRO service provider will greatly benefit you.
                </p>

                <div class="btn-wrapper">

                    {{-- <a href="{{url('/about')}}" class="btn btn-primary">Explore Now</a> --}}

                    <a href="{{ url('/contact') }}" class="btn btn-outline">Contact Us</a>

                </div>

            </div>

            <div class="hero-slider" data-slider>

                <div class="slider-inner">
                    <ul class="slider-container" data-slider-container>

                        <li class="slider-item">

                            <figure class="img-holder" style="--width: 575; --height: 550;">
                                <img src="{{ asset('website/assets/images/services/image-02.png') }}" width="575"
                                    height="550" alt="" class="img-cover">
                            </figure>

                        </li>
                    </ul>
                </div>

                <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
                    <ion-icon name="arrow-back"></ion-icon>
                </button>

                <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                    <ion-icon name="arrow-forward"></ion-icon>
                </button>

            </div>

        </div>
    </section>

    <section class="section" style="margin-top: 3rem;" aria-labelledby="about-label">
        <div class="container">

            {{-- <figure class="about-banner">
                <img src="{{ asset('website/assets/images/about-banner.png') }}" width="800" height="580"
                    loading="lazy" alt="about banner" class="w-100">
            </figure> --}}

            <div class="about-content">
                <p>
                    The demand for Evovx's PRO services in Qatar has surged due to economic growth, creating numerous
                    opportunities across various sectors. Evovx offers a range of PRO services with guaranteed efficiency
                    and quality. Consulting a specialized agency like Evovx, known for its experienced staff and expertise
                    in legal processes, can save time and provide proper guidance on legal matters. PRO services help with
                    obtaining licenses, permits, visas, and approvals, handling all paperwork and formalities to save you
                    time and reduce hassle.
                </p>
            </div>

        </div>
    </section>


    <section class="stats" style="color: white; font-size: 21px;" aria-label="our stats">
        <div ="container">

        <ul class="stats-card has-bg-image"
            style="background-image: url('{{ asset('website/assets/images/Stock Chart.svg') }}')">

            <div style="margin-bottom: 3rem;">
                <p>Best PRO Services in Qatar" encompasses all activities related to governmental documents and
                    applications. Examples include company license renewals, labour and immigration processes, customs, visa
                    services, attestation services, and legal translations.
                </p>
            </div>

            <div style="margin-bottom: 3rem;">
                <p>If you plan to start a business in Qatar or need to interact with government authorities for various
                    purposes, hiring a professional PRO service provider will greatly benefit you.</p>
            </div>

        </ul>

        </div>
    </section>


    <section class="section" aria-labelledby="feature-label">
        <div class="container">

            {{-- <figure class="feature-banner">
                <img src="{{ asset('website/assets/images/feature-banner.png') }}" width="800" height="531"
                    loading="lazy" alt="feature banner" class="w-100">
            </figure> --}}

            <div class="feature-content">

                <h2 class="h5 section-title">
                    Some of the services offered are:
                </h2>

                <ul class="feature-list">

                    <li>
                        <div class="feature-card" style="margin-top: 3rem;">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Issuance/Amendment/Renewal of Commercial Registration
                            </span>
                        </div>


                    </li>

                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Issuance/Amendment/Renewal of Municipality License
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Adding or cancelling any commercial activity
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Adding or removing partners in the CR
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Processing documents in Labor/Immigration/Economic and other government departments
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Issuance/Renewal of WLL License
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Assistance for Trademark/Production Registration
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Changing Trade Name/Appointment of Manager
                            </span>
                        </div>


                    </li>
                    <li>
                        <div class="feature-card">

                            <div class="card-icon">
                                <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                            </div>

                            <span class="span">
                                Assistance for Company Classification services
                            </span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </section>

@endsection
