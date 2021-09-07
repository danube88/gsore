<?php

namespace App\View\Components\Blog\ListSidebar;

use Illuminate\View\Component;

class RightMain extends Component
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
        return view('components.blog.list-sidebar.right-main');
    }
}
