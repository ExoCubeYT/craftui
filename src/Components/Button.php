<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $variant;

    public function __construct(string $variant = 'primary')
    {
        $this->variant = $variant;
    }

    public function render()
    {
        return view('craftui::components.button');
    }
}
