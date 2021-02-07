@extends('main')
@section('contenido')
<h1>Listado De Editoriales</h1>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION </th>
            <th scope="col">CIUDAD</th>
            <th scope="col">TELEFONO </th>
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $e)
            <tr>
           
            <td>{{ $e->id}} </td>
            <td> {{ $e->nombre}} </td>
            <td> {{ $e->direccion}}</td>
            <td> {{ $e->ciudad}} </td>
            <td> {{ $e->telefono}}</td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


@endsection