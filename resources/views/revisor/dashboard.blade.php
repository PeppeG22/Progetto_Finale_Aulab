<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h1 class="display-1 poetsen-one-regular">Bentornato, Revisore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>

    

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>
</x-layout>