@props([
    'src',
    'alt',
    'size' => 60,
])
<div class="d-flex justify-content-center align-items-center">
    <img 
        src="{{ asset('img/photoProfile/' . $src . '.jpg') }}"
        alt="{{ $alt }}" 
        width="{{ $size }}px" 
        height="{{ $size }}px"
        class="rounded-circle object-fit-cover border border-3 border-secondary">
</div>