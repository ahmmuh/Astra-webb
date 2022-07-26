<nav class="navbar navbar-expand-lg">
    <div class="container">
      {{-- <a class="navbar-brand" href="{{ url('/') }}">Astra Alltjänst AB</a> --}}
      <img src="{{ url('images/logo.png') }}" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Privat
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/pages.windows') }}">Fönsterputsning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.flytt') }}">Flyttstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.hemstad') }}">Hemstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.matta') }}">Mattservice</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tjänster
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/pages.kontor') }}">Kontorsstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.bygg') }}">Byggstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.lager') }}">Lagerstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.golv') }}">Golvvård</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.butik') }}">Butikstädning</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.windows') }}">Fönsterputs</a></li>
              <li><a class="dropdown-item" href="{{ url('/pages.frukt') }}">Fruktkorgar</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="{{ url('/pages.news') }}">Nyhet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pages.job') }}">jobbsökande</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pages.about') }}">Om oss</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pages.contact') }}">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>