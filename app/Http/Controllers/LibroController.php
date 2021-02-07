<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

        return view('libros.form_registro');



    }



}

