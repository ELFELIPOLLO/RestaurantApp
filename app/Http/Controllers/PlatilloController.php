<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;

class PlatilloController extends Controller
{
    public function ejemplo() {

        $nombre = 'Luis Carlos';
        $numeros = [22,54,66,87,34,23];
        $peliculas = ['peli1', 'peli2', 'peli3', 'peli4'];

        return view('ejemplo', compact('nombre', 'numeros', 'peliculas'));
    }

    public function consultarPlatillos() {
        //consultar los platillos
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
