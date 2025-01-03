<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{
    /* Create a new component instance. */
    public function __construct(
        public string $color,
        public string $href,
    ) {}

    /* Get the view / contents that represent the component. */
    public function render()
    {
        return view('components.nav-item');
    }
}
