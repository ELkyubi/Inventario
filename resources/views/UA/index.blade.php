@extends('home')

@section('content')
@auth
<div class="container-fluid">
  <h1 class="title">Inicio</h1>
  <h2 class="subtitle">¡Bienvenido {{ auth()->user()->username }}!</h2>

</div>
@endauth
@guest
<div class="container-fluid">
  <h1 class="title">Inicio</h1>
  <h2 class="subtitle">¡Ingresa para desbloquear mas cosas!</h2>

</div>
@endguest


@endsection