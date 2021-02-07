<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\libro;

use Maatwebsite\Excel\Facades\Excel;

use Barryvdh\DomPDF\Facade as PDF;

class LibroController extends Controller
{
    public function getLibro() {

        $libros=DB::table('editorial as edi')
        ->join('libro as lib','edi.id','=','lib.editorial')
        ->select('lib.id','lib.ISBN','lib.titulo','edi.nombre','lib.precio')
        ->get();
        
        return view('libros',['libro'=>$libros]);
        
   
    }

    public function form_registro() {

        return view('libros.registro');



    }

    public function registrar(Request $request) {


        $libros = new libro();
        $libros->ISBN = $request->input('ISBN');
        $libros->titulo= $request->input('titulo');
        $libros->precio= $request->input('precio');
        $libros->editorial= $request->input('editorial');
        $libros->save();
        return view('libros.registrar');   
      
    }

    public function form_actualiza($id){
      
        $libros = libro::findOrFail($id);
        return view ('libros.actualizar', compact('libro'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = libro::findOrFail($id);
        $c->ISBN = $request->input('ISBN');
        $c->titulo= $request->input('titulo');
        $c->precio= $request->input('precio');
        $c->editorial= $request->input('editorial');
       
        $c->save();
        return view('libros.actualizado'); 
         
    }


}

