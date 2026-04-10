<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    public int $value;
    public ?int $level;

    public function __construct(int $value = 0, ?int $level = null)
    {
        $this->value = max(0, min(100, $value));
        $this->level = $level;
    }

    public function render()
    {
        return view('craftui::components.progress');
    }
}
