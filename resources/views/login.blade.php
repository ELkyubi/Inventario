<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <link rel="stylesheet" href="\CSS\stylelog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="body">
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first">
            <h2 id="h21">Bienvenido</h2>
          </div>
          @if ($errors->any())
          <div style="margin-top:10px" class="alert alert-danger alert-dismissible fade show" role="alert">
            <lu>
              @foreach ( $errors->all() as $error )
             <li> {{ $error }} </li>
            @endforeach
            </lu>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
          </div>
        @endif
      
          <!-- Login Form -->
          <form onsubmit="{{ route('home.login') }}" method="POST">
            @csrf
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Nombre de usuario">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="/UA" id="a1">Invitado</a>
          </div>
      
        </div>
      </div>
</html>