<?php

namespace App\View\Components\Blog\SingleSidebar\Section;

use Illuminate\View\Component;

class BlogComment extends Component
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
        return view('components.blog.single-sidebar.section.blog-comment');
    }
}
