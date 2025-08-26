@extends('layouts.app')

@section('bg-content')
    <div class="position-relative flex-grow-1 overflow-auto d-flex flex-column justify-content-end">
        <div class="col-10 col-lg-6 p-4">
            <h1 class="text-white">
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
            <h2 class="display-4 text-tertiary nowrap">
                Services Provided
            </h2>
            <span class="text-secondary h4 light nowrap">
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Architecture & Interior Design Consultation</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Residential & Commercial Construction</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Kitchen & Bathroom Transformations</p>
                <p><i class="bi bi-caret-right-fill text-tertiary"></i> Home Building & Renovation</p>
            </span>
            <br>
            <a href="#" class="">
                <h2 class="display-3 text-secondary nowrap">
                    ABOUT US <i class="bi bi-arrow-up-right-circle text-quartary"></i>
                </h2>  
            </a>
        </div>
        <div class="col z-n1 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100 overlay"></div>
            <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
        </div>

    </div>
    <div class="d-block w-100 vh-100 sticky-top d-lg-none shadow-lg">
        <img class=" object-fit-cover w-100 h-100" src="{{ asset('images/IMG20210926132501.jpg') }}" alt="">
    </div>

    <div class="w-100 vh-100 px-4 sticky-top bg-primary shadow-lg">
        <h2>Portfolio</h2>
    </div>
    <div class="w-100 vh-100 px-4 sticky-top bg-tertiary shadow-lg">
        <h2>Contact</h2>
    </div>
@endsection