<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteTutoria extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'estudiante_tutoria';

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }

}
