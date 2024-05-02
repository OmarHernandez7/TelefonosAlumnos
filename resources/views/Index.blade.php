@extends('Plantilla')

@section('titulo','index')

@section('contenido') 

<h1>Tabla de Alumnos Unah-Tec </h1>

<a class="btn btn-primary" href= "{{route('alumnos.crear')}}">Nuevo alumno</a>
<br>

<div class="container">
<table class="table" class="pagination">
    <thead>
        <th>Id Alumno:</th>
        <th>Cuenta:</th>
        <th>Nombre:</th>
        <th>Nota recibida:</th>
        <th>Carreras disponibles:</th>
        <th colspan="3">Opciones:</th>

    </thead>
    <tbody>
        @forelse($alumnos as $alumno)
        <tr>
        <td>{{$alumno->id}}</a></td>  
        <td>{{$alumno->cuenta}}</td>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->nota}}</td>
        <td>{{$alumno->carrera}}</td>
        <td> <a class="btn btn-success" href= "{{route('alumno.show', ['id'=>$alumno->id])}}">Ver alumno</a>
    </td> 
        <td> <a class="btn btn-warning" href= "{{route('alumnos.editar', ['id'=>$alumno->id])}}">Editar alumno</a></td> 
        
        <td>
        <form  method="post" action="{{route('alumnos.borrar',[$alumno->id])}}">
            @method("DELETE")
            @csrf
             <button type="submit" class="btn btn-danger">Eliminar alumno</button>
            </form>
        </td>
         c
        </tr>
            @empty 
                <tr>
                    <td>No hay alumnos todavia</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
{{ $alumnos->render('pagination::bootstrap-4') }} 

@endsection() 