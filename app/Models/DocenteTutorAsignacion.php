<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteTutorAsignacion extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'docente_tutor_asignacion';
}
