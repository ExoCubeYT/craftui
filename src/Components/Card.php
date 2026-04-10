<?php

namespace Exocubeyt\CraftUI\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('craftui::components.card');
    }
}
