<x-layout>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-1 poetsen-one-regular text-titolo">
                    Lavora con noi
                </h1>
            </div>
        </div>
    </div>


    <div class="container my-5">

        <div class="row justify-content-evenly">

            <div class="col-12 col-md-6">
                <form action="{{route('careersSubmit')}}" method="POST" class="card shadow p-4 bg-chiarissimo">
                    @csrf

                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando</label>
                        <select name="role" id="role" class="form-control">
                            
                        <option value="" selected disabled>Selezione il ruolo</option>
                            
                            @if (!Auth::user()->is_admin)
                            <option value="admin">Amministratore</option>
                            @endif
                            
                            @if (!Auth::user()->is_revisor)
                            <option value="revisor">Revisore</option>
                            @endif
                            
                            @if (!Auth::user()->is_writer)
                            <option value="writer">Redattore</option>
                            @endif

                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') ?? Auth::user()->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label" for="message">Perchè ti vuoi candidare per questo ruolo? Raccontacelo:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-item-center">
                        <button type="submit" class="btn text-light">Invia Candidatura</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-evenly">
                
                <div class="p-3 rounded shadow bg-chiarissimo text-center">
                    <h2 class="text-titolo">Lavora come <b>Amministratore</b></h2>
                    <p>Scegliendo di lavorare come <b>Amministratore</b>, ti occuperai di gestire le richieste di lavoro e di aggiungere e modificare le categorie.</p>
                </div>
                
                <div class="p-3 rounded shadow bg-chiarissimo text-center">
                    <h2 class="text-titolo">Lavora come <b>Revisore</b></h2>
                    <p>Scegliendo di lavorare come <b>Revisore</b>, deciderai se un articolo può essere publicato o meno in piattaforma.</p>
                </div>
                
                <div class="p-3 rounded shadow bg-chiarissimo text-center">
                    <h2 class="text-titolo">Lavora come <b>Redattore</b></h2>
                    <p>Scegliendo di lavorare come <b>Redattore</b>, potrai scrivere gli articoli che saranno pubblicati.</p>
                </div>

            </div>
        </div>

    </div>
    </x-layout>
