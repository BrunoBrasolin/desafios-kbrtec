<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogItem extends Component
{

    public $thumbnail;
    public $post_title;
    public $slug;
    public $post_date;
    public $extra_class;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($thumbnail = null,  $postTitle, $slug, $postDate, $extraClass = null)
    {
        $this->thumbnail = $thumbnail;
        $this->post_title = $postTitle;
        $this->slug = $slug;
        $this->post_date = $postDate;
        $this->extra_class = $extraClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-item');
    }
}
