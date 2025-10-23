@props([
    'welcome',
    'name',
])
<div class="container py-5 text-center">
    <div class="card p-4 shadow-sm rounded-4">
        <h2>👋 Hai {{ $name }}!</h2>
        <h2 class="mb-3">{{ $welcome }}</h2>
        <p class="text-muted">Semoga harimu menyenangkan dan penuh pengetahuan!</p>
    </div>
</div>