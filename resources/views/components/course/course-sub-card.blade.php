@props(['subTitle', 'subCode', 'courseCode'])
<button type="button" class="btn btn-light p-2 d-flex flex-column align-items-center gap-2">
    <div class="shadow-sm d-flex justify-content-center align-items-center rounded-3 bg-white"
         style="width: 10rem; height: 10rem;">
        <img src="{{ asset('img/courses/' . $courseCode . '/' . $subCode . '.png') }}"
             alt="img{{ $subCode }}"
             style="max-height: 80%; max-width: 80%; object-fit: contain;">
    </div>
    <p class="text-center text-truncate px-2 mb-0" style="max-width: 10rem;">
        {{ $subTitle }}
    </p>
</button>