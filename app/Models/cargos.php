<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargos extends Model
{
    public function autoridadrs()
    {
        return $this->belongsTo(autoridadr::class);
    }

    public function solicitante()
    {
        return $this->hasMany(solicitante::class);
    }

    public function tecnicos()
    {
        return $this->hasMany(tecnicos::class);
    }

    public function responsable()
    {
        return $this->hasMany(responsables::class);
    }

}
