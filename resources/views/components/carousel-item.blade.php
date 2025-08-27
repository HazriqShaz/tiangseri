<div class="carousel-item {{ $active }} h-100">
    <!-- <div class="position-absolute top-0 start-0 w-100 h-100 carousel-overlay"></div> -->
    <img src="{{ $image }}" class="img-fluid object-fit-cover" alt="...">
    <div class="carousel-caption text-secondary text-start start-0 ps-5">
        <h5>{{ $label }}</h5>
        <p class="text-white-50">{{ $content }}</p>
    </div>
</div>