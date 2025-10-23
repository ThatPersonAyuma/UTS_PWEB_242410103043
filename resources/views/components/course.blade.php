@props([
    'courses' => [],
    'modules' => [],
    'articles' => [],
])
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 p-3">
        <div>
            <h2 class="display-4"><strong>Jalur Belajar</strong></h2>
            @foreach ($courses as $course)
                <x-course.course-card 
                    :title="$course->title"
                    :description="$course->description"
                    :progress="$course->progress"
                    :courseCode="$course->courseCode"
                    :subCourses="$course->subCourses"
                />
            @endforeach
        </div>
        <div>
            <x-modules :modules="$modules"/>
        </div>
        <div>
            <x-artikel :articles="$articles"/>
        </div>
    </div>
    <div class="col-1"></div>
</div>