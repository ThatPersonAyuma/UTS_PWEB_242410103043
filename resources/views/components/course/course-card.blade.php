@props(['title', 'description', 'progress' => 0, 'subCourses' => [], 'courseCode'])

@push('styles')
<style>
    .subcourse-slider {
        scroll-snap-type: x mandatory;
        scrollbar-width: thin; 
        -webkit-overflow-scrolling: touch; 
    }

    .subcourse-slider > * {
        flex: 0 0 auto; 
        scroll-snap-align: start;
    }
</style>
@endpush

@push('script')
<script>
    function scrollSlider(direction, event) {
        const slider = document.querySelector("#slider-{{ $courseCode }}");
        const scrollAmount = 200;
        if (direction === 'left') slider.scrollLeft -= scrollAmount;
        else slider.scrollLeft += scrollAmount;
    }
</script>
@endpush

<div class="card px-4 py-2">
    <div class="d-flex flex-column flex-lg-row justify-content-between">
        <p class="display-6"><strong>{{ $title }}</strong></p>
        <button class="btn btn-primary shadow-sm"
            style="" onclick="">
            Unsubcribe   
        </button>
    </div>
    <h5 >{{ $description }}</h5>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: {{ $progress }}%">{{ $progress }}%</div>
    </div>
<div class="position-relative">
    <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y shadow-sm"
        style="z-index:10;" onclick="scrollSlider('left')">
        ‹
    </button>
    <div id="slider-{{ $courseCode }}" class="subcourse-slider d-flex flex-nowrap overflow-auto gap-3 py-2">
        @foreach ($subCourses as $subCourse)
            <x-course.course-sub-card 
                :courseCode="$courseCode"
                :subCode="$subCourse->subCode"
                :subTitle="$subCourse->subTitle"
                />
        @endforeach
    </div>
        <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y shadow-sm"
        style="z-index:10;;" onclick="scrollSlider('right')">
        ›
    </button>
</div>
</div>
