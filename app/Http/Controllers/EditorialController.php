<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function getEditorial() {
        $editorial=DB::table('editorial as edi')
        ->join('libro as lib','edi.id','=','lib.editorial')
        ->select('edi.nombre','edi.direccion','edi.ciudad','edi.telefono')
        ->get();
        
        return view('editorial',['editorial'=>$editorial]);
    }
}
