<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CareerElement extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $place,
        public string $link,
        public string $position,
        public string $location,
        public Carbon $startDate,
        public $endDate,
        public string $description
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.career-element');
    }
}
