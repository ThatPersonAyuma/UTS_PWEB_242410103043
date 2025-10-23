<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\View\Components\Course;

class course extends Component
{
    public $courses;
    public $modules;
    public $articles;
    /**
     * Create a new component instance.
     */
    public function __construct($courses = [],$modules = [],$articles = [])
    {
        $this->courses = $courses;
        $this->modules = $modules;
        $this->articles = $articles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course');
    }
}
