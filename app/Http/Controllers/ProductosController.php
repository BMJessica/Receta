<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $host="localhost";
        $puerto="27017";

        $conexion = new \MongoDB\Client("mongodb://$host:$puerto");

         
         
         $filtrar = array();
         $options = array();

         $collection = $conexion->laravelmongodb->productos;
         $datos = $collection->find($filtrar, $options);
         
         return view('producto', compact('datos'));
        

    }
    

}
