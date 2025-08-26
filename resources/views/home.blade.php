@extends('layouts.app')

@section('bg-content')
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
    <div class="d-none d-lg-flex w-100 vh-100 sticky-top bg-primary d-flex shadow-lg">
        <div class="col-5 h-100 ps-5 pt-5 shadow-lg d-flex flex-column">
            <h2 class=" display-2 text-secondary nowrap">
                BUILDING HOMES,
                <br>
                DESIGNING DREAMS
            </h2>
            <br>
            <h2 class="display-5 text-tertiary nowrap ">
                Our Services
            </h2>
            <span class="text-secondary h4 light nowrap">
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Architecture & Interior Design Consultation</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Residential & Commercial Construction</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Kitchen & Bathroom Transformations</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Home Building & Renovation</p>
            </span>
            <br>
            <div class="w-auto">
                <a href="#" class="btn btn-outline-quartary btm-sm rounded-pill border-0">
                    <h2 class="display-5 text-secondary nowrap">
                        <i class="bi bi-arrow-up-right-circle display-6"></i> ABOUT US
                    </h2>
                </a>
            </div>
        </div>
        <div class="col z-n1 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100 overlay"></div>
            <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
        </div>

    </div>
    <div class="d-block w-100 vh-100 sticky-top d-lg-none shadow-lg">
        <div class="position-absolute top-0 start-0 w-100 h-100 overlay"></div>
        <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
    </div>

    <div id="carouselExampleFade" class="w-100 vh-100 sticky-top bg-primary shadow-lg carousel carousel-fade slide">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="{{ asset('images/IMG20210926132501.jpg') }}" class="img-fluid object-fit-cover" alt="...">
                    <div class="carousel-caption text-secondary text-start">
                        <h5>First slide label</h5>
                        <p class="text-white-50">Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('images/bgsso.jpg') }}" class="img-fluid object-fit-cover" alt="...">
                    <div class="carousel-caption text-secondary text-start">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption text-secondary text-start">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <div class="w-100 vh-100 px-4 sticky-top bg-tertiary shadow-lg">
        <h2>Contact</h2>
    </div>
@endsection