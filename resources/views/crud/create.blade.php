@extends('layout')
@section("contenido")
    <fieldset>
        <legend>Crear alumno</legend>
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        @method('POST')
        Nombre <input type="text" name="nombre" id="">
        Apellido <input type="text" name="apellidos" id="">
        Direccion <input type="text" name="direccion" id="">
        DNI <input type="text" name="dni" id="">
        <input type="submit" value="Guardar cambios">
    </form>
    </fieldset>
@endsection
