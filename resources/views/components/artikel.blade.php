@props(['articles' => []])
<div class="mb-5">
    <h2 class="display-4 mb-3">Artikel Saya</h2>
    <div class="row row-cols-1 row-cols-md-2 g-3">
    @foreach ($articles as $article)
        <div class="col">
            <div class="card shadow-sm h-100 p-3">
                <h5 class="text-truncate">{{ $article['title'] }}</h5>
                <p class="text-muted mb-2" style="font-size: 0.9rem;">{{ $article['date'] }}</p>
                <p class="text-truncate">{{ $article['excerpt'] }}</p>
                <a href="#" class="btn btn-outline-secondary btn-sm">Baca Selengkapnya</a>
            </div>
        </div>
    @endforeach
    </div>
</div>