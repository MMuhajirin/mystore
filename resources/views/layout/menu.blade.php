<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL::to('homepage')}}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('produk')}}">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kontak')}}">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kategori')}}">Kategori</a>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Baju</a></li>
              <li><a class="dropdown-item" href="#">Celana</a></li>
              <li><a class="dropdown-item" href="#">Hoodie</a></li>
            </ul>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
