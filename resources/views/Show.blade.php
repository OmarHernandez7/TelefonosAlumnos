@extends('Plantilla') 

@section('titulo','show') 

@section('contenido')

<div class="container">
<h1><center>Datos del alumno</center></h1>

<h6><b>ID</b></h6>
<p>{{$alumno->id}}</p>

<h6><b>Cuenta</b></h6>
<p>{{$alumno->cuenta}}</p>

<h6><b>Nombre</b></h6>
<p>{{$alumno->nombre}}</p>

<h6><b>Nota</b></h6>
<p>{{$alumno->nota}}</p>

<h6><b>Carrera</b></h6>
<p>{{$alumno->carrera}}</p>

</div>
@endsection()