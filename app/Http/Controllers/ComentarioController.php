<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post){
        //validar comentario
        $this->validate($request,[
            'comentario' => 'required|max:255'
        ]);

        //almacenar el resultado
        Comentario::create([
            'user_id'=> auth()->user()->id,
            'post_id'=>$post -> id,
            'comentario'=> $request->comentario,

        ]);

        return back()->with('mensaje','Comentario guardado correctamente');

        //imprimir un resultado

    }
}
