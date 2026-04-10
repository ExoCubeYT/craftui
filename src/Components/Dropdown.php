<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public string $label;

    public function __construct(string $label = 'Select')
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('craftui::components.dropdown');
    }
}
