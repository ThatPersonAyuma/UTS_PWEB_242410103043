<?php

namespace App\View\Components\Course;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseSubCard extends Component
{
    public $courseCode, $subCode, $subTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($courseCode, $subCode, $subTitle)
    {
        $this->courseCode = $courseCode;
        $this->subCode = $subCode;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.course-sub-card');
    }
}
