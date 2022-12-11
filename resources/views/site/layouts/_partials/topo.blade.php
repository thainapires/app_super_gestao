<div class="topo">
    <header class="p-3 text-bg-light">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ route('site.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="{{ asset('img/logo2.png') }}">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('site.index') }}" class="nav-link px-2 text-black">Home</a></li>
          <li><a href="{{ route('site.sobrenos') }}" class="nav-link px-2 text-black">Sobre nós</a></li>
          <li><a href="{{ route('site.contato') }}" class="nav-link px-2 text-black">Contato</a></li>
        </ul>
        
        <!--
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>-->

        <div class="text-end">
          <button type="button" class="btn btn-outline-dark me-2">Login</button>
          <!--<button type="button" class="btn btn-warning">Sign-up</button>-->
        </div>
      </div>
    </div>
  </header>
</div>