@extends('main')
@section('contenido')
<h1>Listado De Editoriales</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION </th>
            <th scope="col">CIUDAD</th>
            <th scope="col">TELEFONO </th>
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $c)
      
            <tr>
           
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombre}} </td>
            <td> {{ $c->direccion}}</td>
            <td> {{ $c->ciudad}} </td>
            <td> {{ $c->telefono}}</td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


@endsection