<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modules extends Component
{
    public $modules;
    /**
     * Create a new component instance.
     */
    public function __construct($modules = [])
    {
        $this->modules = $modules;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modules');
    }
}
