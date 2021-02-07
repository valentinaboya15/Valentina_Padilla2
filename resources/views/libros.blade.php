@extends('main')
@section('contenido')
<h1>Listado De Libros</h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
 
<td> <a href="libros/registro" class="btn btn-success">Registrar</a></td>
</div>

<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento</th>
            <th scope="col" colspan=2> Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($libro as $c)
            <tr>
           
            <td>{{ $c->id}} </td>
            <td> {{ $c->ISBN}} </td>
            <td> {{ $c->titulo}}</td>
            <td>{{ $c->nombre}}</td>
            <td> {{ $c->precio}} </td>
            <td> {{$c->precio}}</td>
            <td> <a href="{{route('form_actualizaLibros',$c->id)}}" class="btn btn-success">Editar</a></td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


@endsection