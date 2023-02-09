@extends('layout')
@section("contenido")
    @auth
    <a href="{{route("alumnos.create")}}">Crear alumno</a>
    @endauth
    <table>
        <caption>Listado de alumnos</caption>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>DNIS</th>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidos}}</td>
                <td>{{$alumno->direccion}}</td>
                <td>{{$alumno->dni}}</td>
                <td><a href="{{route("alumnos.edit",$alumno->id)}}">Editar</a></td>
                <td>
                <form action="{{route("alumnos.destroy",$alumno->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
                </td>
            </tr>

        @endforeach
    </table>
@endsection
