<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputTextLabel extends Component
{

    public $label;
    public $name;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $id)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-text-label');
    }
}
