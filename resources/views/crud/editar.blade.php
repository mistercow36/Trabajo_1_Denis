@extends('layout')
@section("contenido")
    <fieldset>
        <legend>Editar alumno</legend>
        <form action="{{route('alumnos.edit', $alumno->id)}}" method="GET">
            @csrf
            @method('GET')
            Nombre <input type="text" name="nombre" id="" value="{{$alumno->nombre}}">
            Apellido <input type="text" name="apellidos" id="" value="{{$alumno->apellidos}}">
            Direccion <input type="text" name="direccion" id="" value="{{$alumno->direccion}}">
            DNI <input type="text" name="dni" id="" value="{{$alumno->dni}}">
            <input type="submit" value="Guardar alumno">
        </form>
    </fieldset>
@endsection
