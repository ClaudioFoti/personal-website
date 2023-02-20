<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Planet extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $planetColor1,
        public string $planetColor2,
        public string $planetColor3,
        public string $ringColor,
        public string $ringOuterColor,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.planet');
    }
}
