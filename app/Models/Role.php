<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    //Relación de muchos a muchos(inversa)
    public function user(){
        /* $user= User::find($this->user_id); */
        return $this->belongsToMany(User::class);
    }
    public function permisos(){
        /* $user= User::find($this->user_id); */
        return $this->belongsToMany(Permiso::class);
    }
}
