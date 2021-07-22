<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DescontoItem extends Component
{

    public $image;
    public $post_title;
    public $slug;
    public $subtitulo;
    public $desconto;
    public $extra_class;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image = null, $postTitle, $slug, $subtitulo = null, $desconto, $extraClass = null)
    {
        $this->image = $image;
        $this->post_title = $postTitle;
        $this->slug = $slug;
        $this->subtitulo = $subtitulo;
        $this->desconto = $desconto;
        $this->extra_class = $extraClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.desconto-item');
    }
}
