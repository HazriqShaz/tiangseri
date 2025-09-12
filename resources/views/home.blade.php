@extends('layouts.app')
@section('title', $pageTitle)

@section('header')
    <div class="bg-img bg-overlay"></div>
    <div class="position-relative flex-grow-1 overflow-auto d-flex flex-column justify-content-end">
        <div class="col-10 col-lg-6 ps-4 pb-5 pb-sm-4">
            <h1 class="text-light">
                TIANG SERI DESIGN
            </h1>
            <h5 class="text-secondary">
                HOME BUILDING & INTERIOR DESIGN SERVICES
                <br>
                <span class="text-white-50 light">
                    Seremban, Selangor, Kuala Lumpur
                    <br>
                    +60 19 790 1309
                </span>
            </h5>
        </div>
    </div>
@endsection

@section('content')
    <!-- First Content -->
    <div class="content d-none d-lg-flex w-100 vh-100 sticky-top glass d-flex shadow-lg">
        <div class="position-absolute top-0 start-0 w-100 h-100 behind-glass-overlay z-n1"></div>
        <div class="col-5 h-100 ps-5 pt-5 d-flex flex-column">
            <h2 class=" display-2 text-light nowrap">
                BUILDING HOMES,
                <br>
                DESIGNING DREAMS
            </h2>
            <br>
            <h2 class="display-6 nowrap text-secondary">
                Services We Provide
            </h2>
            <span class="text-light h4 light nowrap" style="--bs-text-opacity: .7;">
                <p><i class="bi bi-asterisk h5 pe-3 text-primary"></i> Architecture & Interior Design Consultation</p>
                <p><i class="bi bi-asterisk h5 pe-3 text-primary"></i> Residential & Commercial Construction</p>
                <p><i class="bi bi-asterisk h5 pe-3 text-primary"></i> Kitchen & Bathroom Transformations</p>
                <p><i class="bi bi-asterisk h5 pe-3 text-primary"></i> Home Building & Renovation</p>
            </span>
        </div>
        <div class="col z-n1 position-relative h-100 border-1">
            <div class="position-absolute top-0 start-0 w-100 h-100 about-overlay d-inline-flex align-items-end justify-content-end px-5 py-4">
                <a href="#" class="underline text-light d-inline-flex align-items-center extra-light h3">
                    About
                    <i class="ps-2 bi bi-box-arrow-up-right h5"></i>
                </a>
            </div>
            <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
        </div>

    </div>
    <!-- Mobile -->
    <div class="content d-block d-lg-none w-100 vh-100 sticky-top shadow-lg ">
        <div class="position-absolute top-0 start-0 w-100 h-100 z-2 d-flex flex-column justify-content-center align-items-center">
            <div class="glass px-5 py-5 col-10 col-md-7 text-center text-md-start" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;">
                <h2 class=" text-light">
                    BUILDING HOMES,
                    <br>
                    DESIGNING DREAMS
                </h2>
                <br>
                <h4 class="text-secondary">
                    Services We Provide
                </h4>
                <span class="text-white-50 light text-start d-inline-block">
                    <p><i class="bi bi-asterisk pe-3 text-primary"></i> Architecture & Interior Design Consultation
                    </p>
                    <p><i class="bi bi-asterisk pe-3 text-primary"></i> Residential & Commercial Construction</p>
                    <p><i class="bi bi-asterisk pe-3 text-primary"></i> Kitchen & Bathroom Transformations</p>
                    <p><i class="bi bi-asterisk pe-3 text-primary"></i> Home Building & Renovation</p>
                </span>
                <br>
                <div class="w-auto text-end ">
                    <a href="#" class="underline text-light d-inline-flex align-items-center extra-light h4 py-3">
                        About
                        <i class="ps-2 bi bi-box-arrow-up-right h5"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 about-mobile-overlay z-1 "></div>
        <img class=" object-fit-cover w-100 h-100 " src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
    </div>
    <!-- Mobile End -->
    <!-- First Content End -->

    <!-- Second Content -->
    <div id="carouselExampleFade" class="w-100 vh-100 sticky-top shadow-lg carousel carousel-fade slide "
        style=" border-top:1px solid rgba(255, 255, 255, 0.18);">
        <div class="carousel-inner h-100 content">
            <x-carousel-item image="{{ asset('images/puncakalam/IMG20231202135105.jpg') }}" label="Puncak Alam"
                active="active" />
            <x-carousel-item image="{{ asset('images/centralpark/IMG20240924145853.jpg') }}" label="Central Park" />
            <x-carousel-item image="{{ asset('images/nusari/IMG20240924100424.jpg') }}" label="Nusari Bayu" />
        </div>
        <button class="carousel-control-prev" style=" width: 6%;" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style=" width: 6%;" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Second Content End -->

    <!-- Third Content -->
    <div class="w-100 h-100 sticky-top glass shadow-lg">
        <div class="position-absolute top-0 start-0 w-100 h-100 behind-glass-overlay z-n1"></div>

        <x-contact-footer />
    </div>
    <!-- Third Content End -->
@endsection