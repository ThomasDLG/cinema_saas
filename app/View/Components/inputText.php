<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputText extends Component
{

    public $inputLabel;
    public $inputName;
    public $inputPlaceholder;

    public function __construct($inputLabel, $inputName, $inputPlaceholder)
    {
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->inputPlaceholder = $inputPlaceholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.global.input-text');
    }
}
