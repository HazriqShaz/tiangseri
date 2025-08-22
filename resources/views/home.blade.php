@extends('layouts.app')

@section('bg-content')
    <div class="position-relative flex-grow-1 overflow-auto d-flex flex-column justify-content-end">
        <div class="col-6 p-4">
            <h1 class="text-white">Tiang Seri Design</h1>
            <h5 class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit facilis magnam consectetur repudiandae consequuntur reprehenderit nemo, odit nisi unde assumenda obcaecati aliquam deserunt quod vitae corporis labore perspiciatis esse quam?</h5>
        </div>
    </div>
@endsection

@section('content')
    <div class="w-100 vh-100 sticky-top bg-light d-flex shadow-lg">
        <div class="col-6 pt-5" style="padding-left: 6rem;">
            <h1>What We Do</h1>
        </div>
        <div class="col-6 shadow-lg">
            <img class=" object-fit-cover w-100" src="{{ asset('images/IMG_20230807_231257.jpg') }}" alt="">
        </div>
    </div>
    <div class="w-100 vh-100 px-4 sticky-top bg-secondary">
        <h2>What We Do 2</h2>
    </div>
    <div class="w-100 vh-100 px-4 sticky-top bg-tertiary">
        <h2>What We Do 3</h2>
    </div>
@endsection