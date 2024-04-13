<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    //tabla polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
