<div class="col-sm-12 col-md-6 col-lg-4 p-4">

    <div class="card card-show h-100 shadow bg-chiarissimo">

        <img src="{{ Storage::url($article->image) }}" class="card-img-top img-cover" alt="...">

        <div class="card-body">
            <h5 class="card-title text-titolo">{{ $article->title }}</h5>

            <p class="card-text">{{ $article->subtitle }}</p>

            @if ($article->category)
                <p class="small text-muted">Categoria:
                    <a href="{{ route('article.byCategory', $article->category) }}"
                        class="text-capitalize text-muted">{{ $article->category->name }}</a>
                </p>
            @else
                <p class="small text-muted">Nessuna categoria</p>
            @endif
            <p class="small text-muted">
                @foreach ($article->tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
            <p class="card-subtitle text-muted fst-italic small">Tempo di Lettura: {{ $article->readDuration() }} min</p>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">

            <p>Redatto il {{ $article->created_at->format('d/m/Y') }}
                da <a href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
            </p>

            <a href="{{ route('article.show', $article) }}" class="btn">Scopri di piu'</a>

        </div>
    </div>
</div>
