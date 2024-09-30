<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\cargos;

class solicitante extends Model
{
    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }
    public function prestamos()
    {
        return $this->hasMany(prestamo::class);
    }
}
