<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gatito extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
    public function personas()
    {
        return $this->hasMany(Persona::class,'id');// es una relacion de uno a uno ademas retorna un valor
    }
}
