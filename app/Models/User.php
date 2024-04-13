<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //Relación uno a uno, se encarga de recuperar información del perfil
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    //Relación de uno a muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    //Relación de muchos a muchos
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
