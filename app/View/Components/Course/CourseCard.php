<?php

namespace App\View\Components\Course;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseCard extends Component
{
    public $courseCode, $title, $description, $progress, $subCourses;
    /**
     * Create a new component instance.
     */
    public function __construct($courseCode, $title, $description, $progress, $subCourses = [])
    {
        $this->courseCode = $courseCode;
        $this->title = $title;
        $this->description = $description;
        $this->progress = $progress;
        $this->subCourses = $subCourses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course.course-card');
    }
}
