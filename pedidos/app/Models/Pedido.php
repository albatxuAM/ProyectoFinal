<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "idEstado",
        "observacion",
        "fecha",
        "idPersona",
    ];

    public function productosPedido() {
        return $this->hasMany(ProductosPedido::class, 'id');
    }

    public function estadoPedido() {
        return $this->belongsTo(EstadoPedido::class, 'id');
    }

    public function datosPersonas() {
        return $this->belongsTo(DatosPersonas::class, 'id');
    }
}
