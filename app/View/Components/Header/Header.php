<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Header extends Component
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
        return view('components.header.header');
    }

    /**
    * Bootstrap your package's services.
    */
    public function boot()
    {
        Blade::component('header', Header::class);
    }
}
