<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarouselItem extends Component
{
    public $active;
    public $image;
    public $label;

    public function __construct($image, $label, $active = '')
    {
        $this->active = $active;
        $this->image = $image;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel-item');
    }
}
