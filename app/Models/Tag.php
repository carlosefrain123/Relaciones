<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //Ralción muchos a muchso inversa polimorfica
    public function posts(){
        return $this->morphedByMany(Post::class,'taggable');
    }
    public function videos(){
        return $this->morphedByMany(Video::class,'taggable');
    }
}
