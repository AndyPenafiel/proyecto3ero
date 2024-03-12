<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cursos.index')}}">Cursos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
      <!-- Botón desplegable en la parte superior derecha -->
      <div class="dropdown">
        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->usu_nombre }} / {{ Auth::user()->name }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="">Opción 1</a>
          <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Cerrar Sesión</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
