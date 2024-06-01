<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 poetsen-one-regular">Modifica l'articolo</h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form enctype="multipart/form-data" class="card shadow p-4 bg-chiarissimo" method="POST" action="{{route('article.update', $article)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$article->title}}">
                        @error ("title")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{$article->subtitle}}">
                        @error ("subtitle")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Immagine attuale</label>
                        <img src="{{Storage::url($article->image)}}" alt="{{$article->title}}" class="w-50 d-flex">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Nuova immagine</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{$article->title}}">
                        @error ("image")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-control" name="category" id="category">
                            <option selected disabled>Seleziona Categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if($article->category_id == $category->id) selected @endif> {{$category->name}}</option>
                            @endforeach
                        </select>
                            @error ("category")
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="7">{{$article->body}}</textarea>
                        @error ("body")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" name="tags" id="tags" value="{{$article->tags->implode('name', ',')}}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola</span>
                        @error ("tags")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-item-center">
                        <form action="{{route('revisor.undoArticle', $article)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn">Modifica articolo</button>
                        </form>
                        <a href="{{route('home')}}">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>