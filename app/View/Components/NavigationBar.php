<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class NavigationBar extends Component
{
    public array $languages;
    public array $active_language;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->languages = config('claudiofoti.languages');

        if(session()->has('locale')){
            $locale = session('locale');
        }
        else{
            $locale = App::getFallbackLocale();
        }

        $this->active_language = $this->languages[$locale];
        unset($this->languages[$locale]);
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
