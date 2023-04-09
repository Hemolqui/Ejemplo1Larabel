<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id_gatito','nombre','edad'];
    public function gatito()
    {
        return $this->belongsTo(Gatito::class,'id');// es una relacion de muchos ademas retorna todos los registros
    }
}
