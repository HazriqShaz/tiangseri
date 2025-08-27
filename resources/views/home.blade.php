@extends('layouts.app')

@section('header')
    <div class="bg-img bg-overlay"></div>
    <div class="position-relative flex-grow-1 overflow-auto d-flex flex-column justify-content-end">
        <div class="col-10 col-lg-6 p-4">
            <h1 class="text-secondary">
                TIANG SERI DESIGN
            </h1>
            <h5 class="text-white-50">
                HOME BUILDING & INTERIOR DESIGN SERVICES
                <br>
                <span class="light">
                    Kuala Lumpur
                    <br>
                    +60 19 790 1309
                </span>
            </h5>
        </div>
    </div>
@endsection

@section('content')
    <!-- First Content -->
    <div class="d-none d-lg-flex w-100 vh-100 sticky-top bg-gradient d-flex shadow-lg">
        <div class="col-5 h-100 ps-5 pt-5 shadow-lg d-flex flex-column">
            <h2 class=" display-2 text-secondary nowrap">
                BUILDING HOMES,
                <br>
                DESIGNING DREAMS
            </h2>
            <br>
            <h2 class="display-5 nowrap">
                Services We Provide
            </h2>
            <span class="text-secondary h4 light nowrap">
                <p><i class="bi bi-caret-right-fill text-body"></i> Architecture & Interior Design Consultation</p>
                <p><i class="bi bi-caret-right-fill text-body"></i> Residential & Commercial Construction</p>
                <p><i class="bi bi-caret-right-fill text-body"></i> Kitchen & Bathroom Transformations</p>
                <p><i class="bi bi-caret-right-fill text-body"></i> Home Building & Renovation</p>
            </span>
            <br>
            <div class="w-auto">
                <a href="#" class="btn btn-outline-quartary btm-sm rounded-circle border-0">
                    <i class="bi bi-arrow-up-right-circle display-3 text-secondary"></i>
                </a>
            </div>
        </div>
        <div class="col z-n1 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100 about-overlay"></div>
            <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
        </div>

    </div>
    <!-- Mobile -->
    <div class="d-block w-100 vh-100 sticky-top d-lg-none shadow-lg">
        <div class="position-absolute top-0 start-0 w-100 h-100 z-2">
            <div class="h-100 d-flex flex-column justify-content-center ps-3">
                <h2 class=" display-4 text-secondary">
                    BUILDING HOMES,
                    <br>
                    DESIGNING DREAMS
                </h2>
                <br>
                <h2 class="display-6 text-secondary">
                    Services We Provide
                </h2>
                <span class="text-white-50 h4 light">
                    <p><i class="bi bi-caret-right-fill text-secondary"></i> Architecture & Interior Design Consultation</p>
                    <p><i class="bi bi-caret-right-fill text-secondary"></i> Residential & Commercial Construction</p>
                    <p><i class="bi bi-caret-right-fill text-secondary"></i> Kitchen & Bathroom Transformations</p>
                    <p><i class="bi bi-caret-right-fill text-secondary"></i> Home Building & Renovation</p>
                </span>
                <br>
                <div class="w-auto">
                    <a href="#" class="btn btn-outline-quartary btm-sm rounded-circle border-0">
                        <i class="bi bi-arrow-up-right-circle display-3 text-secondary"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100 about-mobile-overlay z-1"></div>
        <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
    </div>
    <!-- Mobile End -->
    <!-- First Content End -->

    <!-- Second Content -->
    <div id="carouselExampleFade" class="w-100 vh-100 sticky-top bg-primary shadow-lg carousel carousel-fade slide">
        <div class="carousel-inner h-100">
            <x-carousel-item image="{{ asset('images/IMG20210926132501.jpg') }}" label="First slide label"
                content="Some representative placeholder content for the first slide." active="active" />
            <x-carousel-item image="{{ asset('images/bgsso.jpg') }}" label="Second slide label"
                content="Some representative placeholder content for the second slide." />
            <x-carousel-item image="{{ asset('images/bgsso.jpg') }}" label="Third slide label"
                content="Some representative placeholder content for the third slide." />
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
    <div class="w-100 sticky-top bg-gradient shadow-lg">
        <x-contact-footer />
    </div>
    <!-- Third Content End -->
@endsection