<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacion extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'comunicacion';

    public function docenteTutor(){
        return $this->belongsTo(DocenteTutor::class);
    }
}
