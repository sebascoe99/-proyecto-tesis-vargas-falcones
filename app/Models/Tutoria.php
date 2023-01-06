<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tutoria';

    public function estudiante_tutoria(){
        return $this->hasMany(EstudianteTutoria::class);
    }

    public function publicacion(){
        return $this->hasMany(Publicacion::class);
    }

    public function docente_tutor_asignacion(){
        return $this->belongsTo(DocenteTutorAsignacion::class);
    }

    public function motivo_tutoria(){
        return $this->belongsTo(MotivoTutoria::class);
    }
}
