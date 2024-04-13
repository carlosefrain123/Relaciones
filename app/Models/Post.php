<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relación de uno a muchos(inversa)
    public function user()
    {
        /* $user= User::find($this->user_id); */
        return $this->belongsTo(User::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    //Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    //Relación de uno a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

}
