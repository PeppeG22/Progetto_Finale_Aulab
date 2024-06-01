<table class="table table-striped table-hover">

    <thead class="">

        <tr>
            <th scope="col" class="text-titolo bg-chiarissimo">#</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Titolo</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Sottotitolo</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Categoria</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Tag</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Data di pubblicazione</th>
            <th scope="col" class="text-titolo bg-chiarissimo">Azioni</th>
        </tr>

    </thead>

    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row" class="text-titolo bg-chiarissimo">{{$article->id}}</th>
            <td class="text-titolo bg-chiarissimo">{{$article->title}}</td>
            <td class="text-titolo bg-chiarissimo">{{$article->subtitle}}</td>
            <td class="text-titolo bg-chiarissimo">{{$article->category->name ?? "Nessuna categoria"}}</td>
            <td class="bg-chiarissimo">

                @foreach ($article->tags as $tag)
                    #{{ $tag->name}}

                @endforeach
            </td>

            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', $article)}}" class="btn m-1">Leggi</a>
                <a href="{{route('article.edit', $article)}}" class="btn m-1">Modifica</a>
                <form action="{{route('article.destroy', $article)}}" method="POST" class="d-inline">
                    @csrf 
                    @method('DELETE')
                    <button class="m-1 btn" type="submit">Elimina</button>
                </form>
            </td>

        </tr>
        @endforeach

        
    </tbody>
</table>