<style>
.navbar.custom-navbar {
    background-color: transparent !important;
  }
  
  .navbar.custom-navbar .navbar-toggler-icon {
    background-color: transparent;
  }
  
  .navbar.custom-navbar .navbar-nav .nav-link {
    font-size:25px;
    margin-right:10px;
    color: gray;
  }
  
  .navbar.custom-navbar .nav-item .nav-link.active {
    color: #3b7caf;
    font-weight: bold;
    border-bottom: 5px solid;
  }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="home">
        <img src="{{ asset('imgs/favico2.webp') }}" alt="logo Entropia Farma S de RL de CV" width="80">
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{$page == 'home'? 'active':''}}" href="home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$page == 'about'? 'active': ''}}" href="about">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{$page == 'products'? 'active': ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="products">Productos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="products#Equipment">Equipos</a></li>
            <li><a class="dropdown-item" href="products#">Insumos</a></li>
            <li><a class="dropdown-item" href="products#">Refacciones</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{$page == 'services'? 'active': ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="services">Servicios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Mantenimiento</a></li>
            <li><a class="dropdown-item" href="#">Capacitacion</a></li>
            <li><a class="dropdown-item" href="#">Auditorias</a></li>
            <li><a class="dropdown-item" href="#">Maquilas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>