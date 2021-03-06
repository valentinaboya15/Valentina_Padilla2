@extends('main')
@section('contenido')

<div class="container">
<h1> Registro de Libros </h1>
    <form action="{{ url('libros/registrar') }}" method="POST">
        @csrf
       
        <label for="ISBN">ISBN </label>
        <input type="text" id='ISBN' name='ISBN' class="form-control" required> <br> <br>
    
        <label for="titulo">Titulo</label>
        <input type="text" id='titulo' name='titulo' class="form-control" required> <br> <br>

        <label for="precio">Precio</label>
        <input type="text" id='precio' name='precio' class="form-control" required> <br> <br>

        <label for="editorial">Editorial</label>
       
        <select name="editorial" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Seleccione opcion</option>
        <option value="1">Norma </option>
        <option value="2">Mc Graw Hill</option>
        <option value="3">Alfaomega Colombiana</option>
        <option value="4">Los Tres Editores S.A.S.</option>
        <option value="5">La Santillana </option>
        </select>
            
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
    
    <td> <a href="" class="btn btn-success">Cancelar</a></td>
@endsection