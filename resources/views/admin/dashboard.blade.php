<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h1 class="display-1 poetsen-one-regular">Bentornato, Amministratore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Richieste per il ruolo di Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Richieste per il ruolo di Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Richieste per il ruolo di Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>
    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Tutti i tags</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-12 mt-3 p-3 rounded shadow bg-chiarissimo text-titolo text-center">
                <h2>Tutte le categorie</h2>
                <form action="{{route('admin.storeCategory')}}" method="POST" class="w-50 d-flex m-3">
                    @csrf
                    <input type="text" name="name" class="form-controll me-2" placeholder="Inserisci la nuova categoria">
                    <button type="submit" class="btn">Inserisci</button>
                </form>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
            </div>
        </div>
    </div>

</x-layout>