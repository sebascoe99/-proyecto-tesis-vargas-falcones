<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'rols';

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function user(){
        return $this->hasOne(User::class, 'id');
    }
}
