<?php

namespace avaa;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol','cedula','last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //devuelve si el usuario es administrador

    public function admin(){
        return $this->rol==='admin';
    }

    //para la relación de 1 a 1 que tiene con la tabla coordinadores (de llegar a tener)

    public function coordinador(){

        return $this->hasOne('avaa\Coordinador','user_id');

    }

    //para la relación de 1 a 1 que tiene con la tabla mentores (de llegar a tener)
    public function mentor(){

        return $this->hasOne('avaa\Mentor','user_id');

    }

    //para la relación de 1 a 1 que tiene con la tabla becarios (de llegar a tener)
    public function becario(){

        return $this->hasOne('avaa\Becario','user_id');

    }

    //para la relación de 1 a 1 que tiene con la tabla editores (de llegar a tener)
    public function editor(){

        return $this->hasOne('avaa\Editor','user_id');

    }


    public function imagenes(){

        return $this->hasMany('avaa\Imagen','user_id');

    }

    public function alertas(){

        return $this->hasMany('avaa\Alerta','user_id');

    }

    public function solicitudes(){

        return $this->hasMany('avaa\Solicitud','user_id');

    }

    public function documentos(){

        return $this->hasMany('avaa\Documento','user_id');

    }

}
