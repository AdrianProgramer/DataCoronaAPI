{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
      <a class="navbar-brand" href="#">Data<span>Corona</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ ($tittle == 'Home') ? 'active' : '' }}" aria-current="page" href="#">Home</a>
          <a class="nav-link {{ ($tittle == 'Corona') ? 'active' : '' }}" href="#">Jenis Corona</a>
          <a class="nav-link {{ ($tittle == 'Vaksin') ? 'active' : '' }}" href="#">Jenis Vaksin</a>
        </div>
      </div>
    </div>
  </nav>
{{-- End-Navbar --}}
