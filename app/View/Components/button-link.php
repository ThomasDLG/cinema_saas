<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button-link extends Component
{

    public $link;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $type)
    {
        $this->link = $link;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
