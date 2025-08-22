<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'Laravel')}}</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden">
    <section class="vw-100 vh-100 sticky-top">
        <div class="position-relative w-100 h-100 d-flex flex-column">
            <div class="bg-img"></div>
            @include('layouts.nav')
            @yield('bg-content')
        </div>
    </section>
    
    <section class="vw-100">
        @yield('content')
    </section>
</body>
</html>