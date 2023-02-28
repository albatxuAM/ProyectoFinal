<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersona extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "id",
        "nombre",
        "email",
        "telefono"
    ];

    public function pedidos() {
        return $this->hasMany(Pedidos::class, 'id');
    }
    public function user() {
        return $this->hasOne(User::class, 'idPersona');
    }
}
