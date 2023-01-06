<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteTutor extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'docente_tutor';

    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function comunicacion(){
        return $this->hasMany(Comunicacion::class);
    }

    public function docenteTutorAsignacion(){
        return $this->hasMany(DocenteTutorAsignacion::class, 'docente_id', 'id');
    }

}
