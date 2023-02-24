<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="\CSS\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="body">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img class="navbar-brand" id="img1" src="\Images\Conalep-logo.png" alt="Navico">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page"  id="a1" href="/UA">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="a2" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuarios</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/UA/altausuario">Nuevo</a></li>
              <li><a class="dropdown-item" href="/UA/bajausuario">Dar de baja</a></li>
              <li><a class="dropdown-item" href="/UA/actusuario">Actualizar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/UA/listausuario">Lista</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="a3" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Unidades administrativas</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/UA/altaua">Nuevo</a></li>
              <li><a class="dropdown-item" href="/UA/bajaua">Dar de baja</a></li>
              <li><a class="dropdown-item" href="/UA/actuua">Actualizar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/UA/listaua">Lista</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="a4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/UA/altacategoria">Nuevo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/UA/listacategoria">Lista</a></li>
            </ul>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="a5"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/UA/altaproducto">Nuevo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/UA/listaproducto">Lista</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Buscar por Nombre</a></li>
              <li><a class="dropdown-item" href="#">Filtrar por Unidad administrativa</a></li>
              <li><a class="dropdown-item" href="#">Filtrar por Categoria</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="a6" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reportes</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">General</a></li>
              <li><a class="dropdown-item" href="#">Por categoria</a></li>
              <li><a class="dropdown-item" href="#">Por Unidad administrativa</a></li>
              <li><a class="dropdown-item" href="#">Por fecha</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">Mi cuenta</button>
            <button class="btn btn-outline-danger" type="submit">Salir</button>
        </form>
      </div>
    </div>
  </nav>
    @yield('content')
</body>
</html>