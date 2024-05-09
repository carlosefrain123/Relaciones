<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(){
        $users = User::with('posts')->get(); // Cargar usuarios con sus posts
        return view('prueba', compact('users'));
    }
    public function prueba2(Post $post)
    {
        $similares=Post::where('user_id',$post->user_id)
                            ->where('id','!=',$post->id)
                            ->get();
        return view('prueba2',compact('post','similares'));
    }
    public function prueba3(Categoria $categoria){
        return $categoria;
    }
}
