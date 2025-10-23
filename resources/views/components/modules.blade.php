@props(['modules' => []])
<div class="mb-5">
    <h2 class="display-4 mb-3">Cari Module</h2>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach ($modules as $module)
            <div class="col">
                <div class="card shadow-sm h-100 text-center p-3">
                    <div class="mb-2">
                        <i class="fas {{ $module['icon'] }} fa-2x text-primary"></i>
                    </div>
                    <h5>{{ $module['title'] }}</h5>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-2">Lihat Modul</a>
                </div>
            </div>
        @endforeach
    </div>
</div