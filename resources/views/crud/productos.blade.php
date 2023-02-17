@extends('layout')
@section("contenido")

    <a href="{{route("productos.create")}}">Crear producto</a>
    <div class="table-auto border-2 border-rose-500">
        <table class="border-b-black">
            <caption>Listado de productos</caption>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>PVP</th>
            <th>Familia</th>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->cod}}</td>
                    <td>{{$producto->nombre_corto}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->PVP}}</td>
                    <td>{{$producto->familia}}</td>
                    <td><a href="">Editar</a></td>
                    <td>
                        <!--<form action="{{route("alumnos.destroy",$alumno->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Borrar">
                        </form>-->
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
