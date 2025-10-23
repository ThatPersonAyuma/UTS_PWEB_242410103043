<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profile extends Component
{
    public $stats;
    public $student;
    /**
     * Create a new component instance.
     */
    public function __construct($stats, $student)
    {
        $this->stats = $stats;
        $this->student = $student;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile');
    }
}
