<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid p-0">
        <div class=" d-none d-md-flex col-5 justify-content-end pt-2">
            <ul class="navbar-nav">
                <li class="me-5"><a class="nav-link text-secondary" href="{{ route('home') }}">Home</a></li>

                <li class=""><a class="nav-link text-secondary" href="#">About</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-2 d-flex justify-content-center">
            <a class="" href="{{ route('home') }}">
                <svg height="80" viewBox="0 0 408.000000 612.000000" preserveAspectRatio="xMidYMid meet">
                    <x-svg-logo/>
                </svg>
            </a>
        </div>
        <div class="col-12 d-flex d-md-none justify-content-center">
            <ul class="navbar-nav text-center row flex-row pt-3">
                <li class="col-3"><a class="nav-link text-secondary" href="{{ route('home') }}">Home</a></li>
                <li class="col-3"><a class="nav-link text-secondary" href="#">About</a></li>
                <li class="col-3"><a class="nav-link text-secondary" href="#">Portfolio</a></li>
                <li class="col-3"><a class="nav-link text-secondary" href="{{ route(name: 'contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-md-flex col-5 justify-content-start pt-2">
            <ul class="navbar-nav">
                <li class="me-5"><a class="nav-link text-secondary" href="#">Portfolio</a></li>
                <li class=""><a class="nav-link text-secondary" href="{{ route(name: 'contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>