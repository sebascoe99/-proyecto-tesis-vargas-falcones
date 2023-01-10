<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'usuario';

    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function estado(){
        return $this->hasMany(EstadoUsuario::class);
    }

    public function role(){
        return $this->hasOne(Rol::class);
    }

}
