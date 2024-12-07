<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relacionamos el modelo User con el modelo Post
    // para la base de datos, Laravel no toma explicitamente
    // ninguna relacion, asi que hay que programarla
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Relacionamos el modelo User con la tabla de base de
    // datos llamada friends, pero a la vez es una relacion
    // muchos a muchos entre usuarios
    // public function friends() {
    //     // Con $related es la clase del modelo que se relaciona
    //     // ''friends'' es el nombre de la tabla en la base de datos
    //     // Pero 'from_id' es la foranea correspondiente a este modelo
    //     // y 'to_id' es la foranea correspondiente al modelo relacionado
    //     return $this->belongsToMany(User::class, 'friends', 'from_id', 'to_id');
    // }

    // Para traer los amigos no confirmados
    public function friendFrom() {
        return $this->belongsToMany(User::class, 'friends', 'from_id', 'to_id');
    }
    
    public function friendTo() {
        return $this->belongsToMany(User::class, 'friends', 'to_id', 'from_id');
    }

    // Para traer los amigos confirmados
    public function friendsConfirmedFrom() {
        return $this->friendFrom()->wherePivot('accepted', true);
    }

    public function friendsConfirmedTo() {
        return $this->friendTo()->wherePivot('accepted', true);
    }

    // Para traer los amigos pendientes
    public function friendsPendingFrom() {
        return $this->friendFrom()->wherePivot('accepted', false);
    }

    public function friendsPendingTo() {
        return $this->friendTo()->wherePivot('accepted', false);
    }

    // Mostrar los amigos actuales
    public function friends() {
        // return $this->friendsConfirmedFrom()->get()->merge($this->friendsConfirmedTo()->get());
        return $this->friendsConfirmedFrom->merge($this->friendsConfirmedTo);
    }

    // Para saber si un usuario esta relacionado con otro
    public function isRelated(User $user) {
        // Verificamos si estamos relacionados con nosotros mismos
        if (auth()->user()->id === $user->id) {
            return true;
        }
        // Verificamos si estamos relacionados con otros usuarios
        $related = $this->friendFrom()->where('to_id', $user->id)->exists() ||
        $this->friendTo()->where('from_id', $user->id)->exists();
        //dd($related);
        return $related;
    }
}
