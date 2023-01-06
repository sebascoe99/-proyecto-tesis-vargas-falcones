<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'persona';

    public function docenteTutor(){
        return $this->hasMany(DocenteTutor::class);
    }

    public function usuario(){
        return $this->hasMany(Usuario::class);
    }
}
