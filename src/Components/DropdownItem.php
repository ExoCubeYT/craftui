<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class DropdownItem extends Component
{
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return view('craftui::components.dropdown-item');
    }
}
