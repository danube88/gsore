<?php

namespace App\View\Components\Blog\SingleSidebar;

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
        return view('components.blog.single-sidebar.left-main');
    }
}
