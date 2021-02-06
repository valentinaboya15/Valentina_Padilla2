<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function getLibro() {
        
        return view('libros');
    }
}
