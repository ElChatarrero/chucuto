<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedes extends Model
{
    public function tiposede()
    {
        return $this->belongsTo(tiposede::class);
    }
    public function organismos()
    {
        return $this->belongsToMany(organismos::class, 'organismo_sedes');
    }
    public function estado()
    {
        return $this->belongsTo(estados::class);
    }
}
