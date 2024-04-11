<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    //Relación de muchos a muchos
    public function roles(){
        /* $user= User::find($this->user_id); */
        return $this->belongsToMany(Role::class);
    }
}
