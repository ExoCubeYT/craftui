<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public ?string $label;

    public function __construct(?string $label = null)
    {
        $this->label = $label;
    }

    public function render()
    {
        return view('craftui::components.input');
    }
}
