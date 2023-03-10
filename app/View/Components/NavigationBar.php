<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class NavigationBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation-bar');
    }
}
