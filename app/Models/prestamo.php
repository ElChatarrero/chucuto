<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    public function bienes()
    {
        return $this->belongsToMany(bienes::class, 'bien_prestamos');
    }
    public function solicitantes()
    {
        return $this->belongsTo(solicitante::class);
    }
}