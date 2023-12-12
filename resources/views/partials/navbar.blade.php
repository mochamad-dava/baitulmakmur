 {{-- Awal Navbar --}}
 <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../img/icon_logo_2.png" alt="Baitul Makmur" width="220" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Home") ? 'active' :''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "About") ? 'active' :''}}" href="/about">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Article") ? 'active' :''}}" href="/article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Gallery") ? 'active' :''}}" href="/gallery">Gallery</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-primary {{ ($tittle === "Login") ? :''}}" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
{{-- Akhir Navbar --}}