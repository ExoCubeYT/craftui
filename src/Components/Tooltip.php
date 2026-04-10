<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Tooltip extends Component
{
    public string $text;
    public ?string $subtext;

    public function __construct(string $text, ?string $subtext = null)
    {
        $this->text = $text;
        $this->subtext = $subtext;
    }

    public function render()
    {
        return view('craftui::components.tooltip');
    }
}
