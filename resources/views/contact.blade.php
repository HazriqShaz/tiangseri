@extends('layouts.app')
@section('title', $pageTitle)

@section('header')
<div class="bg-img bg-overlay"></div>
    <div class="position-relative w-100 h-100 glass mt-4" style=" border-bottom: 0;">
        <div class="position-absolute top-0 start-0 w-100 h-100 behind-glass-overlay z-n1"></div>
        <x-contact-footer/>
    </div>
@endsection
