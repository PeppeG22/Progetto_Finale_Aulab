<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-1 poetsen-one-regular text-titolo">
                    Aggiungi Articolo
                </h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form enctype="multipart/form-data" class="card shadow p-4 bg-chiarissimo" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{old("title")}}">
                        @error ("title")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{old("subtitle")}}">
                        @error ("subtitle")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{old("image")}}">
                        @error ("image")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select class="form-control" name="category" id="category">
                            <option selected disabled>Seleziona Categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error ("category")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="7">{{old('body')}}</textarea>
                        @error ("body")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" name="tags" id="tags" value="{{old("tags")}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error ("tags")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-item-center">
                        <button type="submit" class="btn">Aggiungi</button>
                        <a href="{{route('home')}}">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>