<?php

namespace App\Http\Controllers;

use App\Models\Alcaldia;
use Illuminate\Http\Request;

class AlcaldiaController extends Controller
{
    public function store(Request $request)
    {
        $usuarios = new  Alcaldia();
        $usuarios->primer_nombre = $request->primer_nombre;
        $usuarios->segundo_nombre = $request->segundo_nombre;
        $usuarios->primer_apellido = $request->primer_apellido;
        $usuarios->segundo_apellido = $request->segundo_apellido;
        $usuarios->email = $request->email;
        $usuarios->telefono = $request->telefono;
        $usuarios->descripcion = $request->descripcion;
        $usuarios->save();
        return view('inicio');
    }
}
