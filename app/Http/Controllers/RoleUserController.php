<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function index(){
        $user=User::find(1);
        $role=Role::find(2);
        return view('welcome',compact('user','role'));
    }
}
