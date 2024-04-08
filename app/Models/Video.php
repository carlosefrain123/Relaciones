<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    //Relación de uno a muchos(inversa)
    public function user(){
        /* $user= User::find($this->user_id); */
        return $this->belongsTo(User::class);
    }
}
