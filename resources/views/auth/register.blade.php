<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 mt-3 p-3 rounded shadow bg-chiarissimo text-center">
                <h1 class="display-1 poetsen-one-regular text-titolo">
                    Registrati
                </h1>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="post" action="{{route("register")}}" class="card shadow p-4 bg-chiarissimo">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{old("name")}}">
                        @error ("name")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old("email")}}">
                        @error ("email")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{old("password")}}">
                        @error ("password")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{old("password_confirmation")}}">
                        @error ("password_confirmation")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn">Registrati</button>
                    <p>Sei già registrato? <a href="{{route("login")}}">Clicca qui per accedere</a></p>
                </form>
            </div>
        </div>
    </div>

</x-layout>