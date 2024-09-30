<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organismos extends Model
{
    use HasFactory;
    public function sedes()
    {
        return $this->belongsToMany(sedes::class, 'organismo_sedes');
    }
}
