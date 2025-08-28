<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden bg-black">
    <section class="w-100 vh-100 sticky-top">
        <div class="position-relative w-100 h-100 d-flex flex-column">
            @include('layouts.nav')
            @yield('header')
        </div>
    </section>
    
    <section class="w-100">
        @yield('content')
    </section>
</body>
</html>