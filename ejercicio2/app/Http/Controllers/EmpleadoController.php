<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\EmpleadoModel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models;

class EmpleadoController extends Controller
{
    //
    public function indice(){
        return view('welcome');
    }

    public function guardar(Request $request){


        $post = new EmpleadoModel;
        $post->nombre = $request->nombre;
        $post->apaterno = $request->apaterno;
        $post->amaterno = $request->amaterno;

        $post->save();

        return back();

    }
}
