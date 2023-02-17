<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalCRUD extends Component
{
    public $dataToggle;
    public $modalTitle;

    public function __construct($dataToggle, $modalTitle)
    {
        $this->dataToggle = $dataToggle;
        $this->modalTitle = $modalTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.modal');
    }
}
