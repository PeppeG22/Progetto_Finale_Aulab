<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-4 poetsen-one-regular text-titolo">
                    {{ $article->title}}
                </h1>
            </div>
        </div>
    </div>


    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid" alt="...">

                <p class="card-text my-2">{{ $article->subtitle }}</p>

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
                    da <a href="{{route('article.byUser', $article->user)}}">{{ $article->user->name }}</a>
                </p>

                <hr>


                <p>{{$article->body}}</p>
                @if (Auth::user() && Auth::user()->is_revisor)

                <div class="container my-5">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-evenly">
                            <form action="{{route('revisor.acceptArticle', $article)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn">Accetta l'articolo</button>
                            </form>

                            <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn">Rifiuta l'articolo</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif

                <div class="text-center">

                    <a href="{{route('article.index')}}" class="text-secondary">Vai alla lista degli articoli</a>

                </div>


            </div>

        </div>

    </div>
</x-layout>