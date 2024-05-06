<?php

namespace App\Http\Controllers;

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
        /* return $posts; */
        return view('prueba2',compact('post'));
    }
}
