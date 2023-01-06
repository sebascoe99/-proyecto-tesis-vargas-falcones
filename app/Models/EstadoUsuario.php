<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoUsuario extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'estado_usuario';

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
