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
        "idTipo"
    ];

    public function tipoProducto() {
        return $this->belongsTo(TipoProducto::class, 'id');
    }

    public function productosPedidos() {
        return $this->hasMany(ProductosPedidos::class, 'id');
    }
}
