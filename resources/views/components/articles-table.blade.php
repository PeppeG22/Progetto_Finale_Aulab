<table class="table table-striped table-hover">

    <thead class="">

        <tr>
            <th scope="col" class="text-titolo bg-chiarissimo">#</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Titolo</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Sottotitolo</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Redattore</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Azioni</th>
        </tr>

    </thead>

    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row" class="text-titolo bg-chiarissimo">{{$article->id}}</th>
            <td class="text-titolo bg-chiarissimo">{{$article->title}}</td>
            <td class="text-titolo bg-chiarissimo">{{$article->subtitle}}</td>
            <td class="text-titolo bg-chiarissimo">{{$article->user->name}}</td>
            <td class="bg-chiarissimo">

                @if (is_null($article->is_accepted))
                <a href="{{route('article.show', $article)}}" class="btn">Leggi l'articolo</a>
                @else
                <form action="{{route('revisor.undoArticle', $article)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Riporta alla revisione</button>
                </form>

                @endif
            </td>

        </tr>
        @endforeach

        
    </tbody>
</table>