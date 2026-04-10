<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $icon;

    public function __construct($type = 'info', $icon = null)
    {
        $this->type = $type;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('craftui::components.alert');
    }
}
