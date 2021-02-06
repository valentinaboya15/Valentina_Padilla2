<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function getEditorial() {
        
        return view('editorial');
    }
}
