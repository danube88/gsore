<?php

namespace App\View\Components\Header\Area;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class TopArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header.area.top-area');
    }

    /**
    * Bootstrap your package's services.
    */
    public function boot()
    {
        Blade::component('top-area', TopArea::class);
    }
}
