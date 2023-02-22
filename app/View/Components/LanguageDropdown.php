<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class LanguageDropdown extends Component
{
    public array $languages;
    public array $active_language;
    /**
     * Create a new component instance.
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
     */
    public function render(): View|Closure|string
    {
        return view('components.language-dropdown');
    }
}
