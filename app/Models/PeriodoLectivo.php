<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoLectivo extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'periodo_lectivo';
}
