<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tiang Seri Design') - Tiang Seri Design</title>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

    <meta name="description" content="@yield('description', 'Trusted home builder & renovation expert with 20+ years. Full interior design & carpentry services in Negeri Sembilan, Selangor & KL.')">
    <link rel="icon" href="@yield('favicon', asset('favicon.ico'))">
    
    <meta property="og:title" content="@yield('og:title', 'Tiang Seri Design - Home Building & Interior Design Services')">
    <meta property="og:description" content="@yield('og:description', 'Trusted home builder & renovation expert with 20+ years. Full interior design & carpentry services in Negeri Sembilan, Selangor & KL.')">
    <meta property="og:image" content="@yield('og:image', asset('favicon.ico'))">
</head>
<body class="overflow-x-hidden bg-black">
    <section class="w-100 vh-100 sticky-top content">
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