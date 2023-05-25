<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacio;

class espacioController extends Controller
{
    public function listEspacios()
    {
        $espacios = Espacio::get();
        $espacios->each(function ($espacio) {
            $espacio->makeHidden('bloque');
        });
        return $espacios;

    }

    
}
