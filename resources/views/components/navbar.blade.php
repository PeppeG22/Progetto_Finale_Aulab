<nav class="navbar navbar-expand-lg bg-scuro fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand nav-link me-2" href="{{route('home')}}"><i class="me-1 fa-solid fa-newspaper"></i> La Chiave del Sapere</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu bg-scuro">
            @if(Auth::user()->is_admin)
            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard amministratore</a></li>
            @endif
            @if(Auth::user()->is_revisor)
            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard revisore</a></li>
            @endif
            @if(Auth::user()->is_writer)
            <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard redattore</a></li>
            @endif
            <li><a class="dropdown-item" href="{{route('article.create')}}">Aggiungi articolo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form action="{{route('logout')}}" method="post" id="form-logout" style="display: none;">
              @csrf
            </form>
          </ul>
        </li>
        @endguest
      </ul>
      <form action="{{route('article.search')}}" method="GET" class="d-flex nav-item ms-auto" role="search">
        <input class="form-control form-search" type="search" name="query" placeholder="Cerca tra gli articoli..." aria-label="Search">
        <button class="btn ms-2" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>
