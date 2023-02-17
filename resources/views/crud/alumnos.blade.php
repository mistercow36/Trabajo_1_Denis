@extends('layout')
@section("contenido")
    <tabla filas_serializado="{{$alumnos}}" campos_serializado="{{$campos}}" nombre="{{$nombres}}"></tabla>
@endsection
