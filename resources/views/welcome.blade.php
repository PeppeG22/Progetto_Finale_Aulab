<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @if (session('alert'))
    <div class="alert alert-danger text-center">
        {{ session('alert') }}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-1 poetsen-one-regular text-titolo">
                    La Chiave del Sapere
                </h1>
            </div>
        </div>
    </div>




    <div class="container my-5">

        <div class="row justify-content-center">

            @foreach ($articles as $article)
            <div class="col-12">
                <div class="card mb-3 shadow bg-chiarissimo" id="card-hover">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <img src="{{ Storage::url($article->image) }}" class="img-cover rounded-start h-100" alt="{{ $article->title }}">
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="card-body">
                                <a href="{{ route('article.show', $article) }}" class="card-title text-titolo fs-5" id="titolo-hover">{{ $article->title }}</a>

                                <p class="card-text">{{ $article->subtitle }}</p>
                                @if($article->category)

                                <p class="small text-muted">Categoria:
                                    <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{ $article->category->name }}</a>
                                </p>

                                @else

                                <p class="small text-muted">Nessuna categoria</p>

                                @endif
                                <p class="small text-muted">
                                    @foreach ($article->tags as $tag)
                                    #{{$tag->name}}
                                    @endforeach
                                </p>
                                
                                <p>Redatto il {{ $article->created_at->format('d/m/Y') }}
                                    da <a href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
                                </p>
                                <div class="row align-items-center">
                                    <a href="{{ route('article.show', $article) }}" class="btn col-4">Scopri di piu'</a>
                                    <p class="col-8 card-subtitle text-muted fst-italic small ">Tempo di Lettura: {{ $article->readDuration() }} min</p>
                                
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</x-layout>