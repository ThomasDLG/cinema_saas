<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputFile extends Component
{
    
    public $inputName;

    public function __construct($inputName)
    {
        $this->inputName = $inputName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.global.input-file');
    }
}
