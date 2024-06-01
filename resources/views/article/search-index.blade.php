<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-1 poetsen-one-regular text-titolo">Tutti gli articoli per {{$query}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
            <x-article-card :article="$article" />
            @endforeach
        </div>
    </div>
</x-layout>