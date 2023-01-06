<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'estudiante';

    public function estudiante_tutoria(){
        return $this->hasMany(EstudianteTutoria::class);
    }

    public function estudiante(){
        return $this->belongsTo(Persona::class);
    }

}
