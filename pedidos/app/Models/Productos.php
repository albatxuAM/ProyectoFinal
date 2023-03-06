<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "nombre",
        "pedidoMinimo",
        "precio",
        "idTipo",
        "imagen"
    ];

    public function tipoProducto() {
        return $this->belongsTo(TipoProducto::class, 'idTipo');
    }

    public function productosPedidos() {
        return $this->hasMany(ProductosPedidos::class, 'id');
    }
}
