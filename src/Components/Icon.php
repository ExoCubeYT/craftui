<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $name;
    public string $size;

    public function __construct(string $name, string $size = 'md')
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function render()
    {
        return view('craftui::components.icon');
    }
}
