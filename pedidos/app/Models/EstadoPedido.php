<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "nombre"
    ];

    public function pedidos() {
        return $this->hasMany(Pedidos::class, 'id');
    }
}
