<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Aquí irá el título de cada página--}}
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    {{-- Nuestro menú --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Productos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/products/show">Ver</a></li>
                      <li><a class="dropdown-item" href="/products/create">Crear</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Clientes
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/clientes/create">Crear</a></li>
                      <li><a class="dropdown-item" href="/clientes/show">Ver</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorias
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/categorias/create">Crear</a></li>
                      <li><a class="dropdown-item" href="/categorias/show">Ver</a></li>
                      <li><hr class="dropdown-divider"></li>
                    </ul>
                  </li>
            </ul>
            </div>
        </div>
    </nav> 
    <div class="container-fluid">
    {{-- Aquí irá el contenido de todas las páginas --}}
    @yield('content') 
    </div> 
    {{-- Scripts --}}
    @yield('scripts')

</body>
</html>