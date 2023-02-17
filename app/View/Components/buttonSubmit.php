<?php

namespace App\View\Components;

use Illuminate\View\Component;

class buttonSubmit extends Component
{

    public $btn;

    public function __construct($btn)
    {
        $this->btn = $btn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.global.button-submit');
    }
}
