<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "cantidad",
        "idProducto",
        "idPedido"
    ];

    public function producto() {
        return $this->HasMany(Productos::class, 'idProducto');
    }

    public function pedidos() {
        return $this->belongsTo(Pedidos::class, 'id');
    }
}
