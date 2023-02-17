@extends('layout')
@section("contenido")
    <fieldset>
        <legend>Editar alumno</legend>
        <form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
            @csrf
            @method('put')
            Nombre <input type="text" name="nombre" id="" value="{{$alumno->nombre}}"><br>
            Apellido <input type="text" name="apellidos" id="" value="{{$alumno->apellidos}}"><br>
            Direccion <input type="text" name="direccion" id="" value="{{$alumno->direccion}}"><br>
            DNI <input type="text" name="dni" id="" value="{{$alumno->dni}}"><br>
            <input type="submit" value="Guardar alumno">
        </form>
    </fieldset>
@endsection
