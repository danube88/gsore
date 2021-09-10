<?php

namespace App\View\Components\Shop\Layout\ListSidebar;

use Illuminate\View\Component;

class LeftMain extends Component
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
        return view('components.shop.layout.list-sidebar.left-main');
    }
}
