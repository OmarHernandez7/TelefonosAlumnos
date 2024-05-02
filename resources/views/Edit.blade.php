@extends('Plantilla') 

@section('titulo','create')

@section('contenido') 

<h1>Editar alumno</h1>

@if ($errors->any())                                            
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post"action="{{route('alumnos.update',[$alumnos->id])}}">
@method("PUT")
@csrf 


<div>
Nombre
<input type="text" name="nombre" id="nombre" placeholder="Ingrese El Nombre" value="{{old('nombre') ?? $alumnos->nombre}}">
</div>

<br>
<div>
Cuenta
<input type="number" name="cuenta" id="cuenta" placeholder="Ingres la Cuenta" value="{{old('cuenta')  ?? $alumnos->cuenta}}">
</div>

<br>
<div>
Nota
<input type="number" name="nota" id="nota" placeholder="Ingrese la Nota" value="{{old('nota')  ?? $alumnos->nota}}">
</div>

<br>
<div>
Carrera
<select id="carrera" name="carrera" required>
                <option value="Informatica Administrativa">Informatica administrativa</option>
                <option value="Ingenieria Agroindustrial">Ingenieria agroindustrial</option>
                <option value="Enfermeria">Enfermeria</option>
                <option value="Tecnico en Cafe">Tecnico en cafe</option>
                <option value="Administrcion de Empresas">Administrcion de empresas</option>
            </select>
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()